<section class="content-header">
    <h1 class="pull-left"><?php echo lang('users'); ?></h1>
    <div class="pull-right">
        <a href="<?php echo site_url('users/form'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo lang('new'); ?></a>
    </div>
    <div class="clearfix"></div>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><?php echo lang('name'); ?></th>
                                <th><?php echo lang('email_address'); ?></th>
                                <th><?php echo lang('options'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td><?php echo $user->user_name; ?></td>
                                    <td><?php echo $user->user_email; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo site_url('users/form/' . $user->user_id); ?>" class="btn btn-sm btn-default" title="<?php echo lang('edit'); ?>"><i class="fa fa-edit"></i></a>
                                            <a href="http://demo.fusioninvoice.com/users/1/password/edit" class="btn btn-sm btn-default" title="Reset Password"><i class="fa fa-lock"></i></a>
                                            <?php if ($user->user_id <> 1) { ?>
                                                <a href="http://demo.fusioninvoice.com/users/1/delete" class="btn btn-sm btn-default" title="Delete" onclick="return confirm('Are you sure you wish to delete this record?');"><i class="fa fa-trash-o"></i></a> 
                                            <?php }?>    
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>