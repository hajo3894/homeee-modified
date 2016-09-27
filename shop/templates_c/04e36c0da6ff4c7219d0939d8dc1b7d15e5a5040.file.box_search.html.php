<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_search.html" */ ?>
<?php /*%%SmartyHeaderCode:111003365457bd5c1ec06139-39112170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e36c0da6ff4c7219d0939d8dc1b7d15e5a5040' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_search.html',
      1 => 1472024884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111003365457bd5c1ec06139-39112170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'INPUT_SEARCH' => 0,
    'BUTTON_SUBMIT' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c1ec0cd53_73366191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1ec0cd53_73366191')) {function content_57bd5c1ec0cd53_73366191($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

<?php echo $_smarty_tpl->tpl_vars['INPUT_SEARCH']->value;
echo $_smarty_tpl->tpl_vars['BUTTON_SUBMIT']->value;?>

<br class="clearfix" />
<?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

<div class="suggestionsBox" id="suggestions" style="display:none;">
  <div class="suggestionList" id="autoSuggestionsList">&nbsp;</div>
</div><?php }} ?>
