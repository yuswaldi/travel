<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Travel Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="<?php echo base_url(); ?>assets/adminlte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/adminlte/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/adminlte/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/adminlte/css/AdminLTE.css" rel="stylesheet" type="text/css" />
<!--        <link href="<?php echo base_url(); ?>assets/adminlte/css/style.css" rel="stylesheet" type="text/css" />
        
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic,400italic,600italic' rel='stylesheet' type='text/css'>-->

    </head>

    <body class="skin-blue fixed">
        <header class="header">
            <a href="<?php echo site_url('dashboard'); ?>" class="logo"><?php echo lang('dashboard'); ?></a>

            <nav class="navbar navbar-static-top" role="navigation">

                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><?php echo lang('welcome') . ' ' . $this->session->userdata('user_name'); ?></a></li>
                        <li class="divider-vertical"></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Help"><i class="fa fa-question-circle"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://www.fusioninvoice.com/docs" target="_blank">Documentation</a></li>
                                <li><a href="https://www.fusioninvoice.com/support" target="_blank">Customer Support</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo lang('settings'); ?>">
                                <i class="fa fa-cogs"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><?php echo anchor('custom_fields/index', lang('custom_fields')); ?></li>
                                <li><?php echo anchor('email_templates/index', lang('email_templates')); ?></li>
                                <li><?php echo anchor('import', lang('import_data')); ?></li>
                                <li><?php echo anchor('invoice_groups/index', lang('invoice_groups')); ?></li>
                                <li><?php echo anchor('item_lookups/index', lang('item_lookups')); ?></li>
                                <li><?php echo anchor('payment_methods/index', lang('payment_methods')); ?></li>
                                <li><?php echo anchor('tax_rates/index', lang('tax_rates')); ?></li>
                                <li><?php echo anchor('users/index', lang('user_accounts')); ?></li>
                                <li class="divider"></li>
                                <li><?php echo anchor('settings', lang('system_settings')); ?></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('sessions/logout'); ?>" title="<?php echo lang('logout'); ?>">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span><?php echo lang('clients'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://demo.fusioninvoice.com/clients/create"><i class="fa fa-angle-double-right"></i><?php echo lang('add_client'); ?></a></li>
                                <li><a href="http://demo.fusioninvoice.com/clients"><i class="fa fa-angle-double-right"></i><?php echo lang('view_clients'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
            <aside class="right-side">
                
                <?php echo $content; ?>
                
            </aside>
        </div>

        <script defer src="<?php echo base_url(); ?>assets/adminlte/js/jquery-2.1.1.min.js"></script>
        <script defer src="<?php echo base_url(); ?>assets/adminlte/js/jquery-ui-1.10.3.min.js"></script>
        <script defer src="<?php echo base_url(); ?>assets/adminlte/js/bootstrap.min.js"></script>
        <script defer src="<?php echo base_url(); ?>assets/adminlte/js/AdminLTE/app.js"></script>

    </body>
</html>