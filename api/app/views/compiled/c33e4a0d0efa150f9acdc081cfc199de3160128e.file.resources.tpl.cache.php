<?php /* Smarty version Smarty-3.1.11, created on 2013-09-26 06:40:32
         compiled from "application/velo-admin/views/templates/resource/resources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212820567352443950ae4da1-59622957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c33e4a0d0efa150f9acdc081cfc199de3160128e' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/resources.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212820567352443950ae4da1-59622957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'asset_base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52443950be36f5_81701614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52443950be36f5_81701614')) {function content_52443950be36f5_81701614($_smarty_tpl) {?><!--
    Author: Kolawole Gabriel
    Date: 11-04-2013
    Description: This tpl holds all asset includes like .css,.js etc, for the sake of clarity in the base layout file
-->
<?php $_smarty_tpl->tpl_vars["asset_base_url"] = new Smarty_variable(@BASE_URL, null, 0);?>

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/bootstrap.min.css">
<!-- Bootstrap responsive -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/bootstrap-responsive.min.css">
<!-- Font awesome Icons -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/font-awesome.min.css">
<!-- jQuery UI -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
<!-- Easy pie  -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/easy-pie-chart/jquery.easy-pie-chart.css">
<!-- chosen -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/chosen/chosen.css">

<!-- Datatables -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/datatable/TableTools.css">


<!-- multi select -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/multiselect/multi-select.css">
<!-- timepicker -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/timepicker/bootstrap-timepicker.min.css">
<!-- colorpicker -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/colorpicker/colorpicker.css">
<!-- Datepicker -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/datepicker/datepicker.css">
<!-- Plupload -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/plupload/jquery.plupload.queue.css">
<!-- select2 -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/select2/select2.css">
<!-- icheck -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/plugins/icheck/all.css">
<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/style.css">
<!-- Color CSS -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/css/themes.css">

<script>
    var SITE_BASE_URL = "<?php echo @BASE_URL;?>
";
</script>
<!-- jQuery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/jswrapper.js"></script>
<!-- Nice Scroll -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<!-- imagesLoaded -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
<!-- jQuery UI -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/jquery-ui/jquery.ui.slider.js"></script>
<!-- slimScroll -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/bootstrap.min.js"></script>
<!-- Chosen -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/chosen/chosen.jquery.min.js"></script>
<!-- Bootbox -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/bootbox/jquery.bootbox.js"></script>
<!-- Bootbox -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/form/jquery.form.min.js"></script>

<!-- Masked inputs -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
<!-- TagsInput -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<!-- Datepicker -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Timepicker -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Colorpicker -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/colorpicker/bootstrap-colorpicker.js"></script>
<!-- Chosen -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/chosen/chosen.jquery.min.js"></script>
<!-- MultiSelect -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/multiselect/jquery.multi-select.js"></script>
<!-- CKEditor -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/ckeditor/ckeditor.js"></script>
<!-- PLUpload -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/plupload/plupload.full.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/plupload/jquery.plupload.queue.js"></script>
<!-- Custom file upload -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/mockjax/jquery.mockjax.js"></script>
<!-- select2 -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/select2/select2.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/icheck/jquery.icheck.min.js"></script>

<!-- Validation -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/validation/jquery.validate.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/validation/additional-methods.min.js"></script>

<!-- Form -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/form/jquery.form.min.js"></script>

<!-- Wizard -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/wizard/jquery.form.wizard.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/mockjax/jquery.mockjax.js"></script>

<!-- dataTables -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/datatable/TableTools.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/datatable/ColReorder.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/datatable/ColVis.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/datatable/FixedColumns.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/datatable/dataTables.scroller.min.js"></script>

<!-- Sparkline -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/sparklines/jquery.sparklines.min.js"></script>
<!-- Easy pie -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<!-- Flot -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/plugins/flot/jquery.flot.resize.min.js"></script>

<!-- Theme framework -->
<!-- <script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/eakroko.min.js"></script> -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/eakroko.js"></script>
<!-- Theme scripts -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/application.min.js"></script>
<!-- Just for demonstration -->
<script src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/js/demonstration.min.js"></script>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/img/favicon.ico" />
<!-- Apple devices Homescreen icon -->
<link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/img/apple-touch-icon-precomposed.png" /><?php }} ?>