<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 12:04:26
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/error_message.html" */ ?>
<?php /*%%SmartyHeaderCode:199143295957bd712ac4d7e8-62199533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7e9e2935e76c845a49d256aeff654225a7a24b' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/error_message.html',
      1 => 1472024922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199143295957bd712ac4d7e8-62199533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'ERROR' => 0,
    'LINK_ADVANCED' => 0,
    'FORM_ACTION' => 0,
    'INPUT_SEARCH' => 0,
    'BUTTON_SUBMIT' => 0,
    'FORM_END' => 0,
    'BUTTON' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd712ac5a974_54149994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd712ac5a974_54149994')) {function content_57bd712ac5a974_54149994($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("error_handler", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<h1><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</h1>
<p><?php echo $_smarty_tpl->getConfigVariable('text_search_again');?>
<br /><?php echo $_smarty_tpl->getConfigVariable('text_search_advanced1');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['LINK_ADVANCED']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('text_search_advanced2');?>
</a> <?php echo $_smarty_tpl->getConfigVariable('text_search_advanced3');?>
</p>

<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

<div class="highlightbox cf"> 
  <span class="hb_box_text"><?php echo $_smarty_tpl->getConfigVariable('text_search');?>
</span>    
  <span class="hb_box_input"><?php echo $_smarty_tpl->tpl_vars['INPUT_SEARCH']->value;?>
</span>    
  <span class="hb_box_button"><?php echo $_smarty_tpl->tpl_vars['BUTTON_SUBMIT']->value;?>
</span>    
</div>
<?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

<div class="button_left"><?php echo $_smarty_tpl->tpl_vars['BUTTON']->value;?>
</div>
<br class="clearfix" /><?php }} ?>
