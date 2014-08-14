<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author Yudhi
 */
class Users extends Admin_Controller { 

    public function __construct() {
        parent::__construct();
        $this->load->model('mdl_users');
    }
    
    public function index($page = 0)
    {
        $this->mdl_users->paginate(site_url('users/index'), $page);
        $users = $this->mdl_users->result();
        
        $this->layout->set('users', $users);
        $this->layout->set('user_types', $this->mdl_users->user_types());
        $this->layout->buffer('content', 'users/index');
        $this->layout->render();
    }
    
    public function form($id = NULL)
    {
        if ($this->input->post('btn_cancel'))
        {
            redirect('users');
        }

        if ($this->mdl_users->run_validation(($id) ? 'validation_rules_existing' : 'validation_rules'))
        {
            $id = $this->mdl_users->save($id);

            $this->load->model('custom_fields/mdl_user_custom');

            $this->mdl_user_custom->save_custom($id, $this->input->post('custom'));

            redirect('users');
        }

        if ($id and !$this->input->post('btn_submit'))
        {
            if (!$this->mdl_users->prep_form($id))
            {
                show_404();
            }

            $this->load->model('custom_fields/mdl_user_custom');

            $user_custom = $this->mdl_user_custom->where('user_id', $id)->get();

            if ($user_custom->num_rows())
            {
                $user_custom = $user_custom->row();

                unset($user_custom->user_id, $user_custom->user_custom_id);

                foreach ($user_custom as $key => $val)
                {
                    $this->mdl_users->set_form_value('custom[' . $key . ']', $val);
                }
            }
        }
        elseif ($this->input->post('btn_submit'))
        {
            if ($this->input->post('custom'))
            {
                foreach ($this->input->post('custom') as $key => $val)
                {
                    $this->mdl_users->set_form_value('custom[' . $key . ']', $val);
                }
            }
        }

        $this->load->model('users/mdl_user_clients');
        $this->load->model('clients/mdl_clients');
        $this->load->model('custom_fields/mdl_custom_fields');

        $this->layout->set(
            array(
                'id' => $id,
                'user_types' => $this->mdl_users->user_types(),
                'user_clients' => $this->mdl_user_clients->where('fi_user_clients.user_id', $id)->get()->result(),
                'custom_fields' => $this->mdl_custom_fields->by_table('fi_user_custom')->get()->result()
            )
        );

        $this->layout->buffer('user_client_table', 'users/partial_user_client_table');
        $this->layout->buffer('modal_user_client', 'users/modal_user_client');
        $this->layout->buffer('content', 'users/form');
        $this->layout->render();
    }
}
