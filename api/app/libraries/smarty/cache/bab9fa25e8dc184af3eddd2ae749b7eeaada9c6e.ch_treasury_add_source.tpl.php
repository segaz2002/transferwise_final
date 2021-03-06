<?php /*%%SmartyHeaderCode:17430533b2ec076ce39-61404258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab9fa25e8dc184af3eddd2ae749b7eeaada9c6e' => 
    array (
      0 => 'velo-admin\\views\\templates\\pages\\ch_treasury_add_source.tpl',
      1 => 1396146419,
      2 => 'file',
    ),
    'dde87a1f48731d2ea4630fac7257cf58ab6c0152' => 
    array (
      0 => 'velo-admin\\views\\templates\\layout\\default.tpl',
      1 => 1396147888,
      2 => 'file',
    ),
    '3604494229ee186117b6b311a8c9fac2cacd3c5f' => 
    array (
      0 => 'velo-admin\\views\\templates\\resource\\navigator.tpl',
      1 => 1396157091,
      2 => 'file',
    ),
    '32d3d8e81c1033d7b692a1fc03cd76ec05798a09' => 
    array (
      0 => 'velo-admin\\views\\templates\\resource\\info_summary.tpl',
      1 => 1394887361,
      2 => 'file',
    ),
    '2fa1b51a612732c904e07a60feabb220675c955b' => 
    array (
      0 => 'velo-admin\\views\\templates\\resource\\resources.tpl',
      1 => 1395491912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17430533b2ec076ce39-61404258',
  'variables' => 
  array (
    'asset_base_url' => 0,
    'cIcon' => 0,
    'controller_name' => 0,
    'controller_description' => 0,
    'breadcrumbs' => 0,
    'crumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_533b2ec0e6a291_16383332',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533b2ec0e6a291_16383332')) {function content_533b2ec0e6a291_16383332($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <title>Church Manager</title>

    <link href="http://localhost/churchplus/assets/css/style.default.css" rel="stylesheet">
    <link href="http://localhost/churchplus/assets/css/bootstrap-timepicker.min.css" rel="stylesheet"  />
    <link href="http://localhost/churchplus/assets/css/jquery.datatables.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

<div class="leftpanel">

    <div class="logopanel">
        <h1><span>[</span> Church+ <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <h5 class="sidebartitle">Navigation</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket">
    <li><a href="index-2.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="nav-parent"><a href="#"><i class="fa fa-user"></i> <span>Members</span></a>
        <ul class="children">
            <li><a href="http://localhost/churchplus/members/browse"><i class="fa fa-caret-right"></i> Browse Members</a></li>
            <li><a href="http://localhost/churchplus/members/add"><i class="fa fa-caret-right"></i> Add New Member</a></li>
        </ul>
    </li>
    <li><a href="http://localhost/churchplus/testimonies/browse"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Testimonies</span></a></li>
    <li class="nav-parent"><a href="#"><i class="fa fa-suitcase"></i> <span>Treasury</span></a>
        <ul class="children">
            <li><a href="http://localhost/churchplus/treasury/revenueRecord"><i class="fa fa-caret-right"></i> New Revenue Record</a></li>
            <li><a href="http://localhost/churchplus/treasury/expenditure"><i class="fa fa-caret-right"></i> Expenditure</a></li>
            <li><a href="http://localhost/churchplus/treasury/createSource"><i class="fa fa-caret-right"></i> Revenue Sources</a></li>
        </ul>
    </li>
    <li><a href="http://localhost/churchplus/projects/createProject"><i class="fa fa-map-marker"></i> <span>Projects</span></a></li>
    <li><a href="tables.html"><i class="fa fa-th-list"></i> <span>Tables</span></a></li>
    <li class="nav-parent"><a href="#"><i class="fa fa-file-text"></i> <span>Pages</span></a>
        <ul class="children">
            <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a></li>
            <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a></li>
            <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
            <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a></li>
            <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a></li>
            <li><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
            <li><a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a></li>
            <li><a href="invoice.html"><i class="fa fa-caret-right"></i> Invoice</a></li>
            <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
            <li><a href="blank.html"><i class="fa fa-caret-right"></i> Blank Page</a></li>
            <li><a href="notfound.html"><i class="fa fa-caret-right"></i> 404 Page</a></li>
            <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
            <li><a href="signin.html"><i class="fa fa-caret-right"></i> Sign In</a></li>
            <li><a href="signup.html"><i class="fa fa-caret-right"></i> Sign Up</a></li>
        </ul>
    </li>
    <li class="nav-parent"><a href="layouts.html"><i class="fa fa-laptop"></i> <span>Skins &amp; Layouts</span></a>
        <ul class="children">
            <li><a href="layouts.html"><i class="fa fa-caret-right"></i> General Layouts</a></li>
            <li><a href="horizontal-menu.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Top Menu</a></li>
            <li><a href="horizontal-menu2.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Top Menu w/ Sidebar</a></li>
            <li><a href="fixed-width.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Fixed Width Page</a></li>
        </ul>
    </li>
</ul>


        <div class="infosummary">
    <h5 class="sidebartitle">Information Summary</h5>
    <ul>
        <li>
            <div class="datainfo">
                <span class="text-muted">Daily Traffic</span>
                <h4>630, 201</h4>
            </div>
            <div id="sidebar-chart" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">Average Users</span>
                <h4>1, 332, 801</h4>
            </div>
            <div id="sidebar-chart2" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">Disk Usage</span>
                <h4>82.2%</h4>
            </div>
            <div id="sidebar-chart3" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">CPU Usage</span>
                <h4>140.05 - 32</h4>
            </div>
            <div id="sidebar-chart4" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">Memory Usage</span>
                <h4>32.2%</h4>
            </div>
            <div id="sidebar-chart5" class="chart"></div>
        </li>
    </ul>
</div><!-- infosummary -->

    </div><!-- leftpanelinner -->
</div><!-- leftpanel -->

<div class="mainpanel">

<div class="headerbar">

    <a class="menutoggle"><i class="fa fa-bars"></i></a>



    <div class="header-right">
        <ul class="headermenu">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span class="badge">2</span>
                    </button>

                </div>
            </li>
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <span class="badge">1</span>
                    </button>

                </div>
            </li>
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-globe"></i>
                        <span class="badge">5</span>
                    </button>

                </div>
            </li>
            <li>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="http://localhost/churchplus/assets/images/photos/user4.png" alt="" />
                        John Doe
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                        <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div><!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
    <h2><i class="fa fa-table"></i> Projects <span>Church projects</span></h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
                            <li><a href="http://localhost/churchplus/systems">Systems</a></li>
                            <li><a href="http://localhost/churchplus/members/browse">Revenue</a></li>
                            <li><a href="">Testify</a></li>
                    </ol>
    </div>
</div>

<div class="contentpanel">
    <!-- content goes here... -->

    
    <div class="row">
        <div class="col-lg-6">
            <div id="loader_elem"></div>
        </div>
        <div class="col-lg-6"></div>
    </div>

	<div class="row">

        <form class="" id="newTreasurySourceForm">
		<div class="col-md-6">
			 <div class="panel panel-warning">
			   <div class="panel-heading">
				 <div class="panel-btns">
				   <a href="#" class="panel-close">&times;</a>
				   <a href="#" class="minimize">&minus;</a>
				 </div>
				 <h4 class="panel-title">A New Revenue Source for the Treasury</h4>
				 <p></p>
			   </div>
			   <div class="panel-body">

				 <div class="row">
				   <div class="col-sm-12">
					 <div class="form-group">
					   <label class="control-label">Title <span class="asterisk">*</span></label>
					   <input type="text" name="title" class="form-control" />
					 </div>
				   </div><!-- col-sm-6 -->
				 </div><!-- row -->

	             <div class="row">
				   <div class="col-sm-12">
					 <div class="form-group">
					   <label class="control-label">Remark </label>
					   <textarea class="form-control" name="remark"></textarea>
					 </div>
				   </div><!-- col-sm-6 -->

				 </div><!-- row -->

            </div><!-- panel-body -->
            <div class="panel-footer">
              <input class="btn btn-warning" value="SUBMIT" type="submit"/>
            </div>
          </div>
        </div>
        </form>
		<div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="panel-btns">
                        <a href="#" class="panel-close">&times;</a>
                        <a href="#" class="minimize">&minus;</a>
                    </div><!-- panel-btns -->
                    <h3 class="panel-title">Current Revenue Sources</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-info" id="table2">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                                                <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: revenueSources</p>
<p>Filename: compiled/bab9fa25e8dc184af3eddd2ae749b7eeaada9c6e.file.ch_treasury_add_source.tpl.cache.php</p>
<p>Line Number: 247</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: compiled/bab9fa25e8dc184af3eddd2ae749b7eeaada9c6e.file.ch_treasury_add_source.tpl.cache.php</p>
<p>Line Number: 247</p>

</div>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div>
            </div><!-- panel -->
		</div>
	</div>


</div>

</div><!-- mainpanel -->

<div class="rightpanel">
    <!-- Nav tabs -->
     <!-- Tab panes -->

</div><!-- rightpanel -->

</section>


<script src="http://localhost/churchplus/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>

<script src="http://localhost/churchplus/assets/js/jquery-1.10.2.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="http://localhost/churchplus/assets/js/bootstrap.min.js"></script>
<script src="http://localhost/churchplus/assets/js/modernizr.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery.sparkline.min.js"></script>
<script src="http://localhost/churchplus/assets/js/toggles.min.js"></script>
<script src="http://localhost/churchplus/assets/js/retina.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery.cookies.js"></script>
<script src="http://localhost/churchplus/assets/js/bootstrap-wizard.min.js"></script>
<script src="http://localhost/churchplus/assets/js/jquery.validate.min.js"></script>
<script src="http://localhost/churchplus/assets/js/bootstrap-timepicker.min.js"></script>

<script src="http://localhost/churchplus/assets/js/custom.js"></script>
<script src="http://localhost/churchplus/assets/jswrapper.js"></script>


<script src="http://localhost/churchplus/assets/js/jquery.datatables.min.js"></script>
<script src="http://localhost/churchplus/assets/js/chosen.jquery.min.js"></script>






 

</body>


</html>
<?php }} ?>