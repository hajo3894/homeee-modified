<?php /* Smarty version 2.6.28, created on 2016-08-24 13:55:51
         compiled from xtc5/module/error_message.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'xtc5/module/error_message.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'error_handler'), $this);?>

<h1><?php echo $this->_tpl_vars['ERROR']; ?>
</h1>
<p><?php echo $this->_config[0]['vars']['text_search_again']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<div class="highlightbox">
  <table border="0" cellpadding="4" cellspacing="0">
    <tr>
      <td><?php echo $this->_config[0]['vars']['text_search']; ?>
</td>
      <td><?php echo $this->_tpl_vars['INPUT_SEARCH']; ?>
</td>
      <td><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</td>
    </tr>
  </table>
</div>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<p><?php echo $this->_tpl_vars['BUTTON']; ?>
</p>