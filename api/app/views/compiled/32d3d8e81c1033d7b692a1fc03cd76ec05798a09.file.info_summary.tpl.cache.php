<?php /* Smarty version Smarty-3.1.11, created on 2014-04-02 13:49:55
         compiled from "velo-admin\views\templates\resource\info_summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31035533c77f36e3a71-88415878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d3d8e81c1033d7b692a1fc03cd76ec05798a09' => 
    array (
      0 => 'velo-admin\\views\\templates\\resource\\info_summary.tpl',
      1 => 1394887361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31035533c77f36e3a71-88415878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_533c77f36ecd44_57014931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533c77f36ecd44_57014931')) {function content_533c77f36ecd44_57014931($_smarty_tpl) {?><div class="infosummary">
    <h5 class="sidebartitle">Information Summary</h5>
    <ul>
        <li>
            <div class="datainfo">
                <span class="text-muted">Daily Traffic</span>
                <h4>630, 201</h4>
            </div>
            <div id="sidebar-chart" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">Average Users</span>
                <h4>1, 332, 801</h4>
            </div>
            <div id="sidebar-chart2" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">Disk Usage</span>
                <h4>82.2%</h4>
            </div>
            <div id="sidebar-chart3" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">CPU Usage</span>
                <h4>140.05 - 32</h4>
            </div>
            <div id="sidebar-chart4" class="chart"></div>
        </li>
        <li>
            <div class="datainfo">
                <span class="text-muted">Memory Usage</span>
                <h4>32.2%</h4>
            </div>
            <div id="sidebar-chart5" class="chart"></div>
        </li>
    </ul>
</div><!-- infosummary --><?php }} ?>