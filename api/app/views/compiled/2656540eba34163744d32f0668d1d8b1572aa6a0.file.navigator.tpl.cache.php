<?php /* Smarty version Smarty-3.1.11, created on 2013-09-26 06:40:32
         compiled from "application/velo-admin/views/templates/resource/navigator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69586820052443950be6d97-38204221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2656540eba34163744d32f0668d1d8b1572aa6a0' => 
    array (
      0 => 'application/velo-admin/views/templates/resource/navigator.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69586820052443950be6d97-38204221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'das_active' => 0,
    'base_url' => 0,
    'mov_active' => 0,
    'ord_active' => 0,
    'asset_base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52443950c30249_10526375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52443950c30249_10526375')) {function content_52443950c30249_10526375($_smarty_tpl) {?><!--
    Author: Kolawole Gabriel
    Date: 11-04-2013
    Description: This tpl holds the navigation bar, for the sake of clarity in the base layout file
-->
    <div id="navigation">
    <div class="container-fluid">
    <a href="#" id="brand">Tripican</a>
    <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
    <ul class='main-nav'>
        <li <?php if (isset($_smarty_tpl->tpl_vars['das_active']->value)){?>class="<?php echo $_smarty_tpl->tpl_vars['das_active']->value;?>
"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">
                <i class="icon-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li <?php if (isset($_smarty_tpl->tpl_vars['mov_active']->value)){?>class="<?php echo $_smarty_tpl->tpl_vars['mov_active']->value;?>
"<?php }?>>
            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                <i class="icon-edit"></i>
                <span>Movies</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
movies/upload">Create New Movie</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
movies">Browse Movies</a>
                </li>

                <li class='dropdown-submenu'>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Show Time</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
showtimes">Add</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
showtimes/browse">View</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>
       
        <li <?php if (isset($_smarty_tpl->tpl_vars['ord_active']->value)){?>class="<?php echo $_smarty_tpl->tpl_vars['ord_active']->value;?>
"<?php }?>>
            <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                <i class="icon-table"></i>
                <span>Ticket Sales</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
orders">Movies</a>
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
            <a href="#" class='dropdown-toggle' data-toggle="dropdown"> Saka <img src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
assets/img/demo/user-avatar.jpg" alt=""></a>
            <ul class="dropdown-menu pull-right">

                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sysSettings">Change Password</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login/logoff">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div><?php }} ?>