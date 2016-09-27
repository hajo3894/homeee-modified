<?php /* Smarty version 2.6.28, created on 2016-08-24 13:55:38
         compiled from xtc5/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'xtc5/index.html', 1, false),array('function', 'piwik', 'xtc5/index.html', 67, false),array('function', 'googleanalytics', 'xtc5/index.html', 70, false),array('function', 'facebook', 'xtc5/index.html', 73, false),array('modifier', 'date_format', 'xtc5/index.html', 63, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'index'), $this);?>

<div id="wrap">
  <div id="header">
    <div id="logo"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/spacer.gif" width="400" height="115" alt="<?php echo $this->_tpl_vars['store_name']; ?>
" /></div>
    <div id="search"><?php if (isset ( $this->_tpl_vars['box_SEARCH'] )): ?><?php echo $this->_tpl_vars['box_SEARCH']; ?>
<?php endif; ?></div>
  </div>
  <div id="topmenuwrap">
    <ul id="topmenu">
      <li><a href="<?php echo $this->_tpl_vars['index']; ?>
"><?php if (isset ( $this->_tpl_vars['LINK_INDEX'] )): ?><?php echo $this->_tpl_vars['LINK_INDEX']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['link_index']; ?>
<?php endif; ?></a></li>
      <li><a href="<?php echo $this->_tpl_vars['cart']; ?>
"><?php echo $this->_config[0]['vars']['link_cart']; ?>
</a></li>
      <?php if (isset ( $this->_tpl_vars['account'] )): ?>
        <li><a href="<?php echo $this->_tpl_vars['account']; ?>
"><?php echo $this->_config[0]['vars']['link_account']; ?>
</a></li>
      <?php endif; ?>
      <?php if ($_SESSION['customers_status']['customers_status_id'] == '1'): ?>
        <li><a href="<?php echo $this->_tpl_vars['create_account']; ?>
"><?php echo $this->_config[0]['vars']['new_customer']; ?>
</a></li>
      <?php endif; ?>
      <li><a href="<?php echo $this->_tpl_vars['checkout']; ?>
"><?php echo $this->_config[0]['vars']['link_checkout']; ?>
</a></li>
      <?php if (isset ( $_SESSION['customer_id'] )): ?>
        <li><a href="<?php echo $this->_tpl_vars['logoff']; ?>
"><?php echo $this->_config[0]['vars']['link_logoff']; ?>
</a></li>
      <?php else: ?>
        <li><a href="<?php echo $this->_tpl_vars['login']; ?>
"><?php echo $this->_config[0]['vars']['link_login']; ?>
</a></li>
      <?php endif; ?>
    </ul>
    <div id="languages"><?php if (isset ( $this->_tpl_vars['box_LANGUAGES'] )): ?><?php echo $this->_tpl_vars['box_LANGUAGES']; ?>
<?php endif; ?></div>
  </div>
  <div id="breadcrumb"><?php if (isset ( $this->_tpl_vars['navtrail'] )): ?><?php echo $this->_tpl_vars['navtrail']; ?>
<?php endif; ?></div>
  <div id="contentwrap">
    <?php if (( ! strstr ( $_SERVER['PHP_SELF'] , 'checkout' ) ) || ( strstr ( $_SERVER['PHP_SELF'] , 'checkout_express' ) )): ?>
      <div id="leftcol">
        <?php if (isset ( $this->_tpl_vars['box_CATEGORIES'] )): ?><?php echo $this->_tpl_vars['box_CATEGORIES']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_ADD_QUICKIE'] )): ?><?php echo $this->_tpl_vars['box_ADD_QUICKIE']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_CONTENT'] )): ?><?php echo $this->_tpl_vars['box_CONTENT']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_INFORMATION'] )): ?><?php echo $this->_tpl_vars['box_INFORMATION']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_LAST_VIEWED'] )): ?><?php echo $this->_tpl_vars['box_LAST_VIEWED']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_REVIEWS'] )): ?><?php echo $this->_tpl_vars['box_REVIEWS']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_SPECIALS'] )): ?><?php echo $this->_tpl_vars['box_SPECIALS']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_WHATSNEW'] )): ?><?php echo $this->_tpl_vars['box_WHATSNEW']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_HISTORY'] )): ?><?php echo $this->_tpl_vars['box_HISTORY']; ?>
<?php endif; ?>
      </div>
    <?php endif; ?>
    <div id="content<?php if (( strstr ( $_SERVER['PHP_SELF'] , 'checkout' ) ) && ( ! strstr ( $_SERVER['PHP_SELF'] , 'checkout_express' ) )): ?>full<?php endif; ?>">
      <?php if ($this->_tpl_vars['home']): ?>
        <?php if (isset ( $this->_tpl_vars['BANNER'] )): ?><div class="banner_item"><?php echo $this->_tpl_vars['BANNER']; ?>
</div><?php endif; ?>
      <?php endif; ?>
      <?php if (isset ( $this->_tpl_vars['main_content'] )): ?><?php echo $this->_tpl_vars['main_content']; ?>
<?php endif; ?>
    </div>
    <?php if (( ! strstr ( $_SERVER['PHP_SELF'] , 'checkout' ) ) || ( strstr ( $_SERVER['PHP_SELF'] , 'checkout_express' ) )): ?>
      <div id="rightcol">
        <?php if (isset ( $this->_tpl_vars['box_CART'] )): ?><?php echo $this->_tpl_vars['box_CART']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_WISHLIST'] )): ?><?php echo $this->_tpl_vars['box_WISHLIST']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_LOGIN'] )): ?><?php echo $this->_tpl_vars['box_LOGIN']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_ADMIN'] )): ?><?php echo $this->_tpl_vars['box_ADMIN']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_NEWSLETTER'] )): ?><?php echo $this->_tpl_vars['box_NEWSLETTER']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_BESTSELLERS'] )): ?><?php echo $this->_tpl_vars['box_BESTSELLERS']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_INFOBOX'] )): ?><?php echo $this->_tpl_vars['box_INFOBOX']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_CURRENCIES'] )): ?><?php echo $this->_tpl_vars['box_CURRENCIES']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_MANUFACTURERS_INFO'] )): ?><?php echo $this->_tpl_vars['box_MANUFACTURERS_INFO']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_MANUFACTURERS'] )): ?><?php echo $this->_tpl_vars['box_MANUFACTURERS']; ?>
<?php endif; ?>
        <?php if (isset ( $this->_tpl_vars['box_TRUSTEDSHOPS'] )): ?><?php echo $this->_tpl_vars['box_TRUSTEDSHOPS']; ?>
<?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
  <p class="footer"><?php echo @TITLE; ?>
 &copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 | Template &copy; 2009-<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 by <span class="cop_magenta">mod</span><span class="cop_grey">ified eCommerce Shopsoftware</span></p>
</div>
<?php if (( @TRACKING_COUNT_ADMIN_ACTIVE == 'true' && $_SESSION['customers_status']['customers_status_id'] == '0' ) || $_SESSION['customers_status']['customers_status_id'] != '0'): ?>
  <?php if (@TRACKING_PIWIK_ACTIVE == 'true'): ?>
    <?php echo smarty_function_piwik(array('url' => @TRACKING_PIWIK_LOCAL_PATH,'id' => @TRACKING_PIWIK_ID,'goal' => @TRACKING_PIWIK_GOAL), $this);?>

  <?php endif; ?>
  <?php if (@TRACKING_GOOGLEANALYTICS_ACTIVE == 'true'): ?>
    <?php echo smarty_function_googleanalytics(array('account' => @TRACKING_GOOGLEANALYTICS_ID), $this);?>

  <?php endif; ?>
  <?php if (@TRACKING_FACEBOOK_ACTIVE == 'true'): ?>
    <?php echo smarty_function_facebook(array('id' => @TRACKING_FACEBOOK_ID), $this);?>

  <?php endif; ?>
<?php endif; ?>