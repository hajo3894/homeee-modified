<?php /* Smarty version 2.6.28, created on 2016-08-24 13:55:51
         compiled from xtc5/module/sub_categories_listing.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'xtc5/module/sub_categories_listing.html', 1, false),array('modifier', 'onlytext', 'xtc5/module/sub_categories_listing.html', 13, false),array('modifier', 'count', 'xtc5/module/sub_categories_listing.html', 23, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'categorie_listing'), $this);?>

<?php if ($this->_tpl_vars['categories_content'] != '' && $this->_tpl_vars['TR_COLS'] > 0): ?>
<div style="clear:both">
 <strong><?php echo $this->_config[0]['vars']['heading_more_categories']; ?>
</strong>
  <br />
  <table style="border-top: 2px solid; border-color: #d4d4d4;" width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <?php $this->assign('anzahl_spalten', ($this->_tpl_vars['TR_COLS'])); ?>
    <?php $_from = $this->_tpl_vars['categories_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['spalten'] => $this->_tpl_vars['categories_data']):
        $this->_foreach['aussen']['iteration']++;
?>
      <td class="categorie_listing" width="<?php echo $this->_tpl_vars['TD_WIDTH']; ?>
">
        <table width="100%" border="0" cellpadding="0" cellspacing="4">
          <tr>
            <td align="center"><?php if ($this->_tpl_vars['categories_data']['CATEGORIES_IMAGE']): ?><a href="<?php echo $this->_tpl_vars['categories_data']['CATEGORIES_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['categories_data']['CATEGORIES_IMAGE']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['categories_data']['CATEGORIES_NAME'])) ? $this->_run_mod_handler('onlytext', true, $_tmp) : smarty_modifier_onlytext($_tmp)); ?>
" /></a><?php endif; ?></td>
          </tr>
          <tr>
            <td align="center"><strong><a href="<?php echo $this->_tpl_vars['categories_data']['CATEGORIES_LINK']; ?>
"><?php echo $this->_tpl_vars['categories_data']['CATEGORIES_NAME']; ?>
</a></strong></td>
          </tr>
          <tr>
            <td align="center"><?php echo $this->_tpl_vars['categories_data']['CATEGORIES_DESCRIPTION']; ?>
</td>
          </tr>
        </table>
      </td>
      <?php if (( ( $this->_tpl_vars['spalten']+1 ) % $this->_tpl_vars['anzahl_spalten'] == 0 && ( $this->_tpl_vars['spalten']+1 ) < count($this->_tpl_vars['categories_content']) )): ?>
        </tr>
        <tr>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
        <?php $this->assign('content_count', count($this->_tpl_vars['categories_content'])); ?>
    <?php if ($this->_tpl_vars['content_count']%$this->_tpl_vars['anzahl_spalten'] != 0): ?>
      <?php unset($this->_sections['zelle']);
$this->_sections['zelle']['name'] = 'zelle';
$this->_sections['zelle']['start'] = (int)0;
$this->_sections['zelle']['loop'] = is_array($_loop=$this->_tpl_vars['anzahl_spalten']-$this->_tpl_vars['content_count']%$this->_tpl_vars['anzahl_spalten']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['zelle']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['zelle']['show'] = true;
$this->_sections['zelle']['max'] = $this->_sections['zelle']['loop'];
if ($this->_sections['zelle']['start'] < 0)
    $this->_sections['zelle']['start'] = max($this->_sections['zelle']['step'] > 0 ? 0 : -1, $this->_sections['zelle']['loop'] + $this->_sections['zelle']['start']);
else
    $this->_sections['zelle']['start'] = min($this->_sections['zelle']['start'], $this->_sections['zelle']['step'] > 0 ? $this->_sections['zelle']['loop'] : $this->_sections['zelle']['loop']-1);
if ($this->_sections['zelle']['show']) {
    $this->_sections['zelle']['total'] = min(ceil(($this->_sections['zelle']['step'] > 0 ? $this->_sections['zelle']['loop'] - $this->_sections['zelle']['start'] : $this->_sections['zelle']['start']+1)/abs($this->_sections['zelle']['step'])), $this->_sections['zelle']['max']);
    if ($this->_sections['zelle']['total'] == 0)
        $this->_sections['zelle']['show'] = false;
} else
    $this->_sections['zelle']['total'] = 0;
if ($this->_sections['zelle']['show']):

            for ($this->_sections['zelle']['index'] = $this->_sections['zelle']['start'], $this->_sections['zelle']['iteration'] = 1;
                 $this->_sections['zelle']['iteration'] <= $this->_sections['zelle']['total'];
                 $this->_sections['zelle']['index'] += $this->_sections['zelle']['step'], $this->_sections['zelle']['iteration']++):
$this->_sections['zelle']['rownum'] = $this->_sections['zelle']['iteration'];
$this->_sections['zelle']['index_prev'] = $this->_sections['zelle']['index'] - $this->_sections['zelle']['step'];
$this->_sections['zelle']['index_next'] = $this->_sections['zelle']['index'] + $this->_sections['zelle']['step'];
$this->_sections['zelle']['first']      = ($this->_sections['zelle']['iteration'] == 1);
$this->_sections['zelle']['last']       = ($this->_sections['zelle']['iteration'] == $this->_sections['zelle']['total']);
?>
      <td>&nbsp;</td>
      <?php endfor; endif; ?>
    <?php endif; ?>
        </tr>
  </table>
</div>
<?php endif; ?>