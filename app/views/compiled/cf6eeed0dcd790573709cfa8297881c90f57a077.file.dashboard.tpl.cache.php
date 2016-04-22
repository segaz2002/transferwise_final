<?php /* Smarty version Smarty-3.1.11, created on 2013-09-26 06:35:58
         compiled from "application/velo-admin/views/templates/pages/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14757390225244383eeec535-56028729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf6eeed0dcd790573709cfa8297881c90f57a077' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/dashboard.tpl',
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
  'nocache_hash' => '14757390225244383eeec535-56028729',
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
  'unifunc' => 'content_5244383f299d58_41096485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5244383f299d58_41096485')) {function content_5244383f299d58_41096485($_smarty_tpl) {?><!doctype html>
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
                            

	<h4><i class="icon-time"></i> Movie Tickets Sales Overview</h4>
<div class="row-fluid">
    <div class="span4">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3>
                    <i class="icon-bar-chart"></i>
                    Today
                </h3>
            </div>
            <div class="box-content">
                
				<table class="table table-hover table-nomargin">
					<thead>
						<tr>
							<th>Cinema</th>
							<th>No. Tickets</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie_sales_today']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
    <div class="span4">
        <div class="box box-color lightred box-bordered">
            <div class="box-title">
                <h3>
                    <i class="icon-bar-chart"></i>
                    This Week
                </h3>
            </div>
            <div class="box-content">
                

				<table class="table table-hover table-nomargin">
					<thead>
						<tr>
							<th>Cinema</th>
							<th>No. Tickets</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie_sales_thisweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
    <div class="span4">
        <div class="box box-color satgreen box-bordered">
            <div class="box-title">
                <h3>
                    <i class="icon-bar-chart"></i>
                    This Month
                </h3>
            </div>
            <div class="box-content">
                      

				<table class="table table-hover table-nomargin">
					<thead>
						<tr>
							<th>Cinema</th>
							<th>No. Tickets</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie_sales_thismonth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

<!--------------------------------------------------SECOND ROWS --------------------------------------->
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3>
                    <i class="icon-bar-chart"></i>
                    Transaction Statistics (Current Week)
                </h3>
            </div>
            <div class="box-content">
                <div class="row-fluid">

                </div>
                <div class="row-fluid margin-top">
                    <div class="span4">
                        <ul class="pagestats style-3">
                            <li>
                                <div class="spark">
                                    <div class="chart" data-percent="<?php echo $_smarty_tpl->tpl_vars['transaction_stats']->value['abadoned'];?>
%" data-color="#f96d6d" data-trackcolor="#fae2e2"><?php echo $_smarty_tpl->tpl_vars['transaction_stats']->value['abadoned'];?>
%</div>
                                </div>
                                <div class="bottom">
                                    <span class="name">Abadoned</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="span4">
                        <ul class="pagestats style-3">
                            <li>
                                <div class="spark">
                                    <div class="chart" data-percent="<?php echo $_smarty_tpl->tpl_vars['transaction_stats']->value['failed'];?>
%" data-color="#368ee0" data-trackcolor="#d5e7f7"><?php echo $_smarty_tpl->tpl_vars['transaction_stats']->value['failed'];?>
%</div>
                                </div>
                                <div class="bottom">
                                    <span class="name">Failed</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="span4">
                        <ul class="pagestats style-3">
                            <li>
                                <div class="spark">
                                    <div class="chart" data-percent="<?php echo $_smarty_tpl->tpl_vars['transaction_stats']->value['success'];?>
%" data-color="#56af45" data-trackcolor="#dcf8d7"><?php echo $_smarty_tpl->tpl_vars['transaction_stats']->value['success'];?>
%</div>
                                </div>
                                <div class="bottom">
                                    <span class="name">Successful</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------END OF ROW --------------------------------------->
<!---------------------------------------------------START --------------------------------------->
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3>
                    <i class="icon-reorder"></i>
                    Movie/Showtimes
                </h3>
            </div>
            <div class="box-content">
                <ul class="tiles tiles-center nomargin">
                    <li class="orange">
                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['movie_shows']->value['available_movies'];?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
movies"><span><i class="icon-film"></i></span><span class='name'>All Movies</span></a>
                    </li>
                    <li class="lightred">
                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['movie_shows']->value['today'];?>
</span>
                        <a href="#"><span><i class="icon-fire"></i></span><span class='name'>Showing Today</span></a>
                    </li>
                    <li class="blue">
                        <span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['movie_shows']->value['thisweek'];?>
</span>
                        <a href="#"><span><i class="icon-reorder"></i></span><span class='name'>Showing This Week</span></a>
                    </li>
                    <li class="satgreen">
                        <span class="label label-inverse"><?php echo $_smarty_tpl->tpl_vars['movie_shows']->value['thismonth'];?>
</span>
                        <a href="#"><span><i class="icon-file-alt"></i></span><span class='name'>Showing This Month</span></a>
                    </li>
                    <!--<li class="orange">
                        <span class="label label-inverse">15</span>
                        <a href="#"><span><i class="icon-comments"></i></span><span class='name'>Open tickets</span></a>
                    </li>-->
                </ul>

            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------END OF ROW --------------------------------------->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
</body>

</html>

<?php }} ?>