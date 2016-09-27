<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 12:03:58
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/content.html" */ ?>
<?php /*%%SmartyHeaderCode:121867582157bd710e134646-25581351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7668e00a7d61877b5d39354d9bc8ed31ed9f653' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/module/content.html',
      1 => 1472024922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121867582157bd710e134646-25581351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONTENT_HEADING' => 0,
    'file' => 0,
    'CONTENT_BODY' => 0,
    'SUB_CONTENT_LISTING' => 0,
    'BUTTON_CONTINUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd710e15d179_36702841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd710e15d179_36702841')) {function content_57bd710e15d179_36702841($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['CONTENT_HEADING']->value)) {?><h1><?php echo $_smarty_tpl->tpl_vars['CONTENT_HEADING']->value;?>
</h1><?php }?>
<div class="content_site cf">
  <?php if (isset($_smarty_tpl->tpl_vars['file']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['CONTENT_BODY']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['file']->value;?>

  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['SUB_CONTENT_LISTING']->value)) {?><div class="subcontent cf"><?php echo $_smarty_tpl->tpl_vars['SUB_CONTENT_LISTING']->value;?>
</div><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['CONTENT_BODY']->value;?>

  <?php }?>
</div>
<div class="button_left"><?php echo $_smarty_tpl->tpl_vars['BUTTON_CONTINUE']->value;?>
</div>
<?php }} ?>
