<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:35:11
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_order_history.html" */ ?>
<?php /*%%SmartyHeaderCode:87657045157bd5c3f5b74c6-05431040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121d0088aba9c0f411749ba6430c2bb1d9c4c43c' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_order_history.html',
      1 => 1472024883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87657045157bd5c3f5b74c6-05431040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'BOX_CONTENT' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c3f5c3db5_35787789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c3f5c3db5_35787789')) {function content_57bd5c3f5c3db5_35787789($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&count($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)>0) {?>
<div class="box1">
  <div class="box_header"><?php echo $_smarty_tpl->getConfigVariable('heading_order_history');?>
</div>
  <div class="box_line"></div>
  <ul class="orderhistory_list">
  <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BOX_CONTENT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>  
    <li><?php echo $_smarty_tpl->tpl_vars['data']->value['PRODUCTS_LINK'];?>
<span class="cart_icon"><?php echo $_smarty_tpl->tpl_vars['data']->value['ORDER_LINK'];?>
</span></li>
  <?php } ?>
  </ul>
</div>
<?php }?><?php }} ?>
