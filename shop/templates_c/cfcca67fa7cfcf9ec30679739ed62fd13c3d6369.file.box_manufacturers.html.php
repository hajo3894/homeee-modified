<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_manufacturers.html" */ ?>
<?php /*%%SmartyHeaderCode:12735872257bd5c1eb963e9-95708648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfcca67fa7cfcf9ec30679739ed62fd13c3d6369' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_manufacturers.html',
      1 => 1472024882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12735872257bd5c1eb963e9-95708648',
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
  'unifunc' => 'content_57bd5c1eba0522_90341663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1eba0522_90341663')) {function content_57bd5c1eba0522_90341663($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/www/htdocs/w014f718/webshop/modified/includes/external/smarty/smarty_3/plugins/modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
<div class="box1">
  <div class="box_header">
    <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_manufacturers');?>
</span> 
  </div>
  <div class="box_line"></div>
  <div class="box_select"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['BOX_CONTENT']->value,"<br />",'');?>
</div>
</div>
<?php }?><?php }} ?>
