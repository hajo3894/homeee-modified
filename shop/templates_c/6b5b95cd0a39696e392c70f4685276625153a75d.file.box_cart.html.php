<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_cart.html" */ ?>
<?php /*%%SmartyHeaderCode:165460929957bd5c1ec7e8c7-05211903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5b95cd0a39696e392c70f4685276625153a75d' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_cart.html',
      1 => 1472024880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165460929957bd5c1ec7e8c7-05211903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'empty' => 0,
    'deny_cart' => 0,
    'LINK_CART' => 0,
    'PRODUCTS' => 0,
    'ACTIVATE_GIFT' => 0,
    'GV_AMOUNT' => 0,
    'products' => 0,
    'products_data' => 0,
    'LINK_CHECKOUT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c1eca3962_79720890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1eca3962_79720890')) {function content_57bd5c1eca3962_79720890($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/www/htdocs/w014f718/webshop/modified/includes/external/smarty/smarty_3/plugins/modifier.truncate.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div id="cart_short"<?php if ($_smarty_tpl->tpl_vars['empty']->value=='false') {?> style="cursor:pointer"<?php }?>>
  <?php if ($_smarty_tpl->tpl_vars['empty']->value=='false') {?>
  <a <?php if ($_smarty_tpl->tpl_vars['deny_cart']->value!='true') {?>id="toggle_cart"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['LINK_CART']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('heading_cart');?>
 &raquo;<span class="cart_content"><span class="bold_font"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS']->value;?>
</span> <?php echo $_smarty_tpl->getConfigVariable('text_article');?>
</span></a>
  <?php } else { ?>
  <a <?php if ($_smarty_tpl->tpl_vars['deny_cart']->value!='true') {?>id="toggle_cart"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['LINK_CART']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('heading_cart');?>
 &raquo;<span class="cart_content"><span class="bold_font">0</span> <?php echo $_smarty_tpl->getConfigVariable('text_article');?>
</span></a>
  <?php }?>
</div>

<div class="toggle_cart">
<?php if ($_smarty_tpl->tpl_vars['deny_cart']->value!='true') {?>
  <?php if ($_smarty_tpl->tpl_vars['ACTIVATE_GIFT']->value=='true') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['GV_AMOUNT']->value)) {?>
      <div class="giftmessage"><strong><?php echo $_smarty_tpl->getConfigVariable('voucher_balance');?>
</strong>&nbsp;<?php echo $_smarty_tpl->tpl_vars['GV_AMOUNT']->value;?>
</div>
    <?php }?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['empty']->value=='false') {?>
    <div class="mini"><strong><?php echo $_smarty_tpl->getConfigVariable('text_full_cart');?>
</strong></div>
    <ul class="tc_list">
    <?php  $_smarty_tpl->tpl_vars['products_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_data']->key => $_smarty_tpl->tpl_vars['products_data']->value) {
$_smarty_tpl->tpl_vars['products_data']->_loop = true;
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['products_data']->value['LINK'];?>
"><?php echo $_smarty_tpl->tpl_vars['products_data']->value['QTY'];?>
&nbsp;x&nbsp;<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['products_data']->value['NAME'],40,"...",true);?>
</a><span class="tc_delete"><?php echo $_smarty_tpl->tpl_vars['products_data']->value['BUTTON_DELETE'];?>
</span></li>
    <?php } ?>
    </ul>
    <div class="toogle_cart_links">
      <a href="<?php echo $_smarty_tpl->tpl_vars['LINK_CHECKOUT']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('heading_checkout');?>
&nbsp;&raquo;</strong></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['LINK_CART']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('heading_cart');?>
&nbsp;&raquo;</strong></a>
    </div>    
  <?php } else { ?>
    <div class="mini"><strong><?php echo $_smarty_tpl->getConfigVariable('text_empty_cart');?>
</strong></div>
    
  <?php }?>
<?php }?>
</div><?php }} ?>
