<?php /* Smarty version Smarty-3.1.11, created on 2014-04-08 11:50:53
         compiled from "velo-admin/views/templates/pages/ch_project_expenditure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14270725815344450df1a793-25947111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ab6f0f57045732d2cc892480202500d6eab1b34' => 
    array (
      0 => 'velo-admin/views/templates/pages/ch_project_expenditure.tpl',
      1 => 1396983050,
      2 => 'file',
    ),
    '6799fa7e1ad4b0b88d554e5c3f094e44748c06e6' => 
    array (
      0 => 'velo-admin/views/templates/layout/default.tpl',
      1 => 1396151490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14270725815344450df1a793-25947111',
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
  'unifunc' => 'content_5344450e0844f9_63057002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5344450e0844f9_63057002')) {function content_5344450e0844f9_63057002($_smarty_tpl) {?><!DOCTYPE html>
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

    
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">

                    <h5 class="subtitle mb10">Project Handler</h5>
                    <img src="images/themeforest.png" class="img-responsive mb10" alt="" />
                    <address>
                        <strong><?php echo $_smarty_tpl->tpl_vars['projectDetail']->value['handler'];?>
</strong><br>

                    </address>

                </div><!-- col-sm-6 -->

                <div class="col-sm-6 text-right">
                    <h5 class="subtitle mb10">Project Code</h5>
                    <h4 class="text-primary"><?php echo $_smarty_tpl->tpl_vars['projectDetail']->value['code'];?>
</h4>

                    <p class="text-success"><strong>Opened Date:</strong> <?php echo $_smarty_tpl->tpl_vars['projectDetail']->value['created'];?>
</p>
                    <p><strong class="badge badge-danger">Budget</strong> <span class="text text-info"><?php echo number_format($_smarty_tpl->tpl_vars['projectDetail']->value['budget'],2,".",",");?>
</span></p>

                </div>
            </div><!-- row -->

            <div class="table-responsive">
                <table class="table table-invoice">
                    <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="text-primary"><strong>Wordpress Template Customization</strong></div>
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small>
                        </td>
                        <td>1</td>
                        <td>$99.00</td>
                        <td>$99.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-primary"><strong>PSD to HTML5 Conversion</strong></div>
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small>
                        </td>
                        <td>3</td>
                        <td>$150.00</td>
                        <td>$450.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-primary"><strong>Email Template</strong></div>
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small>
                        </td>
                        <td>2</td>
                        <td>$35.00</td>
                        <td>$70.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-primary"><strong>Wordpress Theme Development</strong></div>
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small>
                        </td>
                        <td>1</td>
                        <td>$230.00</td>
                        <td>$230.00</td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->

            <table class="table table-total">
                <tbody>
                <tr>
                    <td><strong>Sub Total :</strong></td>
                    <td>$849.00</td>
                </tr>
                <tr>
                    <td><strong>VAT :</strong></td>
                    <td>$67.23</td>
                </tr>
                <tr>
                    <td><strong>TOTAL :</strong></td>
                    <td>$916.23</td>
                </tr>
                </tbody>
            </table>

            <div class="text-right btn-invoice">
                <button class="btn btn-primary mr5" data-toggle="modal" data-target="#expenditureModal"><i class="fa fa-dollar mr5"></i> New Expenditure</button>
                <button class="btn btn-white"><i class="fa fa-print mr5"></i> Print </button>
            </div>
            <div class="modal fade" id="expenditureModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Create New Project Expenditure</h4>
                        </div>
                        <div class="modal-body">
                         <form id="expenditureForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Portfolio <span class="asterisk">*</span></label>
                                        <input type="text" name="title" class="form-control" />
                                    </div>
                                </div><!-- col-sm-6 -->
                            </div><!-- row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Quantity <span class="asterisk">*</span></label>
                                        <input type="text" name="quantity" class="form-control" required/>
                                    </div>
                                </div><!-- col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Unit Price <span class="asterisk">*</span></label>
                                        <input type="text" name="unit_price" class="form-control" required/>
                                    </div>
                                </div><!-- col-sm-6 -->
                            </div><!-- row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Receipt No. <span class="asterisk">*</span></label>
                                        <input type="text" name="receipt_number" class="form-control" required>
                                    </div>
                                </div><!-- col-sm-6 -->
                            </div><!-- row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Expenditure Comment <span class="asterisk">*</span></label>
                                        <textarea class="form-control" name="comment"></textarea>
                                    </div>
                                </div><!-- col-sm-6 -->

                            </div><!-- row -->
                          </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Record Expenditure</button>
                        </div>
                    </div><!-- modal-content -->
                </div><!-- modal-dialog -->
            </div><!-- modal -->
            <div class="mb40"></div>

            <div class="well text-center">
                All Project expenditure are listed above accordingly...
            </div>
        </div><!-- panel-body -->
    </div><!-- panel -->


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