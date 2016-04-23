<?php /* Smarty version Smarty-3.1.11, created on 2013-09-26 06:40:32
         compiled from "application/velo-admin/views/templates/resource/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182775131952443950c32d00-97193327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bd5f83e5a649f4aa872f8475fd559e6a29aed49' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/sidebar.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182775131952443950c32d00-97193327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52443950c48ce8_98516097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52443950c48ce8_98516097')) {function content_52443950c48ce8_98516097($_smarty_tpl) {?><!--
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/genres">Movie Genres</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/cinemas">Cinemas</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/locations">Locations</a>
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sysSettings">Change Password</a>
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
transaction">Browse/Export</a>
                </li>
            </ul>
        </div>
    </div><?php }} ?>