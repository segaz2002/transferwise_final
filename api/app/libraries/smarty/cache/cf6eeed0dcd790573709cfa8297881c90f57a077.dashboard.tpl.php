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
    'c33e4a0d0efa150f9acdc081cfc199de3160128e' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/resources.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    '2656540eba34163744d32f0668d1d8b1572aa6a0' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/navigator.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    '4bd5f83e5a649f4aa872f8475fd559e6a29aed49' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/sidebar.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    '5fe416c6215176815309fcd5057eb53e596e5297' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/content_header.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14757390225244383eeec535-56028729',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5244383f4e8af6_00926684',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5244383f4e8af6_00926684')) {function content_5244383f4e8af6_00926684($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title>Dashboard</title>
	    <script type="text/javascript">
        var config = {
            base: "<?php echo '<?php'; ?> echo base_url(); <?php echo '?>'; ?>",
            someOtherPref: 4
        };
    </script>

    <!--Javascript,Styles-->
    <!--
    Author: Kolawole Gabriel
    Date: 11-04-2013
    Description: This tpl holds all asset includes like .css,.js etc, for the sake of clarity in the base layout file
-->

<!-- Bootstrap -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/bootstrap.min.css">
<!-- Bootstrap responsive -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/bootstrap-responsive.min.css">
<!-- Font awesome Icons -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/font-awesome.min.css">
<!-- jQuery UI -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
<!-- Easy pie  -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/easy-pie-chart/jquery.easy-pie-chart.css">
<!-- chosen -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/chosen/chosen.css">

<!-- Datatables -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/datatable/TableTools.css">


<!-- multi select -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/multiselect/multi-select.css">
<!-- timepicker -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/timepicker/bootstrap-timepicker.min.css">
<!-- colorpicker -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/colorpicker/colorpicker.css">
<!-- Datepicker -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/datepicker/datepicker.css">
<!-- Plupload -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/plupload/jquery.plupload.queue.css">
<!-- select2 -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/select2/select2.css">
<!-- icheck -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/plugins/icheck/all.css">
<!-- Theme CSS -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/style.css">
<!-- Color CSS -->
<link rel="stylesheet" href="http://localhost/tripican/assets/css/themes.css">

<script>
    var SITE_BASE_URL = "http://localhost/tripican/";
</script>
<!-- jQuery -->
<script src="http://localhost/tripican/assets/js/jquery.min.js"></script>
<script src="http://localhost/tripican/assets/js/jswrapper.js"></script>
<!-- Nice Scroll -->
<script src="http://localhost/tripican/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<!-- imagesLoaded -->
<script src="http://localhost/tripican/assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
<!-- jQuery UI -->
<script src="http://localhost/tripican/assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/jquery-ui/jquery.ui.slider.js"></script>
<!-- slimScroll -->
<script src="http://localhost/tripican/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Bootstrap -->
<script src="http://localhost/tripican/assets/js/bootstrap.min.js"></script>
<!-- Chosen -->
<script src="http://localhost/tripican/assets/js/plugins/chosen/chosen.jquery.min.js"></script>
<!-- Bootbox -->
<script src="http://localhost/tripican/assets/js/plugins/bootbox/jquery.bootbox.js"></script>
<!-- Bootbox -->
<script src="http://localhost/tripican/assets/js/plugins/form/jquery.form.min.js"></script>

<!-- Masked inputs -->
<script src="http://localhost/tripican/assets/js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
<!-- TagsInput -->
<script src="http://localhost/tripican/assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<!-- Datepicker -->
<script src="http://localhost/tripican/assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Timepicker -->
<script src="http://localhost/tripican/assets/js/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Colorpicker -->
<script src="http://localhost/tripican/assets/js/plugins/colorpicker/bootstrap-colorpicker.js"></script>
<!-- Chosen -->
<script src="http://localhost/tripican/assets/js/plugins/chosen/chosen.jquery.min.js"></script>
<!-- MultiSelect -->
<script src="http://localhost/tripican/assets/js/plugins/multiselect/jquery.multi-select.js"></script>
<!-- CKEditor -->
<script src="http://localhost/tripican/assets/js/plugins/ckeditor/ckeditor.js"></script>
<!-- PLUpload -->
<script src="http://localhost/tripican/assets/js/plugins/plupload/plupload.full.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/plupload/jquery.plupload.queue.js"></script>
<!-- Custom file upload -->
<script src="http://localhost/tripican/assets/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/mockjax/jquery.mockjax.js"></script>
<!-- select2 -->
<script src="http://localhost/tripican/assets/js/plugins/select2/select2.min.js"></script>

