<?php /* Smarty version Smarty-3.1.11, created on 2013-07-18 20:18:48
         compiled from "application/velo-admin/views/templates/pages/get_showtimes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86388012351e8b018e88c87-94753132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732c39aeeb6d690c2267d799c0361be1c86bdc7c' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/get_showtimes.tpl',
      1 => 1374203876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86388012351e8b018e88c87-94753132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shows' => 0,
    'r' => 0,
    'result_links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51e8b018ed27e9_95579420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8b018ed27e9_95579420')) {function content_51e8b018ed27e9_95579420($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("resource/resources.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3>
                    <i class="icon-table"></i>
                    Movie List
                </h3>
            </div>
            <div class="box-content nopadding">
                <!-- <table class="table table-hover table-nomargin table-bordered dataTable-columnfilter dataTable"> -->
                <table class="table table-hover table-nomargin table-bordered dataTable dataTable-fixedcolumn dataTable-scroll-x dataTable-scroll-y ">
                <thead>

                    <tr>
						<th>ID</th>
                        <th>Movie</th>
                        <th>Cinema</th>
                        <th>Location</th>

                        <th>Date</th>
                        <th>Time</th>
                        <th>Tickets</th>
                        <th>Price</th>
                        <th>Created</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['cinema_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['location_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['show_date'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['show_time'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['show_tickets'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['show_price'];?>
</td>
                            
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['created'];?>
</td>
                      
                        </tr>
                        
                    <?php } ?>
                         <tr>
                               
                                <td colspan="9">
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
</div><?php }} ?>