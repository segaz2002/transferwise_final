<?php /* Smarty version Smarty-3.1.11, created on 2014-04-02 13:49:55
         compiled from "velo-admin\views\templates\resource\navigator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9162533c77f3659767-01364676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3604494229ee186117b6b311a8c9fac2cacd3c5f' => 
    array (
      0 => 'velo-admin\\views\\templates\\resource\\navigator.tpl',
      1 => 1396157091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9162533c77f3659767-01364676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_533c77f36c42e1_49023259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533c77f36c42e1_49023259')) {function content_533c77f36c42e1_49023259($_smarty_tpl) {?><ul class="nav nav-pills nav-stacked nav-bracket">
    <li><a href="index-2.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="nav-parent"><a href="#"><i class="fa fa-user"></i> <span>Members</span></a>
        <ul class="children">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
members/browse"><i class="fa fa-caret-right"></i> Browse Members</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
members/add"><i class="fa fa-caret-right"></i> Add New Member</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
testimonies/browse"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Testimonies</span></a></li>
    <li class="nav-parent"><a href="#"><i class="fa fa-suitcase"></i> <span>Treasury</span></a>
        <ul class="children">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
treasury/revenueRecord"><i class="fa fa-caret-right"></i> New Revenue Record</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
treasury/expenditure"><i class="fa fa-caret-right"></i> Expenditure</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
treasury/createSource"><i class="fa fa-caret-right"></i> Revenue Sources</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
projects/createProject"><i class="fa fa-map-marker"></i> <span>Projects</span></a></li>
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
<?php }} ?>