<script src="http://localhost/tripican/assets/js/plugins/icheck/jquery.icheck.min.js"></script>

<!-- Validation -->
<script src="http://localhost/tripican/assets/js/plugins/validation/jquery.validate.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/validation/additional-methods.min.js"></script>

<!-- Form -->
<script src="http://localhost/tripican/assets/js/plugins/form/jquery.form.min.js"></script>

<!-- Wizard -->
<script src="http://localhost/tripican/assets/js/plugins/wizard/jquery.form.wizard.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/mockjax/jquery.mockjax.js"></script>

<!-- dataTables -->
<script src="http://localhost/tripican/assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/datatable/TableTools.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/datatable/ColReorder.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/datatable/ColVis.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/datatable/FixedColumns.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/datatable/dataTables.scroller.min.js"></script>

<!-- Sparkline -->
<script src="http://localhost/tripican/assets/js/plugins/sparklines/jquery.sparklines.min.js"></script>
<!-- Easy pie -->
<script src="http://localhost/tripican/assets/js/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<!-- Flot -->
<script src="http://localhost/tripican/assets/js/plugins/flot/jquery.flot.min.js"></script>
<script src="http://localhost/tripican/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>

<!-- Theme framework -->
<!-- <script src="http://localhost/tripican/assets/js/eakroko.min.js"></script> -->
<script src="http://localhost/tripican/assets/js/eakroko.js"></script>
<!-- Theme scripts -->
<script src="http://localhost/tripican/assets/js/application.min.js"></script>
<!-- Just for demonstration -->
<script src="http://localhost/tripican/assets/js/demonstration.min.js"></script>
<!-- Favicon -->
<link rel="shortcut icon" href="http://localhost/tripican/assets/img/favicon.ico" />
<!-- Apple devices Homescreen icon -->
<link rel="apple-touch-icon-precomposed" href="http://localhost/tripican/assets/img/apple-touch-icon-precomposed.png" />

</head>

<body>
    <!--The Navigation bar plus nav contents-->
    <!--
    Author: Kolawole Gabriel
    Date: 11-04-2013
    Description: This tpl holds the navigation bar, for the sake of clarity in the base layout file
-->
    <div id="navigation">
    <div class="container-fluid">
    <a href="#" id="brand">Tripican</a>
    <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
    <ul class='main-nav'>
        <li class="active">
            <a href="http://localhost/tripican/admin.php/dashboard">
                <i class="icon-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li >
            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                <i class="icon-edit"></i>
                <span>Movies</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="http://localhost/tripican/admin.php/movies/upload">Create New Movie</a>
                </li>
                <li>
                    <a href="http://localhost/tripican/admin.php/movies">Browse Movies</a>
                </li>

                <li class='dropdown-submenu'>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Show Time</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://localhost/tripican/admin.php/showtimes">Add</a>
                        </li>
                        <li>
                            <a href="http://localhost/tripican/admin.php/showtimes/browse">View</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>
       
        <li >
            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                <i class="icon-table"></i>
                <span>Ticket Sales</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="http://localhost/tripican/admin.php/orders">Movies</a>
                </li>
            
            </ul>
        </li>

    </ul>
    <div class="user">
        <ul class="icon-nav">


          
            <li class='dropdown colo'>
                <a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-tint"></i></a>
                <ul class="dropdown-menu pull-right theme-colors">
                    <li class="subtitle">
                        Predefined colors
                    </li>
                    <li>
                        <span class='red'></span>
                        <span class='orange'></span>
                        <span class='green'></span>
                        <span class="brown"></span>
                        <span class="blue"></span>
                        <span class='lime'></span>
                        <span class="teal"></span>
                        <span class="purple"></span>
                        <span class="pink"></span>
                        <span class="magenta"></span>
                        <span class="grey"></span>
                        <span class="darkblue"></span>
                        <span class="lightred"></span>
                        <span class="lightgrey"></span>
                        <span class="satblue"></span>
                        <span class="satgreen"></span>
                    </li>
                </ul>
            </li>
            <!-- <li>
                <a href="more-locked.html" class='lock-screen' rel='tooltip' title="Lock screen" data-placement="bottom"><i class="icon-lock"></i></a>
            </li> -->
        </ul>
        <div class="dropdown">
            <a href="#" class='dropdown-toggle' data-toggle="dropdown"> Saka <img src="http://localhost/tripican/assets/img/demo/user-avatar.jpg" alt=""></a>
            <ul class="dropdown-menu pull-right">

                <li>
                    <a href="http://localhost/tripican/admin.php/sysSettings">Change Password</a>
                </li>
                <li>
                    <a href="http://localhost/tripican/admin.php/login/logoff">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>

