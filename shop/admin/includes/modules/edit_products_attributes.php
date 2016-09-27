<?php

/* --------------------------------------------------------------
   $Id: new_product.php 897 2005-04-28 21:36:55Z mz $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(categories.php,v 1.140 2003/03/24); www.oscommerce.com
   (c) 2003  nextcommerce (categories.php,v 1.37 2003/08/18); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------
   Third Party contribution:
   Enable_Disable_Categories 1.3               Autor: Mikel Williams | mikel@ladykatcostumes.com
   New Attribute Manager v4b                   Autor: Mike G | mp3man@internetwork.net | http://downloads.ephing.com
   Category Descriptions (Version: 1.5 MS2)    Original Author:   Brian Lowe <blowe@wpcusrgrp.org> | Editor: Lord Illicious <shaolin-venoms@illicious.net>
   Customers Status v3.x  (c) 2002-2003 Copyright Elari elari@free.fr | www.unlockgsm.com/dload-osc/ | CVS : http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/elari/?sortby=date#dirlist

   Released under the GNU General Public License
   --------------------------------------------------------------*/
$product_query = xtc_db_query("select *, date_format(p.products_date_available, '%Y-%m-%d') as products_date_available 
							   from ".TABLE_PRODUCTS." p, ".TABLE_PRODUCTS_DESCRIPTION." pd
							  where p.products_id = '".(int) $_GET['pID']."'
							  and p.products_id = pd.products_id
							  and pd.language_id = '".$_SESSION['languages_id']."'");

$product = xtc_db_fetch_array($product_query);
$pInfo = new objectInfo($product);

$text_new_or_edit = TEXT_EDIT_PRODUCT;
?>

<table cellpadding="5" cellspacing="0" border="0">
   <tr>
	<td nowrap>
	 <div class="pageHeadingImage"><?php echo xtc_image(DIR_WS_ICONS.'heading/icon_news.png'); ?></div>
	 <div class="pageHeading"><?php echo $pInfo->products_name; ?><br /></div>
	 <div class="main pdg2"><?php echo sprintf($text_new_or_edit,$breadcrumb_html); ?></div>
	</td>
   </tr>
 <tr>
  <td>
   <article class="breadcrumbs_dashboard">
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=new_product'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_DASHBOARD; ?></a>
	<?php if($admin_access['edit_products_generals']) { ?>
	<div class="breadcrumbs_dashboard_divider"></div>
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_general'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITGENERALS; ?></a>
	<?php } ?>
	<?php if($admin_access['edit_products_pics']) { ?>
	<div class="breadcrumbs_dashboard_divider"></div>
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_images'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITPICS; ?></a>
	<?php } ?>
	<?php if($admin_access['edit_products_collis']) { ?>
	<div class="breadcrumbs_dashboard_divider"></div>
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_collis'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITCOLLIS; ?></a>
	<?php } ?>
	<?php if($admin_access['edit_products_attributes']) { ?>
	<?php if (getAttributesCount() > 0) { ?>
	<div class="breadcrumbs_dashboard_divider"></div>
    <a class="breadcrumbs_dashboard_current"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITATTRIBUTES; ?></a>
	<?php } ?>
	<?php } ?>
	<?php if($admin_access['edit_products_price_tags']) { ?>
    <div class="breadcrumbs_dashboard_divider"></div>
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_price_tags'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_GENERATEPRICETAG; ?></a>
	<?php } ?>
	<?php if($admin_access['edit_products_texts']) { ?>
    <div class="breadcrumbs_dashboard_divider"></div>
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_text'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITTEXT; ?></a>
	<?php } ?>
	<?php if($admin_access['edit_products_filters']) { ?>
	<div class="breadcrumbs_dashboard_divider"></div>
	<a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_filter'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITFILTER; ?></a>
	<?php } ?>
	<?php if($admin_access['edit_products_taxonomie']) { ?>
	<div class="breadcrumbs_dashboard_divider"></div>
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_export_cats'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_CATEGORIES; ?></a>
	<?php } ?>
   </article>
  </td>
 </tr>
</table>

<?php include (DIR_WS_MODULES.'products_attribute_edit.php'); ?>


