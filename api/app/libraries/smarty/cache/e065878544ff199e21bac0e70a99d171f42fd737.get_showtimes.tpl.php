<?php /*%%SmartyHeaderCode:1155041752b936c7ae54c7-84098598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e065878544ff199e21bac0e70a99d171f42fd737' => 
    array (
      0 => 'velo-admin/views/templates/pages/get_showtimes.tpl',
      1 => 1374203876,
      2 => 'file',
    ),
    'd2377831ac22512fad2e494a732dd1afddc8e889' => 
    array (
      0 => 'velo-admin/views/templates/resource/resources.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155041752b936c7ae54c7-84098598',
  'variables' => 
  array (
    'shows' => 0,
    'r' => 0,
    'result_links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52b936c7c263e8_24659232',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b936c7c263e8_24659232')) {function content_52b936c7c263e8_24659232($_smarty_tpl) {?><!--
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
                            <td>4981</td>
                            <td>Pacific Rim</td>
                            <td>Silverbird Cinemas, Ikeja</td>
                            <td>Lagos</td>
                            <td>2013-09-06</td>
                            <td>04:40 PM</td>
                            <td>20</td>
                            <td>1500.00</td>
                            
                            <td>2013-09-05 20:51:18</td>
                      
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
                            
                            <td>2013-09-05 20:50:39</td>
                      
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
                            
                            <td>2013-09-05 20:50:09</td>
                      
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
                            
                            <td>2013-09-05 20:49:19</td>
                      
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
                            
                            <td>2013-09-05 20:48:21</td>
                      
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
                            
                            <td>2013-09-05 20:46:16</td>
                      
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
                            
                            <td>2013-09-05 20:40:08</td>
                      
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
                            
                            <td>2013-09-05 20:39:10</td>
                      
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
                            
                            <td>2013-09-05 20:38:31</td>
                      
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
                            
                            <td>2013-09-05 20:37:38</td>
                      
                        </tr>
                        
                                             <tr>
                               
                                <td colspan="9">
                                    <div class="pagination pagination-medium">
                                        <div class="pagination">
                                            <ul>
                                                                                                      <li>&nbsp;<strong>1</strong>&nbsp;<a href="http://localhost/beta.gateway/showtimes/get_showtimes/10">2</a>&nbsp;<a href="http://localhost/beta.gateway/showtimes/get_showtimes/20">3</a>&nbsp;<a href="http://localhost/beta.gateway/showtimes/get_showtimes/10">&gt;</a>&nbsp;&nbsp;<a href="http://localhost/beta.gateway/showtimes/get_showtimes/4240">Last &rsaquo;</a></li>
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