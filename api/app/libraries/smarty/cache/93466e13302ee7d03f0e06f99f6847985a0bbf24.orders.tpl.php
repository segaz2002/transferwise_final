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
  'nocache_hash' => '150592031052443950a72da5-33513084',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52443950cbdd20_54683456',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52443950cbdd20_54683456')) {function content_52443950cbdd20_54683456($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title>Orders</title>
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
        <li >
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
       
        <li class="active">
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
            <h1>Orders</h1>
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
							Thursday, 02:40 PM
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
																					<tr>
																									<td>TRP121366740307</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2400.00</td>
																							</tr>
																					<tr>
																									<td>TRP112</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>5</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP116</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>10</td>
																									<td>0</td>
																									<td>0</td>
																									<td>8000.00</td>
																							</tr>
																					<tr>
																									<td>TRP121</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>5</td>
																									<td>0</td>
																									<td>0</td>
																									<td>12500.00</td>
																							</tr>
																					<tr>
																									<td>TRP123</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP131</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP3433</td>
																									<td>gabrielo@kamdora.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP3337</td>
																									<td>olaoluawo@yahoo.com</td>
																									<td>08033574683</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP3438</td>
																									<td>gabrielo@kamdora.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP3339</td>
																									<td>olaoluawo@yahoo.com</td>
																									<td>08033574683</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP41141</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP70170</td>
																									<td>tope@ennovatenigeria.com</td>
																									<td>07083165287</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP72172</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>50.00</td>
																							</tr>
																					<tr>
																									<td>TRP75175</td>
																									<td>tope@ennovatenigeria.com</td>
																									<td>07083165287</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP86186</td>
																									<td>hntimizi@gdcinemas.com</td>
																									<td>08133308480</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Olympus Has Fallen</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1000.00</td>
																							</tr>
																					<tr>
																									<td>TRP94194</td>
																									<td>hntimizi@gdcinemas.com</td>
																									<td>08133308480</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Olympus Has Fallen</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1000.00</td>
																							</tr>
																					<tr>
																									<td>TRP102</td>
																									<td>Durulnnamdi@yahoo.co.uk</td>
																									<td>08039793911</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP105</td>
																									<td>hntimizi@gdcinemas.com</td>
																									<td>08133308480</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP112</td>
																									<td>mykel_2010@yahoo.com</td>
																									<td>08130722615</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP121</td>
																									<td>esomchi@gmail.com</td>
																									<td>08096108590</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP123</td>
																									<td>uchennae@gmail.com</td>
																									<td>07033199119</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP131</td>
																									<td>Eloka234@yahoo.com</td>
																									<td>07037093206</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP133</td>
																									<td>angel.kay86@gmail.com</td>
																									<td>08167314239</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP139</td>
																									<td>Michael.tawadrous@yahoo.com</td>
																									<td>07065777666</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>8000.00</td>
																							</tr>
																					<tr>
																									<td>TRP141</td>
																									<td>Ikevalerie@gmail.com</td>
																									<td>08021352228</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>1</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP144</td>
																									<td>njide81@gmail.com</td>
																									<td>08035012636</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP145</td>
																									<td>fosibodu@gmail.com</td>
																									<td>07087839910</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP147</td>
																									<td>larry1306@gmail.com</td>
																									<td>08033302529</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP151</td>
																									<td>olugbenga.agboola@gmail.com</td>
																									<td>07033188284</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Hangover 3</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP161</td>
																									<td>Ifedayoagoro@yahoo.co.uk</td>
																									<td>08033289946</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Hangover 3</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP168</td>
																									<td>chatwith_tmc@yahoo.com</td>
																									<td>08124501482</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>0</td>
																									<td>0</td>
																									<td>1</td>
																									<td>700.00</td>
																							</tr>
																					<tr>
																									<td>TRP172</td>
																									<td>oyebkoyejo@yahoo.com</td>
																									<td>08053215470</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Olympus Has Fallen</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP181</td>
																									<td>holyreg@gmail.com</td>
																									<td>08128248571</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP188</td>
																									<td>rush0technology@gmail.com</td>
																									<td>08079242179</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Hangover 3</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP202</td>
																									<td>afrowolo@yahoo.com</td>
																									<td>08098778278</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP215</td>
																									<td>oloyedesunday@yahoo.com</td>
																									<td>08023434401</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>After Earth</td>
																									<td>2013-06-07</td>
																									<td>09:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP217</td>
																									<td>eloho_onwah@yahoo.com</td>
																									<td>08035418241</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Temptation</td>
																									<td>2013-06-07</td>
																									<td>05:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP220</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2850.00</td>
																							</tr>
																					<tr>
																									<td>TRP223</td>
																									<td>bode@vedatechnology.com</td>
																									<td>2348065447815</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>After Earth</td>
																									<td>2013-06-07</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP226</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Olympus Has Fallen</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP227</td>
																									<td>badeayoade@yahoo.com</td>
																									<td>08038658692</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Hangover 3</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP228</td>
																									<td>Chikeokolie@gmail.com</td>
																									<td>07035834244</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP232</td>
																									<td>Mevisaiyeju@gmail.com</td>
																									<td>07032438730</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>After Earth</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP241</td>
																									<td>chux_obi@yahoo.com</td>
																									<td>08069838581</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td></td>
																									<td></td>
																									<td>0</td>
																									<td>0</td>
																									<td>1</td>
																									<td>700.00</td>
																							</tr>
																					<tr>
																									<td>TRP250</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Temptation</td>
																									<td>2013-06-07</td>
																									<td>05:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP253</td>
																									<td>flukkytominiyi@yahoo.com</td>
																									<td>08059571124</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Temptation</td>
																									<td>2013-06-12</td>
																									<td>05:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP259</td>
																									<td>peju.osonuga@yahoo.com</td>
																									<td>07062155879</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td>2013-06-14</td>
																									<td>09:10 PM</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2</td>
																									<td>1400.00</td>
																							</tr>
																					<tr>
																									<td>TRP260</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Olympus Has Fallen</td>
																									<td>2013-06-14</td>
																									<td>04:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP265</td>
																									<td>bodepedro@gmail.com</td>
																									<td>08065447815</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Star Trek Into Darkness 2D</td>
																									<td>2013-06-14</td>
																									<td>08:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP266</td>
																									<td>linklarryup@yahoo.ca</td>
																									<td>08056732327</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td>2013-06-14</td>
																									<td>11:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP269</td>
																									<td>buky200@gmail.com</td>
																									<td>08162899599</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Olympus Has Fallen</td>
																									<td>2013-06-14</td>
																									<td>09:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP273</td>
																									<td>Obinnia@gmail.com</td>
																									<td>08034020098</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>After Earth</td>
																									<td>2013-06-15</td>
																									<td>08:45 PM</td>
																									<td>2</td>
																									<td>2</td>
																									<td>0</td>
																									<td>4800.00</td>
																							</tr>
																					<tr>
																									<td>TRP290</td>
																									<td>Josephladipo@yahoo.co.uk</td>
																									<td>08077647414</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td></td>
																									<td></td>
																									<td>0</td>
																									<td>0</td>
																									<td>1</td>
																									<td>2350.00</td>
																							</tr>
																					<tr>
																									<td>TRP294</td>
																									<td>omolaraajele@gmail.com</td>
																									<td>08132128966</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Star Trek Into Darkness 2D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP295</td>
																									<td>alfred_dixon@yahoo.co.uk</td>
																									<td>08064258703</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-22</td>
																									<td>01:10 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2350.00</td>
																							</tr>
																					<tr>
																									<td>TRP296</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4700.00</td>
																							</tr>
																					<tr>
																									<td>TRP301</td>
																									<td>ebuka20@gmail.com</td>
																									<td>08185216231</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4700.00</td>
																							</tr>
																					<tr>
																									<td>TRP308</td>
																									<td>kalejaiye@discoveryhousemontessori.com</td>
																									<td>07082075197</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>04:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>1</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP311</td>
																									<td>omojay28@yahoo.com</td>
																									<td>08029476715</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>06:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP316</td>
																									<td>enyiuche@gmail.com</td>
																									<td>08038320660</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>06:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP326</td>
																									<td>ucheogboi@gmail.com</td>
																									<td>08168983826</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>09:50 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>9800.00</td>
																							</tr>
																					<tr>
																									<td>TRP328</td>
																									<td>kolajayi@gmail.com</td>
																									<td>08177011171</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>06:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP329</td>
																									<td>ucheogboi@gmail.com</td>
																									<td>08168983826</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>09:50 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP336</td>
																									<td>bode@vedatechnology.com</td>
																									<td>2348065447815</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>07:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP342</td>
																									<td>ogunleye.tolulope@yahoo.com</td>
																									<td>08033061505</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>07:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP344</td>
																									<td>btamuno@yahoo.com</td>
																									<td>08082047238</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>09:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP345</td>
																									<td>abhishek.vfs@gmail.com</td>
																									<td>08079890017</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-21</td>
																									<td>09:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP353</td>
																									<td>nfadipe@yahoo.com</td>
																									<td>08036450022</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-22</td>
																									<td>07:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP357</td>
																									<td>Richdike33@yahoo.co.uk</td>
																									<td>08088800777</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Epic 3D</td>
																									<td>2013-06-23</td>
																									<td>12:10 PM</td>
																									<td>2</td>
																									<td>4</td>
																									<td>0</td>
																									<td>14700.00</td>
																							</tr>
																					<tr>
																									<td>TRP361</td>
																									<td>olueye@gmail.com</td>
																									<td>08028158017</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td>2013-06-23</td>
																									<td>09:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP363</td>
																									<td>oshone@hedonmark.com</td>
																									<td>07031959554</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-23</td>
																									<td>09:50 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP371</td>
																									<td>igonidok@gmail.com</td>
																									<td>08039786811</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-06-26</td>
																									<td>07:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP372</td>
																									<td>mokeji@gmail.com</td>
																									<td>08023023709</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Star Trek Into Darkness 2D</td>
																									<td>2013-06-24</td>
																									<td>06:55 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP376</td>
																									<td>eckinservice@yahoo.com</td>
																									<td>08028531530</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-06-26</td>
																									<td>07:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP379</td>
																									<td>sexymillion17@yahoo.com</td>
																									<td>08148274758</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td>2013-06-26</td>
																									<td>03:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP380</td>
																									<td>danny_iyio@yahoo.com</td>
																									<td>08122244769</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Olympus Has Fallen</td>
																									<td>2013-06-26</td>
																									<td>06:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP392</td>
																									<td>majirio@yahoo.co.uk</td>
																									<td>07034077345</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-06-26</td>
																									<td>09:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP403</td>
																									<td>tesho_ma@hotmail.com</td>
																									<td>08036995738</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Hangover 3</td>
																									<td>2013-06-28</td>
																									<td>09:35 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP408</td>
																									<td>yayusmadrid@gmail.com</td>
																									<td>08032002812</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-06-28</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP409</td>
																									<td>tounshada@gmail.com</td>
																									<td>08062977356</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-06-28</td>
																									<td>05:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP413</td>
																									<td>eluojo@gmail.com</td>
																									<td>08061396005</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-28</td>
																									<td>09:55 PM</td>
																									<td>6</td>
																									<td>0</td>
																									<td>0</td>
																									<td>14700.00</td>
																							</tr>
																					<tr>
																									<td>TRP428</td>
																									<td>lelhassan@hotmail.com</td>
																									<td>08186170286</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-29</td>
																									<td>06:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP429</td>
																									<td>george4dollars@yahoo.ca</td>
																									<td>07058054085</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-29</td>
																									<td>06:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP434</td>
																									<td>yemiwilliams@hotmail.com</td>
																									<td>08033268318</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Star Trek Into Darkness 2D</td>
																									<td>2013-06-30</td>
																									<td>12:50 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP436</td>
																									<td>olaitan.fajuyitan@gmail.com</td>
																									<td>07034048183</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-06-30</td>
																									<td>06:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP440</td>
																									<td>defoneal@yahoo.co.uk</td>
																									<td>08034414797</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-01</td>
																									<td>07:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP448</td>
																									<td>olayemi.gabriel@gmail.com</td>
																									<td>08159090134</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-03</td>
																									<td>01:20 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP454</td>
																									<td>bankyiie@gmail.com</td>
																									<td>08053099304</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-02</td>
																									<td>09:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP460</td>
																									<td>antel19@yahoo.co.uk</td>
																									<td>08079242179</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Man of Steel 3D</td>
																									<td>2013-07-02</td>
																									<td>09:55 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP461</td>
																									<td>soji@qwesttribe.com</td>
																									<td>08069020996</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-03</td>
																									<td>04:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP463</td>
																									<td>defoneal@yahoo.co.uk</td>
																									<td>08034414797</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>LUV</td>
																									<td>2013-07-03</td>
																									<td>07:00 PM</td>
																									<td>6</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3300.00</td>
																							</tr>
																					<tr>
																									<td>TRP465</td>
																									<td>aosanusi@yahoo.com</td>
																									<td>08055371188</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-03</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP467</td>
																									<td>ehimheazp@yahoo.com</td>
																									<td>08035056777</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-03</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP469</td>
																									<td>segunokoya@yahoo.com</td>
																									<td>08086968231</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-03</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP472</td>
																									<td>lawalabbeys@yahoo.com</td>
																									<td>08034727730</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-03</td>
																									<td>09:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP473</td>
																									<td>joesmith622@yahoo.com</td>
																									<td>08038180572</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-04</td>
																									<td>07:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP474</td>
																									<td>peju.osonuga@yahoo.com</td>
																									<td>07062155879</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td>2013-07-05</td>
																									<td>11:45 PM</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2</td>
																									<td>1400.00</td>
																							</tr>
																					<tr>
																									<td>TRP476</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Internship</td>
																									<td>2013-07-05</td>
																									<td>06:15 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP004922576</td>
																									<td>Akinmafe@yahoo.com</td>
																									<td>08033768041</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-06</td>
																									<td>07:40 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>5800.00</td>
																							</tr>
																					<tr>
																									<td>TRP004946561</td>
																									<td>kwame411@yahoo.co.uk</td>
																									<td>08033197196</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-06</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005002187</td>
																									<td>segaz2002@gmail.com</td>
																									<td>08036071038</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Fast and Furious 6</td>
																									<td>2013-07-07</td>
																									<td>03:35 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005060142</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-08</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>950.00</td>
																							</tr>
																					<tr>
																									<td>TRP005135171</td>
																									<td>abisbajo@yahoo.com</td>
																									<td>08096679948</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-10</td>
																									<td>07:40 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2200.00</td>
																							</tr>
																					<tr>
																									<td>TRP005151815</td>
																									<td>tosinobademi@gmail.com</td>
																									<td>08035743824</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-10</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP005166132</td>
																									<td>emmanwalorjnr@aol.com</td>
																									<td>08035081920</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-10</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP005172305</td>
																									<td>rhemaoabraham@yahoo.com</td>
																									<td>08038236683</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-07-14</td>
																									<td>04:30 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2800.00</td>
																							</tr>
																					<tr>
																									<td>TRP005209741</td>
																									<td>gbabeayoola@yahoo.com</td>
																									<td>08055128747</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-10</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP005210496</td>
																									<td>emmanwalorjnr@aol.com</td>
																									<td>08035081920</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-10</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP005235720</td>
																									<td>onyiao@gmail.com</td>
																									<td>08164691616</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-11</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005255742</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Internship</td>
																									<td>2013-07-11</td>
																									<td>06:15 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>950.00</td>
																							</tr>
																					<tr>
																									<td>TRP005288889</td>
																									<td>kadelanwa@yahoo.com</td>
																									<td>08023276154</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-07-13</td>
																									<td>02:20 PM</td>
																									<td>1</td>
																									<td>2</td>
																									<td>0</td>
																									<td>3100.00</td>
																							</tr>
																					<tr>
																									<td>TRP005294916</td>
																									<td>fregene.gbugbemi@gmail.com</td>
																									<td>08068012070</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td>2013-07-17</td>
																									<td>02:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP005355719</td>
																									<td>jide_sangowa@yahoo.com</td>
																									<td>08033255030</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-13</td>
																									<td>10:30 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005374715</td>
																									<td>aneto_o@yahoo.com</td>
																									<td>08033462182</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-13</td>
																									<td>10:30 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005403240</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP005486136</td>
																									<td>babajide.oyalowo@aol.com</td>
																									<td>08028602164</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-07-15</td>
																									<td>10:00 AM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005515462</td>
																									<td>Ota5021@psu.edu</td>
																									<td>08055045815</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-16</td>
																									<td>11:10 AM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005636255</td>
																									<td>erumuodiete@gmail.com</td>
																									<td>08023029243</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-17</td>
																									<td>07:40 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1650.00</td>
																							</tr>
																					<tr>
																									<td>TRP005642483</td>
																									<td>rush0technolgy@gmail.comv</td>
																									<td>08079242179</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td>2013-07-17</td>
																									<td>08:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP005779433</td>
																									<td>toyin.femisaheed@gmail.com</td>
																									<td>08124229489</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Turbo 3D</td>
																									<td>2013-07-19</td>
																									<td>01:55 PM</td>
																									<td>1</td>
																									<td>2</td>
																									<td>0</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP005789337</td>
																									<td>o_bolade@hotmail.com</td>
																									<td>08055103294</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-19</td>
																									<td>07:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005826783</td>
																									<td>dcnnoah@aol.com</td>
																									<td>07030300708</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Pacific Rim</td>
																									<td>2013-07-19</td>
																									<td>05:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>1</td>
																									<td>2500.00</td>
																							</tr>
																					<tr>
																									<td>TRP005837108</td>
																									<td>features@bellanaija.com</td>
																									<td>08033199820</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-07-20</td>
																									<td>04:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP005845367</td>
																									<td>style@bellanaija.com</td>
																									<td>08060262574</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Pacific Rim 3D</td>
																									<td>2013-07-20</td>
																									<td>06:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005949855</td>
																									<td>bode@vedatechnology.com</td>
																									<td>2348065447815</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Pacific Rim 3D</td>
																									<td>2013-07-19</td>
																									<td>08:55 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP005976475</td>
																									<td>nene@lawani.com</td>
																									<td>08077909999</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>8000.00</td>
																							</tr>
																					<tr>
																									<td>TRP005982449</td>
																									<td>Jdsleek@gmail.com</td>
																									<td>08062735689</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Pacific Rim</td>
																									<td>2013-07-19</td>
																									<td>08:25 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006001779</td>
																									<td>otunbamodupe@gmail.com</td>
																									<td>07065927105</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Pacific Rim</td>
																									<td>2013-07-20</td>
																									<td>01:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP006027131</td>
																									<td>otunbamodupe@gmail.com</td>
																									<td>07065927105</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-07-20</td>
																									<td>04:05 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP006114776</td>
																									<td>bodefalase@gmail.com</td>
																									<td>08068384868</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Pacific Rim</td>
																									<td>2013-07-20</td>
																									<td>05:45 PM</td>
																									<td>2</td>
																									<td>1</td>
																									<td>1</td>
																									<td>5000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006181950</td>
																									<td>onosraye@yahoo.com</td>
																									<td>08169750064</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Pacific Rim 3D</td>
																									<td>2013-07-20</td>
																									<td>06:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP006306936</td>
																									<td>TONYEOSA@YAHOO.COM</td>
																									<td>08023039871</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-07-21</td>
																									<td>02:20 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4350.00</td>
																							</tr>
																					<tr>
																									<td>TRP006357525</td>
																									<td>labake.borode@gmail.com</td>
																									<td>08060993787</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-07-21</td>
																									<td>04:05 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP006427621</td>
																									<td>Arinola_Oloko@yahoo.co.uk</td>
																									<td>08177197684</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Fast and Furious 6</td>
																									<td>2013-07-21</td>
																									<td>08:50 PM</td>
																									<td>3</td>
																									<td>1</td>
																									<td>0</td>
																									<td>5500.00</td>
																							</tr>
																					<tr>
																									<td>TRP006451741</td>
																									<td>zouzousplace@gmail.com</td>
																									<td>23470341800</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006496134</td>
																									<td>Adekunle.a.kuku@gmail.com</td>
																									<td>07034160907</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-07-22</td>
																									<td>02:20 PM</td>
																									<td>1</td>
																									<td>2</td>
																									<td>0</td>
																									<td>2850.00</td>
																							</tr>
																					<tr>
																									<td>TRP006524419</td>
																									<td>ayodon100@yahoo.com</td>
																									<td>08057631457</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006537491</td>
																									<td>jiggamatix@gmail.com</td>
																									<td>07082485910</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Pacific Rim</td>
																									<td>2013-07-22</td>
																									<td>08:25 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006541640</td>
																									<td>ijeomandekwu@yahoo.co.uk</td>
																									<td>08180908128</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006601379</td>
																									<td>olufunlola@hotmail.com</td>
																									<td>08059107304</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-07-23</td>
																									<td>10:00 AM</td>
																									<td>1</td>
																									<td>3</td>
																									<td>0</td>
																									<td>1800.00</td>
																							</tr>
																					<tr>
																									<td>TRP006773973</td>
																									<td>Lamide89@yahoo.com</td>
																									<td>08022612079</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>6</td>
																									<td>0</td>
																									<td>0</td>
																									<td>12000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006825404</td>
																									<td>edidiong.ekwere@gmail.com</td>
																									<td>08025240205</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP006923118</td>
																									<td>femiotegbola@gmail.com</td>
																									<td>08023398994</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-07-24</td>
																									<td>02:20 PM</td>
																									<td>1</td>
																									<td>1</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP006937447</td>
																									<td>femiotegbola@gmail.com</td>
																									<td>08023398994</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-24</td>
																									<td>02:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP006991923</td>
																									<td>kutzeye@yahoo.com</td>
																									<td>07055382031</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007012397</td>
																									<td>vivian.enwelu@gmail.com</td>
																									<td>08033056446</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>1</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007184431</td>
																									<td>labake35@yahoo.com</td>
																									<td>08127894510</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007221447</td>
																									<td>bjfoyeh@yahoo.com</td>
																									<td>08023076165</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007238615</td>
																									<td>anncares2001@yahoo.com</td>
																									<td>08035888125</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-07-24</td>
																									<td>07:10 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP007261046</td>
																									<td>bode@vedatechnology.com</td>
																									<td>2348065447815</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007304780</td>
																									<td>afinowi1412@yahoo.com</td>
																									<td>08039589444</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>4</td>
																									<td>1</td>
																									<td>0</td>
																									<td>10000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007314654</td>
																									<td>lahnray@hotmail.com</td>
																									<td>08038222480</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007352357</td>
																									<td>omojay28@yahoo.com</td>
																									<td>08029476715</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007471259</td>
																									<td>uju_c@hotmail.com</td>
																									<td>08167998055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007521780</td>
																									<td>kunlealao@yahoo.com</td>
																									<td>08023531549</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>1</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007530535</td>
																									<td>bukiolukuewu@gmail.com</td>
																									<td>08098285416</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007542293</td>
																									<td>bizdev@tripican.com</td>
																									<td>08135290311</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007553697</td>
																									<td>amoo_abidemi@yahoo.com</td>
																									<td>08039760060</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007586838</td>
																									<td>akanfet@yahoo.com</td>
																									<td>08052178896</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007622403</td>
																									<td>mojeregrant@yahoo.com</td>
																									<td>08188699926</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007702803</td>
																									<td>tunegee@gmail.com</td>
																									<td>08176601900</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007725911</td>
																									<td>yaladegbami@hotmail.com</td>
																									<td>08134666234</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007732337</td>
																									<td>onyiao@gmail.com</td>
																									<td>08164691616</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007743467</td>
																									<td>synedexter@gmail.con</td>
																									<td>08027970687</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-25</td>
																									<td>07:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP007904159</td>
																									<td>osao@mtnnigria.net</td>
																									<td>08032004952</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008055660</td>
																									<td>gbengaadesoye@gmail.com</td>
																									<td>08038775857</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008069833</td>
																									<td>kunmi_adeleke@yahoo.aom</td>
																									<td>08076982391</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008132440</td>
																									<td>muhammed.ojeifo@gmail.com</td>
																									<td>08023370822</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008237731</td>
																									<td>tbasekyr@yahoo.com</td>
																									<td>08000000000</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Epic</td>
																									<td>2013-07-27</td>
																									<td>02:45 PM</td>
																									<td>1</td>
																									<td>2</td>
																									<td>0</td>
																									<td>3500.00</td>
																							</tr>
																					<tr>
																									<td>TRP008267636</td>
																									<td>pappy_babs@yahoo.com</td>
																									<td>08038028800</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-27</td>
																									<td>08:15 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008297137</td>
																									<td>Mayowa.ayodele@gmail.com</td>
																									<td>08083131048</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008333045</td>
																									<td>cindyjane32@yahoo.com</td>
																									<td>08063360095</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-07-27</td>
																									<td>04:30 PM</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008469291</td>
																									<td>ojix2@yahoo.com</td>
																									<td>08033224618</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-28</td>
																									<td>03:15 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008533134</td>
																									<td>olaomoi@hotmail.com</td>
																									<td>07037486698</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-28</td>
																									<td>03:15 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008601421</td>
																									<td>muhammed.ojeifo@gmail.com</td>
																									<td>08023370822</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Heat</td>
																									<td>2013-07-28</td>
																									<td>02:10 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008755604</td>
																									<td>gboxystone@yahoo.com</td>
																									<td>07085587471</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-28</td>
																									<td>05:45 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008909845</td>
																									<td>israelnwagbo@yahoo.com</td>
																									<td>07067195942</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Heat</td>
																									<td>2013-07-29</td>
																									<td>02:10 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1000.00</td>
																							</tr>
																					<tr>
																									<td>TRP008917404</td>
																									<td>Adewalea8@gmail.com</td>
																									<td>08162015063</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Heat</td>
																									<td>2013-07-29</td>
																									<td>02:10 PM</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1</td>
																									<td>500.00</td>
																							</tr>
																					<tr>
																									<td>TRP009095280</td>
																									<td>rush0technology@gmail.com</td>
																									<td>08079242179</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3900.00</td>
																							</tr>
																					<tr>
																									<td>TRP009248835</td>
																									<td>allmankind1801@gmail.com</td>
																									<td>08039325959</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Heat</td>
																									<td>2013-07-30</td>
																									<td>02:10 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP009325705</td>
																									<td>eknoreda@gmail.com</td>
																									<td>08033199820</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-30</td>
																									<td>05:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP009347440</td>
																									<td>fregene.gbubemi@gmail.com</td>
																									<td>08068012070</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-07-30</td>
																									<td>04:30 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP009433050</td>
																									<td>oluagbetuyi007@gmail.com</td>
																									<td>08076711599</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-31</td>
																									<td>05:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP009608581</td>
																									<td>magogobageorge@gmail.com</td>
																									<td>07036356656</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-08-01</td>
																									<td>05:05 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2850.00</td>
																							</tr>
																					<tr>
																									<td>TRP009730932</td>
																									<td>achikeluba@gmail.com</td>
																									<td>07037257030</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Man of Steel</td>
																									<td>2013-07-31</td>
																									<td>04:00 PM</td>
																									<td>1</td>
																									<td>3</td>
																									<td>0</td>
																									<td>2500.00</td>
																							</tr>
																					<tr>
																									<td>TRP009740577</td>
																									<td>achikeluba@gmail.com</td>
																									<td>07037257030</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Man of Steel</td>
																									<td>2013-07-31</td>
																									<td>04:00 PM</td>
																									<td>0</td>
																									<td>1</td>
																									<td>0</td>
																									<td>500.00</td>
																							</tr>
																					<tr>
																									<td>TRP009768461</td>
																									<td>ayotunde.ogunsakin@gmail.com</td>
																									<td>08035898883</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Heat</td>
																									<td>2013-07-31</td>
																									<td>07:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP009804231</td>
																									<td>ayodusote@yahoo.com</td>
																									<td>08130305012</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-07-31</td>
																									<td>05:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP009936360</td>
																									<td>oyakhilomen@gmail.com</td>
																									<td>08025943350</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-08-01</td>
																									<td>03:15 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP009990799</td>
																									<td>sandra.ilofuan@tetrapak.com</td>
																									<td>23417648693</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-08-01</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP010075315</td>
																									<td>ayomideadelola@gmail.com</td>
																									<td>07039291184</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>House of Gold</td>
																									<td>2013-08-02</td>
																									<td>01:40 PM</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1</td>
																									<td>1000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010138919</td>
																									<td>oyepelumialawoki@yahoo.com</td>
																									<td>08181662049</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>House of Gold</td>
																									<td>2013-08-02</td>
																									<td>01:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP010217610</td>
																									<td>larrycute44@yahoo.com</td>
																									<td>08105718045</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Parker</td>
																									<td>2013-08-02</td>
																									<td>05:25 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP010238668</td>
																									<td>otunbamodupe@gmail.com</td>
																									<td>07065927105</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010273742</td>
																									<td>otunbamodupe@gmail.com</td>
																									<td>07065927105</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>House of Gold</td>
																									<td>2013-08-03</td>
																									<td>01:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010358226</td>
																									<td>hampersfun@yahoo.com</td>
																									<td>08028373869</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-08-03</td>
																									<td>10:45 AM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010364809</td>
																									<td>Osgue75@yahoo.com</td>
																									<td>07043050022</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Despicable Me 2</td>
																									<td>2013-08-03</td>
																									<td>02:20 PM</td>
																									<td>1</td>
																									<td>4</td>
																									<td>0</td>
																									<td>5500.00</td>
																							</tr>
																					<tr>
																									<td>TRP010451263</td>
																									<td>kayode.temenu@gmail.com</td>
																									<td>08105434958</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-08-03</td>
																									<td>04:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010479352</td>
																									<td>tidan3@yahoo.com</td>
																									<td>08023362712</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-08-03</td>
																									<td>04:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010513017</td>
																									<td>kunlebello@gmail.com</td>
																									<td>08022228535</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-08-03</td>
																									<td>03:15 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010552844</td>
																									<td>telefresh@live.com</td>
																									<td>07080057080</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Parker</td>
																									<td>2013-08-03</td>
																									<td>04:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010586454</td>
																									<td>wadewusi@yahoo.com</td>
																									<td>08039301429</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Parker</td>
																									<td>2013-08-03</td>
																									<td>07:55 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>5800.00</td>
																							</tr>
																					<tr>
																									<td>TRP010654238</td>
																									<td>Inemce@yahoo.com</td>
																									<td>08099647403</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-08-04</td>
																									<td>03:15 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010703356</td>
																									<td>uchennae@gmail.com</td>
																									<td>07033199119</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-08-04</td>
																									<td>02:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP010728576</td>
																									<td>tobaniyi@gmail.com</td>
																									<td>08135705133</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Despicable Me 2</td>
																									<td>2013-08-04</td>
																									<td>02:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP010737673</td>
																									<td>oluwatobi.odiase@gmail.com</td>
																									<td>08094201028</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Parker</td>
																									<td>2013-08-04</td>
																									<td>04:20 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP010831996</td>
																									<td>kezyroan@gmail.com</td>
																									<td>07039639450</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Pacific Rim 3D</td>
																									<td>2013-08-04</td>
																									<td>09:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2450.00</td>
																							</tr>
																					<tr>
																									<td>TRP011033592</td>
																									<td>oyindabc@yahoo.com</td>
																									<td>08056207142</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>House of Gold</td>
																									<td>2013-08-06</td>
																									<td>06:30 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP011143277</td>
																									<td>deronke@gmail.com</td>
																									<td>08080991991</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Despicable Me 2</td>
																									<td>2013-08-07</td>
																									<td>02:20 PM</td>
																									<td>1</td>
																									<td>1</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP011178787</td>
																									<td>Bolaji427@yahoo.com</td>
																									<td>08184810058</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-08-07</td>
																									<td>06:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP011197386</td>
																									<td>bayoodunowo@yahoo.com</td>
																									<td>08023380530</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP011288849</td>
																									<td>maiwurnonodi1@yahoo.com</td>
																									<td>08033958088</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Parker</td>
																									<td>2013-08-08</td>
																									<td>07:55 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>950.00</td>
																							</tr>
																					<tr>
																									<td>TRP011296453</td>
																									<td>clemgreat@yahoo.com</td>
																									<td>08137782190</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-08-07</td>
																									<td>06:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP011326296</td>
																									<td>wale.oto@gmail.com</td>
																									<td>23480676352</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Parker</td>
																									<td>2013-08-07</td>
																									<td>07:55 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP011496016</td>
																									<td>Omeggison@hotmail.com</td>
																									<td>08068014410</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Despicable Me 2</td>
																									<td>2013-08-08</td>
																									<td>12:10 PM</td>
																									<td>1</td>
																									<td>2</td>
																									<td>0</td>
																									<td>3350.00</td>
																							</tr>
																					<tr>
																									<td>TRP011656352</td>
																									<td>aaadebiyi@gmail.com</td>
																									<td>08062793136</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>White House Down</td>
																									<td>2013-08-08</td>
																									<td>06:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP011752911</td>
																									<td>joladipo2002@yahoo.com</td>
																									<td>08023172468</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Temptation</td>
																									<td>2013-08-09</td>
																									<td>01:40 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4500.00</td>
																							</tr>
																					<tr>
																									<td>TRP011764592</td>
																									<td>pemimi2002@gmail.com</td>
																									<td>08189496221</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Parker</td>
																									<td>2013-08-10</td>
																									<td>11:50 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP011796693</td>
																									<td>Osgue75@yahoo.com</td>
																									<td>07043050022</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td></td>
																									<td></td>
																									<td></td>
																									<td>2</td>
																									<td>4</td>
																									<td>0</td>
																									<td>7000.00</td>
																							</tr>
																					<tr>
																									<td>TRP011804199</td>
																									<td>gbengaadesoye@gmail.com</td>
																									<td>08038775857</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>World War Z</td>
																									<td>2013-08-09</td>
																									<td>11:25 AM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP011949373</td>
																									<td>baslerchoice4u@yahoo.com</td>
																									<td>08030722719</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>House of Gold</td>
																									<td>2013-08-09</td>
																									<td>03:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP011967611</td>
																									<td>Paulbrisibe@gmail.com</td>
																									<td>07064169422</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-09</td>
																									<td>07:00 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>5800.00</td>
																							</tr>
																					<tr>
																									<td>TRP011995359</td>
																									<td>jide_fola@yahoo.com</td>
																									<td>08034007824</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>World War Z</td>
																									<td>2013-08-09</td>
																									<td>06:25 PM</td>
																									<td>4</td>
																									<td>0</td>
																									<td>0</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012033466</td>
																									<td>damilare.aiki@yahoo.com</td>
																									<td>07061989139</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine</td>
																									<td>2013-08-10</td>
																									<td>02:05 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012045085</td>
																									<td>julianojo@ymail.com</td>
																									<td>08137570244</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Wolverine</td>
																									<td>2013-08-10</td>
																									<td>02:05 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012072792</td>
																									<td>AJAYINEUMAN@GMAIL.COM</td>
																									<td>07035750692</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Pacific Rim</td>
																									<td>2013-08-10</td>
																									<td>03:50 PM</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2</td>
																									<td>1900.00</td>
																							</tr>
																					<tr>
																									<td>TRP012122925</td>
																									<td>Michael_mh123@hotmail.com</td>
																									<td>07065777666</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-09</td>
																									<td>09:30 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP012152305</td>
																									<td>kezyroan@gmail.com</td>
																									<td>07039639450</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-09</td>
																									<td>09:30 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP012162528</td>
																									<td>etafol.ng@gmail.com</td>
																									<td>08080502770</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Man of Steel</td>
																									<td>2013-08-10</td>
																									<td>01:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012172558</td>
																									<td>lamidegogo@gmail.com</td>
																									<td>08026669972</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-09</td>
																									<td>11:55 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP012240398</td>
																									<td>mathew@mathewadigolo.com</td>
																									<td>08027703563</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>World War Z</td>
																									<td>2013-08-10</td>
																									<td>11:25 AM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012309882</td>
																									<td>Adefioye@yahoo.com</td>
																									<td>08034708199</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Man of Steel</td>
																									<td>2013-08-10</td>
																									<td>01:40 PM</td>
																									<td>0</td>
																									<td>3</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012334726</td>
																									<td>onomevotu@yahoo.com</td>
																									<td>08060682882</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>World War Z</td>
																									<td>2013-08-10</td>
																									<td>06:25 PM</td>
																									<td>5</td>
																									<td>0</td>
																									<td>0</td>
																									<td>7500.00</td>
																							</tr>
																					<tr>
																									<td>TRP012348670</td>
																									<td>osawerep@gmail.com</td>
																									<td>08038478107</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Pacific Rim</td>
																									<td>2013-08-11</td>
																									<td>03:50 PM</td>
																									<td>3</td>
																									<td>3</td>
																									<td>0</td>
																									<td>7500.00</td>
																							</tr>
																					<tr>
																									<td>TRP012374694</td>
																									<td>muhammed.ojeifo@gmail.com</td>
																									<td>08023370822</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Cheaters</td>
																									<td>2013-08-10</td>
																									<td>04:20 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP012609726</td>
																									<td>olumidefowora@gmail.com</td>
																									<td>08023014385</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-08-11</td>
																									<td>03:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012702470</td>
																									<td>connexusventures@gmail.com</td>
																									<td>08106060000</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Cheaters</td>
																									<td>2013-08-12</td>
																									<td>04:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012711759</td>
																									<td>connexusventures@gmail.com</td>
																									<td>08106060000</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>World War Z</td>
																									<td>2013-08-12</td>
																									<td>06:25 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012935545</td>
																									<td>vivy1580@yahoo.com</td>
																									<td>08033470251</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>World War Z</td>
																									<td>2013-08-13</td>
																									<td>08:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP012996512</td>
																									<td>stellmate4ever@yahoo.com</td>
																									<td>08169765211</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-14</td>
																									<td>09:30 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1650.00</td>
																							</tr>
																					<tr>
																									<td>TRP013033005</td>
																									<td>sandra.ilofuan@tetrapak.com</td>
																									<td>23417648693</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-14</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP013055538</td>
																									<td>lildoniyke@yahoo.com</td>
																									<td>08035440508</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Parker</td>
																									<td>2013-08-14</td>
																									<td>09:25 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP013060627</td>
																									<td>ibkkonu@yahoo.com</td>
																									<td>08023465631</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-14</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP013083938</td>
																									<td>nalu.akpati@yahoo.com</td>
																									<td>08035249903</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-14</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP013232602</td>
																									<td>stowbena@gmail.com</td>
																									<td>08037463914</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Percy Jackson Sea of Monsters</td>
																									<td>2013-08-16</td>
																									<td>12:20 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP013243345</td>
																									<td>daniel.c.iyio@gmail.com</td>
																									<td>08122244769</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-16</td>
																									<td>07:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP013338795</td>
																									<td>m_adigolo@yahoo.com</td>
																									<td>08027703563</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Elysium</td>
																									<td>2013-08-16</td>
																									<td>07:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP013469533</td>
																									<td>Osgue75@yahoo.com</td>
																									<td>07043050022</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Epic</td>
																									<td>2013-08-17</td>
																									<td>04:25 PM</td>
																									<td>1</td>
																									<td>4</td>
																									<td>0</td>
																									<td>5500.00</td>
																							</tr>
																					<tr>
																									<td>TRP013545673</td>
																									<td>bimbo_sambo@yahoo.com</td>
																									<td>08023197131</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Elysium</td>
																									<td>2013-08-17</td>
																									<td>07:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP013589297</td>
																									<td>mailbiggerdee@yahoo.com</td>
																									<td>08027533900</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Elysium</td>
																									<td>2013-08-17</td>
																									<td>09:15 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP013716578</td>
																									<td>joe_minas@cobranet.org</td>
																									<td>08079292244</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-08-18</td>
																									<td>06:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP013746351</td>
																									<td>chrisohikhena@yahoo.com</td>
																									<td>07034118981</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-08-19</td>
																									<td>11:30 AM</td>
																									<td>1</td>
																									<td>3</td>
																									<td>0</td>
																									<td>2500.00</td>
																							</tr>
																					<tr>
																									<td>TRP014178184</td>
																									<td>pinktouch12@yahoo.com</td>
																									<td>08080941031</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Parker</td>
																									<td>2013-08-21</td>
																									<td>07:00 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1650.00</td>
																							</tr>
																					<tr>
																									<td>TRP014212903</td>
																									<td>SHYFISSY@YAHOO.COM</td>
																									<td>08034095457</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Percy Jackson Sea of Monsters</td>
																									<td>2013-08-21</td>
																									<td>09:30 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP014231765</td>
																									<td>SHYFISSY@YAHOO.COM</td>
																									<td>08034095457</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-08-21</td>
																									<td>06:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP014276930</td>
																									<td>onajeme@yahoo.com</td>
																									<td>08025536492</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-08-21</td>
																									<td>06:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP014284971</td>
																									<td>kunleojekunle@yahoo.com</td>
																									<td>08039200695</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Cheaters</td>
																									<td>2013-08-21</td>
																									<td>07:30 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP014293456</td>
																									<td>stellmate4ever@yahoo.com</td>
																									<td>08169765211</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-08-21</td>
																									<td>09:05 PM</td>
																									<td>5</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2750.00</td>
																							</tr>
																					<tr>
																									<td>TRP014308740</td>
																									<td>dosuleiman75@yahoo.com</td>
																									<td>23480707936</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Smurfs 2</td>
																									<td>2013-08-22</td>
																									<td>10:30 AM</td>
																									<td>3</td>
																									<td>4</td>
																									<td>2</td>
																									<td>6000.00</td>
																							</tr>
																					<tr>
																									<td>TRP014310177</td>
																									<td>liichadee@yahoo.com</td>
																									<td>08037364572</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP014387203</td>
																									<td>Osgue75@yahoo.com</td>
																									<td>07043050022</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td></td>
																									<td>2013-08-22</td>
																									<td>02:05 PM</td>
																									<td>1</td>
																									<td>1</td>
																									<td>0</td>
																									<td>4000.00</td>
																							</tr>
																					<tr>
																									<td>TRP014520207</td>
																									<td>lolavicky@yahoo.com</td>
																									<td>08034702545</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Smurfs 2</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>2</td>
																									<td>0</td>
																									<td>3500.00</td>
																							</tr>
																					<tr>
																									<td>TRP014575892</td>
																									<td>olufemi.bamidele@diageo.com</td>
																									<td>08023676978</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Once Upon A Time In Mumbai Dobara</td>
																									<td>2013-08-24</td>
																									<td>01:35 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP014594627</td>
																									<td>ikcn2k@yahoo.co.uk</td>
																									<td>08092927676</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Dead Man Down</td>
																									<td>2013-08-23</td>
																									<td>06:45 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP014761981</td>
																									<td>olusegunomisami@keystonebankng.com</td>
																									<td>08037496133</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-08-23</td>
																									<td>09:35 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP014781776</td>
																									<td>dml_enitan@yahoo.com</td>
																									<td>08032704838</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>White House Down</td>
																									<td>2013-08-24</td>
																									<td>04:30 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP014846823</td>
																									<td>fred4love20012000@yahoo.com</td>
																									<td>07033112414</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Once Upon A Time In Mumbai Dobara</td>
																									<td>2013-08-24</td>
																									<td>01:35 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2500.00</td>
																							</tr>
																					<tr>
																									<td>TRP014976637</td>
																									<td>aladekayode@gmail.com</td>
																									<td>08082801660</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>World War Z</td>
																									<td>2013-08-25</td>
																									<td>11:25 AM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP014996474</td>
																									<td>led4ja@yahoo.com</td>
																									<td>08034188440</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-08-25</td>
																									<td>04:55 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP015057181</td>
																									<td>debbie.edwards18@yahoo.com</td>
																									<td>08034495699</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>World War Z</td>
																									<td>2013-08-25</td>
																									<td>07:10 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP015107587</td>
																									<td>Titilovesu@yahoo.com</td>
																									<td>08090815695</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP015274851</td>
																									<td>abionaalli@gmail.com</td>
																									<td>08033530781</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Smurfs 2</td>
																									<td>2013-08-27</td>
																									<td>01:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1000.00</td>
																							</tr>
																					<tr>
																									<td>TRP015388915</td>
																									<td>stellmate4ever@yahoo.com</td>
																									<td>08169765211</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Officer Down</td>
																									<td>2013-08-28</td>
																									<td>07:25 PM</td>
																									<td>5</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2750.00</td>
																							</tr>
																					<tr>
																									<td>TRP015424924</td>
																									<td>defoneal@yahoo.co.uk</td>
																									<td>08034414797</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-08-28</td>
																									<td>07:15 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1650.00</td>
																							</tr>
																					<tr>
																									<td>TRP015469051</td>
																									<td>cnwakwesi@yahoo.com</td>
																									<td>07030184234</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP015488261</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>The Wolverine 3D</td>
																									<td>2013-08-28</td>
																									<td>06:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4900.00</td>
																							</tr>
																					<tr>
																									<td>TRP015604857</td>
																									<td>jimieke@yahoo.com</td>
																									<td>08023207003</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Smurfs 2</td>
																									<td></td>
																									<td></td>
																									<td>1</td>
																									<td>4</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP015665464</td>
																									<td>josephmojume@yahoo.com</td>
																									<td>08055600519</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Elysium</td>
																									<td>2013-08-29</td>
																									<td>07:05 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2000.00</td>
																							</tr>
																					<tr>
																									<td>TRP015688190</td>
																									<td>uchennaakonobi@yahoo.com</td>
																									<td>07030184234</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP015737529</td>
																									<td>skullz212@yahoo.com</td>
																									<td>08082577222</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>4350.00</td>
																							</tr>
																					<tr>
																									<td>TRP015744343</td>
																									<td>naya.amobi@gmail.com</td>
																									<td>08064484580</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP015800765</td>
																									<td>phoebeisah@yahoo.com</td>
																									<td>07035008562</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP015857189</td>
																									<td>Paulbrisibe@gmail.com</td>
																									<td>07064169422</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>2 Guns</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP015883190</td>
																									<td>iuc121275@yahoo.com</td>
																									<td>08098498638</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Murder At Prime Suite</td>
																									<td>2013-08-30</td>
																									<td>07:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP015922203</td>
																									<td>wendypalm77@yahoo.com</td>
																									<td>08066630497</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>2 Guns</td>
																									<td>2013-08-30</td>
																									<td>06:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP015945323</td>
																									<td>nielbellus@yahoo.com</td>
																									<td>08039357055</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>2 Guns</td>
																									<td>2013-08-30</td>
																									<td>04:40 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>2900.00</td>
																							</tr>
																					<tr>
																									<td>TRP015993752</td>
																									<td>ikcn2k@yahoo.co.uk</td>
																									<td>08092927676</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>2 Guns</td>
																									<td>2013-08-30</td>
																									<td>08:35 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP016167094</td>
																									<td>muhammed.ojeifo@gmail.com</td>
																									<td>08023370822</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>2 Guns</td>
																									<td>2013-08-31</td>
																									<td>01:45 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1500.00</td>
																							</tr>
																					<tr>
																									<td>TRP016173173</td>
																									<td>chiketony@yahoo.com</td>
																									<td>08036302163</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>2 Guns</td>
																									<td>2013-08-31</td>
																									<td>02:05 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP016276120</td>
																									<td>Osao@mtnnigeria.net</td>
																									<td>08032004952</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>2 Guns</td>
																									<td>2013-08-31</td>
																									<td>06:20 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP016582282</td>
																									<td>Zoomejoorimo@yahoo.com</td>
																									<td>08063392567</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>2 Guns</td>
																									<td>2013-09-03</td>
																									<td>12:25 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1450.00</td>
																							</tr>
																					<tr>
																									<td>TRP016625049</td>
																									<td>solasalako555@yahoo.com</td>
																									<td>08033014107</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Red Hot</td>
																									<td>2013-09-03</td>
																									<td>07:05 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP016680180</td>
																									<td>adevokhai@yahoo.com</td>
																									<td>08023430827</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>Epic</td>
																									<td>2013-09-04</td>
																									<td>10:30 AM</td>
																									<td>0</td>
																									<td>5</td>
																									<td>0</td>
																									<td>2500.00</td>
																							</tr>
																					<tr>
																									<td>TRP016707271</td>
																									<td>mikkydon1@yahoo.com</td>
																									<td>07064171882</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>Elysium</td>
																									<td>2013-09-04</td>
																									<td>02:40 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP016777808</td>
																									<td>sandra.ilofuan@tetrapak.com</td>
																									<td>23417648693</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>2 Guns</td>
																									<td>2013-09-04</td>
																									<td>07:00 PM</td>
																									<td>1</td>
																									<td>0</td>
																									<td>0</td>
																									<td>550.00</td>
																							</tr>
																					<tr>
																									<td>TRP016795128</td>
																									<td>ehis26@yahoo.com</td>
																									<td>08186965059</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>2 Guns</td>
																									<td>2013-09-05</td>
																									<td>06:20 PM</td>
																									<td>3</td>
																									<td>0</td>
																									<td>0</td>
																									<td>3000.00</td>
																							</tr>
																					<tr>
																									<td>TRP016811646</td>
																									<td>amoo_abidemi@yahoo.com</td>
																									<td>08039760060</td>
																									<td>Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki</td>
																									<td>2 Guns</td>
																									<td>2013-09-04</td>
																									<td>07:00 PM</td>
																									<td>2</td>
																									<td>0</td>
																									<td>0</td>
																									<td>1100.00</td>
																							</tr>
																					<tr>
																									<td>TRP016833405</td>
																									<td>deajobee1@yahoo.co.uk</td>
																									<td>08151888880</td>
																									<td>Silverbird Cinemas, Ikeja</td>
																									<td>The Smurfs 2</td>
																									<td>2013-09-05</td>
																									<td>12:25 PM</td>
																									<td>1</td>
																									<td>2</td>
																									<td>0</td>
																									<td>2000.00</td>
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