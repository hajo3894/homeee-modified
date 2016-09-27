<?php /* Smarty version 2.6.28, created on 2016-08-24 13:55:38
         compiled from xtc5/boxes/box_reviews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'xtc5/boxes/box_reviews.html', 1, false),array('modifier', 'onlytext', 'xtc5/boxes/box_reviews.html', 7, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<h2 class="boxheader"><a href="<?php echo $this->_tpl_vars['REVIEWS_LINK']; ?>
"><?php echo $this->_config[0]['vars']['heading_reviews']; ?>
</a></h2>
<div class="boxbody">
  <?php if ($this->_tpl_vars['RANDOM']): ?>
    <p class="center">
      <a href="<?php echo $this->_tpl_vars['PRODUCTS_LINK']; ?>
">
        <img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['PRODUCTS_NAME'])) ? $this->_run_mod_handler('onlytext', true, $_tmp) : smarty_modifier_onlytext($_tmp)); ?>
" />
      </a>
    </p>
    <p class="center">
      <a href="<?php echo $this->_tpl_vars['PRODUCTS_LINK']; ?>
">
        <strong><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</strong><br />
        <?php echo $this->_tpl_vars['REVIEWS']; ?>

      </a><br />
      <?php echo $this->_tpl_vars['REVIEWS_IMAGE']; ?>

    </p>
  <?php else: ?>
    <p>
      <a href="<?php echo $this->_tpl_vars['PRODUCTS_LINK']; ?>
">
        <?php echo $this->_tpl_vars['REVIEWS_WRITE_REVIEW']; ?>

      </a>
    </p>
  <?php endif; ?>
</div>