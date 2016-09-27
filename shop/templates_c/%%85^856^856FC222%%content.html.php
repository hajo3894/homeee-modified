<?php /* Smarty version 2.6.28, created on 2016-08-24 15:59:50
         compiled from xtc5/module/content.html */ ?>
<?php if (isset ( $this->_tpl_vars['CONTENT_HEADING'] )): ?><h1><?php echo $this->_tpl_vars['CONTENT_HEADING']; ?>
</h1><?php endif; ?>
<div class="cf">
  <?php if (isset ( $this->_tpl_vars['file'] )): ?>
    <?php echo $this->_tpl_vars['CONTENT_BODY']; ?>

    <?php echo $this->_tpl_vars['file']; ?>

  <?php else: ?>
    <?php if (isset ( $this->_tpl_vars['SUB_CONTENT_LISTING'] )): ?><div class="subcontent cf"><?php echo $this->_tpl_vars['SUB_CONTENT_LISTING']; ?>
</div><?php endif; ?>
    <?php echo $this->_tpl_vars['CONTENT_BODY']; ?>

  <?php endif; ?>
</div>
<p><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>