<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 12:14:36
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/categorie_listing/categorie_listing.html" */ ?>
<?php /*%%SmartyHeaderCode:25559429257bd738c89a075-56393876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae22188ef5f517b26ad80210e5df4b17eb8edab' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/categorie_listing/categorie_listing.html',
      1 => 1472024995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25559429257bd738c89a075-56393876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'CATEGORIES_HEADING_TITLE' => 0,
    'CATEGORIES_NAME' => 0,
    'CATEGORIES_DESCRIPTION' => 0,
    'CATEGORIES_IMAGE' => 0,
    'module_content' => 0,
    'TR_COLS' => 0,
    'module_data' => 0,
    'MODULE_new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd738c8e6688_29664639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd738c8e6688_29664639')) {function content_57bd738c8e6688_29664639($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/www/htdocs/w014f718/webshop/modified/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("categorie_listing", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['CATEGORIES_HEADING_TITLE']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_HEADING_TITLE']->value!='') {?>
  <h1><?php echo $_smarty_tpl->tpl_vars['CATEGORIES_HEADING_TITLE']->value;?>
</h1>
<?php } else { ?>
  <h1><?php echo $_smarty_tpl->tpl_vars['CATEGORIES_NAME']->value;?>
</h1>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value!='')||isset($_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value!='') {?>
<div class="cat_description cf">
  <?php if (isset($_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value!='') {?><img class="cat_image" src="<?php echo $_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['CATEGORIES_NAME']->value);?>
" /><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value!='')) {
echo $_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value;
}?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['module_content']->value!=''&&$_smarty_tpl->tpl_vars['TR_COLS']->value>0) {?>
<h4><?php echo $_smarty_tpl->getConfigVariable('heading_more_categories');?>
</h4>
<div class="subcats cf">
  <?php $_smarty_tpl->tpl_vars["anzahl_spalten"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['TR_COLS']->value), null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['module_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module_data']->_loop = false;
 $_smarty_tpl->tpl_vars['spalten'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aussen']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['module_data']->key => $_smarty_tpl->tpl_vars['module_data']->value) {
$_smarty_tpl->tpl_vars['module_data']->_loop = true;
 $_smarty_tpl->tpl_vars['spalten']->value = $_smarty_tpl->tpl_vars['module_data']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aussen']['iteration']++;
?>
  <div class="subcatlist<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['aussen']['iteration'] % $_smarty_tpl->tpl_vars['TR_COLS']->value)) {?> last<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['CATEGORIES_LINK'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['module_data']->value['CATEGORIES_IMAGE']) {?><span class="subcat_image"><span class="subcat_image_inner"><img src="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['CATEGORIES_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['CATEGORIES_NAME']);?>
" /></span></span><?php }?>
      <span class="subcat_title"><span class="subcat_title_inner"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['CATEGORIES_NAME'];?>
</span></span>
    </a>
    
  </div>
  <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['aussen']['iteration'] % $_smarty_tpl->tpl_vars['TR_COLS']->value)) {?><br class="clearfix" /><?php }?>
  <?php } ?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_new_products']->value)) {
echo $_smarty_tpl->tpl_vars['MODULE_new_products']->value;
}?><?php }} ?>
