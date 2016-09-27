<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_newsletter.html" */ ?>
<?php /*%%SmartyHeaderCode:150962949657bd5c1ec63533-88213232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f50a1bc54f3b32c0a4149a0726afe2a36aaeac7' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_newsletter.html',
      1 => 1472024883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150962949657bd5c1ec63533-88213232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'FIELD_EMAIL' => 0,
    'BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c1ec6c0d5_81089166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1ec6c0d5_81089166')) {function content_57bd5c1ec6c0d5_81089166($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box3">
  <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_guestnewsletter');?>
</div>
  <div class="box3_line"></div>
  <p class="box3_sub"><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
:</p>
  <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

  <div class="newsletter_form">
    <?php echo $_smarty_tpl->tpl_vars['FIELD_EMAIL']->value;
echo $_smarty_tpl->tpl_vars['BUTTON']->value;?>

  </div>
  <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

  <p class="box3_sub"><?php echo $_smarty_tpl->getConfigVariable('text_newsletter');?>
</p>
</div><?php }} ?>
