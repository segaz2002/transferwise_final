<?php /* Smarty version Smarty-3.1.11, created on 2014-04-08 11:48:28
         compiled from "velo-admin/views/templates/pages/ch_project_records.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3365416305344447cc84857-49383087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7667500b8a04f3522f1cf250a7b3a46796768ef' => 
    array (
      0 => 'velo-admin/views/templates/pages/ch_project_records.tpl',
      1 => 1396896272,
      2 => 'file',
    ),
    '6799fa7e1ad4b0b88d554e5c3f094e44748c06e6' => 
    array (
      0 => 'velo-admin/views/templates/layout/default.tpl',
      1 => 1396151490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3365416305344447cc84857-49383087',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5344447cd45e61_90419321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5344447cd45e61_90419321')) {function content_5344447cd45e61_90419321($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<?php $_smarty_tpl->tpl_vars["asset_base_url"] = new Smarty_variable(@BASE_URL, null, 0);?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <title>Church Manager</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/style.default.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/bootstrap-timepicker.min.css" rel="stylesheet"  />
    <link href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/jquery.datatables.css" rel="stylesheet">

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
        <?php echo $_smarty_tpl->getSubTemplate ('resource/navigator.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ('resource/info_summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
                        <img src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/images/photos/user4.png" alt="" />
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
    <h2><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['cIcon']->value;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['controller_name']->value;?>
 <span><?php echo $_smarty_tpl->tpl_vars['controller_description']->value;?>
</span></h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <?php  $_smarty_tpl->tpl_vars['crumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->key => $_smarty_tpl->tpl_vars['crumb']->value){
$_smarty_tpl->tpl_vars['crumb']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</a></li>
            <?php } ?>
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

		<div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="panel-btns">
                        <a href="#" class="panel-close">&times;</a>
                        <a href="#" class="minimize">&minus;</a>
                    </div><!-- panel-btns -->
                    <h3 class="panel-title">Project Records</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-info" id="table2">
                            <thead>
                            <tr>
                                <!-- <th></th> -->
                                <th>Code</th>
                                <th>Status</th>
                                <th>budget</th>
                                <th>Remark</th>
                                <th>Created</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(0, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
                                <tr class="gradeU">
                                    <!-- <td><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</td> -->
                                    <td><?php echo $_smarty_tpl->tpl_vars['project']->value['code'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</td>
                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['project']->value['budget'],2,".",",");?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['project']->value['remark'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['project']->value['created'];?>
</td>
                                    <td><a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['project']->value['code'];?>
Modal">View</a></td>
                                    <td><a class="btn btn-primary btn-xs expender" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
expenditures/expendReport/<?php echo $_smarty_tpl->tpl_vars['project']->value['code'];?>
">Expenditure</a></td>

                                    <td id="Statusloader_elem<?php echo $_smarty_tpl->tpl_vars['project']->value['code'];?>
"></td>
                                </tr>
                                <div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['project']->value['code'];?>
Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Project Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <span class="badge badge-primary">Project Owner: <?php echo $_smarty_tpl->tpl_vars['project']->value['handler'];?>
</span>
                                                <br>
                                                <?php echo $_smarty_tpl->tpl_vars['project']->value['remark'];?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </div><!-- modal-content -->
                                    </div><!-- modal-dialog -->
                                </div><!-- modal -->
                                <?php } ?>

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
<?php echo $_smarty_tpl->getSubTemplate ("resource/resources.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>






 

</body>


</html>
<?php }} ?>