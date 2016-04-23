<?php /* Smarty version Smarty-3.1.11, created on 2013-12-25 04:55:40
         compiled from "velo-admin/views/templates/pages/locations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40451145052bac7bc8d39e5-16524306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd03b401fb4ca0c58d1a6517b1b20ea1c65bcfda8' => 
    array (
      0 => 'velo-admin/views/templates/pages/locations.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    '6799fa7e1ad4b0b88d554e5c3f094e44748c06e6' => 
    array (
      0 => 'velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40451145052bac7bc8d39e5-16524306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52bac7bca3ec63_08540395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bac7bca3ec63_08540395')) {function content_52bac7bca3ec63_08540395($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<?php $_smarty_tpl->tpl_vars["asset_base_url"] = new Smarty_variable(@BASE_URL, null, 0);?>
    <script type="text/javascript">
        var config = {
            base: "<<?php ?>?php echo base_url(); ?<?php ?>>",
            someOtherPref: 4
        };
    </script>

    <!--Javascript,Styles-->
    <?php echo $_smarty_tpl->getSubTemplate ('resource/resources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


</head>

<body>
    <!--The Navigation bar plus nav contents-->
    <?php echo $_smarty_tpl->getSubTemplate ('resource/navigator.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container-fluid" id="content">
    <!--Sidebar, sub-navigation-->
    <?php echo $_smarty_tpl->getSubTemplate ("resource/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    <div id="main">

        <div class="container-fluid">
            <!--The title of every page rendered-->
            <?php echo $_smarty_tpl->getSubTemplate ("resource/content_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <!--<div class="box-title">
                            <h3>
                                <i class="icon-reorder"></i>

                                <?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>

                            </h3>
                        </div> -->
                        <div class="box-content">
                            <!-- Content -->
                            

<div class="row-fluid">
        <div class="span12">
            <div class="box box-bordered box-color green">
                <div class="box-title">
                    <h3>
                        <i class="icon-exchange"></i>
                        Locations
                    </h3>
                </div>
                <div class="box-content ">

                        <form action="#" method="POST" class='form-horizontal' id="locationForm">
                            <div class="control-group">
                                <label for="genre" class="control-label">Add a Location</label>
                                <div class="controls">
                                    <input type="text" name="location_name" id="genre" class="input-xlarge" required>
                                    <span class="help-block" id="loader_elem"></span>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <button type="reset" class="btn">Cancel</button>
                                </div>

                            </div>
                        </form>

                    <div id="drawElement"></div>
                    <div class="alert alert-info alert-nomargin">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Notice!</h4>
                        Locations shows below on adding them...
                    </div>
                    <iframe id="iframeBrowser" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/get_locations" class="span11" style="height: 630px;"></iframe>
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