<?php /*%%SmartyHeaderCode:10770448865244373a4aea35-53722058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ade61cd5a04ee96f68ee8dce1acebdc63ff1419' => 
    array (
      0 => 'application/velo-admin/views/templates/layout/login.tpl',
      1 => 1379063249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10770448865244373a4aea35-53722058',
  'variables' => 
  array (
    'asset_base_url' => 0,
    'error_msg' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5244373a521842_17760505',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5244373a521842_17760505')) {function content_5244373a521842_17760505($_smarty_tpl) {?><!doctype html>
<html>
    <head>
                <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />


        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://tripican.comassets/css/bootstrap.min.css">
        <!-- Bootstrap responsive -->
        <link rel="stylesheet" href="http://tripican.comassets/css/bootstrap-responsive.min.css">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="http://tripican.comassets/css/style.css">
        <!-- Color CSS -->
        <link rel="stylesheet" href="http://tripican.comassets/css/themes.css">
        <!-- jQuery -->
        <script>
            var SITE_BASE_URL = "http://localhost/tripican/";
        </script>
        <script src="http://tripican.comassets/js/jquery.min.js"></script>
        <!-- Nice Scroll -->
        <script src="http://tripican.comassets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- Validation -->
        <script src="http://tripican.comassets/js/plugins/validation/jquery.validate.min.js"></script>
        <script src="http://tripican.comassets/js/plugins/validation/additional-methods.min.js"></script>
        <!-- Bootstrap -->
        <script src="http://tripican.comassets/js/bootstrap.min.js"></script>
        <script src="http://tripican.comassets/js/eakroko.js"></script>

        <!-- Favicon -->
        <link rel="shortcut icon" href="http://tripican.comassets/img/favicon.ico" />
        <!-- Apple devices Homescreen icon -->
        <link rel="apple-touch-icon-precomposed" href="http://tripican.comassets/img/apple-touch-icon-precomposed.png" />

    </head>

    <body class='login'>
        <div class="wrapper">
            <h1><a href=""><img src="http://tripican.comassets/img/logo-big.png" alt="" class="retina-ready" width="59" height="49">Tripican</a></h1>

            <div class="login-body">
                <h2>SIGN IN</h2>

                                <div class="alert alert-error">Incorrect username or password, try-again</div>
                
			<form action="http://localhost/tripican/admin.php/login/auth" method='post' class='form-validate' id="test">
				<div class="control-group">
					<div class="email controls">
						<input type="text" name='username' placeholder="Email address" class='input-block-level' data-rule-required="true" data-rule-email="true">
					</div>
				</div>
				<div class="control-group">
					<div class="pw controls">
						<input type="password" name="password" placeholder="Password" class='input-block-level' data-rule-required="true">
					</div>
				</div>
				<div class="submit">
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#"><span>Forgot password?</span></a>
			</div>
		</div>
	</div>
</body>

</html>
<?php }} ?>