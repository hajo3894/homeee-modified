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

//Admin Access
$admin_access_query = xtc_db_query("select * from " . TABLE_ADMIN_ACCESS . " where customers_id = '" . $_SESSION['customer_id'] . "'");
$admin_access = xtc_db_fetch_array($admin_access_query);


if (isset($_GET['pID']) && (!$_POST)) {
    $product_query = xtc_db_query("SELECT *,
                                          date_format(p.products_date_available, '%Y-%m-%d') as products_date_available
                                     FROM ".TABLE_PRODUCTS." p,
                                          ".TABLE_PRODUCTS_DESCRIPTION." pd
                                    WHERE p.products_id = '".(int) $_GET['pID']."'
                                      AND p.products_id = pd.products_id
                                      AND pd.language_id = '".(int)$_SESSION['languages_id']."'");
    $product = xtc_db_fetch_array($product_query);
    $pInfo = new objectInfo($product);
  } elseif ($_POST) {
    $pInfo = new objectInfo($_POST);
    $products_name = $_POST['products_name'];
    $products_description = $_POST['products_description'];
    $products_description_export = $_POST['products_description_export'];
    $products_short_description = $_POST['products_short_description'];
    $products_order_description = $_POST['products_order_description'];
    $products_keywords = $_POST['products_keywords'];
    $products_meta_title = $_POST['products_meta_title'];
    $products_meta_description = $_POST['products_meta_description'];
    $products_meta_keywords = $_POST['products_meta_keywords'];
    $products_url = $_POST['products_url'];
    $products_startpage_sort = $_POST['products_startpage_sort'];
    $pInfo->products_startpage = $_POST['products_startpage'];
  } else {
    $pInfo = new objectInfo(array ());
    $text_new_or_edit = TEXT_NEW_PRODUCT;
  }

$languages = xtc_get_languages();
$text_new_or_edit = TEXT_EDIT_PRODUCT;


?>
<?php echo xtc_draw_form('edit_products_text', FILENAME_CATEGORIES, 'cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=update_products_text', 'post', 'enctype="multipart/form-data"'); ?>
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
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_attributes'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITATTRIBUTES; ?></a>
	<?php } ?>
	<?php } ?>
	<?php if($admin_access['edit_products_price_tags']) { ?>
    <div class="breadcrumbs_dashboard_divider"></div>
    <a href="<?php echo FILENAME_CATEGORIES . '?cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=edit_price_tags'; ?>"><?php echo TEXT_PRODUCTS_DASHBOARD_GENERATEPRICETAG; ?></a>
	<?php } ?>
	<?php if($admin_access['edit_products_texts']) { ?>
    <div class="breadcrumbs_dashboard_divider"></div>
    <a class="breadcrumbs_dashboard_current"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITTEXT; ?></a>
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

<div style="padding:5px;clear:both;">
      <?php
      include('includes/lang_tabs.php');
      for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
        echo ('<div id="tab_lang_' . $i . '">');
        $lng_image = xtc_image(DIR_WS_LANGUAGES . $languages[$i]['directory'] .'/admin/images/'. $languages[$i]['image'], $languages[$i]['name']);
        $products_desc_fields = $catfunc->get_products_desc_fields($pInfo->products_id, $languages[$i]['id']);
        ?>
        <div class="bg_notice" style="height:5px;"></div>
        <div class="main bg_notice" style="padding:3px; line-height:20px;">
          <?php echo $lng_image ?>&nbsp;<b><?php echo TEXT_PRODUCTS_NAME; ?>&nbsp;</b><?php echo xtc_draw_input_field('products_name[' . $languages[$i]['id'] . ']', (isset($products_name[$languages[$i]['id']]) ? stripslashes($products_name[$languages[$i]['id']]) : $products_desc_fields['products_name']),'style="width:80%" maxlength="255"'); ?>
        </div>
        <div class="main" style="padding: 3px; line-height:20px;">
           <?php echo $lng_image. '&nbsp;'.TEXT_PRODUCTS_URL . '&nbsp;<small>' . TEXT_PRODUCTS_URL_WITHOUT_HTTP . '</small>&nbsp;'; ?><?php echo xtc_draw_input_field('products_url[' . $languages[$i]['id'] . ']', (isset($products_url[$languages[$i]['id']]) ? stripslashes($products_url[$languages[$i]['id']]) : $products_desc_fields['products_url']),'style="width:70%" maxlength="255"'); ?>
        </div>
        <!-- input boxes desc, meta etc -->
        <div class="main" style="padding: 3px; line-height:20px;">
           <b><?php echo $lng_image . '&nbsp;' . TEXT_PRODUCTS_DESCRIPTION; ?></b><br />
           <?php echo xtc_draw_textarea_field('products_description[' . $languages[$i]['id'] . ']', 'soft', '103', '30', (isset($products_description[$languages[$i]['id']]) ? stripslashes($products_description[$languages[$i]['id']]) : $products_desc_fields['products_description'])); ?>
        </div>
		<div style="height: 8px;"></div>
        <div class="main" style="vertical-align:top; padding: 3px; line-height:20px;">
          <b><?php echo $lng_image . '&nbsp;Artikelbeschreibung f&uuml;r Exporte:'; ?></b><br />
          <?php echo xtc_draw_textarea_field('products_description_export[' . $languages[$i]['id'] . ']', 'soft', '103', '20', (isset($products_description_export[$languages[$i]['id']]) ? stripslashes($products_description_export[$languages[$i]['id']]) : $products_desc_fields['products_description_export'])); ?>
        </div>
        <div style="height: 8px;"></div>
        <div class="main" style="vertical-align:top; padding: 3px; line-height:20px;">
          <b><?php echo $lng_image . '&nbsp;' . TEXT_PRODUCTS_SHORT_DESCRIPTION; ?></b><br />
          <?php echo xtc_draw_textarea_field('products_short_description[' . $languages[$i]['id'] . ']', 'soft', '103', '20', (isset($products_short_description[$languages[$i]['id']]) ? stripslashes($products_short_description[$languages[$i]['id']]) : $products_desc_fields['products_short_description'])); ?>
        </div>
        <div class="main" style="vertical-align:top; padding: 3px; line-height:20px;">
          <b><?php echo $lng_image . '&nbsp;' . TEXT_PRODUCTS_ORDER_DESCRIPTION; ?></b><br />
          <?php echo xtc_draw_textarea_field('products_order_description[' . $languages[$i]['id'] . ']', 'soft', '103', '10', (isset($products_order_description[$languages[$i]['id']]) ? stripslashes($products_order_description[$languages[$i]['id']]) : $products_desc_fields['products_order_description']), 'style="width:100%; height:50px;"'); ?>
        </div>
        <div class="main" style="vertical-align:top; padding: 3px; line-height:20px;">
            <?php echo $lng_image. '&nbsp;'. TEXT_PRODUCTS_KEYWORDS . ' (max. ' . META_PRODUCTS_KEYWORDS_LENGTH . ' ' . TEXT_CHARACTERS .')'; ?> <br/>
            <?php echo xtc_draw_input_field('products_keywords[' . $languages[$i]['id'] . ']',(isset($products_keywords[$languages[$i]['id']]) ? stripslashes($products_keywords[$languages[$i]['id']]) : $products_desc_fields['products_keywords']), 'style="width:100%" maxlength="' . META_PRODUCTS_KEYWORDS_LENGTH . '"'); ?><br/>
            <?php echo $lng_image. '&nbsp;'. TEXT_META_TITLE. ' (max. ' . META_TITLE_LENGTH . ' ' . TEXT_CHARACTERS .')'; ?> <br/>
            <?php echo xtc_draw_input_field('products_meta_title[' . $languages[$i]['id'] . ']',(isset($products_meta_title[$languages[$i]['id']]) ? stripslashes($products_meta_title[$languages[$i]['id']]) : $products_desc_fields['products_meta_title']), 'style="width:100%" maxlength="' . META_TITLE_LENGTH . '"'); ?><br/>
            <?php echo $lng_image. '&nbsp;'. TEXT_META_DESCRIPTION. ' (max. ' . META_DESCRIPTION_LENGTH . ' ' . TEXT_CHARACTERS .')'; ?> <br/>
            <?php echo xtc_draw_input_field('products_meta_description[' . $languages[$i]['id'] . ']',(isset($products_meta_description[$languages[$i]['id']]) ? stripslashes($products_meta_description[$languages[$i]['id']]) : $products_desc_fields['products_meta_description']), 'style="width:100%" maxlength="' . META_DESCRIPTION_LENGTH . '"'); ?><br/>
            <?php echo $lng_image. '&nbsp;'. TEXT_META_KEYWORDS. ' (max. ' . META_KEYWORDS_LENGTH . ' ' . TEXT_CHARACTERS .')'; ?> <br/>
            <?php echo xtc_draw_input_field('products_meta_keywords[' . $languages[$i]['id'] . ']', (isset($products_meta_keywords[$languages[$i]['id']]) ? stripslashes($products_meta_keywords[$languages[$i]['id']]) : $products_desc_fields['products_meta_keywords']), 'style="width:100%" maxlength="' . META_KEYWORDS_LENGTH . '"'); ?>
        </div>
		<div>
		<table cellpadding="0" cellspacing="0" border="0" width="100%">
		  <tr>
		   <td width="100%">
			<fieldset>
			 <legend style="font-size:14px"><?php echo $lng_image ?>&nbsp;<b><?php echo TEXT_PRODUCTS_ADVISER; ?></b></legend>
			 <table cellpadding="1" cellspacing="0" border="0" width="100%">
			 <?php for($if = 1; $if <= NUMBER_COUNT_FAQ; $if++) { 
			 
					$products_faq_fields = $catfunc->get_products_faq_fields($pInfo->products_id, $languages[$i]['id'], $if);?>
			  <tr>
			   <td width="100%"><?php echo TEXT_PRODUCTS_ADVISER_QUESTION . ' ' . $if; ?>:<br /><?php echo  xtc_draw_input_field('faq_question[' . $if . '][' . $languages[$i]['id'] . ']', $products_faq_fields['question'], 'size="100%" style="width: 100%"'); ?></td>
			  </tr>
			  <tr>
			   <td style="padding-top:10px"><?php echo TEXT_PRODUCTS_ADVISER_ANSWER . ' ' . $if; ?>:<br /><?php echo xtc_draw_textarea_field('faq_answer[' . $if . '][' . $languages[$i]['id'] . ']', 'soft', '30', '10', $products_faq_fields['answer']); ?></td>
			  </tr>
			  <tr>
			   <td><div style="padding-bottom:15px"></div></td>
			  </tr>
			  <?php } ?>
			 </table>
			</fieldset>
		   </td>
		  </tr>
		 </table>
		 </div>
        <?php
        
        if (file_exists("includes/modules/new_products_content.php")) {
          include("includes/modules/new_products_content.php");
        }

        echo ('</div>');
      } ?>
    </div>
<?php echo xtc_draw_hidden_field('products_id', $_GET['pID']); ?>
<input type="submit" class="button" value="<?php echo BUTTON_SAVE; ?>" onClick="return confirm('<?php echo SAVE_ENTRY; ?>')">
<?php echo '<a class="button" href="' . xtc_href_link(FILENAME_CATEGORIES, 'cPath=' . $cPath . '&pID=' . $_GET['pID']) . '&action=new_product">' . BUTTON_CANCEL . '</a>'; ?>
</form>


