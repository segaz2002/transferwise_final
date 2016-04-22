<?php /* Smarty version Smarty-3.1.11, created on 2013-07-18 20:18:48
         compiled from "application/velo-admin/views/templates/pages/showtimes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55538808851e8b018116b09-05331383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a712d522085e60ab4a5a4e35d783582c93c6eebc' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/showtimes.tpl',
      1 => 1374203246,
      2 => 'file',
    ),
    'd1e4e5d0222b5869a6828786f8477dd794bcde0c' => 
    array (
      0 => 'application/velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55538808851e8b018116b09-05331383',
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
  'unifunc' => 'content_51e8b018195a59_90760980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8b018195a59_90760980')) {function content_51e8b018195a59_90760980($_smarty_tpl) {?><!doctype html>
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
                            

    <div class="row">
       <div id="loader_elem" class="span12"></div>
        <div class="span5">
<div class="box">
	<div class="box-title">
		<h3>
			<i class="icon-ok"></i>
			Movie Showtimer
		</h3>
	</div>
	<div class="box-content">
		<form action="#" method="POST" class='form-horizontal form-validate' id="showTimerForm">
			<div class="control-group ">
				<label for="movie_name" class="control-label">Movie</label>
				<div class="controls">
					<div class="input-xlarge"><select name="show_movie" id="select" class='chosen-select'>
						<option>Select a movie</option>
						<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value['movie_title'];?>
</option>
						<?php } ?>
					</select></div>
				</div>
			</div>

			<div class="control-group ">
				<label for="cinema_id" class="control-label">Cinema</label>
				<div class="controls">
					<div class="input-xlarge"><select name="show_cinema" id="select_cinema" class='chosen-select'>
						<option>Select a cinema</option>
						<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cinemas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value['cinema_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['k']->value['location_name'];?>
)</option>
						<?php } ?>
					</select></div>
				</div>
			</div>

			<div class="control-group ">
				<label for="textfield" class="control-label">Show Date</label>
				<div class="controls">
					<input type="text" name="show_date" id="textfield" class="input-medium datepick">
					<!-- <span class="help-block">As dropdown</span> -->
				</div>
			</div>
			<div class="control-group ">
				<label for="timepicker" class="control-label">Show time</label>
				<div class="controls">
					<div class="bootstrap-timepicker">
						<input type="text" name="show_time" id="timepicker" class="input-small timepick">
						<!-- <span class="help-block">As dropdown</span>-->
					</div>
				</div>
			</div>

			<div class="control-group ">
				<label for="numberfield" class="control-label">Available Ticket</label>
				<div class="controls">
					<input type="text"  name="show_tickets" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
				</div>
			</div>

			<div class="control-group ">
				<label for="digitsfield" class="control-label">Adult Price</label>
				<div class="controls">
					<input type="text" placeholder="Only digits" name="adult_show_price" id="digitsfield" data-rule-digits="true" data-rule-required="true">
				</div>
			</div>

			<div class="control-group ">
				<label for="digitsfield" class="control-label">Kids Price</label>
				<div class="controls">
					<input type="text" placeholder="Only digits" name="kids_show_price" id="digitsfield" data-rule-digits="true" data-rule-required="true">
				</div>
			</div>

			<div class="control-group ">
				<label for="digitsfield" class="control-label">Students Price</label>
				<div class="controls">
					<input type="text" placeholder="Only digits" name="students_show_price" id="digitsfield" data-rule-digits="true" data-rule-required="true">
				</div>
			</div>

			<div class="control-group ">
				<label for="digitsfield" class="control-label">Show information</label>
				<div class="controls">
					<textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" placeholder="You can provide additional information in here..." ></textarea>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" class="btn btn-primary" value="Add Showtime">
				<button type="button" class="btn">Cancel</button>
			</div>
		</form>
	</div>
</div>
</div>

        <div class="span6">
            <iframe id="iframeBrowser" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
showtimes/get_showtimes" class="span11" style="height: 600px;"></iframe>

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