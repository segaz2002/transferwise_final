<?php /* Smarty version Smarty-3.1.11, created on 2013-09-26 06:40:32
         compiled from "application/velo-admin/views/templates/resource/content_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129187485452443950c4b704-72686794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fe416c6215176815309fcd5057eb53e596e5297' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/content_header.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129187485452443950c4b704-72686794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52443950c60849_92687121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52443950c60849_92687121')) {function content_52443950c60849_92687121($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/gabriel/public_html/tripican/application/velo-admin/libraries/smarty/libs/plugins/modifier.date_format.php';
?><!--
    Author: Kolawole Gabriel
    Date: 11-04-2013
    Description: This tpl holds the header of any content rendered
-->
    <div class="page-header">
        <div class="pull-left">
            <h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
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
							<?php echo smarty_modifier_date_format('+8 hour',"%B %e, %Y");?>

							<!-- February 22, 2013 -->
						</span>
                        <span>
							<?php echo smarty_modifier_date_format('+8 hour',"%A, %I:%M %p");?>

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
<?php }} ?>