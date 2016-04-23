<?php /* Smarty version Smarty-3.1.11, created on 2013-09-26 06:40:32
         compiled from "application/velo-admin/views/templates/pages/orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150592031052443950a72da5-33513084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93466e13302ee7d03f0e06f99f6847985a0bbf24' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/orders.tpl',
      1 => 1380202747,
      2 => 'file',
    ),
    'd1e4e5d0222b5869a6828786f8477dd794bcde0c' => 
    array (
      0 => 'application/velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150592031052443950a72da5-33513084',
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
  'unifunc' => 'content_52443950ae0e83_24427659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52443950ae0e83_24427659')) {function content_52443950ae0e83_24427659($_smarty_tpl) {?><!doctype html>
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
						<div class="box box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Orders - Movies
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin dataTable dataTable-tools table-bordered">
									<thead>
										<tr>

											 <th>Ref</th>
											 <th>Cuustomer email</th>
                                             <th>Phone</th>
											 <th>Cinema</th>
											 <th>Movie</th>
											 <th>Date</th>
											 <th>Time</th>
											 <th>Adult</th>
											 <th>Kids</th>
											 <th>Students</th>
											 <th>Amount</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
											<tr>
												<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['k']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
													<td><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</td>
												<?php } ?>
											</tr>
										<?php } ?>

									</tbody>
								</table>
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