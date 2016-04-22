<?php /* Smarty version Smarty-3.1.11, created on 2014-02-23 15:02:48
         compiled from "velo-admin/views/templates/pages/gt_member_activation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:585122048530a7008617ba9-68750393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250eccf7267609d6f1548510c059c3a728b77cae' => 
    array (
      0 => 'velo-admin/views/templates/pages/gt_member_activation.tpl',
      1 => 1388059253,
      2 => 'file',
    ),
    '6799fa7e1ad4b0b88d554e5c3f094e44748c06e6' => 
    array (
      0 => 'velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585122048530a7008617ba9-68750393',
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
  'unifunc' => 'content_530a700871e123_58088525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a700871e123_58088525')) {function content_530a700871e123_58088525($_smarty_tpl) {?><!doctype html>
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
            <div class="box">
                <div class="box-title">
                    <form class="form-search form-skin shadow" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
members/unactivated">
                        <legend>Browse Unactivated Members <label class="w"></label></legend>
                        <?php if ((isset($_smarty_tpl->tpl_vars['s_filters']->value['filter']))){?>
                            <div class="alert alert-info">
                                <button data-dismiss="alert" class="close" type="button">×</button>
                                <strong>Info!</strong> You filtered <?php echo $_smarty_tpl->tpl_vars['s_filters']->value['term'];?>
 on <?php echo $_smarty_tpl->tpl_vars['s_filters']->value['filter'];?>
, query returned <?php echo $_smarty_tpl->tpl_vars['sumSearchRows']->value;?>
 record(s)
                            </div>
                        <?php }?>

                        <input type="text" class="input-xxlarge search-query" value="<?php echo $_smarty_tpl->tpl_vars['s_filters']->value['term'];?>
" name="term">

                        <button type="submit" class="btn btn-large btn-primary no-radius">Search</button>
                        <label class="radio">
                            <input type="radio" name="filter" id="optionsRadios1" value="email" checked> Email
                        </label>


                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
members/resetFilters" class="pull-right btn btn-medium">Reset Filter</a>
                    </form>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargine">
                        <thead>

                            <tr>
                                <th></th>
                                <th>Email</th>
                                <th>Balance</th>
                                <th>Registered</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unactivatedMembers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                                <tr id='row_<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
'>

                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['balance'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['date_registered'];?>
</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-confirm-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" role="button" data-toggle="modal"><i class="icon-edit"></i> Activate Account</a>
                                                </li>
                                            </ul>
                                        </div>


                                        <!-- Confirm Member Activation Dialogue -->
                                        <div id="modal-confirm-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Activate Confirmation</h3>
                                            </div>
                                            <div id="activation_loader_elem<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to activate <?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
's Account</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger activate-member" member_id="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                               
                                <td colspan="10">
                                    <div class="pagination pagination-medium">
                                        <div class="pagination">
                                            <ul>
                                                 <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                                                     <li><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</li>
                                                 <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                               
                            </tr>
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