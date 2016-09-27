<?php /* Smarty version 2.6.28, created on 2016-08-24 15:59:42
         compiled from xtc5/module/shopping_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'xtc5/module/shopping_cart.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'shopping_cart'), $this);?>

<h1><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</h1>
<?php if ($this->_tpl_vars['error_max_prod']): ?>
<div class="errormessage">
    <ul>
        <?php $_from = $this->_tpl_vars['error_max_prod']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['err_max_data']):
?>
        <li><?php echo $this->_tpl_vars['err_max_data']['E_MSG']; ?>
</li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['info_message'] != ''): ?><div class="<?php if ($_GET['info'] && $_GET['info'] == '1'): ?>infomessage<?php else: ?>errormessage<?php endif; ?>"><?php echo $this->_tpl_vars['info_message']; ?>
</div><?php endif; ?>
<?php if ($this->_tpl_vars['coupon_message'] != ''): ?><div class="<?php if ($_GET['info'] && $_GET['info'] == '1'): ?>infomessage<?php else: ?>errormessage<?php endif; ?>"><?php echo $this->_tpl_vars['coupon_message']; ?>
</div><?php endif; ?>
<?php if ($this->_tpl_vars['cart_empty'] == true): ?>
  <p><?php echo $this->_config[0]['vars']['text_empty']; ?>
</p>
  <p><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>
<?php else: ?>
  <?php if ($this->_tpl_vars['info_message_3'] != ''): ?><div class="<?php if ($_GET['info'] && $_GET['info'] == '1'): ?>infomessage<?php else: ?>errormessage<?php endif; ?>"><?php echo $this->_tpl_vars['info_message_3']; ?>
</div><?php endif; ?>
  <?php echo $this->_tpl_vars['FORM_ACTION']; ?>

  <?php echo $this->_tpl_vars['HIDDEN_OPTIONS']; ?>

  <p><?php echo $this->_tpl_vars['MODULE_order_details']; ?>
</p>
  <?php if ($this->_tpl_vars['info_message_1'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['info_message_1']; ?>
<?php echo $this->_tpl_vars['min_order']; ?>
<?php echo $this->_tpl_vars['info_message_2']; ?>
<?php echo $this->_tpl_vars['order_amount']; ?>
</div><?php endif; ?>
  <p align="right" style="padding-right:70px;"><?php if ($this->_tpl_vars['CONTINUE_LINK']): ?><a href="<?php echo $this->_tpl_vars['CONTINUE_LINK']; ?>
"><?php echo $this->_tpl_vars['BUTTON_CONTINUE_SHOPPING']; ?>
</a>&nbsp;<?php endif; ?><?php echo $this->_tpl_vars['BUTTON_RELOAD']; ?>
&nbsp;<?php if ($this->_tpl_vars['BUTTON_PAYPAL'] != ''): ?><?php echo $this->_tpl_vars['BUTTON_CHECKOUT']; ?>
<br /><?php echo $this->_tpl_vars['BUTTON_PAYPAL']; ?>
<?php else: ?><?php echo $this->_tpl_vars['BUTTON_CHECKOUT']; ?>
<?php endif; ?></p>
  <?php if (isset ( $this->_tpl_vars['BUTTON_CHECKOUT_EXPRESS'] )): ?><p align="right" style="padding-right:70px;"><?php echo $this->_tpl_vars['BUTTON_CHECKOUT_EXPRESS']; ?>
</p><?php endif; ?>
  <?php if (isset ( $this->_tpl_vars['ACTIVATE_EXPRESS_LINK'] )): ?><p align="right" style="padding-right:70px;"><a href="<?php echo $this->_tpl_vars['ACTIVATE_EXPRESS_LINK']; ?>
"><?php echo $this->_config[0]['vars']['checkout_express_activate']; ?>
</a></p><?php endif; ?>

  <?php echo $this->_tpl_vars['FORM_END']; ?>

<?php endif; ?>
<?php echo $this->_tpl_vars['MODULE_gift_cart']; ?>

<?php if ($this->_tpl_vars['MODULE_wishlist']): ?>
  <?php echo $this->_tpl_vars['MODULE_wishlist']; ?>

<?php endif; ?>