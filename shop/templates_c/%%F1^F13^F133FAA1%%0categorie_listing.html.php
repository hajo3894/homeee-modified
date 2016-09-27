<?php /* Smarty version 2.6.28, created on 2016-08-24 13:55:54
         compiled from xtc5/module/categorie_listing/0categorie_listing.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'xtc5/module/categorie_listing/0categorie_listing.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'categorie_listing'), $this);?>

<?php if ($this->_tpl_vars['SITE_MANUFACTURE']): ?>
<?php if ($this->_tpl_vars['CATEGORIES_IMAGE_MAIN']): ?>
<table width="528" border="0" cellpadding="0" cellspacing="0" align="center">
 <tr>
  <td colspan="2" style="padding: 10px 0px 10px 0px"><img src="<?php echo $this->_tpl_vars['CATEGORIES_IMAGE_MAIN']; ?>
" alt="<?php echo $this->_tpl_vars['CATEGORIES_NAME']; ?>
" /></td>
 </tr>
 <tr>
<?php else: ?>
<div style="padding-bottom:10px"></div>
<table width="528" border="0" cellpadding="0" cellspacing="0" align="center">
 <tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['CATEGORIES_HEADING_TITLE']): ?><td colspan="2" align="center"><h2 style="margin-top:-2px; font-size:12px"><?php echo $this->_tpl_vars['CATEGORIES_HEADING_TITLE']; ?>
</h2></td></tr><tr><?php endif; ?>
<td>
<?php if ($this->_tpl_vars['module_content'] != ''): ?>
<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
<?php  
$col++; 
 ?>
<?php  
if ($col==1) { 
echo '<div id="manufacture_cat1">';
}elseif ($col==2){
echo '<div id="manufacture_cat2">';
}elseif ($col==3){
echo '<div id="manufacture_cat3">';
}
 ?>
<a href="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_LINK']; ?>
">
<div><img src="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_NAME']; ?>
" /></div>
<div style="margin-top:6px; text-align:center"><strong><?php echo $this->_tpl_vars['module_data']['CATEGORIES_NAME']; ?>
</strong></div>
</a>
<?php  
if ($col>=3) { 
$col=0; 
echo '</div><div style="clear:both; padding-top:24px"></div>';
}else{
echo '</div>';
} 
 ?> 
<?php endforeach; endif; unset($_from); ?>
<div style="clear:both; padding-top:24px"></div>
<?php endif; ?>
</td>
</tr>
<?php if ($this->_tpl_vars['CATEGORIES_DESCRIPTION']): ?>
 <tr>
  <td colspan="2" style="text-align:justify"><div style="border:1px solid #B8B1AB; padding:5px; margin-bottom:10px"><?php echo $this->_tpl_vars['CATEGORIES_DESCRIPTION']; ?>
</div></td>
 </tr>
<?php endif; ?>
</table>
<?php else: ?>
<?php if ($this->_tpl_vars['CATEGORIES_IMAGE_MAIN']): ?>
<table width="528" border="0" cellpadding="0" cellspacing="0" align="center">
 <tr>
  <td colspan="2" style="padding: 10px 0px 10px 0px"><img src="<?php echo $this->_tpl_vars['CATEGORIES_IMAGE_MAIN']; ?>
" alt="<?php echo $this->_tpl_vars['CATEGORIES_NAME']; ?>
" /></td>
 </tr>
 <tr>
<?php else: ?>
<div style="padding-bottom:10px"></div>
<table width="528" border="0" cellpadding="0" cellspacing="0" align="center">
 <tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['CATEGORIES_HEADING_TITLE']): ?><td colspan="2" align="center"><h2 style="margin-top:-2px; font-size:12px"><?php echo $this->_tpl_vars['CATEGORIES_HEADING_TITLE']; ?>
</h2></td></tr><tr><?php endif; ?>
<?php if ($this->_tpl_vars['module_content'] != ''): ?>
<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
<?php  
$col++; 
 ?>
<?php  
if ($col==1) { 
echo '<td id="categories_td" width="245px" align="left" style="padding-right:12px">';
}
else
{
echo '<td id="categories_td" width="271px">';
}
 ?>
<?php if ($this->_tpl_vars['module_data']['CATEGORIES_IMAGE']): ?><a href="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_NAME']; ?>
" /></a><?php endif; ?><div style="padding: 0px 0px 8px 0px; text-align:center;"><strong><a href="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['CATEGORIES_NAME']; ?>
</a></strong></div></td>
<?php  
if ($col>=2) { 
$col=0; 
echo '</tr><tr>';
} 
 ?> 
<?php endforeach; endif; unset($_from); ?>
   <td></td>
  </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['CATEGORIES_DESCRIPTION']): ?>
 <tr>
  <td colspan="2" style="text-align:justify"><div style="border:1px solid #B8B1AB; padding:5px; margin-bottom:10px"><?php echo $this->_tpl_vars['CATEGORIES_DESCRIPTION']; ?>
</div></td>
 </tr>
<?php endif; ?>
</table>
<?php endif; ?>