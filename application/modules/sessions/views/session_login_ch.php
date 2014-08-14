<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tanjung Travel 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- The styles -->
        <link id="bs-css" href="<?php echo base_url(); ?>assets/charisma/css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>

        <link href="<?php echo base_url(); ?>assets/charisma/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/chosen.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/uniform.default.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/colorbox.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/jquery.cleditor.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/jquery.noty.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/noty_theme_default.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/elfinder.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/elfinder.theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/jquery.iphone.toggle.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/opa-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/charisma/css/uploadify.css" rel="stylesheet">
        <!--<link href="<?php echo base_url(); ?>assets/default/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/default/js/libs/jquery-1.7.1.min.js"></script>
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>-->

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/charisma/img/favicon.ico">

<!--        <script type="text/javascript">
            $(function() {
                $('#email').focus();
            });
        </script>-->

    </head>

    <body>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="row-fluid">
                    <div class="span12 center login-header">
                        <h2>Welcome</h2>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="well span5 center login-box">
                        <div class="aler alert-info">
                            Please Login with your Username and Password.
                        </div>

                        <form class="form-horizontal" method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">
                            <fieldset>
                                <div class="input-prepend" title="Email" data-rel="tooltip">
                                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="email" id="email" type="text" placeholder="Email" />
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend" title="Password" data-rel="tooltip">
                                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="Password" />
                                </div>
                                <div class="clearfix"></div>

                                <p class="center span5">
                                    <!--<button type="submit" class="btn btn-primary" name="btn_login">Login</button>-->
                                    <input type="submit" name="btn_login" value="Login" class="btn btn-primary">
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<!--            <form class="form-horizontal" method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">

                <div class="control-group">
                    <label class="control-label"> Username </label>
                    <div class="controls">
                        <input type="text" name="username" id="email" placeholder="UserName">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Password </label>
                    <div class="controls">
                        <input type="password" name="password" id="password"  placeholder="Password">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="btn_login" value="Login" class="btn btn-primary">
                    </div>
                </div>

            </form>-->


        <!-- external javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        

    </body>
</html>