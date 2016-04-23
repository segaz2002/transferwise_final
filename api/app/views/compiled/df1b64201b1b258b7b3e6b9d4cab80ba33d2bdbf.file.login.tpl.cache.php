<?php /* Smarty version Smarty-3.1.11, created on 2014-04-07 23:22:32
         compiled from "velo-admin/views/templates/layout/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232312360534395a83f9df6-08111618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df1b64201b1b258b7b3e6b9d4cab80ba33d2bdbf' => 
    array (
      0 => 'velo-admin/views/templates/layout/login.tpl',
      1 => 1394962192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232312360534395a83f9df6-08111618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'asset_base_url' => 0,
    'base_url' => 0,
    'error_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534395a84df673_06172034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534395a84df673_06172034')) {function content_534395a84df673_06172034($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<?php $_smarty_tpl->tpl_vars["asset_base_url"] = new Smarty_variable(@BASE_URL, null, 0);?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <title>Bracket Responsive Bootstrap3 Admin</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/html5shiv.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="signinpanel">

        <div class="row">

            <div class="col-md-7">

                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> Church+ <span>]</span></h1>
                    </div><!-- logopanel -->

                    <div class="mb20"></div>

                    <h5><strong>Welcome to Bracket Bootstrap 3 Template!</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Fully Responsive Layout</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> HTML5/CSS3 Valid</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Retina Ready</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> WYSIWYG CKEditor</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> and much more...</li>
                    </ul>
                    <div class="mb20"></div>
                    <strong>Not a member? <a href="signup.html">Sign Up</a></strong>
                </div><!-- signin0-info -->

            </div><!-- col-sm-7 -->

            <div class="col-md-5">

                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login/auth">
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to church+.</p>
                    <?php if ($_smarty_tpl->tpl_vars['error_msg']->value!=null){?>
                        <div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</div>
                    <?php }?>
                    <input type="text" name="username" class="form-control uname" placeholder="Username" />
                    <input type="password" name="password" class="form-control pword" placeholder="Password" />
                    <a href="#"><small>Forgot Your Password?</small></a>
                    <input type="submit" value="Sign me in" class='btn btn-success btn-block'>

                </form>

            </div><!-- col-sm-5 -->

        </div><!-- row -->

        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. All Rights Reserved. Bracket Bootstrap 3 Admin Template
            </div>
            <div class="pull-right">
                Created By: <a href="http://themepixels.com/" target="_blank">ThemePixels</a>
            </div>
        </div>

    </div><!-- signin -->

</section>

<?php echo $_smarty_tpl->getSubTemplate ('resource/resources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



</body>

</html>
<?php }} ?>