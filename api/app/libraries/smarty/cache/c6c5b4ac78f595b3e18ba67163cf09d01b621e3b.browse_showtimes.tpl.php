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
    'd2377831ac22512fad2e494a732dd1afddc8e889' => 
    array (
      0 => 'velo-admin/views/templates/resource/resources.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    'bb11ff36713430894ed7719cfa5fd1c947dea045' => 
    array (
      0 => 'velo-admin/views/templates/resource/navigator.tpl',
      1 => 1387869026,
      2 => 'file',
    ),
    'dabefd1256e2e94aa91b300ef84e8d2ced967584' => 
    array (
      0 => 'velo-admin/views/templates/resource/sidebar.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    '479f7b60f300e0cf6c83e7c3d59d1b45f9b1036c' => 
    array (
      0 => 'velo-admin/views/templates/resource/content_header.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178137972652baa982dfbea7-27057518',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52baa98310be70_20058068',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baa98310be70_20058068')) {function content_52baa98310be70_20058068($_smarty_tpl) {?><!doctype html>
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
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/bootstrap.min.css">
<!-- Bootstrap responsive -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/bootstrap-responsive.min.css">
<!-- Font awesome Icons -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/font-awesome.min.css">
<!-- jQuery UI -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
<!-- Easy pie  -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/easy-pie-chart/jquery.easy-pie-chart.css">
<!-- chosen -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/chosen/chosen.css">

<!-- Datatables -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/datatable/TableTools.css">


<!-- multi select -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/multiselect/multi-select.css">
<!-- timepicker -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/timepicker/bootstrap-timepicker.min.css">
<!-- colorpicker -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/colorpicker/colorpicker.css">
<!-- Datepicker -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/datepicker/datepicker.css">
<!-- Plupload -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/plupload/jquery.plupload.queue.css">
<!-- select2 -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/select2/select2.css">
<!-- icheck -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/plugins/icheck/all.css">
<!-- Theme CSS -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/style.css">
<!-- Color CSS -->
<link rel="stylesheet" href="http://localhost/beta.gateway/assets/css/themes.css">

<script>
    var SITE_BASE_URL = "http://localhost/beta.gateway/";
</script>
<!-- jQuery -->
<script src="http://localhost/beta.gateway/assets/js/jquery.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/jswrapper.js"></script>
<!-- Nice Scroll -->
<script src="http://localhost/beta.gateway/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<!-- imagesLoaded -->
<script src="http://localhost/beta.gateway/assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
<!-- jQuery UI -->
<script src="http://localhost/beta.gateway/assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/jquery-ui/jquery.ui.slider.js"></script>
<!-- slimScroll -->
<script src="http://localhost/beta.gateway/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Bootstrap -->
<script src="http://localhost/beta.gateway/assets/js/bootstrap.min.js"></script>
<!-- Chosen -->
<script src="http://localhost/beta.gateway/assets/js/plugins/chosen/chosen.jquery.min.js"></script>
<!-- Bootbox -->
<script src="http://localhost/beta.gateway/assets/js/plugins/bootbox/jquery.bootbox.js"></script>
<!-- Bootbox -->
<script src="http://localhost/beta.gateway/assets/js/plugins/form/jquery.form.min.js"></script>

<!-- Masked inputs -->
<script src="http://localhost/beta.gateway/assets/js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
<!-- TagsInput -->
<script src="http://localhost/beta.gateway/assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<!-- Datepicker -->
<script src="http://localhost/beta.gateway/assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Timepicker -->
<script src="http://localhost/beta.gateway/assets/js/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Colorpicker -->
<script src="http://localhost/beta.gateway/assets/js/plugins/colorpicker/bootstrap-colorpicker.js"></script>
<!-- Chosen -->
<script src="http://localhost/beta.gateway/assets/js/plugins/chosen/chosen.jquery.min.js"></script>
<!-- MultiSelect -->
<script src="http://localhost/beta.gateway/assets/js/plugins/multiselect/jquery.multi-select.js"></script>
<!-- CKEditor -->
<script src="http://localhost/beta.gateway/assets/js/plugins/ckeditor/ckeditor.js"></script>
<!-- PLUpload -->
<script src="http://localhost/beta.gateway/assets/js/plugins/plupload/plupload.full.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/plupload/jquery.plupload.queue.js"></script>
<!-- Custom file upload -->
<script src="http://localhost/beta.gateway/assets/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/mockjax/jquery.mockjax.js"></script>
<!-- select2 -->
<script src="http://localhost/beta.gateway/assets/js/plugins/select2/select2.min.js"></script>

<script src="http://localhost/beta.gateway/assets/js/plugins/icheck/jquery.icheck.min.js"></script>

<!-- Validation -->
<script src="http://localhost/beta.gateway/assets/js/plugins/validation/jquery.validate.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/validation/additional-methods.min.js"></script>

<!-- Form -->
<script src="http://localhost/beta.gateway/assets/js/plugins/form/jquery.form.min.js"></script>

<!-- Wizard -->
<script src="http://localhost/beta.gateway/assets/js/plugins/wizard/jquery.form.wizard.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/mockjax/jquery.mockjax.js"></script>

<!-- dataTables -->
<script src="http://localhost/beta.gateway/assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/datatable/TableTools.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/datatable/ColReorder.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/datatable/ColVis.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/datatable/FixedColumns.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/datatable/dataTables.scroller.min.js"></script>

<!-- Sparkline -->
<script src="http://localhost/beta.gateway/assets/js/plugins/sparklines/jquery.sparklines.min.js"></script>
<!-- Easy pie -->
<script src="http://localhost/beta.gateway/assets/js/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<!-- Flot -->
<script src="http://localhost/beta.gateway/assets/js/plugins/flot/jquery.flot.min.js"></script>
<script src="http://localhost/beta.gateway/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>

<!-- Theme framework -->
<!-- <script src="http://localhost/beta.gateway/assets/js/eakroko.min.js"></script> -->
<script src="http://localhost/beta.gateway/assets/js/eakroko.js"></script>
<!-- Theme scripts -->
<script src="http://localhost/beta.gateway/assets/js/application.min.js"></script>
<!-- Just for demonstration -->
<script src="http://localhost/beta.gateway/assets/js/demonstration.min.js"></script>
<!-- Favicon -->
<link rel="shortcut icon" href="http://localhost/beta.gateway/assets/img/favicon.ico" />
<!-- Apple devices Homescreen icon -->
<link rel="apple-touch-icon-precomposed" href="http://localhost/beta.gateway/assets/img/apple-touch-icon-precomposed.png" />

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
    <a href="#" id="brand">GatewayLotto.net</a>
    <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
    <ul class='main-nav'>
        <li >
            <a href="http://localhost/beta.gateway/dashboard">
                <i class="icon-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="active">
            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                <i class="icon-edit"></i>
                <span>Members</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="http://localhost/beta.gateway/members">Manual Activation</a>
                </li>
                <li>
                    <a href="http://localhost/beta.gateway/movies">Members List</a>
                </li>

                <li class='dropdown-submenu'>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Show Time</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://localhost/beta.gateway/showtimes">Add</a>
                        </li>
                        <li>
                            <a href="http://localhost/beta.gateway/showtimes/browse">View</a>
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
                    <a href="http://localhost/beta.gateway/orders">Movies</a>
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
            <a href="#" class='dropdown-toggle' data-toggle="dropdown"> Saka <img src="http://localhost/beta.gateway/assets/img/demo/user-avatar.jpg" alt=""></a>
            <ul class="dropdown-menu pull-right">

                <li>
                    <a href="http://localhost/beta.gateway/sysSettings">Change Password</a>
                </li>
                <li>
                    <a href="http://localhost/beta.gateway/login/logoff">Sign out</a>
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
                    <a href="http://localhost/beta.gateway/settings/genres">Movie Genres</a>
                </li>
                <li>
                    <a href="http://localhost/beta.gateway/settings/cinemas">Cinemas</a>
                </li>
                <li>
                    <a href="http://localhost/beta.gateway/settings/locations">Locations</a>
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
                    <a href="http://localhost/beta.gateway/sysSettings">Change Password</a>
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
                    <a href="http://localhost/beta.gateway/transaction">Browse/Export</a>
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
							December 25, 2013
							<!-- February 22, 2013 -->
						</span>
                        <span>
							Wednesday, 10:46 AM
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

                                <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: page_description</p>
<p>Filename: compiled/c6c5b4ac78f595b3e18ba67163cf09d01b621e3b.file.browse_showtimes.tpl.cache.php</p>
<p>Line Number: 84</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: compiled/c6c5b4ac78f595b3e18ba67163cf09d01b621e3b.file.browse_showtimes.tpl.cache.php</p>
<p>Line Number: 84</p>

</div>
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
                        
                        <input type="text" class="input-xxlarge search-query" value="" name="term">

                        <button type="submit" class="btn btn-large btn-primary no-radius">Search</button>
                        <label class="radio">
                            <input type="radio" name="filter" id="optionsRadios1" value="title" checked> Title
                        </label>
                        <label class="radio">
                            <input type="radio" name="filter" id="optionsRadios1" value="show_date"> Show Day
                        </label>


                        <a href="http://localhost/beta.gateway/showtimes/resetFilters" class="pull-right btn btn-medium">Reset Filter</a>
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
                                                            <tr>

                                    <td>4981</td>
                                    <td>Pacific Rim</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>04:40 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:51:18</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4981" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4981" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4981" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Pacific Rim</h3>
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
                                                        <div id="loader_elem4981" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4981" id="showTimerForm4981">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4981" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4981" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="04:40 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4981">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4981" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4981" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Pacific Rim @ Silverbird Cinemas, Ikeja(Lagos) for 04:40 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4981">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4980</td>
                                    <td>The Smurfs 2</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>02:40 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:50:39</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4980" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4980" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4980" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">The Smurfs 2</h3>
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
                                                        <div id="loader_elem4980" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4980" id="showTimerForm4980">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4980" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4980" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="02:40 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4980">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4980" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4980" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for The Smurfs 2 @ Silverbird Cinemas, Ikeja(Lagos) for 02:40 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4980">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4979</td>
                                    <td>The Smurfs 2</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>12:40 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:50:09</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4979" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4979" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4979" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">The Smurfs 2</h3>
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
                                                        <div id="loader_elem4979" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4979" id="showTimerForm4979">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4979" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4979" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="12:40 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4979">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4979" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4979" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for The Smurfs 2 @ Silverbird Cinemas, Ikeja(Lagos) for 12:40 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4979">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4978</td>
                                    <td>The Smurfs 2</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>10:45 AM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:49:19</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4978" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4978" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4978" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">The Smurfs 2</h3>
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
                                                        <div id="loader_elem4978" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4978" id="showTimerForm4978">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4978" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4978" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="10:45 AM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4978">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4978" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4978" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for The Smurfs 2 @ Silverbird Cinemas, Ikeja(Lagos) for 10:45 AM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4978">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4977</td>
                                    <td>Elysium</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>07:10 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:48:21</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4977" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4977" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4977" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Elysium</h3>
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
                                                        <div id="loader_elem4977" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4977" id="showTimerForm4977">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4977" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4977" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="07:10 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4977">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4977" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4977" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Elysium @ Silverbird Cinemas, Ikeja(Lagos) for 07:10 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4977">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4976</td>
                                    <td>Elysium</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>03:55 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:46:16</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4976" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4976" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4976" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Elysium</h3>
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
                                                        <div id="loader_elem4976" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4976" id="showTimerForm4976">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4976" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4976" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="03:55 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4976">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4976" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4976" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for Elysium @ Silverbird Cinemas, Ikeja(Lagos) for 03:55 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4976">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4975</td>
                                    <td>2 Guns</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>08:35 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:40:08</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4975" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4975" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4975" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">2 Guns</h3>
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
                                                        <div id="loader_elem4975" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4975" id="showTimerForm4975">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4975" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4975" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="08:35 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4975">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4975" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4975" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for 2 Guns @ Silverbird Cinemas, Ikeja(Lagos) for 08:35 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4975">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4974</td>
                                    <td>2 Guns</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>06:15 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:39:10</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4974" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4974" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4974" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">2 Guns</h3>
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
                                                        <div id="loader_elem4974" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4974" id="showTimerForm4974">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4974" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4974" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="06:15 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4974">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4974" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4974" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for 2 Guns @ Silverbird Cinemas, Ikeja(Lagos) for 06:15 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4974">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4973</td>
                                    <td>2 Guns</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>01:45 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:38:31</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4973" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4973" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4973" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">2 Guns</h3>
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
                                                        <div id="loader_elem4973" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4973" id="showTimerForm4973">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4973" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4973" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="01:45 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4973">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4973" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4973" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for 2 Guns @ Silverbird Cinemas, Ikeja(Lagos) for 01:45 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4973">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                            <tr>

                                    <td>4972</td>
                                    <td>The Wolverine</td>
                                    <td>Silverbird Cinemas, Ikeja</td>
                                    <td>Lagos</td>
                                    <td>2013-09-06</td>
                                    <td>08:45 PM</td>
                                    <td>20</td>
                                    <td>1500.00</td>
                                    <td></td>
                                    <td>2013-09-05 20:37:38</td>

                                    <td>
                                        <!-- Action Handles -->
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-4972" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-confirm-4972" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- Modal Content for Edit action -->
                                        <div id="modal-4972" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">The Wolverine</h3>
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
                                                        <div id="loader_elem4972" class="span12"></div>
                                                        <form action="" method="POST" class='form-horizontal form-validate updateShowtime' show="4972" id="showTimerForm4972">
                                                            <div class="control-group">
                                                                <label for="cinema_id" class="control-label">Cinema</label>
                                                                <div class="controls">

                                                                    <div class="input-xlarge">

                                                                        <select name="show_cinema" id="select_cinema4972" class='chosen-select'>
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
                                                                                                                                                                                                                                                                                                                                {
                                                                                    <option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
                                                                                    }
                                                                                                                                                                                                                                    </select></div>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="textfield" class="control-label">Show Date</label>
                                                                <div class="controls">
                                                                    <input type="text" name="show_date" id="show_date_4972" class="input-medium datepick" value="2013-09-06">
                                                                    <!-- <span class="help-block">As dropdown</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label for="timepicker" class="control-label">Show time</label>
                                                                <div class="controls">
                                                                    <div class="bootstrap-timepicker">
                                                                        <input type="text" name="show_time" id="timepicker" class="input-small timepick" value="08:45 PM">
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
                                                                    <input type="text" placeholder="0" name="adult_show_price" value="1500.00" id="digitsfield" data-rule-required="true">
                                                                    <input type="hidden" name="show_id" value="4972">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Kid Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="kids_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label for="digitsfield" class="control-label">Student Ticket Price</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="0" name="students_show_price" value="1000.00" id="digitsfield" data-rule-required="true">
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
                                        <div id="modal-confirm-4972" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
                                            </div>
                                            <div id="del_loader_elem4972" class="span12"></div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this showtime record for The Wolverine @ Silverbird Cinemas, Ikeja(Lagos) for 08:45 PM on 2013-09-06</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                                                <button class="btn btn-danger delete-show" show="4972">Yes</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                        <tr>
                               
                                <td colspan="10">
                                    <div class="pagination pagination-medium">
                                        <div class="pagination">
                                            <ul>
                                                                                                      <li>&nbsp;<strong>1</strong>&nbsp;<a href="http://localhost/beta.gateway/showtimes/browse/10">2</a>&nbsp;<a href="http://localhost/beta.gateway/showtimes/browse/20">3</a>&nbsp;<a href="http://localhost/beta.gateway/showtimes/browse/10">&gt;</a>&nbsp;&nbsp;<a href="http://localhost/beta.gateway/showtimes/browse/4240">Last &rsaquo;</a></li>
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