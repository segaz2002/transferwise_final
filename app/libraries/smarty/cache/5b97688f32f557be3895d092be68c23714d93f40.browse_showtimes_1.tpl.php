<?php /*%%SmartyHeaderCode:91760501051e898425abed9-76821299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b97688f32f557be3895d092be68c23714d93f40' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/browse_showtimes_1.tpl',
      1 => 1374196795,
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
  'nocache_hash' => '91760501051e898425abed9-76821299',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51e8984276caa6_90683863',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8984276caa6_90683863')) {function content_51e8984276caa6_90683863($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title>Showtimes</title>
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
        <li class="active">
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
            <h1>Showtimes</h1>
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
							July 19, 2013
							<!-- February 22, 2013 -->
						</span>
                        <span>
							Friday, 02:37 AM
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
            <div class="box">
                <div class="box-title">
                    <h3>
                        <i class="icon-table"></i>
                        Browse Showtimes
                    </h3>
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
                                                            <tr>

                                    <td>1963</td>
                                    <td>Temptation</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>01:10 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:36:08</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1963" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1963" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1963" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Temptation</h3>
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
                                                        <div id="loader_elem1963" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1963" id="showTimerForm1963">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1963" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1963" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="01:10 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1963">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1963" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1963" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Temptation @ Silverbird Cinemas, Ikeja(Lagos) for 01:10 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1963">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1962</td>
                                    <td>Man of Steel 2D</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>08:25 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:34:36</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1962" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1962" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1962" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Man of Steel 2D</h3>
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
                                                        <div id="loader_elem1962" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1962" id="showTimerForm1962">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1962" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1962" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="08:25 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1962">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1962" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1962" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Man of Steel 2D @ Silverbird Cinemas, Ikeja(Lagos) for 08:25 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1962">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1961</td>
                                    <td>Man of Steel 2D</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>05:45 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:32:41</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1961" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1961" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1961" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Man of Steel 2D</h3>
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
                                                        <div id="loader_elem1961" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1961" id="showTimerForm1961">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1961" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1961" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="05:45 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1961">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1961" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1961" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Man of Steel 2D @ Silverbird Cinemas, Ikeja(Lagos) for 05:45 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1961">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1960</td>
                                    <td>Facade</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>03:30 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:31:56</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1960" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1960" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1960" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Facade</h3>
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
                                                        <div id="loader_elem1960" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1960" id="showTimerForm1960">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1960" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1960" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="03:30 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1960">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1960" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1960" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Facade @ Silverbird Cinemas, Ikeja(Lagos) for 03:30 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1960">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1959</td>
                                    <td>Facade</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>11:00 AM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:30:29</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1959" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1959" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1959" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Facade</h3>
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
                                                        <div id="loader_elem1959" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1959" id="showTimerForm1959">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1959" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1959" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="11:00 AM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1959">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1959" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1959" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Facade @ Silverbird Cinemas, Ikeja(Lagos) for 11:00 AM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1959">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1958</td>
                                    <td>This Is 40</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>04:15 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:29:56</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1958" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1958" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1958" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">This Is 40</h3>
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
                                                        <div id="loader_elem1958" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1958" id="showTimerForm1958">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1958" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1958" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="04:15 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1958">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1958" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1958" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for This Is 40 @ Silverbird Cinemas, Ikeja(Lagos) for 04:15 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1958">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1957</td>
                                    <td>After Earth</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>02:15 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:24:40</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1957" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1957" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1957" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">After Earth</h3>
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
                                                        <div id="loader_elem1957" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1957" id="showTimerForm1957">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1957" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1957" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="02:15 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1957">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1957" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1957" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for After Earth @ Silverbird Cinemas, Ikeja(Lagos) for 02:15 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1957">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1956</td>
                                    <td>LUV</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>12:25 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:23:47</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1956" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1956" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1956" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">LUV</h3>
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
                                                        <div id="loader_elem1956" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1956" id="showTimerForm1956">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1956" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1956" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="12:25 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1956">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1956" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1956" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for LUV @ Silverbird Cinemas, Ikeja(Lagos) for 12:25 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1956">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1955</td>
                                    <td>Admission</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>08:55 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:22:32</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1955" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1955" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1955" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Admission</h3>
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
                                                        <div id="loader_elem1955" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1955" id="showTimerForm1955">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1955" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1955" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="08:55 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1955">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1955" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1955" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Admission @ Silverbird Cinemas, Ikeja(Lagos) for 08:55 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1955">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>1954</td>
                                    <td>Admission</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-07-17</td>
                                    <td>06:45 PM</td>
                                    <td>20</td>
                                    <td>1000.00</td>
                                    <td></td>
                                    <td>2013-07-16 14:20:16</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-1954" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-1954" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-1954" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Admission</h3>
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
                                                        <div id="loader_elem1954" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="1954" id="showTimerForm1954">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema1954" class='chosen-select'>
                                                                            <option value="22" selected>Silverbird Cinemas, Ikeja (Lagos)</option>
                                                                                                                                                                                                                                                {
                                                                                    <option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="11">Ozone (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                    <option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
                                                                                    }
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="27">Silverbird Cinemas, Accra (Accra)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_1954" class="input-medium datepick" value="2013-07-17">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="06:45 PM">
                                                                        <!-- <span class="help-block">As dropdown</span>-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="numberfield" class="control-label">Available Ticket</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Only numbers" name="show_tickets" value="20" id="numberfield" class="span3" data-rule-number="true" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Adult Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="1954">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="500.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Show information</label>
                                                                <div class="controls">
                                                                    <textarea name="show_info" id="tt333" class="span6 ui-wizard-content valid" rows="2" ></textarea>
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
                                        <div id="modal-confirm-1954" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem1954" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Admission @ Silverbird Cinemas, Ikeja(Lagos) for 06:45 PM on 2013-07-17</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="1954">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                        <tr>
                               
                                <td colspan="10">
                                    <div class="pagination pagination-medium">
                                        <div class="pagination">
                                            <ul>
                                                                                                      <li>&nbsp;<strong>1</strong>&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/browseshows/10">2</a>&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/browseshows/20">3</a>&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/browseshows/10">&gt;</a>&nbsp;&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/browseshows/1400">Last &rsaquo;</a></li>
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