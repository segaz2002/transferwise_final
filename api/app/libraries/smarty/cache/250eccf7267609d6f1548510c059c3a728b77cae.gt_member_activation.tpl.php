<?php /*%%SmartyHeaderCode:585122048530a7008617ba9-68750393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250eccf7267609d6f1548510c059c3a728b77cae' => 
    array (
      0 => 'velo-admin/views/templates/pages/gt_member_activation.tpl',
      1 => 1388059253,
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
      1 => 1388061615,
      2 => 'file',
    ),
    'dabefd1256e2e94aa91b300ef84e8d2ced967584' => 
    array (
      0 => 'velo-admin/views/templates/resource/sidebar.tpl',
      1 => 1388061447,
      2 => 'file',
    ),
    '479f7b60f300e0cf6c83e7c3d59d1b45f9b1036c' => 
    array (
      0 => 'velo-admin/views/templates/resource/content_header.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585122048530a7008617ba9-68750393',
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_530a7008816288_73915190',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a7008816288_73915190')) {function content_530a7008816288_73915190($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title>Unactivated Members</title>
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
            <a >
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
                    <a href="http://localhost/beta.gateway/members/browse">Members List</a>
                </li>
                <li>
                    <a href="http://localhost/beta.gateway/members/unactivated">Manual Activation</a>
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
                
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Settings</span></a>
            </div>
            <ul class="subnav-menu">
                
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Transactions</span></a>
            </div>
            <ul class="subnav-menu">
                
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
            <h1>Unactivated Members</h1>
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
							February 23, 2014
							<!-- February 22, 2013 -->
						</span>
                        <span>
							Sunday, 11:02 PM
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
<p>Filename: compiled/250eccf7267609d6f1548510c059c3a728b77cae.file.gt_member_activation.tpl.cache.php</p>
<p>Line Number: 84</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: compiled/250eccf7267609d6f1548510c059c3a728b77cae.file.gt_member_activation.tpl.cache.php</p>
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
                    <form class="form-search form-skin shadow" method="post" action="http://localhost/beta.gateway/members/unactivated">
                        <legend>Browse Unactivated Members <label class="w"></label></legend>
                        
                        <input type="text" class="input-xxlarge search-query" value="" name="term">

                        <button type="submit" class="btn btn-large btn-primary no-radius">Search</button>
                        <label class="radio">
                            <input type="radio" name="filter" id="optionsRadios1" value="email" checked> Email
                        </label>


                        <a href="http://localhost/beta.gateway/members/resetFilters" class="pull-right btn btn-medium">Reset Filter</a>
                    </form>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargine">
                        <thead>

                            <tr>
                                <th></th>
                                <th>Email</th>
                                <th>Balance</th>
                                <th>Registered</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                               
                                <td colspan="10">
                                    <div class="pagination pagination-medium">
                                        <div class="pagination">
                                            <ul>
                                                                                                      <li></li>
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