<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 12:05:35
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/address_book.html" */ ?>
<?php /*%%SmartyHeaderCode:182044978157bd716fe9c812-91891031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09604be93dc50576487fc89d87badb7b612a6f83' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/address_book.html',
      1 => 1472024918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182044978157bd716fe9c812-91891031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'error' => 0,
    'ADDRESS_DEFAULT' => 0,
    'ADDRESS_COUNT' => 0,
    'addresses_data' => 0,
    'addresses' => 0,
    'BUTTON_BACK' => 0,
    'BUTTON_NEW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd716fed14c6_71385639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd716fed14c6_71385639')) {function content_57bd716fed14c6_71385639($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("address_book", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<h1><?php echo $_smarty_tpl->getConfigVariable('heading_address');?>
</h1>
<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?><div class="errormessage"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<div class="twoColums">
  <div class="highlightbox">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_standard');?>
</h4>
    <p><?php echo $_smarty_tpl->getConfigVariable('text_standard');?>
</p>
    <div class="hr_15"></div>
    <p><?php echo $_smarty_tpl->tpl_vars['ADDRESS_DEFAULT']->value;?>
</p>
  </div>
</div>

<div class="twoColums last">
  <div class="highlightbox plainright">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_addresses');?>
</h4>
    <p><?php echo $_smarty_tpl->tpl_vars['ADDRESS_COUNT']->value;?>
</p>
    <br />
    <?php  $_smarty_tpl->tpl_vars['addresses'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addresses']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addresses']->key => $_smarty_tpl->tpl_vars['addresses']->value) {
$_smarty_tpl->tpl_vars['addresses']->_loop = true;
?>
    <p><span style="float:right"><?php echo $_smarty_tpl->tpl_vars['addresses']->value['BUTTON_EDIT'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['addresses']->value['BUTTON_DELETE'];?>
</span>
      <strong><?php echo $_smarty_tpl->tpl_vars['addresses']->value['NAME'];?>
 <?php if ($_smarty_tpl->tpl_vars['addresses']->value['PRIMARY']=='1') {?> (<?php echo $_smarty_tpl->getConfigVariable('title_standard');?>
) <?php }?></strong><br />
      <?php echo $_smarty_tpl->tpl_vars['addresses']->value['ADDRESS'];?>

    </p>
    <div class="hr_1"></div>
    <?php } ?>
  </div>
</div>  
<br class="clearfix" />
<div class="button_left"><?php echo $_smarty_tpl->tpl_vars['BUTTON_BACK']->value;?>
</div>
<div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_NEW']->value;?>
</div>
  <?php }} ?>
