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
$admin_access_query = xtc_db_query("select * from " . TABLE_ADMIN_ACCESS . " where customers_id = '" . $_SESSION['customer_id'] . "'");
$admin_access = xtc_db_fetch_array($admin_access_query);
   
$product_query = xtc_db_query("select *, date_format(p.products_date_available, '%Y-%m-%d') as products_date_available 
							   from ".TABLE_PRODUCTS." p, ".TABLE_PRODUCTS_DESCRIPTION." pd
							  where p.products_id = '".(int) $_GET['pID']."'
							  and p.products_id = pd.products_id
							  and pd.language_id = '".$_SESSION['languages_id']."'");

$product = xtc_db_fetch_array($product_query);
$pInfo = new objectInfo($product);
$pid = $pInfo->products_id;

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
    <a class="breadcrumbs_dashboard_current"><?php echo TEXT_PRODUCTS_DASHBOARD_EDITCOLLIS; ?></a>
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

<div>
<?php echo xtc_draw_form('update_collis', FILENAME_CATEGORIES, 'cPath=' . $_GET['cPath'] . '&pID=' . $_GET['pID'] . '&action=update_collis', 'post', 'enctype="multipart/form-data"'); ?>

<?php if (getAttributesCount() > 0) { 

$attributes_query = xtc_db_query('SELECT pa.options_values_id, pa.attributes_model, pov.products_options_values_name FROM ' . TABLE_PRODUCTS_ATTRIBUTES . ' pa LEFT JOIN ' . TABLE_PRODUCTS_OPTIONS_VALUES . ' pov ON pa.options_values_id = pov.products_options_values_id WHERE pa.products_id = ' . $pid . ' AND pov.language_id = ' . $_SESSION['languages_id']);

while($attributes = xtc_db_fetch_array($attributes_query)) { 

	$ovid = $attributes['options_values_id'];

?>
	
	<?php $collis[$ovid] = new products_collis($pid, $ovid); ?>
	<div class="dashboard_module" style="float:left; height:100%">
	<header><h3><?php echo TEXT_PRODUCTS_COLLIS_EDIT; ?></h3></header>
	<div class="dashboard_module_content">
	<div style="text-align:center; font-size:16px; padding-bottom:10px; font-weight:bold; border-bottom:1px dotted #ccc"><?php echo TEXT_PRODUCTS_COLLIS_OPTION . ': ' . $attributes['products_options_values_name'] . '<br />' . TEXT_PRODUCTS_COLLIS_ARTICLE_NR . ': ' . $pInfo->products_model . $attributes['attributes_model']; ?></div>
	<table cellpadding="3" cellspacing="0" border="0">
        <?php for($i = 1; $i <= NUMBER_COUNT_COLLIS; $i++) { 
		if ($collis[$ovid]->products_colli_data[$i]['weight'] > 0) {
			$weight[$i] = number_format($collis[$ovid]->products_colli_data[$i]['weight'], 2, '.', '');
		}else{
			$weight[$i] = '';
		}		
		?>
        <tr>
         <?php if ($i != NUMBER_COUNT_COLLIS) { ?>
            <td style="border-bottom:1px solid #cccccc; padding:10px 0px 10px 0px">
            <?php }else{ ?>
            <td style="padding:10px 0px 10px 0px">            
            <?php } ?>
             <table cellpadding="10" cellspacing="0" border="0">
              <tr>
               <td><div><span class="main">Colli <?php echo $i; ?></span></div><div><?php echo TEXT_PRODUCTS_COLLIS_DELIVERY_CHOISE;?>:<br /><b><?php echo $collis[$ovid]->products_colli_data[$i]['shipment_choise']; ?></b></div></td>
               <td style="border-left:1px solid #ccc">
                <table cellpadding="2" cellspacing="0" border="0">
                 <tr>
                  <td style="padding-bottom:5px; padding-right:8px"><?php echo TEXT_PRODUCTS_COLLIS_WEIGHT; ?>:</td>
				  <td style="padding-bottom:5px"><?php echo xtc_draw_input_field($pid . '[' . $ovid . '][' . $i . '][weight]', $weight[$i], 'size=4');  echo  TEXT_PRODUCTS_WEIGHT_INFO?></td>
                 </tr>
                 <tr>
                  <td style="padding-bottom:5px; padding-right:5px">BxLxH:</td>
                  <td style="padding-bottom:5px" nowrap><?php echo xtc_draw_input_field($pid . '[' . $ovid . '][' . $i . '][width]' , $collis[$ovid]->products_colli_data[$i]['width'],'size=4'); ?>x<?php echo xtc_draw_input_field($pid . '[' . $ovid . '][' . $i . '][length]' , $collis[$ovid]->products_colli_data[$i]['length'],'size=4'); ?>x<?php echo xtc_draw_input_field($pid . '[' . $ovid . '][' . $i . '][height]' , $collis[$ovid]->products_colli_data[$i]['height'],'size=4'); ?>(cm)</td>
                 </tr>
				 <tr>
				<td style="padding-bottom:5px; padding-right:5px"><?php echo TEXT_PRODUCTS_COLLIS_DELIVERY_CARDBOARD; ?>:</td>
				<td style="padding-bottom:5px" nowrap>
				<select name="<?php echo $pid . '[' . $ovid . '][' . $i . '][cardboard]'; ?>">
				 <option value="none"><?php echo TEXT_PRODUCTS_COLLIS_CARDBOARD_NONE; ?></option>';
				<?php 			
							$cardboards = explode('|', CARDBOARDS_SETTING);
							
							foreach($cardboards as $value) {
								
								$cardboards_content = explode(',', $value);
								
								if($collis[$ovid]->products_colli_data[$i]['cardboard'] == $cardboards_content[0]) {
									
									$cardboard_selected[$ovid] = ' selected';
									
								}else{
									
									$cardboard_selected[$ovid] = '';
									
								}
								
								echo '<option value="' . $cardboards_content[0] . '"' . $cardboard_selected[$ovid] . '>' . $cardboards_content[0] . ' - ' . $cardboards_content[1] . 'kg</option>';
								
							}
				?>
				</select></td>
			    </tr>
				<?php

				$check_outer_cardboard	 = false;
				$check_outer_paper = false;
				$check_inner_padding = false;
				$check_other = false;
				$other_note = '';
				
				$packaging_note = explode(',', $collis[$ovid]->products_colli_data[$i]['packaging_note']);
				
				foreach($packaging_note as $value) {
					
					if($value == 'outer_cardboard') {
						$check_outer_cardboard = true;
					}
					
					if($value == 'outer_paper') {
						$check_outer_paper = true;
					}
					
					if($value == 'inner_padding') {
						$check_inner_padding = true;
					}
					
					if($value != '' && $value != 'inner_padding' && $value != 'outer_paper' && $value != 'outer_cardboard') {
						$check_other = true;
						$other_note = $value;
					}
					
				}
				
				?>
				<tr>
				<td style="padding-right:10px"><?php echo TEXT_PRODUCTS_COLLIS_PACKING_NOTE; ?>:</td>
				<td nowrap><?php echo xtc_draw_selection_field($pid . '[' . $ovid . '][' . $i . '][packaging_note][outer_cardboard]', 'checkbox', 'outer_cardboard', $check_outer_cardboard ? true : false) . ' ' . TEXT_PRODUCTS_COLLIS_OUTER_CARBOARD; ?><br />
				<?php echo xtc_draw_selection_field($pid . '[' . $ovid . '][' . $i . '][packaging_note][outer_paper]', 'checkbox', 'outer_paper', $check_outer_paper ? true : false) . ' ' . TEXT_PRODUCTS_COLLIS_OUTER_PAPER; ?><br />
				<?php echo xtc_draw_selection_field($pid . '[' . $ovid . '][' . $i . '][packaging_note][inner_padding]', 'checkbox', 'inner_padding', $check_inner_padding ? true : false) . ' ' . TEXT_PRODUCTS_COLLIS_INNER_PADDING; ?><br />
				<?php echo xtc_draw_selection_field($pid . '[' . $ovid . '][' . $i . '][packaging_note][other]', 'checkbox', '1', $check_other ? true : false); ?> <?php echo xtc_draw_input_field($pid . '[' . $ovid . '][' . $i . '][packaging_note][other_note]' , $other_note, 'size=15'); ?></td>
			    </tr>
                </table>
               </td>
               <td align="center" style="border-left:1px solid #ccc""><?php echo TEXT_PRODUCTS_COLLIS_DELETE; ?>?<br /><?php echo xtc_draw_selection_field($pid . '[' . $ovid . '][' . $i . '][delete]', 'checkbox', '1'); ?></td>
              </tr>
             </table>
            </td>
        </tr>
        <?php } ?>
       </table>
	</div>
	</div>	
	
<?php } ?>

	
	

	
	
<?php }else{ ?>
	
	<?php $collis = new products_collis($pid, 0); ?>
	<div class="dashboard_module" style="float:left; height:100%">
	<header><h3><?php echo TEXT_PRODUCTS_COLLIS_EDIT; ?></h3></header>
	<div class="dashboard_module_content">
	<table cellpadding="3" cellspacing="0" border="0">
        <?php for($i = 1; $i <= NUMBER_COUNT_COLLIS; $i++) { 
		if ($collis->products_colli_data[$i]['weight'] > 0) {
			$weight[$i] = number_format($collis->products_colli_data[$i]['weight'], 2, '.', '');
		}else{
			$weight[$i] = '';
		}		
		?>
        <tr>
         <?php if ($i != NUMBER_COUNT_COLLIS) { ?>
            <td style="border-bottom:1px solid #cccccc; padding:10px 0px 10px 0px">
            <?php }else{ ?>
            <td style="padding:10px 0px 10px 0px">            
            <?php } ?>
             <table cellpadding="10" cellspacing="0" border="0">
              <tr>
               <td><div><span class="main">Colli <?php echo $i; ?></span></div><div><?php echo TEXT_PRODUCTS_COLLIS_DELIVERY_CHOISE;?>:<br /><b><?php echo $collis->products_colli_data[$i]['shipment_choise']; ?></b></div></td>
               <td style="border-left:1px solid #ccc">
                <table cellpadding="2" cellspacing="0" border="0">
                 <tr>
                  <td style="padding-bottom:5px; padding-right:8px"><?php echo TEXT_PRODUCTS_COLLIS_WEIGHT; ?>:</td>
				  <td style="padding-bottom:5px"><?php echo xtc_draw_input_field($pid . '[0][' . $i . '][weight]', $weight[$i], 'size=4'); echo  TEXT_PRODUCTS_WEIGHT_INFO; ?></td>
                 </tr>
                 <tr>
                  <td style="padding-bottom:5px; padding-right:5px">BxLxH:</td>
                  <td style="padding-bottom:5px" nowrap><?php echo xtc_draw_input_field($pid . '[0][' . $i . '][width]' , $collis->products_colli_data[$i]['width'],'size=4'); ?>x<?php echo xtc_draw_input_field($pid . '[0][' . $i . '][length]' , $collis->products_colli_data[$i]['length'],'size=4'); ?>x<?php echo xtc_draw_input_field($pid . '[0][' . $i . '][height]' , $collis->products_colli_data[$i]['height'],'size=4'); ?>(cm)</td>
                 </tr>
			    <tr>
				<td style="padding-bottom:5px; padding-right:5px"><?php echo TEXT_PRODUCTS_COLLIS_DELIVERY_CARDBOARD; ?>:</td>
				<td style="padding-bottom:5px" nowrap>
				<select name="<?php echo $pid . '[0][' . $i . '][cardboard]'; ?>">
				 <option value="none"><?php echo TEXT_PRODUCTS_COLLIS_CARDBOARD_NONE; ?></option>';
				<?php 			
							$cardboards = explode('|', CARDBOARDS_SETTING);
							
							foreach($cardboards as $value) {
								
								$cardboards_content = explode(',', $value);
								
								if($collis->products_colli_data[$i]['cardboard'] == $cardboards_content[0]) {
									
									$cardboard_selected = ' selected';
									
								}else{
									
									$cardboard_selected = '';
									
								}
								
								echo '<option value="' . $cardboards_content[0] . '"' . $cardboard_selected . '>' . $cardboards_content[0] . ' - ' . $cardboards_content[1] . 'kg</option>';
								
							}
				?>
				</select></td>
			    </tr>
				
				<?php

				$check_outer_cardboard	 = false;
				$check_outer_paper = false;
				$check_inner_padding = false;
				$check_other = false;
				$other_note = '';
				
				$packaging_note = explode(',', $collis->products_colli_data[$i]['packaging_note']);
				
				foreach($packaging_note as $value) {
					
					if($value == 'outer_cardboard') {
						$check_outer_cardboard = true;
					}
					
					if($value == 'outer_paper') {
						$check_outer_paper = true;
					}
					
					if($value == 'inner_padding') {
						$check_inner_padding = true;
					}
					
					if($value != '' && $value != 'inner_padding' && $value != 'outer_paper' && $value != 'outer_cardboard') {
						$check_other = true;
						$other_note = $value;
					}
					
				}
				
				?>
				
			    <tr>
				<td style="padding-right:10px"><?php echo TEXT_PRODUCTS_COLLIS_PACKING_NOTE; ?>:</td>
				<td nowrap><?php echo xtc_draw_selection_field($pid . '[0][' . $i . '][packaging_note][outer_cardboard]', 'checkbox', 'outer_cardboard', $check_outer_cardboard ? true : false) . ' ' . TEXT_PRODUCTS_COLLIS_OUTER_CARBOARD; ?><br />
				<?php echo xtc_draw_selection_field($pid . '[0][' . $i . '][packaging_note][outer_paper]', 'checkbox', 'outer_paper', $check_outer_paper ? true : false) . ' ' . TEXT_PRODUCTS_COLLIS_OUTER_PAPER; ?><br />
				<?php echo xtc_draw_selection_field($pid . '[0][' . $i . '][packaging_note][inner_padding]', 'checkbox', 'inner_padding', $check_inner_padding ? true : false) . ' ' . TEXT_PRODUCTS_COLLIS_INNER_PADDING; ?><br />
				<?php echo xtc_draw_selection_field($pid . '[0][' . $i . '][packaging_note][other]', 'checkbox', '1', $check_other ? true : false); ?> <?php echo xtc_draw_input_field($pid . '[0][' . $i . '][packaging_note][other_note]' , $other_note, 'size=15'); ?></td>
			    </tr>
                </table>
               </td>
               <td align="center" style="border-left:1px solid #ccc"><?php echo TEXT_PRODUCTS_COLLIS_DELETE; ?>?<br /><?php echo xtc_draw_selection_field($pid . '[0][' . $i . '][delete]', 'checkbox', '1'); ?></td>
              </tr>
             </table>
            </td>
        </tr>
        <?php } ?>
       </table>
	</div>
	</div>
	
	
	
	
<?php } ?>
</div>
<div style="clear:both"></div>
<div style="padding:15px 0px 15px 15px"><input type="submit" class="button" value="<?php echo BUTTON_SAVE; ?>" onClick="return confirm('<?php echo SAVE_ENTRY; ?>')"></div>
</form>

