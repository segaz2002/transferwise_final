<?php /*%%SmartyHeaderCode:86388012351e8b018e88c87-94753132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732c39aeeb6d690c2267d799c0361be1c86bdc7c' => 
    array (
      0 => 'application/velo-admin/views/templates/pages/get_showtimes.tpl',
      1 => 1374203876,
      2 => 'file',
    ),
    'c33e4a0d0efa150f9acdc081cfc199de3160128e' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/resources.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86388012351e8b018e88c87-94753132',
  'variables' => 
  array (
    'shows' => 0,
    'r' => 0,
    'result_links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51e8b019024f45_63673431',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8b019024f45_63673431')) {function content_51e8b019024f45_63673431($_smarty_tpl) {?><!--
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
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3>
                    <i class="icon-table"></i>
                    Movie List
                </h3>
            </div>
            <div class="box-content nopadding">
                <!-- <table class="table table-hover table-nomargin table-bordered dataTable-columnfilter dataTable"> -->
                <table class="table table-hover table-nomargin table-bordered dataTable dataTable-fixedcolumn dataTable-scroll-x dataTable-scroll-y ">
                <thead>

                    <tr>
						<th>ID</th>
                        <th>Movie</th>
                        <th>Cinema</th>
                        <th>Location</th>

                        <th>Date</th>
                        <th>Time</th>
                        <th>Tickets</th>
                        <th>Price</th>
                        <th>Created</th>

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
                            
                            <td>2013-07-16 14:36:08</td>
                      
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
                            
                            <td>2013-07-16 14:34:36</td>
                      
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
                            
                            <td>2013-07-16 14:32:41</td>
                      
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
                            
                            <td>2013-07-16 14:31:56</td>
                      
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
                            
                            <td>2013-07-16 14:30:29</td>
                      
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
                            
                            <td>2013-07-16 14:29:56</td>
                      
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
                            
                            <td>2013-07-16 14:24:40</td>
                      
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
                            
                            <td>2013-07-16 14:23:47</td>
                      
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
                            
                            <td>2013-07-16 14:22:32</td>
                      
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
                            
                            <td>2013-07-16 14:20:16</td>
                      
                        </tr>
                        
                                             <tr>
                               
                                <td colspan="9">
                                    <div class="pagination pagination-medium">
                                        <div class="pagination">
                                            <ul>
                                                                                                      <li>&nbsp;<strong>1</strong>&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/get_showtimes/10">2</a>&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/get_showtimes/20">3</a>&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/get_showtimes/10">&gt;</a>&nbsp;&nbsp;<a href="http://localhost/tripican/admin.php/showtimes/get_showtimes/1400">Last &rsaquo;</a></li>
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
</div><?php }} ?>