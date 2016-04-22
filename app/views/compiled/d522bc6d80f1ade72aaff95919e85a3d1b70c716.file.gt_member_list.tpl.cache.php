<?php /* Smarty version Smarty-3.1.11, created on 2014-02-23 15:02:00
         compiled from "velo-admin/views/templates/pages/gt_member_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:830740589530a6fd84bd538-70420534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd522bc6d80f1ade72aaff95919e85a3d1b70c716' => 
    array (
      0 => 'velo-admin/views/templates/pages/gt_member_list.tpl',
      1 => 1388059263,
      2 => 'file',
    ),
    '6799fa7e1ad4b0b88d554e5c3f094e44748c06e6' => 
    array (
      0 => 'velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '830740589530a6fd84bd538-70420534',
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
  'unifunc' => 'content_530a6fd8e684f6_20783334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a6fd8e684f6_20783334')) {function content_530a6fd8e684f6_20783334($_smarty_tpl) {?><!doctype html>
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
                        <legend>Browse All Registered Members <label class="w"></label></legend>
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
                                <th>Last Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['last_login'];?>
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