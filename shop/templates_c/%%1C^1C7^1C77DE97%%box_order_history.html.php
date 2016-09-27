<?php /* Smarty version 2.6.28, created on 2016-08-24 13:55:38
         compiled from xtc5/boxes/box_order_history.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'xtc5/boxes/box_order_history.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<?php if (isset ( $this->_tpl_vars['BOX_CONTENT'] ) && count ( $this->_tpl_vars['BOX_CONTENT'] ) > 0): ?>
<h2 class="boxheader"><?php echo $this->_config[0]['vars']['heading_order_history']; ?>
</h2>
<div class="boxbody">
  <table border="0" width="100%" cellspacing="0" cellpadding="1">
  <?php $_from = $this->_tpl_vars['BOX_CONTENT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>  
    <tr>
      <td class="infoBoxContents"><?php echo $this->_tpl_vars['data']['PRODUCTS_LINK']; ?>
</td>
      <td class="infoBoxContents" align="right" valign="top"><?php echo $this->_tpl_vars['data']['ORDER_LINK']; ?>
</td>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<?php endif; ?>