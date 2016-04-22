<?php /* Smarty version Smarty-3.1.11, created on 2013-12-25 02:46:42
         compiled from "velo-admin/views/templates/pages/browse_showtimes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178137972652baa982dfbea7-27057518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c5b4ac78f595b3e18ba67163cf09d01b621e3b' => 
    array (
      0 => 'velo-admin/views/templates/pages/browse_showtimes.tpl',
      1 => 1375409818,
      2 => 'file',
    ),
    '6799fa7e1ad4b0b88d554e5c3f094e44748c06e6' => 
    array (
      0 => 'velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178137972652baa982dfbea7-27057518',
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
  'unifunc' => 'content_52baa982eeed45_97777081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baa982eeed45_97777081')) {function content_52baa982eeed45_97777081($_smarty_tpl) {?><!doctype html>
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
                    <form class="form-search form-skin shadow" method="post" action="browse">
                        <legend>Browse Showtimes <label class="w"></label></legend>
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
                            <input type="radio" name="filter" id="optionsRadios1" value="title" checked> Title
                        </label>
                        <label class="radio">
                            <input type="radio" name="filter" id="optionsRadios1" value="show_date"> Show Day
                        </label>


                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
showtimes/resetFilters" class="pull-right btn btn-medium">Reset Filter</a>
                    </form>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargine">
                        <thead>

                            <tr>
                                <th></th>
                                <th>Movie</th>
                                <th>Cinema</th>
                                <th>Location</th>

                                <th>Date</th>
                                <th>Time</th>
                                <th>Tickets</th>
                                <th>Price</th>
                                <th>Show Info</th>
                                <th>Created</th>
                                <th></th>


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
                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['show_info'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['created'];?>
</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_title'];?>
</h3>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Showtime Edit Form Goes Here -->

                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>
                                                            <i class="icon-ok"></i>
                                                            Movie Showtimer
                                                        </h3>
                                                    </div>
                                                    <div class="box-content">
                                                        <div id="loader_elem<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" id="showTimerForm<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class='chosen-select'>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['cinema_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['r']->value['cinema_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['r']->value['location_name'];?>
)</option>
                                                                            <?php  $_smarty_tpl->tpl_vars['cin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show_house']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cin']->key => $_smarty_tpl->tpl_vars['cin']->value){
$_smarty_tpl->tpl_vars['cin']->_loop = true;
?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['cin']->value['id']!=$_smarty_tpl->tpl_vars['r']->value['cinema_id']){?>
                                                                                    {
                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cin']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cin']->value['cinema_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['cin']->value['location_name'];?>
)</option>
                                                                                    }
                                                                                <?php }?>
                                                                            <?php } ?>
                                                                        </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="input-medium datepick" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['show_date'];?>
">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['show_time'];?>
">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['show_tickets'];?>
" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['show_price'];?>
" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['kid_show_price'];?>
" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['student_show_price'];?>
" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ><?php echo $_smarty_tpl->tpl_vars['r']->value['show_info'];?>
</textarea>
                                                                </div>
                                                            </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-primary" value="Update Showtime">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <!--<button class="btn btn-primary" type="submit" data-dismiss="modal">Update Showtime</button> -->
                                            </div>
                                            </form>
                                        </div>
                                        <!--------------------------------------------------------------------------->
                                        <!-- Confirm Delete Dialogue -->
                                        <div id="modal-confirm-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for <?php echo $_smarty_tpl->tpl_vars['r']->value['movie_title'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['r']->value['cinema_name'];?>
(<?php echo $_smarty_tpl->tpl_vars['r']->value['location_name'];?>
) for <?php echo $_smarty_tpl->tpl_vars['r']->value['show_time'];?>
 on <?php echo $_smarty_tpl->tpl_vars['r']->value['show_date'];?>
</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
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