<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-24 10:35:11
         compiled from "/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:153037356457bd5c3f540aa3-39397782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df59070469dfca6e3d7873e39830b6b186fac5d4' => 
    array (
      0 => '/www/htdocs/w014f718/webshop/modified/templates/tpl_modified/boxes/box_admin.html',
      1 => 1472024880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153037356457bd5c3f540aa3-39397782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'START' => 0,
    'tpl_path' => 0,
    'LANGUAGES' => 0,
    'ORDERS' => 0,
    'ORDERS_CONTENT' => 0,
    'CUSTOMERS' => 0,
    'CUSTOMERS_INFO' => 0,
    'CATEGORIES' => 0,
    'EDIT_PRODUCT' => 0,
    'EDIT_CATEGORY' => 0,
    'EDIT_PRODUCT_ATTRIBUTES' => 0,
    'PRODUCTS_INFO' => 0,
    'REVIEWS_INFO' => 0,
    'CONTENT_MANAGER' => 0,
    'EDIT_CONTENT' => 0,
    'SHOP_OFFLINE' => 0,
    'SHOP_OFFLINE_LINK' => 0,
    'NEWSFEED' => 0,
    'NEWSFEED_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57bd5c3f5a9d15_50432894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd5c3f5a9d15_50432894')) {function content_57bd5c3f5a9d15_50432894($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<div id="admin">
  <ul class="cf">
    <li class="logo">
      <?php if (isset($_smarty_tpl->tpl_vars['START']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['START']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('ab_admin');?>
"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_logo.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_admin');?>
" /><?php if (isset($_smarty_tpl->tpl_vars['START']->value)) {?></a><?php }?>
    </li>
  
    <?php if (isset($_smarty_tpl->tpl_vars['LANGUAGES']->value)&&$_smarty_tpl->tpl_vars['LANGUAGES']->value!='') {?>
      <li class="language"><?php echo $_smarty_tpl->tpl_vars['LANGUAGES']->value;?>
</li>
    <?php }?>
  
    <?php if (isset($_smarty_tpl->tpl_vars['START']->value)) {?>
      <li>
        <a class="togglelink" href="<?php echo $_smarty_tpl->tpl_vars['START']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('ab_admin');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_adminarea.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_admin');?>
" /></a>
      </li>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['ORDERS']->value)) {?>
      <li class="togglemenu">
        <a class="togglelink" href="<?php echo $_smarty_tpl->tpl_vars['ORDERS']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_orders.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_orders');?>
" /></a>
        <ul>
          <?php echo $_smarty_tpl->tpl_vars['ORDERS_CONTENT']->value;?>

        </ul>
      </li>
    <?php }?>
  
    <?php if (isset($_smarty_tpl->tpl_vars['CUSTOMERS']->value)) {?>
      <li class="togglemenu">
        <a class="togglelink" href="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERS']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_customers.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_customers');?>
" /></a>
        <ul>
          <li class="info"><?php echo $_smarty_tpl->tpl_vars['CUSTOMERS_INFO']->value;?>
</li>
        </ul>
      </li>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {?>
      <li class="togglemenu">
        <a class="togglelink" href="<?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_categories.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_category');?>
" /></a>
        <ul>
          <?php if (isset($_smarty_tpl->tpl_vars['EDIT_PRODUCT']->value)||isset($_smarty_tpl->tpl_vars['EDIT_CATEGORY']->value)) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['EDIT_PRODUCT']->value)) {?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['EDIT_PRODUCT']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('ab_edit_product');?>
</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['EDIT_PRODUCT_ATTRIBUTES']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('ab_edit_attributes');?>
</a></li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['EDIT_CATEGORY']->value)) {?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['EDIT_CATEGORY']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('ab_edit_category');?>
</a></li>
            <?php }?>
          <?php }?>
          <li class="info"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_INFO']->value;?>
</li>
          <li class="info"><?php echo $_smarty_tpl->tpl_vars['REVIEWS_INFO']->value;?>
</li>
        </ul>
      </li>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['CONTENT_MANAGER']->value)) {?>
      <li class="togglemenu">
        <a class="togglelink" href="<?php echo $_smarty_tpl->tpl_vars['CONTENT_MANAGER']->value;?>
" <?php if (!isset($_smarty_tpl->tpl_vars['EDIT_CONTENT']->value)) {?>title="<?php echo $_smarty_tpl->getConfigVariable('ab_contentmanager');?>
"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_content.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_contentmanager');?>
" /></a>
        <?php if (isset($_smarty_tpl->tpl_vars['EDIT_CONTENT']->value)) {?>
        <ul>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['EDIT_CONTENT']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('ab_edit_content');?>
</a></li>
        </ul>
        <?php }?>
      </li>
    <?php }?>
  
    <?php if (isset($_smarty_tpl->tpl_vars['SHOP_OFFLINE']->value)) {?>
      <li class="togglemenu">
        <?php if (isset($_smarty_tpl->tpl_vars['SHOP_OFFLINE_LINK']->value)) {?><a class="togglelink" href="<?php echo $_smarty_tpl->tpl_vars['SHOP_OFFLINE_LINK']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('ab_offline');?>
"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_offline.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_offline');?>
" /><?php if (isset($_smarty_tpl->tpl_vars['SHOP_OFFLINE_LINK']->value)) {?></a><?php }?>
      </li>
    <?php }?>
    
    <li class="right nomargin">
      <a class="togglelink" href="<?php echo xtc_href_link(@constant('FILENAME_LOGOFF'));?>
" title="<?php echo $_smarty_tpl->getConfigVariable('ab_logoff');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_logoff.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_logoff');?>
" /></a>
    </li>
    
    <?php if (isset($_smarty_tpl->tpl_vars['NEWSFEED']->value)) {?>
      <li class="right">
        <a class="togglelink" href="<?php echo $_smarty_tpl->tpl_vars['NEWSFEED']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('ab_news');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/adminbar_feed.png" alt="<?php echo $_smarty_tpl->getConfigVariable('ab_news');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['NEWSFEED_COUNT']->value>0) {?><span class="icon_count"><?php echo $_smarty_tpl->tpl_vars['NEWSFEED_COUNT']->value;?>
</span><?php }?>
        </a>
      </li>
    <?php }?>
  </ul>
</div><?php }} ?>
