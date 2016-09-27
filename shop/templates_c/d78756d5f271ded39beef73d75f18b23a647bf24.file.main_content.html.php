<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/main_content.html" */ ?>
<?php /*%%SmartyHeaderCode:77364800857bd5c1ecfd086-70392286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd78756d5f271ded39beef73d75f18b23a647bf24' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/main_content.html',
      1 => 1472024924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77364800857bd5c1ecfd086-70392286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'MODULE_error' => 0,
    'title' => 0,
    'text' => 0,
    'MODULE_new_products' => 0,
    'MODULE_upcoming_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c1ed11548_33647925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1ed11548_33647925')) {function content_57bd5c1ed11548_33647925($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_error']->value)) {
echo $_smarty_tpl->tpl_vars['MODULE_error']->value;
}?>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<div class="cf"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_new_products']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['MODULE_new_products']->value;?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_upcoming_products']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['MODULE_upcoming_products']->value;?>

<?php }?><?php }} ?>
