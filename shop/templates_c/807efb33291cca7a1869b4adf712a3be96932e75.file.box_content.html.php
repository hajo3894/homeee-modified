<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_content.html" */ ?>
<?php /*%%SmartyHeaderCode:107521510457bd5c1ec13c18-68830868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '807efb33291cca7a1869b4adf712a3be96932e75' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_content.html',
      1 => 1472024881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107521510457bd5c1ec13c18-68830868',
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
  'unifunc' => 'content_57bd5c1ec1b7d4_51088623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1ec1b7d4_51088623')) {function content_57bd5c1ec1b7d4_51088623($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box3">
    <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_content');?>
</div>
    <div class="box3_line"></div>
    <ul class="footerlist">
      <?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>

    </ul>
  </div>
<?php }?><?php }} ?>
