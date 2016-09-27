<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:34:38
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_miscellaneous.html" */ ?>
<?php /*%%SmartyHeaderCode:123277033657bd5c1ec2e5d2-56586051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7e58c43b55054b3b16098ffd61ea0541784e5f' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_miscellaneous.html',
      1 => 1472024882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123277033657bd5c1ec2e5d2-56586051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c1ec344e5_52884775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c1ec344e5_52884775')) {function content_57bd5c1ec344e5_52884775($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box3">
  <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_miscellaneous');?>
</div>
  <div class="box3_line"></div>
  <p><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/img_footer_payment.jpg" alt="" /></p>

  <p class="box3_sub" style="font-size:10px; line-height:12px;color:#999;"><?php echo $_smarty_tpl->getConfigVariable('text_miscellaneous');?>
</p>
</div><?php }} ?>
