<?php /*%%SmartyHeaderCode:3260825452b92b93e98105-76011039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd96b6e1a651a00119e3827cffdde86716f9176a9' => 
    array (
      0 => 'velo-admin/views/templates/pages/browse_movies.tpl',
      1 => 1374007972,
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
      1 => 1387867013,
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
  'nocache_hash' => '3260825452b92b93e98105-76011039',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52b92b9431b851_20695301',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b92b9431b851_20695301')) {function content_52b92b9431b851_20695301($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title>Movies</title>
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
                    <a href="http://localhost/beta.gateway/movies/upload">Manual Activation</a>
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
            <h1>Movies</h1>
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
							December 24, 2013
							<!-- February 22, 2013 -->
						</span>
                        <span>
							Tuesday, 07:37 AM
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
<p>Filename: compiled/d96b6e1a651a00119e3827cffdde86716f9176a9.file.browse_movies.tpl.cache.php</p>
<p>Line Number: 84</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: compiled/d96b6e1a651a00119e3827cffdde86716f9176a9.file.browse_movies.tpl.cache.php</p>
<p>Line Number: 84</p>

</div>
                            </h3>
                        </div> -->
                        <div class="box-content">
                            <!-- Content -->
                            

<div class="row-fluid">

				<div class="span12">
			<div class="alert alert-danger">
									
									
							</div>
		</div>
		
</div>
<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Browse Movies
								</h3>
							</div>
<div class="box-content nopadding">
	<table class="table table-hover table-nomargin table-striped dataTable dataTable-colvis">
		 <thead>

			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Genre</th>
				<th>Length</th>
				<th>IMDB rating</th>
				<!-- <th>Synopsis</th> -->
				<!-- <th>Trailer URL</th> -->
				<!-- <th>Big Image</th> -->
				<th>Small Image</th>
				<th>Featured</th>
				<th>Active</th>
				<th>Commit</th>
				<th>Created</th>

			</tr>
			</thead>
			<tbody>
							<tr>

				   <td>22</td>
				   <td><a href="http://www.youtube.com/embed/h7AFnJbETLw" target="_blank">The Great Gatsby</a></td>
				   <td>Drama</td>
				   <td>143</td>
				   <td>7</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/h7AFnJbETLw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/h7AFnJbETLw" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheGreatGatsby_small_1367265916.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-22" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-22" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-22" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem22" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Great Gatsby <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="22">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-22" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Great Gatsby</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem22" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/22" method="post" id="movieForm22" movie="22" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Great Gatsby" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="143" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>7</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/h7AFnJbETLw" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheGreatGatsby_big_1367265916.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheGreatGatsby_small_1367265916.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A Midwestern war veteran finds himself drawn to the past and lifestyle of his millionaire neighbor.</p><p>FRI-SAT: 6:40pm; 11:45pm</p><p>SUN-THUR: 6:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-16 14:27:24</td>
</tr>
				<tr>

				   <td>26</td>
				   <td><a href="http://www.youtube.com/embed/KLAkxSjs8ZY" target="_blank">The Hangover 3</a></td>
				   <td>Drama</td>
				   <td>140</td>
				   <td>3</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/KLAkxSjs8ZY">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/KLAkxSjs8ZY" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheHangover3_small_1367301820.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-26" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-26" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-26" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem26" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Hangover 3 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="26">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-26" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Hangover 3</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem26" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/26" method="post" id="movieForm26" movie="26" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Hangover 3" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="140" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>3</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/KLAkxSjs8ZY" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheHangover3_big_1367301820.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheHangover3_small_1367301820.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>This time, there's no wedding. No bachelor party. What could go wrong, right? But when the Wolfpack hits the road, all bets are off.</p><p>FRI-THUR: 12:05pm; 2:15pm; 9:35pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-05 06:30:54</td>
</tr>
				<tr>

				   <td>32</td>
				   <td><a href="http://www.youtube.com/embed/sa0wXcQJ7Ms" target="_blank">Home Again</a></td>
				   <td>Drama</td>
				   <td>104</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/sa0wXcQJ7Ms">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/sa0wXcQJ7Ms" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/HomeAgain_small_1368620552.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-32" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-32" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-32" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem32" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Home Again <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="32">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-32" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Home Again</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem32" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/32" method="post" id="movieForm32" movie="32" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Home Again" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="104" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/sa0wXcQJ7Ms" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/HomeAgain_big_1368620552.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/HomeAgain_small_1368620552.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Home Again tells the story of three young people deported ‘home’ to Jamaica after being raised abroad since infancy. Once landed in Kingston and without a compass of any kind, each of the characters embarks on a journey that pushes their endurance beyond measure and forces them to discover who they truly are. On the most fundamental level, Home Again asks the question, “How would you survive?”</p><p>FRI-THUR: 7:10pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-06 22:46:37</td>
</tr>
				<tr>

				   <td>45</td>
				   <td><a href="http://www.youtube.com/embed/SDfTwu2CgDY" target="_blank">Temptation</a></td>
				   <td>Drama</td>
				   <td>111</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/SDfTwu2CgDY">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/SDfTwu2CgDY" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Temptation_small_1369750063.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-45" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-45" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-45" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem45" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Temptation <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="45">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-45" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Temptation</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem45" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/45" method="post" id="movieForm45" movie="45" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Temptation" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="111" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/SDfTwu2CgDY" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Temptation_big_1369750063.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Temptation_small_1369750063.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>An ambitious married woman's temptation by a handsome billionaire leads to betrayal, recklessness, and forever alters the course of her life.</p><p>Director: Tyler Perry</p><p>Stars: Jurnee Smollett-Bell, Kim Kardashian, Vanessa Williams</p><p>SILVERBIRD CINEMAS</p><p>THUR: 6:40pm</p><p>FRI-SAT: 1:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-12 17:33:18</td>
</tr>
				<tr>

				   <td>47</td>
				   <td><a href="http://www.youtube.com/embed/fp9XGldx54w" target="_blank">Turning Point</a></td>
				   <td>Drama</td>
				   <td>124</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/fp9XGldx54w">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/fp9XGldx54w" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TurningPoint_small_1369761300.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-47" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-47" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-47" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem47" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Turning Point <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="47">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-47" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Turning Point</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem47" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/47" method="post" id="movieForm47" movie="47" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Turning Point" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="124" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/fp9XGldx54w" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TurningPoint_big_1369761300.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TurningPoint_small_1369761300.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A compelling drama of complacence, karma, moral justifications and redemption. A Nigerian-American playboy deals with the consequences after abandoning his American sweetheart for an arranged wife from back home.</p><p>Director: Niyi Towolawi</p><p>Stars: Jackie Appiah, Igoni Archibong, Ed Aristone</p><p>FRI-SAT: 9:35pm; 11:45pm</p><p>SUN-THUR: 9:35pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-14 08:14:09</td>
</tr>
				<tr>

				   <td>48</td>
				   <td><a href="http://www.youtube.com/embed/vO0SoS1PIPA" target="_blank">Letters To My Mother</a></td>
				   <td>Drama</td>
				   <td>90</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/vO0SoS1PIPA">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/vO0SoS1PIPA" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/LettersToMyMother_small_1371471275.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-48" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-48" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-48" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem48" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Letters To My Mother <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="48">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-48" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Letters To My Mother</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem48" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/48" method="post" id="movieForm48" movie="48" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Letters To My Mother" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="90" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/vO0SoS1PIPA" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/LettersToMyMother_big_1371027132.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/LettersToMyMother_small_1371471275.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A psychologically disturbed man who has been mute for 5 years obsessively writes letters addressed to his mother during his incarceration in a mental hospital, which tells the story of his demise.</p><p>FRI-SAT: 10:00am; 12:50pm; 11:10pm</p><p>SUN-THUR: 10:00am; 12:50pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-05 06:31:36</td>
</tr>
				<tr>

				   <td>53</td>
				   <td><a href="http://www.youtube.com/embed/A85EtOalcsM" target="_blank">Pacific Rim 3D</a></td>
				   <td>Drama</td>
				   <td>110</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/A85EtOalcsM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/A85EtOalcsM" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/PacificRim3D_small_1375696351.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-53" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-53" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-53" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem53" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Pacific Rim 3D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="53">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-53" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Pacific Rim 3D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem53" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/53" method="post" id="movieForm53" movie="53" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Pacific Rim 3D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="110" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/A85EtOalcsM" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/PacificRim3D_big_1375696351.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/PacificRim3D_small_1375696351.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>When an alien attack threatens the Earth's existence, giant robots piloted by humans are deployed to fight off the menace.</p><p>Starring: Charlie Hunnam; Idris Elba; Charlie Day.</p><p>GENESIS DELUXE CINEMAS:</p><p>SAT-THUR: 1:20pm; 4:00pm; 9:45pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-12 14:17:49</td>
</tr>
				<tr>

				   <td>54</td>
				   <td><a href="http://www.youtube.com/embed/g7kdUy5_WlI" target="_blank">The Wolverine 3D</a></td>
				   <td>Drama</td>
				   <td>120</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/g7kdUy5_WlI">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/g7kdUy5_WlI" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheWolverine3D_small_1374833509.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-54" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-54" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-54" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem54" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Wolverine 3D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="54">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-54" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Wolverine 3D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem54" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/54" method="post" id="movieForm54" movie="54" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Wolverine 3D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="120" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/g7kdUy5_WlI" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheWolverine3D_big_1374833509.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheWolverine3D_small_1374833509.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Wolverine makes a voyage to modern-day Japan, where he encounters an enemy from his past that will impact on his future.</p><p>GDC: FRI-THUR: 5:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:34:49</td>
</tr>
				<tr>

				   <td>58</td>
				   <td><a href="http://www.youtube.com/embed/ZsBHTZdwxzw" target="_blank">LUV</a></td>
				   <td>Drama</td>
				   <td>94</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/ZsBHTZdwxzw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/ZsBHTZdwxzw" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/LUV_small_1372259612.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-58" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-58" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-58" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem58" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for LUV <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="58">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-58" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">LUV</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem58" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/58" method="post" id="movieForm58" movie="58" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="LUV" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="94" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/ZsBHTZdwxzw" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/LUV_big_1372259612.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/LUV_small_1372259612.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>An 11-year-old boy gets a crash course in what it means to be a man when he spends a day with the ex-convict uncle he idolizes.</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-18 21:44:43</td>
</tr>
				<tr>

				   <td>69</td>
				   <td><a href="http://www.youtube.com/embed/A85EtOalcsM" target="_blank">Pacific Rim</a></td>
				   <td>Drama</td>
				   <td>110</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/A85EtOalcsM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/A85EtOalcsM" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/PacificRim_small_1374162149.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-69" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-69" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-69" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem69" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Pacific Rim <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="69">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-69" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Pacific Rim</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem69" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/69" method="post" id="movieForm69" movie="69" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Pacific Rim" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="110" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/A85EtOalcsM" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/PacificRim_big_1374162149.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/PacificRim_small_1374162149.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>When an alien attack threatens the Earth's existence, giant robots piloted by humans are deployed to fight off the menace.</p><p>Starring: Charlie Hunnam; Idris Elba; Charlie Day.</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR:</textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:43:04</td>
</tr>
				<tr>

				   <td>78</td>
				   <td><a href="http://www.youtube.com/embed/hvvusI6Sh64" target="_blank">Officer Down</a></td>
				   <td>Drama</td>
				   <td>98</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/hvvusI6Sh64">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/hvvusI6Sh64" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/OfficerDown_small_1375711668.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-78" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-78" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-78" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem78" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Officer Down <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="78">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-78" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Officer Down</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem78" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/78" method="post" id="movieForm78" movie="78" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Officer Down" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="98" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/hvvusI6Sh64" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/OfficerDown_big_1375711668.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/OfficerDown_small_1375711668.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>When a cop's crooked past comes back to get him, can he do the right thing, or will he succumb to the threats of his dangerous connections?</p><p>GDC: FRI: 10:55am; 3:15pm</p><p>SAT: 11:45am; 4:15pm; 8:40pm</p><p>SUN-THUR: 10:30am; 3:00pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 20:54:24</td>
</tr>
				<tr>

				   <td>82</td>
				   <td><a href="http://www.youtube.com/embed/mc-g7f44k58" target="_blank">Cheaters</a></td>
				   <td>Drama</td>
				   <td>120</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/mc-g7f44k58">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/mc-g7f44k58" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Cheaters_small_1375998991.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-82" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-82" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-82" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem82" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Cheaters <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="82">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-82" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Cheaters</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem82" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/82" method="post" id="movieForm82" movie="82" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Cheaters" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="120" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/mc-g7f44k58" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Cheaters_big_1375998991.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Cheaters_small_1375998991.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>It follows the stories of several young couples caught up in a web of love, lies and extramarital affairs. It throws more light on the assumption that marriage is the only war in which one sleeps with the enemy. If the couple is inseparable, it usually takes five people to separate it and ‘Cheaters’ reflects just that.</p><p>GDC: FRI:1:30pm; 5:30pm; 10:50pm</p><p>SAT: 1:50pm; 6:20pm; 10:50pm</p><p>SUN-THUR: 12:35pm; 5:05pm; 9:35pm</p><p>SILVERBIRD: FRI-THUR: 11:00am</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 20:55:39</td>
</tr>
				<tr>

				   <td>95</td>
				   <td><a href="http://www.youtube.com/embed/9aKFfbo6hAU" target="_blank">Murder At Prime Suite</a></td>
				   <td>Drama</td>
				   <td>130</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/9aKFfbo6hAU">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/9aKFfbo6hAU" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/MurderAtPrimeSuite_small_1377022076.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-95" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-95" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-95" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem95" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Murder At Prime Suite <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="95">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-95" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Murder At Prime Suite</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem95" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/95" method="post" id="movieForm95" movie="95" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Murder At Prime Suite" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="130" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/9aKFfbo6hAU" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/MurderAtPrimeSuite_big_1377022076.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/MurderAtPrimeSuite_small_1377022076.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Special Agents of the Police Investigation Department (PID) - Special Agent Ted and Agent Hauwa battle to unravel the mysteries behind the murder of a young lady,</p><p>What seemed like an open and close case soon turned into a battle of wits and backstabbing</p><p>GDC: FRI-SAT: 11:00am; 1:35pm; 4:10pm; 6:45pm; 9:20pm;11:50pm</p><p>SUN-THUR: 11:00am; 1:35pm; 4:10pm; 6:45pm; 9:20pm</p><p>SILVERBIRD: FRI-THU: 6:20pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-06 07:19:12</td>
</tr>
				<tr>

				   <td>96</td>
				   <td><a href="http://www.youtube.com/embed/j-IB1KW0GLA" target="_blank">Red Hot</a></td>
				   <td>Drama</td>
				   <td>120</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/j-IB1KW0GLA">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/j-IB1KW0GLA" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/RedHot_small_1377081212.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-96" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-96" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-96" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem96" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Red Hot <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="96">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-96" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Red Hot</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem96" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/96" method="post" id="movieForm96" movie="96" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Red Hot" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="120" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/j-IB1KW0GLA" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/RedHot_big_1377081212.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/RedHot_small_1377081212.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Red Hot is the story of Kofo, a beautiful Nigerian lady married to an extremely affluent husband. She seems to have all the good things of life at her disposal, but the absence of a child in the over ten year marriage leaving her frustrated.  In frustration and desperation she hatches a plan with her friend, Princess which brings Freddie into the picture.  Just at the peak of this new found solution, crisis erupts leading to one disaster to the other.</p><p>SILVERBIRD: FRI-THUR: 11:15am; 2:55pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:39:14</td>
</tr>
				<tr>

				   <td>99</td>
				   <td><a href="http://www.youtube.com/embed/1KXwGcZI13k" target="_blank">Satyagraha</a></td>
				   <td>Drama</td>
				   <td>152</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/1KXwGcZI13k">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/1KXwGcZI13k" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Satyagrah_small_1377790827.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-99" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-99" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-99" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem99" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Satyagraha <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="99">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-99" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Satyagraha</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem99" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/99" method="post" id="movieForm99" movie="99" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Satyagraha" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="1">Drama</option>
														<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="152" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/1KXwGcZI13k" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Satyagrah_big_1377790827.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Satyagrah_small_1377790827.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A dynamic and ambitious young man who is poised to take the elevator of corporate success, encounters personal tragedy which exposes him to the shocking on sequences of corruption in India. Joining hands with an idealist, he ignites a people's protest that soon escalates into a massive movement with a national resonance, battling politicians determined to crush and discredit him</p><p>SILVERBIRD: FRI-THUR: 3:50pm; 5:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-30 11:49:47</td>
</tr>
				<tr>

				   <td>25</td>
				   <td><a href="http://www.youtube.com/embed/-xu3JLXfuwQ" target="_blank">Epic 3D</a></td>
				   <td>Comedy</td>
				   <td>143</td>
				   <td>3</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/-xu3JLXfuwQ">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/-xu3JLXfuwQ" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Epic_small_1367298704.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-25" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-25" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-25" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem25" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Epic 3D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="25">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-25" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Epic 3D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem25" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/25" method="post" id="movieForm25" movie="25" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Epic 3D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="143" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>3</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/-xu3JLXfuwQ" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Epic_big_1367298704.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Epic_small_1367298704.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A teenager finds herself transported to a deep forest setting where a battle between the forces of good and the forces of evil is taking place. She bands together with a rag-tag group characters in order to save their world -- and ours.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-THUR: 11:10am</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-07 17:21:12</td>
</tr>
				<tr>

				   <td>34</td>
				   <td><a href="http://www.youtube.com/embed/A27xPYvqERw" target="_blank">Oblivion</a></td>
				   <td>Comedy</td>
				   <td>124</td>
				   <td>3</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/A27xPYvqERw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/A27xPYvqERw" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Oblivion_small_1369758717.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-34" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-34" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-34" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem34" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Oblivion <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="34">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-34" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Oblivion</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem34" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/34" method="post" id="movieForm34" movie="34" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Oblivion" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="124" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>3</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/A27xPYvqERw" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Oblivion_big_1369758717.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Oblivion_small_1369758717.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Tom Cruise stars in Oblivion, an original and groundbreaking cinematic event from the director of TRON: Legacy and the producer of Rise of the Planet of the Apes. On a spectacular future Earth that has evolved beyond recognition, one man’s confrontation with the past will lead him on a journey of redemption and discovery as he battles to save mankind.</p><p>FRI-THUR: 10:00am; 3:10pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-09 08:07:21</td>
</tr>
				<tr>

				   <td>59</td>
				   <td><a href="http://www.youtube.com/embed/712JPHER0uY" target="_blank">The Internship</a></td>
				   <td>Comedy</td>
				   <td>119</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/712JPHER0uY">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/712JPHER0uY" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheInternship_small_1372956251.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-59" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-59" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-59" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem59" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Internship <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="59">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-59" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Internship</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem59" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/59" method="post" id="movieForm59" movie="59" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Internship" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="119" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/712JPHER0uY" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheInternship_big_1372839755.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheInternship_small_1372956251.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Two salesmen whose careers have been torpedoed by the digital age find their way into a coveted internship at Google, where they must compete with a group of young, tech-savvy geniuses for a shot at employment.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-SAT: 6:40pm; 11:25pm</p><p>SUN-THUR: 6:40pm</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 4:00pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-26 10:59:09</td>
</tr>
				<tr>

				   <td>60</td>
				   <td><a href="http://www.youtube.com/embed/2NvTjCELbrk" target="_blank">This Is 40</a></td>
				   <td>Comedy</td>
				   <td>134</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/2NvTjCELbrk">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/2NvTjCELbrk" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/ThisIs40_small_1372931069.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-60" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-60" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-60" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem60" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for This Is 40 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="60">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-60" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">This Is 40</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem60" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/60" method="post" id="movieForm60" movie="60" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="This Is 40" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="134" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/2NvTjCELbrk" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/ThisIs40_big_1372931069.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/ThisIs40_small_1372931069.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A look at the lives of Pete and Debbie a few years after the events of Knocked Up.</p><p>GENESIS DELUXE CINEMAS:</p><p>SAT-THUR: 3:05pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-07 17:21:52</td>
</tr>
				<tr>

				   <td>63</td>
				   <td><a href="http://www.youtube.com/embed/z2W7TaF9l6s" target="_blank">Admission</a></td>
				   <td>Comedy</td>
				   <td>107</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/z2W7TaF9l6s">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/z2W7TaF9l6s" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Admission_small_1373460461.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-63" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-63" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-63" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem63" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Admission <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="63">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-63" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Admission</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem63" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/63" method="post" id="movieForm63" movie="63" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Admission" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="107" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/z2W7TaF9l6s" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Admission_big_1373460461.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Admission_small_1373460461.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A Princeton admissions officer who is up for a major promotion takes a professional risk after she meets a college-bound alternative school kid who just might be the son she gave up years ago in a secret adoption.</p><p>GENESIS DELUXE CINEMAS:</p><p> SUN-THUR: 10:15am; 5:50pm</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 2:00pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-09 20:19:16</td>
</tr>
				<tr>

				   <td>90</td>
				   <td><a href="http://www.youtube.com/embed/Yma-g4gTwlE" target="_blank">This is the end</a></td>
				   <td>Comedy</td>
				   <td>107</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/Yma-g4gTwlE">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/Yma-g4gTwlE" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Thisistheend_small_1376304505.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-90" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-90" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-90" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem90" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for This is the end <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="90">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-90" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">This is the end</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem90" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/90" method="post" id="movieForm90" movie="90" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="This is the end" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="107" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/Yma-g4gTwlE" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Thisistheend_big_1376304505.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Thisistheend_small_1376304505.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">While attending a party at James Franco's house, Seth Rogen, Jay Baruchel and many other celebrities are faced with the apocalypse.</textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-12 11:48:25</td>
</tr>
				<tr>

				   <td>91</td>
				   <td><a href="http://www.youtube.com/embed/CTcHZe-x6Zg" target="_blank">Grown Ups 2</a></td>
				   <td>Comedy</td>
				   <td>101</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/CTcHZe-x6Zg">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/CTcHZe-x6Zg" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/GrownUps2_small_1378448158.jpeg" height="100" width="100"></a></td>
				   <td>Yes</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-91" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-91" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-91" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem91" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Grown Ups 2 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="91">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-91" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Grown Ups 2</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem91" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/91" method="post" id="movieForm91" movie="91" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Grown Ups 2" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="101" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/CTcHZe-x6Zg" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/GrownUps2_big_1378448158.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/GrownUps2_small_1378448158.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>After moving his family back to his hometown to be with his friends and their kids, Lenny finds out that between old bullies, new bullies, schizo bus drivers, drunk cops on skis, and 400 costumed party crashers sometimes crazy follows you.</p><p.GDC: FRI-SAT: 10:00am; 2:30pm; 7:00pm; 11:30pm</p><p>SUN-THUR: 10:00am; 2:30pm; 7:00pm</p><p>SILVERBIRD: FRI-THUR: 12:55pm; 4:40pm; 6:45pm; 9:10pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox" checked name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-06 07:46:37</td>
</tr>
				<tr>

				   <td>92</td>
				   <td><a href="http://www.youtube.com/embed/poELkrqhVog" target="_blank">A Case Of You</a></td>
				   <td>Comedy</td>
				   <td>97</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/poELkrqhVog">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/poELkrqhVog" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/ACaseOfYou_small_1376304980.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-92" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-92" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-92" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem92" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for A Case Of You <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="92">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-92" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">A Case Of You</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem92" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/92" method="post" id="movieForm92" movie="92" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="A Case Of You" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="97" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/poELkrqhVog" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/ACaseOfYou_big_1376304980.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/ACaseOfYou_small_1376304980.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">A young writer tries to impress a girl he meets online with an embellished profile, but he finds himself in a real mess when she falls for him and he has to keep up the act.</textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-12 11:56:20</td>
</tr>
				<tr>

				   <td>97</td>
				   <td><a href="http://www.youtube.com/embed/srqvqiJ39sk" target="_blank">Chennais Expres</a></td>
				   <td>Comedy</td>
				   <td>141</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/srqvqiJ39sk">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/srqvqiJ39sk" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/ChennaisExpres_small_1377083071.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-97" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-97" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-97" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem97" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Chennais Expres <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="97">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-97" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Chennais Expres</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem97" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/97" method="post" id="movieForm97" movie="97" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Chennais Expres" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="141" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/srqvqiJ39sk" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/ChennaisExpres_big_1377083071.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/ChennaisExpres_small_1377083071.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">Rahul embarks on a journey to a small town in Tamil Nadu to fulfill the last wish of his grandfather: to have his ashes immersed in the Holy water of Rameshwaram. En route, he meets a woman hailing from a unique family down South. As they find love through this journey in the exuberant lands of South India, an unanticipated drive awaits them.</textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-21 12:04:31</td>
</tr>
				<tr>

				   <td>98</td>
				   <td><a href="http://www.youtube.com/embed/0Vsy5KzsieQ" target="_blank">We're The MIllers</a></td>
				   <td>Comedy</td>
				   <td>110</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/0Vsy5KzsieQ">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/0Vsy5KzsieQ" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/WereTheMIllers_small_1377686266.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-98" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-98" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-98" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem98" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for We're The MIllers <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="98">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-98" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">We're The MIllers</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem98" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/98" method="post" id="movieForm98" movie="98" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="We're The MIllers" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="110" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/0Vsy5KzsieQ" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/WereTheMIllers_big_1377686266.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/WereTheMIllers_small_1377686266.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A veteran pot dealer creates a fake family as part of his plan to move a huge shipment of weed into the U.S. from Mexico.</p><p>GDC: FRI-THUR: 10:10am; 12:15pm; 4:45pm; 9:15pm</p><p>SILVERBIRD: 2:00pm; 4:15pm; 6:30pm; 8:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:30:41</td>
</tr>
				<tr>

				   <td>100</td>
				   <td><a href="http://www.youtube.com/embed/pjgV2hkAaVE" target="_blank">Peebles</a></td>
				   <td>Comedy</td>
				   <td>95</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/pjgV2hkAaVE">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/pjgV2hkAaVE" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Peebles_small_1378129880.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-100" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-100" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-100" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem100" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Peebles <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="100">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-100" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Peebles</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem100" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/100" method="post" id="movieForm100" movie="100" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Peebles" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="2">Comedy</option>
									<option value="1">Drama</option>
																	<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="95" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/pjgV2hkAaVE" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Peebles_big_1378129880.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Peebles_small_1378129880.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">Sparks fly when Wade Walker crashes the Peeples annual reunion in the Hamptons to ask for their precious daughter Grace's hand in marriage.</textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-02 14:51:21</td>
</tr>
				<tr>

				   <td>7</td>
				   <td><a href="http://www.youtube.com/embed/dKi5XoeTN0k" target="_blank">Fast and Furious 6</a></td>
				   <td>Action</td>
				   <td>145</td>
				   <td>7.5</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/dKi5XoeTN0k">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/dKi5XoeTN0k" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/FastandFurious6_small_1369648310.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-7" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-7" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-7" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem7" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Fast and Furious 6 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="7">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-7" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Fast and Furious 6</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem7" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/7" method="post" id="movieForm7" movie="7" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Fast and Furious 6" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="145" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>7.5</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																					</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/dKi5XoeTN0k" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/FastandFurious6_big_1369648310.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/FastandFurious6_small_1369648310.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Agent Hobbs enlists the aid of Dom and team to help bring a rival gang, led by Owen Shaw, to justice. In exchange for clear records, they must put an end to their schemes, no matter how personal the cost.</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 6:45pm; 9:10pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-01 21:40:50</td>
</tr>
				<tr>

				   <td>21</td>
				   <td><a href="http://www.youtube.com/embed/OAVuKPFKrNo" target="_blank">Man of Steel 3D</a></td>
				   <td>Action</td>
				   <td>148</td>
				   <td>8</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/OAVuKPFKrNo">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/OAVuKPFKrNo" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/ManofSteel3D_small_1372839962.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-21" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-21" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-21" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem21" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Man of Steel 3D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="21">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-21" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Man of Steel 3D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem21" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/21" method="post" id="movieForm21" movie="21" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Man of Steel 3D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="148" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>8</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/OAVuKPFKrNo" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/ManofSteel3D_big_1372839962.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/ManofSteel3D_small_1372839962.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A young journalist is forced to confront his secret extraterrestrial heritage when Earth is invaded by members of his race.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-SAT: 5:30pm; 8:30pm;11:30pm</p><p>SUN-WED: 5:30pm; 8:30pm</p><p>THUR: 4:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-26 10:55:21</td>
</tr>
				<tr>

				   <td>23</td>
				   <td><a href="http://www.youtube.com/embed/CZIt20emgLY" target="_blank">After Earth</a></td>
				   <td>Action</td>
				   <td>150</td>
				   <td>7</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/CZIt20emgLY">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/CZIt20emgLY" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/AfterEarth_small_1367266570.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-23" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-23" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-23" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem23" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for After Earth <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="23">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-23" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">After Earth</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem23" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/23" method="post" id="movieForm23" movie="23" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="After Earth" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="150" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>7</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/CZIt20emgLY" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/AfterEarth_big_1367266570.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/AfterEarth_small_1367266570.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A crash landing leaves Kitai Raige and his father Cypher stranded on Earth, 1,000 years after events forced humanity's escape. With Cypher injured, Kitai must embark on a perilous journey to signal for help.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-THUR: 10:20am; 7:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-26 11:00:20</td>
</tr>
				<tr>

				   <td>24</td>
				   <td><a href="http://www.youtube.com/embed/QAEkuVgt6Aw" target="_blank">Star Trek Into Darkness 2D</a></td>
				   <td>Action</td>
				   <td>132</td>
				   <td>3</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/QAEkuVgt6Aw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/QAEkuVgt6Aw" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/StarTrekIntoDarkness_small_1372838576.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-24" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-24" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-24" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem24" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Star Trek Into Darkness 2D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="24">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-24" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Star Trek Into Darkness 2D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem24" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/24" method="post" id="movieForm24" movie="24" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Star Trek Into Darkness 2D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="132" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>3</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/QAEkuVgt6Aw" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/StarTrekIntoDarkness_big_1372838576.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/StarTrekIntoDarkness_small_1372838576.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>After the crew of the Enterprise find an unstoppable force of terror from within their own organization, Captain Kirk leads a manhunt to a war-zone world to capture a one man weapon of mass destruction.</p><p>FRI-SAT: 5:20pm; 10:10pm</p><p>SUN-THUR: 5:20pm.</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-18 17:11:37</td>
</tr>
				<tr>

				   <td>33</td>
				   <td><a href="http://www.youtube.com/embed/bKtqhSLe8LM" target="_blank">The Host</a></td>
				   <td>Action</td>
				   <td>125</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/bKtqhSLe8LM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/bKtqhSLe8LM" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheHost_small_1368622019.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-33" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-33" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-33" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem33" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Host <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="33">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-33" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Host</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem33" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/33" method="post" id="movieForm33" movie="33" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Host" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="125" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/bKtqhSLe8LM" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheHost_big_1368622019.png" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheHost_small_1368622019.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p> When an unseen enemy threatens mankind by taking over their bodies and erasing their memories, Melanie Stryder (Saoirse Ronan) will risk everything to protect the people she cares most about—Jared (Max Irons), Ian (Jake Abel), her brother Jamie (Chandler Canterbury) and her Uncle Jeb (William Hurt), proving that love can conquer all in a dangerous new world.</p><p>FRI-SAT: 12:40pm; 5:50pm; 10:50pm</p><p>SUN-THUR: 12:40pm; 5:50pm.</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-06 22:45:55</td>
</tr>
				<tr>

				   <td>38</td>
				   <td><a href="http://www.youtube.com/embed/vwx1f0kyNwI" target="_blank">Olympus Has Fallen</a></td>
				   <td>Action</td>
				   <td>120</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/vwx1f0kyNwI">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/vwx1f0kyNwI" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/OlympusHasFallen_small_1368633319.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-38" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-38" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-38" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem38" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Olympus Has Fallen <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="38">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-38" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Olympus Has Fallen</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem38" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/38" method="post" id="movieForm38" movie="38" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Olympus Has Fallen" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="120" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/vwx1f0kyNwI" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/OlympusHasFallen_big_1368633319.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/OlympusHasFallen_small_1368633319.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>When the White House (Secret Service Code: "Olympus") is captured by a terrorist mastermind.  Everyone is forced to rely on Banning's inside knowledge to help retake the White House and save the President</p><p>Featuring Gerard Butler, Aaron Eckhart, Morgan Freeman, Angela Bassett, Melissa Leo, Ashley Judd and Rick Yune.</p><p>FRI-THUR: 6:20pm; 8:50pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-27 22:10:26</td>
</tr>
				<tr>

				   <td>40</td>
				   <td><a href="http://www.youtube.com/embed/NAh5lSmDk9Y" target="_blank">G.I. Joe: Retaliation</a></td>
				   <td>Action</td>
				   <td>110</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/NAh5lSmDk9Y">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/NAh5lSmDk9Y" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/G.I_.Joe:Retaliation_small_1368634929_.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-40" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-40" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-40" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem40" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for G.I. Joe: Retaliation <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="40">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-40" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">G.I. Joe: Retaliation</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem40" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/40" method="post" id="movieForm40" movie="40" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="G.I. Joe: Retaliation" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="110" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/NAh5lSmDk9Y" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/G.I_.Joe:Retaliation_big_1368634929_.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/G.I_.Joe:Retaliation_small_1368634929_.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>The G.I. Joes are not only fighting their mortal enemy Cobra; they are forced to contend with threats from within the government that jeopardize their very existence.</p> <p> The film stars D.J. Cotrona, Byung-hun Lee, Ray Park, Adrianne Palicki, Jonathan Pryce, RZA, Ray Stevenson, Channing Tatum with Bruce Willis and Dwayne Johnson.</p> <p>Directed by Jon M. Chu, and produced by Lorenzo di Bonaventura and Brian</p><p>FRI-THUR: 10:20am; 2:50pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-06 22:46:16</td>
</tr>
				<tr>

				   <td>42</td>
				   <td><a href="http://www.youtube.com/embed/T6DJcgm3wNY" target="_blank">Man of Steel 2D</a></td>
				   <td>Action</td>
				   <td>148</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/T6DJcgm3wNY">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/T6DJcgm3wNY" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/ManofSteel2D_small_1372950462.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-42" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-42" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-42" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem42" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Man of Steel 2D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="42">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-42" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Man of Steel 2D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem42" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/42" method="post" id="movieForm42" movie="42" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Man of Steel 2D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="148" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/T6DJcgm3wNY" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/ManofSteel2D_big_1372950462.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/ManofSteel2D_small_1372950462.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A young journalist is forced to confront his secret extraterrestrial heritage when Earth is invaded by members of his race..</p><p>GENESIS DELUXE CINEMAS:</p><p>SAT-THUR: 1:10pm; 9:10pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-01 21:37:56</td>
</tr>
				<tr>

				   <td>43</td>
				   <td><a href="http://www.youtube.com/embed/2CzoSeClcw0" target="_blank">Iron Man 3</a></td>
				   <td>Action</td>
				   <td>148</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/2CzoSeClcw0">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/2CzoSeClcw0" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/IronMan3(2D)_small_1369749172.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-43" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-43" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-43" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem43" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Iron Man 3 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="43">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-43" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Iron Man 3</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem43" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/43" method="post" id="movieForm43" movie="43" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Iron Man 3" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="148" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/2CzoSeClcw0" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/IronMan3(2D)_big_1369749172.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/IronMan3(2D)_small_1369749172.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Marvel Studios’ “Iron Man 3 pits brash-but-brilliant industrialist Tony Stark/Iron Man against an enemy whose reach knows no bounds. When Stark finds his personal world destroyed at his enemy’s hands, he embarks on a harrowing quest to find those responsible.</p><p>FRI-SAT: 10:40am; 1:00pm; 3:40pm; 11:20pm.</p><p>SUN-THUR: 10:20am; 1:30pm; 3:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-27 22:09:34</td>
</tr>
				<tr>

				   <td>51</td>
				   <td><a href="http://www.youtube.com/embed/4AXbiCdmXgw" target="_blank">White House Down</a></td>
				   <td>Action</td>
				   <td>137</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/4AXbiCdmXgw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/4AXbiCdmXgw" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/WhiteHouseDown_small_1372840149.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-51" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-51" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-51" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem51" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for White House Down <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="51">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-51" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">White House Down</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem51" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/51" method="post" id="movieForm51" movie="51" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="White House Down" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="137" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/4AXbiCdmXgw" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/WhiteHouseDown_big_1372840149.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/WhiteHouseDown_small_1372840149.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>While on a tour of the White House with his young daughter, a Capitol policeman springs into action to save his child and protect the president from a heavily armed group of paramilitary invaders.</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 1:05pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 20:52:05</td>
</tr>
				<tr>

				   <td>61</td>
				   <td><a href="http://www.youtube.com/embed/AW1aAxBG_50" target="_blank">Sacrifice</a></td>
				   <td>Action</td>
				   <td>125</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/AW1aAxBG_50">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/AW1aAxBG_50" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Sacrifice_small_1372942954.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-61" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-61" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-61" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem61" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Sacrifice <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="61">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-61" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Sacrifice</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem61" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/61" method="post" id="movieForm61" movie="61" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Sacrifice" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="125" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/AW1aAxBG_50" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Sacrifice_big_1372942954.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Sacrifice_small_1372942954.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Focuses on a power hungry general who wipes out his rival along with his entire family, save for one newborn. The infant is protected by the doctor who delivered him and raises him as his own, hoping to mold him into his own instrument of retribution.</p><p>Starring: You Ge, Xueqi Wang, Xiaoming Huang</p><p>FRI-SAT: 2:50pm</p><p>SUN-THUR: 2:50pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-06 08:49:47</td>
</tr>
				<tr>

				   <td>62</td>
				   <td><a href="http://www.youtube.com/embed/RZUFiPDAdww" target="_blank">The Cartel</a></td>
				   <td>Action</td>
				   <td>105</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/RZUFiPDAdww">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/RZUFiPDAdww" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheCartel_small_1373027525.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-62" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-62" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-62" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem62" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Cartel <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="62">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-62" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Cartel</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem62" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/62" method="post" id="movieForm62" movie="62" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Cartel" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="105" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/RZUFiPDAdww" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheCartel_big_1373027525.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheCartel_small_1373027525.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Bryne has power with aces in his hands. Denzel has anger with vengeance in mind and the queen of hearts in hand, Orlando is cunning and has a joker in his hands and waits for the right time to play it.</p><p>The stage is set, guns have been drawn...it's time to play.</p><p>Starring: Mike Ezuruonye, Luclay Misoya, John Njama,Elizabeth Pam and Martha Ankomah</p><p>FRI-THUR: 10:30am; 2:50pm; 7:10pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-18 21:45:13</td>
</tr>
				<tr>

				   <td>65</td>
				   <td><a href="http://www.youtube.com/embed/Pa9LS35AudM" target="_blank">Parker</a></td>
				   <td>Action</td>
				   <td>118</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/Pa9LS35AudM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/Pa9LS35AudM" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Parker_small_1373576353.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-65" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-65" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-65" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem65" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Parker <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="65">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-65" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Parker</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem65" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/65" method="post" id="movieForm65" movie="65" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Parker" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="118" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/Pa9LS35AudM" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Parker_big_1373576353.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Parker_small_1373576353.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A thief with a unique code of professional ethics is double-crossed by his crew and left for dead. Assuming a new disguise and forming an unlikely alliance with a woman on the inside, he looks to hijack the score of the crew's latest heist.</p><p>SILVERBIRD: FRI-THUR:  8:55pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 20:53:32</td>
</tr>
				<tr>

				   <td>67</td>
				   <td><a href="http://www.youtube.com/embed/PsM5YfDwOr0" target="_blank">Facade</a></td>
				   <td>Action</td>
				   <td>108</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/PsM5YfDwOr0">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/PsM5YfDwOr0" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Facade_small_1373965198.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-67" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-67" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-67" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem67" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Facade <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="67">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-67" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Facade</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem67" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/67" method="post" id="movieForm67" movie="67" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Facade" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="108" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/PsM5YfDwOr0" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Facade_big_1373965198.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Facade_small_1373965198.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Starring: Wole Ojo, Kehinde Bankole, Patricia Omam Okondor, Aret Edet and David Mackenzie</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 1:55pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-07-26 10:58:45</td>
</tr>
				<tr>

				   <td>68</td>
				   <td><a href="http://www.youtube.com/embed/XbOgFtS-yHI" target="_blank">House of Gold</a></td>
				   <td>Action</td>
				   <td>150</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/XbOgFtS-yHI">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/XbOgFtS-yHI" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/HouseofGold_small_1374833332.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-68" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-68" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-68" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem68" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for House of Gold <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="68">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-68" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">House of Gold</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem68" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/68" method="post" id="movieForm68" movie="68" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="House of Gold" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="150" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/XbOgFtS-yHI" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/HouseofGold_big_1374833332.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/HouseofGold_small_1374833332.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Dab Ansah Williams, a high flying entrepreneur/business mogul, polygamist and socialite, is battling with cancer and has 6 weeks left to live according to medical practitioners. He embarks on a mission to call all his children back home.</p><p>SILVERBIRD: FRI-THUR: 1:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:41:26</td>
</tr>
				<tr>

				   <td>71</td>
				   <td><a href="http://www.youtube.com/embed/T6DJcgm3wNY" target="_blank">Man of Steel</a></td>
				   <td>Action</td>
				   <td>148</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/T6DJcgm3wNY">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/T6DJcgm3wNY" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/ManofSteel_small_1374179465.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-71" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-71" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-71" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem71" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Man of Steel <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="71">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-71" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Man of Steel</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem71" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/71" method="post" id="movieForm71" movie="71" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Man of Steel" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="148" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/T6DJcgm3wNY" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/ManofSteel_big_1374179465.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/ManofSteel_small_1374179465.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A young journalist is forced to confront his secret extraterrestrial heritage when Earth is invaded by members of his race..</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 1:40am</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-25 16:21:13</td>
</tr>
				<tr>

				   <td>73</td>
				   <td><a href="http://www.youtube.com/embed/t_YOzpisYMc" target="_blank">The Heat</a></td>
				   <td>Action</td>
				   <td>117</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/t_YOzpisYMc">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/t_YOzpisYMc" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheHeat_small_1374840086.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-73" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-73" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-73" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem73" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Heat <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="73">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-73" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Heat</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem73" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/73" method="post" id="movieForm73" movie="73" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Heat" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="117" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/t_YOzpisYMc" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheHeat_big_1374840086.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheHeat_small_1374840086.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>An uptight FBI Special Agent is paired with a foul-mouthed Boston cop to take down a ruthless drug lord.</p><p> Sandra Bullock, Melissa McCarthy, Demian Bichir</p><p>GENESIS DELUXE CINEMAS:</p><p>SUN-THUR:12:35pm; 8:10pm</p><p>SILVERBIRD CINEMAS:</p><p>11:20am; 8:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-16 15:26:45</td>
</tr>
				<tr>

				   <td>80</td>
				   <td><a href="http://www.youtube.com/embed/6WKmnAcMTKM" target="_blank">Dead Man Down</a></td>
				   <td>Action</td>
				   <td>118</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/6WKmnAcMTKM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/6WKmnAcMTKM" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/DeadManDown_small_1375887811.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-80" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-80" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-80" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem80" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Dead Man Down <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="80">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-80" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Dead Man Down</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem80" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/80" method="post" id="movieForm80" movie="80" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Dead Man Down" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="118" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/6WKmnAcMTKM" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/DeadManDown_big_1375887811.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/DeadManDown_small_1375887811.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>In New York City, a crime lord's right-hand man is seduced by a woman seeking retribution.</p><p>GDC: FRI: 10:00am; 12:25pm; 5:05pm</p><p>SAT:11:35am; 11:00pm</p><p.SUN-THUR: 10:15am; 5:05pm</p><p>SILVERBIRD: FRI-THUR: 1:30pm; 9:00pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-30 08:28:21</td>
</tr>
				<tr>

				   <td>81</td>
				   <td><a href="http://www.youtube.com/embed/4EC7P5WdUko" target="_blank">World War Z</a></td>
				   <td>Action</td>
				   <td>116</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/4EC7P5WdUko">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/4EC7P5WdUko" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/WorldWarZ_small_1375999583.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-81" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-81" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-81" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem81" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for World War Z <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="81">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-81" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">World War Z</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem81" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/81" method="post" id="movieForm81" movie="81" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="World War Z" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="116" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/4EC7P5WdUko" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/WorldWarZ_big_1375999583.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/WorldWarZ_small_1375999583.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>United Nations employee Gerry Lane traverses the world in a race against time to stop the Zombie pandemic that is toppling armies and governments, and threatening to destroy humanity itself.</p><p>GDC: FRI-THUR: 4:40pm; 7:10pm; 9:40pm</p><p> SILVERBIRD: FRI-THUR: 11:25am; 8:50pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:37:56</td>
</tr>
				<tr>

				   <td>86</td>
				   <td><a href="http://www.youtube.com/embed/g7kdUy5_WlI" target="_blank">The Wolverine</a></td>
				   <td>Action</td>
				   <td>116</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/g7kdUy5_WlI">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/g7kdUy5_WlI" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Wolverine_small_1375995867.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-86" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-86" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-86" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem86" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Wolverine <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="86">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-86" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Wolverine</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem86" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/86" method="post" id="movieForm86" movie="86" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Wolverine" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="116" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/g7kdUy5_WlI" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Wolverine_big_1375995867.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Wolverine_small_1375995867.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>United Nations employee Gerry Lane traverses the world in a race against time to stop the Zombie pandemic that is toppling armies and governments, and threatening to destroy humanity itself.</p><p>SILVERBIRD:FRI-THUR:  8:45pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:32:56</td>
</tr>
				<tr>

				   <td>87</td>
				   <td><a href="http://www.youtube.com/embed/vSAS79fBVxs" target="_blank">Elysium</a></td>
				   <td>Action</td>
				   <td>109</td>
				   <td>6.5</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/vSAS79fBVxs">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/vSAS79fBVxs" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Elysium_small_1376647974.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-87" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-87" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-87" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem87" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Elysium <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="87">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-87" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Elysium</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem87" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/87" method="post" id="movieForm87" movie="87" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Elysium" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="109" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>6.5</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																													<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/vSAS79fBVxs" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Elysium_big_1376647974.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Elysium_small_1376647974.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Set in the year 2154, where the very wealthy live on a man-made space station while the rest of the population resides on a ruined Earth, a man takes on a mission that could bring equality to the polarized worlds.</p><p>GDC: FRI-THUR: 12:20pm; 2:40pm; 5:00pm; 7:20pm; 9:40pm</p><p>SILVERBIRD: FRI-THUR:  3:55pm; 7:10pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-06 07:21:50</td>
</tr>
				<tr>

				   <td>88</td>
				   <td><a href="http://www.youtube.com/embed/W7Vl7qaowzE" target="_blank">2 Guns</a></td>
				   <td>Action</td>
				   <td>109</td>
				   <td>6.5</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/W7Vl7qaowzE">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/W7Vl7qaowzE" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/2Guns_small_1378112423.jpeg" height="100" width="100"></a></td>
				   <td>Yes</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-88" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-88" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-88" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem88" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for 2 Guns <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="88">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-88" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">2 Guns</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem88" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/88" method="post" id="movieForm88" movie="88" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="2 Guns" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="109" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>6.5</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																													<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/W7Vl7qaowzE" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/2Guns_big_1378112423.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/2Guns_small_1378112423.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A DEA agent and a naval intelligence officer find themselves on the run after a botched attempt to infiltrate a drug cartel. While fleeing, they learn the secret of their shaky alliance: Neither knew that the other was an undercover agent.</p><p>GDC: FRI&SAT: 10:50am; 1:05pm; 4:40pm; 7:00pm; 8:30pm; 9:15pm; 11:30pm</p><p>SUN-THUR: 10:50am; 1:05pm; 4:40pm; 7:00pm; 8:30pm; 9:15pm</p><p>SILVERBIRD: FRI-THUR: 1:45pm; 6:15pm; 8:35pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox" checked name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:01:16</td>
</tr>
				<tr>

				   <td>89</td>
				   <td><a href="http://www.youtube.com/embed/4KTvjFGgGkk" target="_blank">Thor</a></td>
				   <td>Action</td>
				   <td>115</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/4KTvjFGgGkk">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/4KTvjFGgGkk" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Thor_small_1376300823.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-89" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-89" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-89" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem89" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Thor <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="89">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-89" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Thor</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem89" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/89" method="post" id="movieForm89" movie="89" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Thor" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="115" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/4KTvjFGgGkk" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Thor_big_1376300823.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Thor_small_1376300823.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">When Jane Foster is targeted by the denizens of the dark world of Svartalfheim, Thor sets out on a quest to protect her at all costs.</textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-12 10:47:03</td>
</tr>
				<tr>

				   <td>93</td>
				   <td><a href="http://www.youtube.com/embed/mm2YimzIGf0" target="_blank">Once Upon A Time In Mumbai Dobara</a></td>
				   <td>Action</td>
				   <td>160</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/mm2YimzIGf0">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/mm2YimzIGf0" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/OnceUponATimeInMumbaiDobara_small_1376557192.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-93" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-93" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-93" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem93" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Once Upon A Time In Mumbai Dobara <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="93">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-93" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Once Upon A Time In Mumbai Dobara</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem93" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/93" method="post" id="movieForm93" movie="93" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Once Upon A Time In Mumbai Dobara" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="5">Action</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
																	<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="160" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/mm2YimzIGf0" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/OnceUponATimeInMumbaiDobara_big_1376557192.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/OnceUponATimeInMumbaiDobara_small_1376557192.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Shoaib's quest to nail down his rival Rawal (Mahesh Manjrekar) brings him back to Bombay which is where he stumbles upon a young actress - Yasmin (Sonakshi Sinha), little does his know that his own protegee Aslam will come in his way for the latter too takes an instant liking to Yasmin. This creates a rift between Shoaib and Aslam </p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 1:35pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-30 09:47:13</td>
</tr>
				<tr>

				   <td>44</td>
				   <td><a href="http://www.youtube.com/embed/VeG3Zmk08UU" target="_blank">The Croods</a></td>
				   <td>Animation</td>
				   <td>98</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/VeG3Zmk08UU">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/VeG3Zmk08UU" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheCroods(2D)_small_1369749710.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-44" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-44" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-44" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem44" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Croods <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="44">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-44" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Croods</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem44" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/44" method="post" id="movieForm44" movie="44" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Croods" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="98" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/VeG3Zmk08UU" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheCroods(2D)_big_1369749710.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheCroods(2D)_small_1369749710.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>After their cave is destroyed, a caveman family must trek through an unfamiliar fantastical world with the help of an inventive boy.</p><p>Stars: Nicolas Cage, Emma Stone, Ryan Reynolds</p><p>FRI-THUR: 10:30am; 2:50pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-14 08:20:15</td>
</tr>
				<tr>

				   <td>49</td>
				   <td><a href="http://www.youtube.com/embed/yd71LWhCO4s" target="_blank">Rise of the Guardians</a></td>
				   <td>Animation</td>
				   <td>97</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/yd71LWhCO4s">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/yd71LWhCO4s" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/RiseoftheGuardians_small_1371386457.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-49" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-49" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-49" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem49" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Rise of the Guardians <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="49">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-49" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Rise of the Guardians</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem49" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/49" method="post" id="movieForm49" movie="49" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Rise of the Guardians" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="97" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/yd71LWhCO4s" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/RiseoftheGuardians_big_1371386457.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/RiseoftheGuardians_small_1371386457.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>When the evil spirit Pitch launches an assault on Earth, the Immortal Guardians team up to protect the innocence of children all around the world.</p><p>SAT-THUR: 10:00am; 12:20pm; 2:30pm; 4:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-06-21 05:53:04</td>
</tr>
				<tr>

				   <td>50</td>
				   <td><a href="http://www.youtube.com/embed/HwXbtZXjbVE" target="_blank">Despicable Me 2</a></td>
				   <td>Animation</td>
				   <td>98</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/HwXbtZXjbVE">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/HwXbtZXjbVE" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/DespicableMe2_small_1373460580.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-50" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-50" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-50" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem50" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Despicable Me 2 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="50">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-50" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Despicable Me 2</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem50" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/50" method="post" id="movieForm50" movie="50" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Despicable Me 2" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="98" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/HwXbtZXjbVE" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/DespicableMe2_big_1373460580.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/DespicableMe2_small_1373460580.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Gru is recruited by the Anti-Villain League to help deal with a powerful new super criminal.</p><p>GENESIS DELUXE: SUN-THUR: 10:00am</p><p>SILVERBIRD: FRI-THUR: 10:30am</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-25 15:56:12</td>
</tr>
				<tr>

				   <td>57</td>
				   <td><a href="http://www.youtube.com/embed/bY75HyASyyc" target="_blank">Turbo 3D</a></td>
				   <td>Animation</td>
				   <td>97</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/bY75HyASyyc">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/bY75HyASyyc" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Turbo3D_small_1371549687.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-57" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-57" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-57" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem57" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Turbo 3D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="57">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-57" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Turbo 3D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem57" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/57" method="post" id="movieForm57" movie="57" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Turbo 3D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="97" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/bY75HyASyyc" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Turbo3D_big_1371549687.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Turbo3D_small_1371549687.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A freak accident might just help an everyday garden snail achieve his biggest dream: winning the Indy 500.</p><p>Starring: Ryan Reynolds; Paul Giamatti; Maya Rudolph</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-WED: 10:45am; 1:00pm; 3:15pm</p><p>THUR: 10:00am; 12:10pm; 2:25pm</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 11:15am; 1:15pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-01 21:39:33</td>
</tr>
				<tr>

				   <td>66</td>
				   <td><a href="http://www.youtube.com/embed/T3z2ryJ2960" target="_blank">Epic</a></td>
				   <td>Animation</td>
				   <td>102</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/T3z2ryJ2960">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/T3z2ryJ2960" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Epic_small_1373963915.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-66" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-66" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-66" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem66" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Epic <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="66">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-66" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Epic</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem66" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/66" method="post" id="movieForm66" movie="66" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Epic" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="102" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/T3z2ryJ2960" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Epic_big_1373963915.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Epic_small_1373963915.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A teenager finds herself transported to a deep forest setting where a battle between the forces of good and the forces of evil is taking place. She bands together with a rag-tag group characters in order to save their world -- and ours.</p><p>SILVERBIRD CINEMAS:</p><p> FRI-THUR: 10:30am</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 20:53:04</td>
</tr>
				<tr>

				   <td>70</td>
				   <td><a href="http://www.youtube.com/embed/bY75HyASyyc" target="_blank">Turbo</a></td>
				   <td>Animation</td>
				   <td>97</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/bY75HyASyyc">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/bY75HyASyyc" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Turbo_small_1374162313.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-70" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-70" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-70" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem70" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Turbo <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="70">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-70" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Turbo</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem70" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/70" method="post" id="movieForm70" movie="70" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Turbo" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="97" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/bY75HyASyyc" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Turbo_big_1374162313.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Turbo_small_1374162313.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A freak accident might just help an everyday garden snail achieve his biggest dream: winning the Indy 500.</p><p>GDC: FRI-THUR: 12:25pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:27:38</td>
</tr>
				<tr>

				   <td>84</td>
				   <td><a href="http://www.youtube.com/embed/vQbSGLaVJ5c" target="_blank">The Smurfs 2</a></td>
				   <td>Animation</td>
				   <td>105</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/vQbSGLaVJ5c">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/vQbSGLaVJ5c" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheSmurfs2D_small_1375897397.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-84" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-84" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-84" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem84" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Smurfs 2 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="84">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-84" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Smurfs 2</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem84" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/84" method="post" id="movieForm84" movie="84" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Smurfs 2" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="105" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/vQbSGLaVJ5c" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheSmurfs2D_big_1375897397.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheSmurfs2D_small_1375897397.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>The Smurfs team up with their human friends to rescue Smurfette, who has been kidnapped by Gargamel since she knows a secret spell that can turn the evil sorcerer's newest creation - creatures called the Naughties - into real Smurfs.</p><p>GDC: FRI-THUR: 10:15am; 2:30pm</p><p>SILVERBIRD: FRI-THUR: 10:45am; 12:40pm; 2:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:22:53</td>
</tr>
				<tr>

				   <td>85</td>
				   <td><a href="http://www.youtube.com/embed/vQbSGLaVJ5c" target="_blank">The Smurfs 2 3D</a></td>
				   <td>Animation</td>
				   <td>105</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/vQbSGLaVJ5c">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/vQbSGLaVJ5c" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/TheSmurfs23D_small_1376077377.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-85" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-85" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-85" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem85" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Smurfs 2 3D <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="85">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-85" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">The Smurfs 2 3D</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem85" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/85" method="post" id="movieForm85" movie="85" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="The Smurfs 2 3D" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="18">Animation</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
																	<option value="28">Crime</option>
												<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="105" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/vQbSGLaVJ5c" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/TheSmurfs23D_big_1376077377.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/TheSmurfs23D_small_1376077377.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>The Smurfs team up with their human friends to rescue Smurfette, who has been kidnapped by Gargamel since she knows a secret spell that can turn the evil sorcerer's newest creation - creatures called the Naughties - into real Smurfs.</p><p>GENESIS DELUXE: FRI-THUR: 3:20pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-06 07:22:21</td>
</tr>
				<tr>

				   <td>77</td>
				   <td><a href="http://www.youtube.com/embed/XybTWc3Juag" target="_blank">Torn</a></td>
				   <td>Crime</td>
				   <td>120</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/XybTWc3Juag">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/XybTWc3Juag" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/Torn_small_1375351234.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-77" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-77" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-77" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem77" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Torn <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="77">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-77" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Torn</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem77" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/77" method="post" id="movieForm77" movie="77" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Torn" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="28">Crime</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
																	<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="120" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/XybTWc3Juag" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/Torn_big_1375351234.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/Torn_small_1375351234.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Torn tells a psychological and emotional story of Ovu and Nana who believe they are married to the same man, Olumide.</p><p>A top psychologist begins unravelling of the truth behind the façade of a seemingly happy young couple and their perfect family friend.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-THUR: 12:35pm; 9:45pm</p><p>SILVERBIRD CINEMAS:</p><p>FRI-THUR: 4:25pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-16 12:13:58</td>
</tr>
				<tr>

				   <td>79</td>
				   <td><a href="http://www.youtube.com/embed/EFEou3MBLi4" target="_blank">Side Effects</a></td>
				   <td>Crime</td>
				   <td>106</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/EFEou3MBLi4">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/EFEou3MBLi4" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/SideEffects_small_1375768118.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-79" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-79" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-79" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem79" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Side Effects <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="79">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-79" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Side Effects</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem79" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/79" method="post" id="movieForm79" movie="79" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Side Effects" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="28">Crime</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
																	<option value="29">Adventure</option>
						</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="106" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/EFEou3MBLi4" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/SideEffects_big_1375768118.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/SideEffects_small_1375768118.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A young woman's world unravels when a drug prescribed by her psychiatrist has unexpected side effects.</p><p>GENESIS DELUXE CINEMAS</p><p>FRI-SAT: 9:05pm; 11:25pm</p><p>SUN-THUR: 9:40pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-08-16 13:12:19</td>
</tr>
				<tr>

				   <td>46</td>
				   <td><a href="http://www.youtube.com/embed/ng9rjC8MOgU" target="_blank">Jack The Giant Slayer</a></td>
				   <td>Adventure</td>
				   <td>114</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/ng9rjC8MOgU">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/ng9rjC8MOgU" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/JackTheGiantSlayer_small_1369750711.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>No</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-46" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-46" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-46" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem46" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Jack The Giant Slayer <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="46">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-46" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Jack The Giant Slayer</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem46" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/46" method="post" id="movieForm46" movie="46" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Jack The Giant Slayer" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="29">Adventure</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
											</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="114" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/ng9rjC8MOgU" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/JackTheGiantSlayer_big_1369750711.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/JackTheGiantSlayer_small_1369750711.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>The ancient war between humans and a race of giants is reignited when Jack, a young farmhand fighting for a kingdom and the love of a princess, opens a gateway between the two worlds.</p><p>Stars: Nicholas Hoult, Ewan McGregor, Stanley Tucci</p><p>WED-THUR: 10:00am; 12:35pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>No</option>
				   <option>Yes</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-05-31 09:50:02</td>
</tr>
				<tr>

				   <td>55</td>
				   <td><a href="http://www.youtube.com/embed/w6aYjbpBm-E" target="_blank">Percy Jackson Sea of Monsters</a></td>
				   <td>Adventure</td>
				   <td>96</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/w6aYjbpBm-E">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/w6aYjbpBm-E" target="_blank"><img src="http://localhost/beta.gateway/uploads/small/PercyJohnsonSeaofMonsters_small_1376569376.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-55" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-55" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-55" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem55" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Percy Jackson Sea of Monsters <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="55">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-55" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Percy Jackson Sea of Monsters</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem55" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/beta.gateway/movies/edit/55" method="post" id="movieForm55" movie="55" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Percy Jackson Sea of Monsters" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="29">Adventure</option>
									<option value="1">Drama</option>
												<option value="2">Comedy</option>
												<option value="3">Romance</option>
												<option value="4">Title</option>
												<option value="5">Action</option>
												<option value="9">English</option>
												<option value="10">High-school</option>
												<option value="15">Epic</option>
												<option value="17">Biography</option>
												<option value="18">Animation</option>
												<option value="28">Crime</option>
											</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="96" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option>0</option>
															<option>0.5</option>
																				<option>1.5</option>
																				<option>2.5</option>
																				<option>3.5</option>
																				<option>4.5</option>
																				<option>5.5</option>
																				<option>6.5</option>
																				<option>7.5</option>
												</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/w6aYjbpBm-E" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/big/PercyJohnsonSeaofMonsters_big_1376569376.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/beta.gateway/uploads/small/PercyJohnsonSeaofMonsters_small_1376569376.jpeg" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>In order to restore their dying safe haven, the son of Poseidon and his friends embark on a quest to the Sea of Monsters to find the mythical Golden Fleece and to stop an ancient evil from rising.</p><p>GDC: FRI-THUR: 10:10am; 12:20pm; 2:30pm</p><p>SILVERBIRD: FRI-THUR: 11:40am; 4:10pm; 6:30pm</p></textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option>Yes</option>
				   <option>No</option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox"  name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td>2013-09-05 21:20:36</td>
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