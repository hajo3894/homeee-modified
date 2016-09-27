<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_categories.html" */ ?>
<?php /*%%SmartyHeaderCode:194521968757bd5c1ea76867-77171001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cce491549878ff4a604ff6a691ca7ef7c9185779' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_categories.html',
      1 => 1472024880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194521968757bd5c1ea76867-77171001',
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
  'unifunc' => 'content_57bd5c1eab1d45_10286074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1eab1d45_10286074')) {function content_57bd5c1eab1d45_10286074($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box_category">
    <div class="box_category_header"><?php echo $_smarty_tpl->getConfigVariable('heading_categories');?>
</div>
    <div class="box_category_line"></div>
    <ul id="categorymenu">
      <?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>

      <?php if (@constant('SPECIALS_CATEGORIES')===true) {?>
        <?php if (@constant('SPECIALS_EXISTS')===true) {?>
          <li class="level1<?php if (strstr($_SERVER['PHP_SELF'],@constant('FILENAME_SPECIALS'))) {?> active1<?php }?>"><a href="<?php echo xtc_href_link(@constant('FILENAME_SPECIALS'));?>
"><?php echo $_smarty_tpl->getConfigVariable('heading_specials');?>
</a></li>
        <?php }?>
      <?php }?>
      <?php if (@constant('WHATSNEW_CATEGORIES')===true) {?>
        
          <li class="level1<?php if (strstr($_SERVER['PHP_SELF'],@constant('FILENAME_PRODUCTS_NEW'))) {?> active1<?php }?>"><a href="<?php echo xtc_href_link(@constant('FILENAME_PRODUCTS_NEW'));?>
"><?php echo $_smarty_tpl->getConfigVariable('heading_whatsnew');?>
</a></li>
        
      <?php }?>
    </ul>
  </div>
<?php }?><?php }} ?>
