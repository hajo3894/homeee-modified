<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 12:04:26
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/sub_categories_listing.html" */ ?>
<?php /*%%SmartyHeaderCode:8744419257bd712ac0d4a1-97437447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b839fcf17ad1abf1e3c1b2ae2be2358499c7fb0e' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/sub_categories_listing.html',
      1 => 1472024927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8744419257bd712ac0d4a1-97437447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'categories_content' => 0,
    'TR_COLS' => 0,
    'categories_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd712ac46e91_00679094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd712ac46e91_00679094')) {function content_57bd712ac46e91_00679094($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/www/htdocs/w014f718/webshop/modified/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("categorie_listing", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['categories_content']->value)&&$_smarty_tpl->tpl_vars['categories_content']->value!=''&&$_smarty_tpl->tpl_vars['TR_COLS']->value>0) {?>
<h4><?php echo $_smarty_tpl->getConfigVariable('heading_more_categories');?>
</h4>
<div class="subcats cf">
  <?php  $_smarty_tpl->tpl_vars['categories_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories_data']->_loop = false;
 $_smarty_tpl->tpl_vars['spalten'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aussen']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['categories_data']->key => $_smarty_tpl->tpl_vars['categories_data']->value) {
$_smarty_tpl->tpl_vars['categories_data']->_loop = true;
 $_smarty_tpl->tpl_vars['spalten']->value = $_smarty_tpl->tpl_vars['categories_data']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aussen']['iteration']++;
?>
  <div class="subcatlist<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['aussen']['iteration'] % $_smarty_tpl->tpl_vars['TR_COLS']->value)) {?> last<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_LINK'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_IMAGE']) {?><span class="subcat_image"><span class="subcat_image_inner"><img src="<?php echo $_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_NAME']);?>
" /></span></span><?php }?>
      <span class="subcat_title"><span class="subcat_title_inner"><?php echo $_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_NAME'];?>
</span></span>
    </a>
    
  </div>
  <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['aussen']['iteration'] % $_smarty_tpl->tpl_vars['TR_COLS']->value)) {?><br class="clearfix" /><?php }?>
  <?php } ?>
</div>
<?php }?><?php }} ?>
