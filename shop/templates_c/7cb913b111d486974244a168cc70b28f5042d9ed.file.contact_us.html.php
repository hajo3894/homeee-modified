<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 12:04:03
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/contact_us.html" */ ?>
<?php /*%%SmartyHeaderCode:172485876357bd7113361573-58764825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cb913b111d486974244a168cc70b28f5042d9ed' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/contact_us.html',
      1 => 1472024921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172485876357bd7113361573-58764825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'CONTACT_HEADING' => 0,
    'error_message' => 0,
    'success' => 0,
    'FORM_ACTION' => 0,
    'INPUT_NAME' => 0,
    'INPUT_EMAIL' => 0,
    'INPUT_PHONE' => 0,
    'INPUT_CODE' => 0,
    'VVIMG' => 0,
    'INPUT_TEXT' => 0,
    'BUTTON_SUBMIT' => 0,
    'FORM_END' => 0,
    'CONTACT_CONTENT' => 0,
    'BUTTON_CONTINUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd711339d5a5_12262126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd711339d5a5_12262126')) {function content_57bd711339d5a5_12262126($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("newsletter", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("contact_us", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<h1><?php echo $_smarty_tpl->tpl_vars['CONTACT_HEADING']->value;?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['error_message']->value!='') {?><div class="errormessage"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['success']->value!='1') {?>
  <div class="twoColums cf">
    <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

    <div class="highlightbox">
      <h4><?php echo $_smarty_tpl->getConfigVariable('text_data');?>
 <span class="pflicht">(<?php echo $_smarty_tpl->getConfigVariable('text_hint');?>
)</span></h4>
      <table>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_name');?>
</span><span class="stern"><?php echo $_smarty_tpl->tpl_vars['INPUT_NAME']->value;?>
</span></td>
        </tr>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
</span><span class="stern"><?php echo $_smarty_tpl->tpl_vars['INPUT_EMAIL']->value;?>
 <span class="inputRequirement">*</span></span></td>
        </tr>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_phone');?>
</span><span class="stern"><?php echo $_smarty_tpl->tpl_vars['INPUT_PHONE']->value;?>
</span></td>
        </tr>

        <?php if ($_smarty_tpl->tpl_vars['INPUT_CODE']->value) {?>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_sec_code');?>
</span><span class="stern"><?php echo $_smarty_tpl->tpl_vars['VVIMG']->value;?>
</span></td>
        </tr>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_inp_code');?>
</span><span class="stern"><?php echo $_smarty_tpl->tpl_vars['INPUT_CODE']->value;?>
<span class="inputRequirement"> *</span></span></td>
        </tr>
        <?php }?>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_message');?>
</span><span class="stern"><?php echo $_smarty_tpl->tpl_vars['INPUT_TEXT']->value;?>
<span class="inputRequirement_textarea"> *</span></span></td>
        </tr>
      </table>    
    </div>
    <div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_SUBMIT']->value;?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

  </div>

  <div class="twoColums last">
    <div class="highlightbox plainright">
      <h4><?php echo $_smarty_tpl->getConfigVariable('text_contact_us');?>
 <span class="pflicht">&nbsp;</span></h4>
      <?php echo $_smarty_tpl->tpl_vars['CONTACT_CONTENT']->value;?>

    </div>
  </div>
<?php } else { ?>
  <div class="twoColums last">
    <div class="highlightbox plainleft cf">
      <h4><?php echo $_smarty_tpl->getConfigVariable('text_thanks');?>
 <span class="pflicht">&nbsp;</span></h4>
      <p><?php echo $_smarty_tpl->getConfigVariable('text_success');?>
</p>
      <div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_CONTINUE']->value;?>
</div>
    </div>
  </div>
<?php }?>
<?php }} ?>
