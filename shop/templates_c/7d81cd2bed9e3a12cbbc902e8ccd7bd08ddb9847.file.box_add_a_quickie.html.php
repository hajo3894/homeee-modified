<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_add_a_quickie.html" */ ?>
<?php /*%%SmartyHeaderCode:81668185957bd5c1ec71474-85638996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d81cd2bed9e3a12cbbc902e8ccd7bd08ddb9847' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_add_a_quickie.html',
      1 => 1472024880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81668185957bd5c1ec71474-85638996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'INPUT_FIELD' => 0,
    'SUBMIT_BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c1ec793d6_65213787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1ec793d6_65213787')) {function content_57bd5c1ec793d6_65213787($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box1">
  <div class="box_header">
    <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_add_a_quickie');?>
</span> 
  </div>
  <div class="box_line"></div>
  <p class="midi lineheight16"><?php echo $_smarty_tpl->getConfigVariable('text_quickie');?>
</p>
  <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

  <div class="quickie_form cf">
    <?php echo $_smarty_tpl->tpl_vars['INPUT_FIELD']->value;
echo $_smarty_tpl->tpl_vars['SUBMIT_BUTTON']->value;?>

  </div>
  <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

</div><?php }} ?>
