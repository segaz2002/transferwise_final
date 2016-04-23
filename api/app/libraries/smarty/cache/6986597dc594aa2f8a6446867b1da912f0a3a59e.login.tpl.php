<?php /*%%SmartyHeaderCode:113005337353c6e71c1-04223782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6986597dc594aa2f8a6446867b1da912f0a3a59e' => 
    array (
      0 => 'velo-admin\\views\\templates\\layout\\login.tpl',
      1 => 1394958591,
      2 => 'file',
    ),
    '2fa1b51a612732c904e07a60feabb220675c955b' => 
    array (
      0 => 'velo-admin\\views\\templates\\resource\\resources.tpl',
      1 => 1395491912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113005337353c6e71c1-04223782',
  'variables' => 
  array (
    'asset_base_url' => 0,
    'base_url' => 0,
    'error_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5337353ca25e71_04833762',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5337353ca25e71_04833762')) {function content_5337353ca25e71_04833762($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <title>Bracket Responsive Bootstrap3 Admin</title>

    <link href="http://localhost/churchplus/assets/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://localhost/churchplus/assets/js/html5shiv.js"></script>
    <script src="http://localhost/churchplus/assets/js/respond.min.js"></script>
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

                <form method="post" action="http://localhost/churchplus/login/auth">
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to church+.</p>
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



<script src="http://localhost/churchplus/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>

<script src="http://localhost/churchplus/assets/js/jquery-1.10.2.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="http://localhost/churchplus/assets/js/bootstrap.min.js"></script>
<script src="http://localhost/churchplus/assets/js/modernizr.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery.sparkline.min.js"></script>
<script src="http://localhost/churchplus/assets/js/toggles.min.js"></script>
<script src="http://localhost/churchplus/assets/js/retina.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery.cookies.js"></script>
<script src="http://localhost/churchplus/assets/js/bootstrap-wizard.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery.validate.min.js"></script>
<script src="http://localhost/churchplus/assets/js/bootstrap-timepicker.min.js"></script>

<script src="http://localhost/churchplus/assets/js/custom.js"></script>
<script src="http://localhost/churchplus/assets/jswrapper.js"></script>


<script src="http://localhost/churchplus/assets/js/jquery.datatables.min.js"></script>
<script src="http://localhost/churchplus/assets/js/chosen.jquery.min.js"></script>



</body>

</html>
<?php }} ?>