<?php /*%%SmartyHeaderCode:88044838352b936c6c65019-36302689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd63addfdb29c2ccb8464666e92e74ec694c54c7' => 
    array (
      0 => 'velo-admin/views/templates/pages/showtimes.tpl',
      1 => 1374203246,
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
  'nocache_hash' => '88044838352b936c6c65019-36302689',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52b936c6de4ad7_71561219',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b936c6de4ad7_71561219')) {function content_52b936c6de4ad7_71561219($_smarty_tpl) {?><!doctype html>
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
							December 24, 2013
							<!-- February 22, 2013 -->
						</span>
                        <span>
							Tuesday, 08:24 AM
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

                                General system Information
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
													<option value="7">Fast and Furious 6</option>
													<option value="21">Man of Steel 3D</option>
													<option value="22">The Great Gatsby</option>
													<option value="23">After Earth</option>
													<option value="24">Star Trek Into Darkness 2D</option>
													<option value="25">Epic 3D</option>
													<option value="26">The Hangover 3</option>
													<option value="32">Home Again</option>
													<option value="33">The Host</option>
													<option value="34">Oblivion</option>
													<option value="38">Olympus Has Fallen</option>
													<option value="39"></option>
													<option value="40">G.I. Joe: Retaliation</option>
													<option value="42">Man of Steel 2D</option>
													<option value="43">Iron Man 3</option>
													<option value="44">The Croods</option>
													<option value="45">Temptation</option>
													<option value="46">Jack The Giant Slayer</option>
													<option value="47">Turning Point</option>
													<option value="48">Letters To My Mother</option>
													<option value="49">Rise of the Guardians</option>
													<option value="50">Despicable Me 2</option>
													<option value="51">White House Down</option>
													<option value="52"></option>
													<option value="53">Pacific Rim 3D</option>
													<option value="54">The Wolverine 3D</option>
													<option value="55">Percy Jackson Sea of Monsters</option>
													<option value="56"></option>
													<option value="57">Turbo 3D</option>
													<option value="58">LUV</option>
													<option value="59">The Internship</option>
													<option value="60">This Is 40</option>
													<option value="61">Sacrifice</option>
													<option value="62">The Cartel</option>
													<option value="63">Admission</option>
													<option value="65">Parker</option>
													<option value="66">Epic</option>
													<option value="67">Facade</option>
													<option value="68">House of Gold</option>
													<option value="69">Pacific Rim</option>
													<option value="70">Turbo</option>
													<option value="71">Man of Steel</option>
													<option value="72"></option>
													<option value="73">The Heat</option>
													<option value="77">Torn</option>
													<option value="78">Officer Down</option>
													<option value="79">Side Effects</option>
													<option value="80">Dead Man Down</option>
													<option value="81">World War Z</option>
													<option value="82">Cheaters</option>
													<option value="84">The Smurfs 2</option>
													<option value="85">The Smurfs 2 3D</option>
													<option value="86">The Wolverine</option>
													<option value="87">Elysium</option>
													<option value="88">2 Guns</option>
													<option value="89">Thor</option>
													<option value="90">This is the end</option>
													<option value="91">Grown Ups 2</option>
													<option value="92">A Case Of You</option>
													<option value="93">Once Upon A Time In Mumbai Dobara</option>
													<option value="94"></option>
													<option value="95">Murder At Prime Suite</option>
													<option value="96">Red Hot</option>
													<option value="97">Chennais Expres</option>
													<option value="98">We're The MIllers</option>
													<option value="99">Satyagraha</option>
													<option value="100">Peebles</option>
											</select></div>
				</div>
			</div>

			<div class="control-group ">
				<label for="cinema_id" class="control-label">Cinema</label>
				<div class="controls">
					<div class="input-xlarge"><select name="show_cinema" id="select_cinema" class='chosen-select'>
						<option>Select a cinema</option>
													<option value="1">Genesis Deluxe Cinemas, Palms Mall, Oniru, Lekki (Lagos)</option>
													<option value="11">Ozone (Lagos)</option>
													<option value="21">Silverbird Cinemas, Port Harcourt (Port Harcourt)</option>
													<option value="22">Silverbird Cinemas, Ikeja (Lagos)</option>
													<option value="23">Silverbird Cinemas, SEC, Abuja (Abuja)</option>
													<option value="24">Silverbird Cinemas, Uyo (Uyo)</option>
													<option value="25">Silverbird Cinemas, Galleria, Victoria Island (Lagos)</option>
													<option value="26">Silverbird Cinemas, Ceddi Plaza (Abuja)</option>
													<option value="27">Silverbird Cinemas, Accra (Accra)</option>
													<option value="29">Genesis Deluxe Cinemas, Port Harcourt (Port Harcourt)</option>
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
            <iframe id="iframeBrowser" src="http://localhost/beta.gateway/showtimes/get_showtimes" class="span11" style="height: 600px;"></iframe>

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