<div class="container-fluid" id="content">
    <!--Sidebar, sub-navigation-->
    <!--
    Author: Kolawole Gabriel
    Date: 11-04-2013
    Description: This tpl holds the left side sub-navigation bar, for the sake of clarity in the base layout file
-->
    <div id="left">
         
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>System Options</span></a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="http://localhost/tripican/admin.php/settings/genres">Movie Genres</a>
                </li>
                <li>
                    <a href="http://localhost/tripican/admin.php/settings/cinemas">Cinemas</a>
                </li>
                <li>
                    <a href="http://localhost/tripican/admin.php/settings/locations">Locations</a>
                </li>
                <li>
                    <a href="#">Event Centers</a>
                </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Settings</span></a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="http://localhost/tripican/admin.php/sysSettings">Change Password</a>
                </li>
                <li>
                   <!--  <a href="#">Update Info</a> -->
                </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Transactions</span></a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="http://localhost/tripican/admin.php/transaction">Browse/Export</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="main">

        <div class="container-fluid">
            <!--The title of every page rendered-->
            <!--
    Author: Kolawole Gabriel
    Date: 11-04-2013
    Description: This tpl holds the header of any content rendered
-->
    <div class="page-header">
        <div class="pull-left">
            <h1>Dashboard</h1>
        </div>
        <div class="pull-right">
            <!--<ul class="minitiles">
                <li class='grey'>
                    <a href="#"><i class="icon-cogs"></i></a>
                </li>
                <li class='lightgrey'>
                    <a href="#"><i class="icon-globe"></i></a>
                </li>
            </ul> -->
            <ul class="stats">
               <!-- <li class='satgreen'>
                    <i class="icon-money"></i>
                    <div class="details">
                        <span class="big">$324,12</span>
                        <span>Balance</span>
                    </div>
                </li> -->
                <li class='lightred'>
                    <i class="icon-calendar"></i>
                    <div class="details">
                        <span class="big">
							September 26, 2013
							<!-- February 22, 2013 -->
						</span>
                        <span>
							Thursday, 02:35 PM
							<!-- Wednesday, 13:56 -->
						</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>


			  <!-- 13:30 -->
			 <!-- 1:30 pm -->
			 <!-- Monday, December 1, 2010 -->

            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <!--<div class="box-title">
                            <h3>
                                <i class="icon-reorder"></i>

                                
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
													<tr>
																	<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																	<td>29</td>
															</tr>
													<tr>
																	<td>Silverbird Cinemas, Ikeja</td>
																	<td>29</td>
															</tr>
						
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
                                    <div class="chart" data-percent="0%" data-color="#f96d6d" data-trackcolor="#fae2e2">0%</div>
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
                                    <div class="chart" data-percent="0%" data-color="#368ee0" data-trackcolor="#d5e7f7">0%</div>
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
                                    <div class="chart" data-percent="0%" data-color="#56af45" data-trackcolor="#dcf8d7">0%</div>
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
                        <span class="label label-info">67</span>
                        <a href="http://localhost/tripican/admin.php/movies"><span><i class="icon-film"></i></span><span class='name'>All Movies</span></a>
                    </li>
                    <li class="lightred">
                        <span class="label label-info">0</span>
                        <a href="#"><span><i class="icon-fire"></i></span><span class='name'>Showing Today</span></a>
                    </li>
                    <li class="blue">
                        <span class="label label-important">0</span>
                        <a href="#"><span><i class="icon-reorder"></i></span><span class='name'>Showing This Week</span></a>
                    </li>
                    <li class="satgreen">
                        <span class="label label-inverse">24</span>
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