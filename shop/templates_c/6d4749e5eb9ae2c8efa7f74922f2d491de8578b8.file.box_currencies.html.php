<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_currencies.html" */ ?>
<?php /*%%SmartyHeaderCode:165308446557bd5c1ece4669-87543754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d4749e5eb9ae2c8efa7f74922f2d491de8578b8' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_currencies.html',
      1 => 1472024881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165308446557bd5c1ece4669-87543754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'BOX_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c1ecedbd0_19445472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1ecedbd0_19445472')) {function content_57bd5c1ecedbd0_19445472($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box1">
    <div class="box_header">
      <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_currencies');?>
</span> 
    </div>
    <div class="box_line"></div>
    <div class="box_select"><?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>
</div>
  </div>
<?php }?><?php }} ?>
