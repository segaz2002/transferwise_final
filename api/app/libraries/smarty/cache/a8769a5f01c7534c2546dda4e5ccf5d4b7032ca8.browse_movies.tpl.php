<?php /*%%SmartyHeaderCode:144336961251e8b0432eed89-88701816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8769a5f01c7534c2546dda4e5ccf5d4b7032ca8' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/browse_movies.tpl',
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
  'nocache_hash' => '144336961251e8b0432eed89-88701816',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51e8b0434fd044_21573106',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8b0434fd044_21573106')) {function content_51e8b0434fd044_21573106($_smarty_tpl) {?><!doctype html>
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
							July 19, 2013
							<!-- February 22, 2013 -->
						</span>
                        <span>
							Friday, 04:19 AM
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
				   
				   <td><a href="http://www.youtube.com/embed/h7AFnJbETLw" target="_blank"><img src="http://localhost/tripican/uploads/small/TheGreatGatsby_small_1367265916.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/22" method="post" id="movieForm22" movie="22" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TheGreatGatsby_big_1367265916.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheGreatGatsby_small_1367265916.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/KLAkxSjs8ZY" target="_blank"><img src="http://localhost/tripican/uploads/small/TheHangover3_small_1367301820.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/26" method="post" id="movieForm26" movie="26" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TheHangover3_big_1367301820.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheHangover3_small_1367301820.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/sa0wXcQJ7Ms" target="_blank"><img src="http://localhost/tripican/uploads/small/HomeAgain_small_1368620552.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/32" method="post" id="movieForm32" movie="32" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/HomeAgain_big_1368620552.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/HomeAgain_small_1368620552.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/SDfTwu2CgDY" target="_blank"><img src="http://localhost/tripican/uploads/small/Temptation_small_1369750063.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/45" method="post" id="movieForm45" movie="45" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Temptation_big_1369750063.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Temptation_small_1369750063.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>An ambitious married woman's temptation by a handsome billionaire leads to betrayal, recklessness, and forever alters the course of her life.</p><p>Director: Tyler Perry</p><p>Stars: Jurnee Smollett-Bell, Kim Kardashian, Vanessa Williams</p><p>SILVERBIRD CINEMAS</p><p>TUE: 1:10pm</p></textarea>
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
<td>2013-07-15 21:49:02</td>
</tr>
				<tr>

				   <td>47</td>
				   <td><a href="http://www.youtube.com/embed/fp9XGldx54w" target="_blank">Turning Point</a></td>
				   <td>Drama</td>
				   <td>124</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/fp9XGldx54w">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/fp9XGldx54w" target="_blank"><img src="http://localhost/tripican/uploads/small/TurningPoint_small_1369761300.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/47" method="post" id="movieForm47" movie="47" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TurningPoint_big_1369761300.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TurningPoint_small_1369761300.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/vO0SoS1PIPA" target="_blank"><img src="http://localhost/tripican/uploads/small/LettersToMyMother_small_1371471275.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/48" method="post" id="movieForm48" movie="48" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/LettersToMyMother_big_1371027132.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/LettersToMyMother_small_1371471275.jpeg" /></div>
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
				   <td><a href="http://www.youtube.com/embed/A85EtOalcsM" target="_blank">Pacific Rim</a></td>
				   <td>Drama</td>
				   <td>110</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/A85EtOalcsM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/A85EtOalcsM" target="_blank"><img src="http://localhost/tripican/uploads/small/PacificRim_small_1371546116.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
				<p>Are you sure you want to delete this Movie record for Pacific Rim <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
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
		<div id="loader_elem53" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/53" method="post" id="movieForm53" movie="53" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/PacificRim_big_1371546116.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/PacificRim_small_1371546116.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">When an alien attack threatens the Earth's existence, giant robots piloted by humans are deployed to fight off the menace.

Starring: Charlie Hunnam; Idris Elba; Charlie Day.</textarea>
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
<td>2013-07-02 10:18:14</td>
</tr>
				<tr>

				   <td>54</td>
				   <td><a href="http://www.youtube.com/embed/g7kdUy5_WlI" target="_blank">The Wolverine</a></td>
				   <td>Drama</td>
				   <td>120</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/g7kdUy5_WlI">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/g7kdUy5_WlI" target="_blank"><img src="http://localhost/tripican/uploads/small/TheWolverine_small_1373878858.jpeg" height="100" width="100"></a></td>
				   <td>Yes</td>
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
				<p>Are you sure you want to delete this Movie record for The Wolverine <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
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
		<div id="loader_elem54" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/54" method="post" id="movieForm54" movie="54" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TheWolverine_big_1373878858.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheWolverine_small_1373878858.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Wolverine makes a voyage to modern-day Japan, where he encounters an enemy from his past that will impact on his future.</p><p>Starring: Famke Janssen; Hugh Jackman; Will Yun Lee.</p><p>THUR: 7:40pm </p></textarea>
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
<td>2013-07-15 10:00:58</td>
</tr>
				<tr>

				   <td>58</td>
				   <td><a href="http://www.youtube.com/embed/ZsBHTZdwxzw" target="_blank">LUV</a></td>
				   <td>Drama</td>
				   <td>94</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/ZsBHTZdwxzw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/ZsBHTZdwxzw" target="_blank"><img src="http://localhost/tripican/uploads/small/LUV_small_1372259612.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/58" method="post" id="movieForm58" movie="58" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/LUV_big_1372259612.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/LUV_small_1372259612.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>An 11-year-old boy gets a crash course in what it means to be a man when he spends a day with the ex-convict uncle he idolizes.</p><p>GENESIS DELUXE CINEMAS:<p>FRI-SAT: 12:45pm; 5:05pm; 9:25pm; 11:30pm</p><p>SUN-THUR: 12:45pm; 5:05pm; 9:25pm</p><p>SILVERBIRD CINEMAS:</p><p>TUE: 12:25pm</p></textarea>
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
<td>2013-07-15 21:35:47</td>
</tr>
				<tr>

				   <td>25</td>
				   <td><a href="http://www.youtube.com/embed/-xu3JLXfuwQ" target="_blank">Epic 3D</a></td>
				   <td>Comedy</td>
				   <td>143</td>
				   <td>3</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/-xu3JLXfuwQ">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/-xu3JLXfuwQ" target="_blank"><img src="http://localhost/tripican/uploads/small/Epic_small_1367298704.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/25" method="post" id="movieForm25" movie="25" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Epic_big_1367298704.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Epic_small_1367298704.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A teenager finds herself transported to a deep forest setting where a battle between the forces of good and the forces of evil is taking place. She bands together with a rag-tag group characters in order to save their world -- and ours.</p><p>FRI-THUR: 10:45am 12:55pm</p></textarea>
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
<td>2013-07-11 16:52:18</td>
</tr>
				<tr>

				   <td>34</td>
				   <td><a href="http://www.youtube.com/embed/A27xPYvqERw" target="_blank">Oblivion</a></td>
				   <td>Comedy</td>
				   <td>124</td>
				   <td>3</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/A27xPYvqERw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/A27xPYvqERw" target="_blank"><img src="http://localhost/tripican/uploads/small/Oblivion_small_1369758717.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/34" method="post" id="movieForm34" movie="34" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Oblivion_big_1369758717.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Oblivion_small_1369758717.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/712JPHER0uY" target="_blank"><img src="http://localhost/tripican/uploads/small/TheInternship_small_1372956251.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/59" method="post" id="movieForm59" movie="59" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TheInternship_big_1372839755.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheInternship_small_1372956251.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Two salesmen whose careers have been torpedoed by the digital age find their way into a coveted internship at Google, where they must compete with a group of young, tech-savvy geniuses for a shot at employment.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-SAT: 6:40pm; 9:05pm; 11:30pm</p><p>SUN-THUR: 6:40pm; 9:05pm</p><p>SILVERBIRD CINEMAS:</p><p>TUE: 11:35am; 4:15pm</p></textarea>
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
<td>2013-07-15 21:30:21</td>
</tr>
				<tr>

				   <td>60</td>
				   <td><a href="http://www.youtube.com/embed/2NvTjCELbrk" target="_blank">This Is 40</a></td>
				   <td>Comedy</td>
				   <td>134</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/2NvTjCELbrk">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/2NvTjCELbrk" target="_blank"><img src="http://localhost/tripican/uploads/small/ThisIs40_small_1372931069.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/60" method="post" id="movieForm60" movie="60" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/ThisIs40_big_1372931069.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/ThisIs40_small_1372931069.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A look at the lives of Pete and Debbie a few years after the events of Knocked Up.</p><p>SILVERBIRD CINEMAS:</p><p>TUE: 4:15pm</p></textarea>
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
<td>2013-07-15 21:40:50</td>
</tr>
				<tr>

				   <td>63</td>
				   <td><a href="http://www.youtube.com/embed/z2W7TaF9l6s" target="_blank">Admission</a></td>
				   <td>Comedy</td>
				   <td>107</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/z2W7TaF9l6s">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/z2W7TaF9l6s" target="_blank"><img src="http://localhost/tripican/uploads/small/Admission_small_1373460461.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/63" method="post" id="movieForm63" movie="63" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Admission_big_1373460461.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Admission_small_1373460461.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A Princeton admissions officer who is up for a major promotion takes a professional risk after she meets a college-bound alternative school kid who just might be the son she gave up years ago in a secret adoption.</p><p>SILVERBIRD CINEMAS:</p><p>TUE:6:45pm; 8:55pm</p></textarea>
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
<td>2013-07-16 10:05:32</td>
</tr>
				<tr>

				   <td>7</td>
				   <td><a href="http://www.youtube.com/embed/dKi5XoeTN0k" target="_blank">Fast and Furious 6</a></td>
				   <td>Action</td>
				   <td>145</td>
				   <td>7.5</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/dKi5XoeTN0k">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/dKi5XoeTN0k" target="_blank"><img src="http://localhost/tripican/uploads/small/FastandFurious6_small_1369648310.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/7" method="post" id="movieForm7" movie="7" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/FastandFurious6_big_1369648310.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/FastandFurious6_small_1369648310.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Agent Hobbs enlists the aid of Dom and team to help bring a rival gang, led by Owen Shaw, to justice. In exchange for clear records, they must put an end to their schemes, no matter how personal the cost.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-THUR: 12:25pm </p><p>SILVERBIRD CINEMAS:</p><p>TUE: 4:10pm; 6:40pm; 9:10pm</p></textarea>
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
<td>2013-07-15 21:26:57</td>
</tr>
				<tr>

				   <td>21</td>
				   <td><a href="http://www.youtube.com/embed/OAVuKPFKrNo" target="_blank">Man of Steel 3D</a></td>
				   <td>Action</td>
				   <td>148</td>
				   <td>8</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/OAVuKPFKrNo">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/OAVuKPFKrNo" target="_blank"><img src="http://localhost/tripican/uploads/small/ManofSteel3D_small_1372839962.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/21" method="post" id="movieForm21" movie="21" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/ManofSteel3D_big_1372839962.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/ManofSteel3D_small_1372839962.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A young journalist is forced to confront his secret extraterrestrial heritage when Earth is invaded by members of his race.</p><p>FRI-THUR: 3:10pm; 9:00pm</p></textarea>
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
<td>2013-07-11 22:17:01</td>
</tr>
				<tr>

				   <td>23</td>
				   <td><a href="http://www.youtube.com/embed/CZIt20emgLY" target="_blank">After Earth</a></td>
				   <td>Action</td>
				   <td>150</td>
				   <td>7</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/CZIt20emgLY">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/CZIt20emgLY" target="_blank"><img src="http://localhost/tripican/uploads/small/AfterEarth_small_1367266570.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/23" method="post" id="movieForm23" movie="23" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/AfterEarth_big_1367266570.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/AfterEarth_small_1367266570.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A crash landing leaves Kitai Raige and his father Cypher stranded on Earth, 1,000 years after events forced humanity's escape. With Cypher injured, Kitai must embark on a perilous journey to signal for help.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-THUR:10:20am; 8:05pm.</p><p>SILVERBIRD CINEMAS</p><p>TUE: 2:15pm</p></textarea>
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
<td>2013-07-15 21:38:03</td>
</tr>
				<tr>

				   <td>24</td>
				   <td><a href="http://www.youtube.com/embed/QAEkuVgt6Aw" target="_blank">Star Trek Into Darkness 2D</a></td>
				   <td>Action</td>
				   <td>132</td>
				   <td>3</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/QAEkuVgt6Aw">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/QAEkuVgt6Aw" target="_blank"><img src="http://localhost/tripican/uploads/small/StarTrekIntoDarkness_small_1372838576.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/24" method="post" id="movieForm24" movie="24" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/StarTrekIntoDarkness_big_1372838576.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/StarTrekIntoDarkness_small_1372838576.jpeg" /></div>
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
<td>2013-07-11 22:13:31</td>
</tr>
				<tr>

				   <td>33</td>
				   <td><a href="http://www.youtube.com/embed/bKtqhSLe8LM" target="_blank">The Host</a></td>
				   <td>Action</td>
				   <td>125</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/bKtqhSLe8LM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/bKtqhSLe8LM" target="_blank"><img src="http://localhost/tripican/uploads/small/TheHost_small_1368622019.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/33" method="post" id="movieForm33" movie="33" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TheHost_big_1368622019.png" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheHost_small_1368622019.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/vwx1f0kyNwI" target="_blank"><img src="http://localhost/tripican/uploads/small/OlympusHasFallen_small_1368633319.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/38" method="post" id="movieForm38" movie="38" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/OlympusHasFallen_big_1368633319.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/OlympusHasFallen_small_1368633319.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/NAh5lSmDk9Y" target="_blank"><img src="http://localhost/tripican/uploads/small/G.I_.Joe:Retaliation_small_1368634929_.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/40" method="post" id="movieForm40" movie="40" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/G.I_.Joe:Retaliation_big_1368634929_.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/G.I_.Joe:Retaliation_small_1368634929_.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/T6DJcgm3wNY" target="_blank"><img src="http://localhost/tripican/uploads/small/ManofSteel2D_small_1372950462.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/42" method="post" id="movieForm42" movie="42" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/ManofSteel2D_big_1372950462.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/ManofSteel2D_small_1372950462.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A young journalist is forced to confront his secret extraterrestrial heritage when Earth is invaded by members of his race..</p><p>FRI-THUR: 5:15pm</p></textarea>
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
<td>2013-07-11 22:15:58</td>
</tr>
				<tr>

				   <td>43</td>
				   <td><a href="http://www.youtube.com/embed/2CzoSeClcw0" target="_blank">Iron Man 3</a></td>
				   <td>Action</td>
				   <td>148</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/2CzoSeClcw0">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/2CzoSeClcw0" target="_blank"><img src="http://localhost/tripican/uploads/small/IronMan3(2D)_small_1369749172.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/43" method="post" id="movieForm43" movie="43" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/IronMan3(2D)_big_1369749172.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/IronMan3(2D)_small_1369749172.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/4AXbiCdmXgw" target="_blank"><img src="http://localhost/tripican/uploads/small/WhiteHouseDown_small_1372840149.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/51" method="post" id="movieForm51" movie="51" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/WhiteHouseDown_big_1372840149.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/WhiteHouseDown_small_1372840149.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>While on a tour of the White House with his young daughter, a Capitol policeman springs into action to save his child and protect the president from a heavily armed group of paramilitary invaders.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-SAT: 11:30am; 4:50pm; 6:10pm; 7:40pm; 10:30pm</p><p>SUN-THUR: 11:30am;  4:50pm; 6:10pm;7:40pm</p><p>SILVERBIRD CINEMAS:</p><p>TUE: 1:35pm; 6:40pm; 9:10pm</p></textarea>
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
<td>2013-07-15 21:23:38</td>
</tr>
				<tr>

				   <td>52</td>
				   <td><a href="http://www.youtube.com/embed/c-KKx0lcn2A" target="_blank">The Heat</a></td>
				   <td>Action</td>
				   <td>117</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/c-KKx0lcn2A">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/c-KKx0lcn2A" target="_blank"><img src="http://localhost/tripican/uploads/small/TheHeat_small_1373015840.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-52" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-52" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-52" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem52" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for The Heat <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="52">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-52" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
		<div id="loader_elem52" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/52" method="post" id="movieForm52" movie="52" enctype="multipart/form-data">
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
			<input type="text" name="movie_trailer_url"  value="http://www.youtube.com/embed/c-KKx0lcn2A" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="http://localhost/tripican/uploads/big/TheHeat_big_1373015840.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheHeat_small_1373015840.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Uptight FBI special agent Sarah Ashburn is paired with testy Boston cop Shannon Mullins in order to take down a ruthless drug lord. The hitch: neither woman has ever had a partner -- or a friend for that matter.</p><p>GENESIS DELUXE CINEMAS:</p><p>FRI-SAT: 12:15pm; 2:45pm</p><p>SUN-THUR: 12:15pm; 2:45pm</p><p>SILVERBIRD CINEMAS:</p><p> TUE: 11:15am; 2:00pm; 6:45pm; 9:05pm</p></textarea>
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
<td>2013-07-15 21:12:46</td>
</tr>
				<tr>

				   <td>61</td>
				   <td><a href="http://www.youtube.com/embed/AW1aAxBG_50" target="_blank">Sacrifice</a></td>
				   <td>Action</td>
				   <td>125</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/AW1aAxBG_50">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/AW1aAxBG_50" target="_blank"><img src="http://localhost/tripican/uploads/small/Sacrifice_small_1372942954.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/61" method="post" id="movieForm61" movie="61" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Sacrifice_big_1372942954.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Sacrifice_small_1372942954.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/RZUFiPDAdww" target="_blank"><img src="http://localhost/tripican/uploads/small/TheCartel_small_1373027525.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/62" method="post" id="movieForm62" movie="62" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TheCartel_big_1373027525.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheCartel_small_1373027525.jpeg" /></div>
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
<td>2013-07-11 22:07:25</td>
</tr>
				<tr>

				   <td>65</td>
				   <td><a href="http://www.youtube.com/embed/Pa9LS35AudM" target="_blank">Parker</a></td>
				   <td>Action</td>
				   <td>118</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/Pa9LS35AudM">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/Pa9LS35AudM" target="_blank"><img src="http://localhost/tripican/uploads/small/Parker_small_1373576353.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/65" method="post" id="movieForm65" movie="65" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Parker_big_1373576353.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Parker_small_1373576353.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A thief with a unique code of professional ethics is double-crossed by his crew and left for dead. Assuming a new disguise and forming an unlikely alliance with a woman on the inside, he looks to hijack the score of the crew's latest heist.</p><p>FRI-THUR: 2:20pm; 8:10pm; 10:40pm</p></textarea>
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
<td>2013-07-12 12:21:56</td>
</tr>
				<tr>

				   <td>67</td>
				   <td><a href="http://www.youtube.com/embed/PsM5YfDwOr0" target="_blank">Facade</a></td>
				   <td>Action</td>
				   <td>108</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/PsM5YfDwOr0">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/PsM5YfDwOr0" target="_blank"><img src="http://localhost/tripican/uploads/small/Facade_small_1373965198.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/67" method="post" id="movieForm67" movie="67" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Facade_big_1373965198.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Facade_small_1373965198.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Starring: Wole Ojo, Kehinde Bankole, Patricia Omam Okondor, Aret Edet and David Mackenzie</p><p>SILVERBIRD CINEMAS: TUE: 11:00am; 3:30pm</p></textarea>
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
<td>2013-07-16 10:04:55</td>
</tr>
				<tr>

				   <td>44</td>
				   <td><a href="http://www.youtube.com/embed/VeG3Zmk08UU" target="_blank">The Croods</a></td>
				   <td>Animation</td>
				   <td>98</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/VeG3Zmk08UU">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/VeG3Zmk08UU" target="_blank"><img src="http://localhost/tripican/uploads/small/TheCroods(2D)_small_1369749710.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/44" method="post" id="movieForm44" movie="44" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/TheCroods(2D)_big_1369749710.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/TheCroods(2D)_small_1369749710.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/yd71LWhCO4s" target="_blank"><img src="http://localhost/tripican/uploads/small/RiseoftheGuardians_small_1371386457.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/49" method="post" id="movieForm49" movie="49" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/RiseoftheGuardians_big_1371386457.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/RiseoftheGuardians_small_1371386457.jpeg" /></div>
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
				   
				   <td><a href="http://www.youtube.com/embed/HwXbtZXjbVE" target="_blank"><img src="http://localhost/tripican/uploads/small/DespicableMe2_small_1373460580.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/50" method="post" id="movieForm50" movie="50" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/DespicableMe2_big_1373460580.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/DespicableMe2_small_1373460580.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>Gru is recruited by the Anti-Villain League to help deal with a powerful new super criminal.</p><p>GENESIS DELUXE CINEMAS:<p>FRI-THUR: 10:00am; 12:10pm; 2:20pm; 4:30pm</p><p>SILVERBIRD CINEMAS:</p><p>TUE: 12:40pm; 4:45pm</p></textarea>
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
<td>2013-07-15 21:33:57</td>
</tr>
				<tr>

				   <td>57</td>
				   <td><a href="http://www.youtube.com/embed/bY75HyASyyc" target="_blank">Turbo 3D</a></td>
				   <td>Animation</td>
				   <td>97</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/bY75HyASyyc">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/bY75HyASyyc" target="_blank"><img src="http://localhost/tripican/uploads/small/Turbo3D_small_1371549687.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/57" method="post" id="movieForm57" movie="57" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Turbo3D_big_1371549687.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Turbo3D_small_1371549687.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">A freak accident might just help an everyday garden snail achieve his biggest dream: winning the Indy 500. 

Starring: Ryan Reynolds; Paul Giamatti; Maya Rudolph</textarea>
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
<td>2013-06-18 11:01:27</td>
</tr>
				<tr>

				   <td>66</td>
				   <td><a href="http://www.youtube.com/embed/T3z2ryJ2960" target="_blank">Epic</a></td>
				   <td>Animation</td>
				   <td>102</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/T3z2ryJ2960">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/T3z2ryJ2960" target="_blank"><img src="http://localhost/tripican/uploads/small/Epic_small_1373963915.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/66" method="post" id="movieForm66" movie="66" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/Epic_big_1373963915.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/Epic_small_1373963915.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><p>A teenager finds herself transported to a deep forest setting where a battle between the forces of good and the forces of evil is taking place. She bands together with a rag-tag group characters in order to save their world -- and ours.</p><p>SILVERBIRD CINEMAS:</p><p> TUE: 10:40am; 2:40pm</p></textarea>
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
<td>2013-07-16 10:06:14</td>
</tr>
				<tr>

				   <td>56</td>
				   <td><a href="http://www.youtube.com/embed/hvvusI6Sh64" target="_blank">Officer Down</a></td>
				   <td>Crime</td>
				   <td>98</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/hvvusI6Sh64">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/hvvusI6Sh64" target="_blank"><img src="http://localhost/tripican/uploads/small/OfficerDown_small_1371549237.jpeg" height="100" width="100"></a></td>
				   <td>No</td>
				   <td>Yes</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-56" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-56" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-56" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem56" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for Officer Down <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="56">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-56" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
		<div id="loader_elem56" class="span12"></div>
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/56" method="post" id="movieForm56" movie="56" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/OfficerDown_big_1371549237.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/OfficerDown_small_1371549237.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">When a cop's crooked past comes back to get him, can he do the right thing, or will he succumb to the threats of his dangerous connections? 

Starring: Stephen Dorff; Stephen Lang; David Boreanaz</textarea>
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
<td>2013-06-18 10:53:57</td>
</tr>
				<tr>

				   <td>46</td>
				   <td><a href="http://www.youtube.com/embed/ng9rjC8MOgU" target="_blank">Jack The Giant Slayer</a></td>
				   <td>Adventure</td>
				   <td>114</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/ng9rjC8MOgU">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/ng9rjC8MOgU" target="_blank"><img src="http://localhost/tripican/uploads/small/JackTheGiantSlayer_small_1369750711.jpeg" height="100" width="100"></a></td>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/46" method="post" id="movieForm46" movie="46" enctype="multipart/form-data">
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
					<img src="http://localhost/tripican/uploads/big/JackTheGiantSlayer_big_1369750711.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/JackTheGiantSlayer_small_1369750711.jpeg" /></div>
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
				   <td><a href="http://www.youtube.com/embed/w6aYjbpBm-E" target="_blank">Percy Johnson Sea of Monsters</a></td>
				   <td>Adventure</td>
				   <td>96</td>
				   <td>0</td>
				   
				   <!--<td><a href="http://www.youtube.com/embed/w6aYjbpBm-E">View Trailer</a></td> -->
				   
				   <td><a href="http://www.youtube.com/embed/w6aYjbpBm-E" target="_blank"><img src="http://localhost/tripican/uploads/small/PercyJohnsonSeaofMonsters_small_1371548889.jpeg" height="100" width="100"></a></td>
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
				<p>Are you sure you want to delete this Movie record for Percy Johnson Sea of Monsters <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
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
			<h3 id="myModalLabel">Percy Johnson Sea of Monsters</h3>
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
		<form class="form-horizontal" action="http://localhost/tripican/admin.php/movies/edit/55" method="post" id="movieForm55" movie="55" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="Percy Johnson Sea of Monsters" data-rule-required="true">
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
					<img src="http://localhost/tripican/uploads/big/PercyJohnsonSeaofMonsters_big_1371548889.jpeg" /></div>
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
					<img src="http://localhost/tripican/uploads/small/PercyJohnsonSeaofMonsters_small_1371548889.jpeg" /></div>
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
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here...">In order to restore their dying safe haven, the son of Poseidon and his friends embark on a quest to the Sea of Monsters to find the mythical Golden Fleece and to stop an ancient evil from rising.

Starring: Logan Lerman; Nathan Fillion; Alexandra Daddario</textarea>
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
<td>2013-06-18 10:48:09</td>
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