<?php /* Smarty version Smarty-3.1.11, created on 2013-07-18 19:58:09
         compiled from "application/velo-admin/views/templates/pages/pswd_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10728873151e8ab417de047-90976642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1f3f2479abf77fba57426d99706e34ced655981' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/pswd_change.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    'd1e4e5d0222b5869a6828786f8477dd794bcde0c' => 
    array (
      0 => 'application/velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10728873151e8ab417de047-90976642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51e8ab418603a4_86551397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8ab418603a4_86551397')) {function content_51e8ab418603a4_86551397($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<?php $_smarty_tpl->tpl_vars["asset_base_url"] = new Smarty_variable(@BASE_URL, null, 0);?>
    <script type="text/javascript">
        var config = {
            base: "<<?php ?>?php echo base_url(); ?<?php ?>>",
            someOtherPref: 4
        };
    </script>

    <!--Javascript,Styles-->
    <?php echo $_smarty_tpl->getSubTemplate ('resource/resources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


</head>

<body>
    <!--The Navigation bar plus nav contents-->
    <?php echo $_smarty_tpl->getSubTemplate ('resource/navigator.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container-fluid" id="content">
    <!--Sidebar, sub-navigation-->
    <?php echo $_smarty_tpl->getSubTemplate ("resource/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    <div id="main">

        <div class="container-fluid">
            <!--The title of every page rendered-->
            <?php echo $_smarty_tpl->getSubTemplate ("resource/content_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <!--<div class="box-title">
                            <h3>
                                <i class="icon-reorder"></i>

                                <?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>

                            </h3>
                        </div> -->
                        <div class="box-content">
                            <!-- Content -->
                            
	<div class="row-fluid">
		<div class="span12">
			<div id="loader_elem"></div>
			<div class="box">
				<div class="box-title">
					<h3>
						<i class="icon-lock"></i>
						Change Password (admin@tripican.com)
					</h3>
				</div>
				<div class="box-content">

					<form action="#" method="POST" class='form-horizontal form-validate' id="changePasswordForm">
						<div class="control-group">
							<label for="textfield" class="control-label">Current Password</label>
							<div class="controls">
								<input type="password" name="current_password" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
							</div>
						</div>
						<div class="control-group">
							<label for="emailfield" class="control-label">New Password</label>
							<div class="controls">
								<input type="password" name="password"  class="input-xlarge" data-rule-required="true">
							</div>
						</div>
						<div class="control-group">
							<label for="pwfield" class="control-label">Re-Type Password</label>
							<div class="controls">
								<input type="password" name="password2" id="pwfield" class="input-xlarge" data-rule-required="true">
							</div>
						</div>

						<div class="form-actions">
							<input type="submit" class="btn btn-primary" value="Change Password">

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
</body>

</html>

<?php }} ?>