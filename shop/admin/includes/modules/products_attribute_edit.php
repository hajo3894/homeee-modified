<?php
/* --------------------------------------------------------------
   $Id: new_attributes_include.php 901 2005-04-29 10:32:14Z novalis $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(new_attributes_functions); www.oscommerce.com 
   (c) 2003	 nextcommerce (new_attributes_include.php,v 1.11 2003/08/21); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------
   Third Party contributions:
   New Attribute Manager v4b				Autor: Mike G | mp3man@internetwork.net | http://downloads.ephing.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');
   // include needed functions

   require_once(DIR_FS_INC .'xtc_get_tax_rate.inc.php');
   require(DIR_FS_CATALOG.DIR_WS_CLASSES . 'xtcPrice.php');
   $xtPrice = new xtcPrice(DEFAULT_CURRENCY,$_SESSION['customers_status']['customers_status_id']);
 
?>
<form action="new_attributes.php" method="post" name="SUBMIT_ATTRIBUTES" enctype="multipart/form-data">
<input type="hidden" name="action" value="change_in_product">
<input type="hidden" name="cPath" value="<?php echo $cPath ?>">
<div>
<?php
echo xtc_draw_hidden_field(xtc_session_name(), xtc_session_id());

require(DIR_WS_MODULES . 'new_attributes_functions.php');
  
//Lieferstatus holen
$attributes_shipping_statuses = array ();
$attributes_shipping_statuses = xtc_get_shipping_status();
$attributes_shipping_statuses[] = array ('id' => 999, 'text' => 'keine Auswahl');

//get attributes data
$attributes_data_query = xtc_db_query('SELECT 	pa.products_attributes_id, 
											pa.options_values_id, 
											pa.attributes_image_export, 
											pa.attributes_model, 
											ov.products_options_values_name, 
											po.products_options_name 
											FROM ' . TABLE_PRODUCTS_ATTRIBUTES . ' pa 
											LEFT JOIN ' . TABLE_PRODUCTS_OPTIONS_VALUES . ' ov ON pa.options_values_id = ov.products_options_values_id 
											LEFT JOIN ' . TABLE_PRODUCTS_OPTIONS . ' po ON pa.options_id = po.products_options_id 
											WHERE products_id = ' . $_GET['pID'] . ' 
											AND ov.language_id = ' . $_SESSION['languages_id'] . ' 
											ORDER BY pa.sortorder, ov.products_options_values_name');

while($attributes_data = xtc_db_fetch_array($attributes_data_query)) {


			
	$cv_name = $attributes_data['products_options_values_name'];
	$cv_id = $attributes_data['options_values_id'];
	$cv_model = $attributes_data['attributes_model'];
	
	if($shippingtime_delay == '0000-00-00' || $shippingtime_delay == NULL) {
		$shippingtime_delay = '';
	}
	
	if (date('Y-m-d') < $shippingtime_delay) {
		$attributes_shippingtime_delay = $shippingtime_delay;
	}else{
		$attributes_shippingtime_delay = '';
	}
	
	//Class Sales-Channels
	$scAttInfo[$cv_id] = new salesChannels($_GET['pID'], $cv_id);
	
	//Pflicht-Angaben holen
	$lfInfo[$cv_id] = new lightFeatures($_GET['pID'], $cv_id);

?>
	 <div class="dashboard_module" style="float:left; height:100%">
	 <header><h3><?php echo $cv_name . ' - ' . $cv_model; ?></h3></header>
	 <div class="dashboard_module_content">
      <input type="hidden" name="optionValues[]" value="<?php echo $cv_id; ?>">
       <fieldset style="margin:10px">
        <legend style="font-size:14px"><b>Bild-Optionen</b></legend>
        <table cellpadding="0" cellspacing="0" border="0" width="100%">
         <tr>
          <td align="center" width="50%" style="padding-top:5px"><?php if(is_file(DIR_FS_CATALOG_OPTION_IMAGE_EXPORT_220px.$attributes_data['attributes_image_export'])){ ?><img src="<?php echo DIR_WS_CATALOG_OPTION_IMAGE_EXPORT_220px.$attributes_data['attributes_image_export']; ?>" /> <?php } else { ?>noch kein Bild vorhanden<?php } ?></td>
         </tr>
         <tr>
          <td style="padding-top:5px" align="center" width="50%"><?php echo xtc_draw_file_field($cv_id.'_image_export').xtc_draw_hidden_field($cv_id.'_option_pre_image_export',$attributes_data['attributes_image_export']); ?></td>
        </table>
       </fieldset>
       <fieldset style="margin:10px">
        <legend style="font-size:14px"><b>Preis-Optionen</b></legend>
        <table cellpadding="5" cellspacing="0" border="0" align="center">
           <tr>
            <td style="border-bottom:1px dotted #ccc">Sales-Channel</td><td style="border-bottom:1px dotted #ccc; border-left:1px dotted #ccc">Preis</td><td style="border-bottom:1px dotted #ccc; border-left:1px dotted #ccc">Streichpreis?</td><td style="border-bottom:1px dotted #ccc; border-left:1px dotted #ccc">Blacklist</td>
           </tr>
           <?php
	   	  for($i = 0, $z = count($scAttInfo[$cv_id]->sales_channels_data); $i < $z; $i++) {
			$sales_channel_price = 0;
			$blacklist = '';
			$scid = $scAttInfo[$cv_id]->sales_channels_data[$i]['id'];

			if (PRICE_IS_BRUTTO == 'true') {
				$sales_channel_price = $xtPrice->xtcFormat(xtc_round($scAttInfo[$cv_id]->sales_channels_prices[$scid]['products_price'] * ((100+(xtc_get_tax_rate(xtc_get_tax_class_id($_GET['pID']))))/100),PRICE_PRECISION),false);
			}else{
				$sales_channel_price = xtc_round($scAttInfo[$cv_id]->sales_channels_prices[$scid]['products_price'], PRICE_PRECISION);
			}
			
			$special_offer = $scAttInfo[$cv_id]->sales_channels_prices[$scid]['special_offer'];

			if($scid == 12) {
				$sales_channel_disabled[$cv_id][$i] = ' disabled="disabled"';
			}

			$blacklist = $scAttInfo[$cv_id]->sales_channels_prices[$scid]['blacklist'];
			
		?>
        <tr>
	     <td><span class="main"><?php echo $scAttInfo[$cv_id]->sales_channels_data[$i]['channel_name']; ?></span></td>
         <td nowrap="nowrap" style="border-left:1px dotted #ccc"><div class="main" style="padding-bottom:5px"><?php echo xtc_draw_input_field('sales_channel_price[' . $cv_id . '][' . $scid . ']', $sales_channel_price, 'size=15' . $sales_channel_disabled[$cv_id][$i]); ?></div>
         </td>
		 <td style="border-left:1px dotted #ccc; text-align:center"><?php echo xtc_draw_selection_field('special_offer[' . $cv_id . '][' . $scid . ']', 'checkbox', '1',$special_offer == 1 ? true : false, '', $sales_channel_disabled[$cv_id][$i]);?></td>
		 <td style="border-left:1px dotted #ccc; text-align:center"><?php echo xtc_draw_input_field('sales_channel_blacklist[' . $cv_id . '][' . $scid . ']', $blacklist, 'size=15' . $sales_channel_disabled[$cv_id][$i]); ?>
        </tr>
        <?php } ?>
		<?php
		 // brutto Admin
            if (PRICE_IS_BRUTTO=='true'){
			$attribute_value_price_uvp_calculate = $xtPrice->xtcFormat(xtc_round($attribute_value_price_uvp*((100+(xtc_get_tax_rate(xtc_get_tax_class_id($_GET['pID']))))/100),PRICE_PRECISION),false);
            } else {
			$attribute_value_price_uvp_calculate = xtc_round($attribute_value_price_uvp,PRICE_PRECISION);
            }
			//Einkaufspreis
			$attribute_value_purchase_price = number_format($attribute_value_purchase_price, 2, '.', '');
		?>
        </table>
	   <div style="margin-top:20px; padding-top:20px; padding-bottom:15px; border-top:1px dotted #ccc">
         <div style="float:left; padding-right:50px">Einkaufspreis:&nbsp;<input type="text" name="<?php echo $cv_id; ?>_purchase_price" value="<?php echo $attribute_value_purchase_price; ?>" size="10"></div>
         <div style="float:left">UVP-Preis:&nbsp;<input type="text" name="<?php echo $cv_id; ?>_price_uvp" value="<?php echo $attribute_value_price_uvp_calculate; ?>" size="10"></div>
		<div style="clear:both"></div>
		</div>
       </fieldset>
       <fieldset style="margin:10px">
        <legend style="font-size:14px"><b>Allgemeine-Optionen</b></legend>
        <table cellpadding="0" cellspacing="0" border="0">
         <tr>
          <td width="250px">Bestellbar:</td><td><input type="checkbox" name="<?php echo $cv_id; ?>_attributes_active" value="1" <?php echo $checked_attributes_active; ?> /></td>
         </tr>
         <tr>
          <td width="250px">Reihenfolge:</td><td><input type="text" name="<?php echo $cv_id; ?>_sortorder" value="<?php echo $sortorder; ?>" size="4"></td>
         </tr>
         <tr>
          <td width="250px">Artikelnummer:</td><td><input type="text" name="<?php echo $cv_id; ?>_model" value="<?php echo $attribute_value_model; ?>" size="15"></td>
         </tr>
         <tr>
          <td width="250px">EAN-Nummer:</td><td><input type="text" name="<?php echo $cv_id; ?>_attributes_ean" value="<?php echo $attributes_ean; ?>" maxlength="13" size="15"></td>
         </tr>
         <tr>
          <td width="250px">Lagerbestand:</td><td><input type="text" name="<?php echo $cv_id; ?>_stock" value="<?php echo $attribute_value_stock; ?>" size="4"></td>
         </tr>
         <tr>
          <td width="250px">Gewicht:</td><td><input type="text" name="<?php echo $cv_id; ?>_att_weight" value="<?php echo number_format($attribute_value_weight, 2, '.', ''); ?>" size="4">(kg)</td>
         </tr>
        </table>
       </fieldset>
       <fieldset style="margin:10px">
        <legend style="font-size:14px"><b>Lieferoptionen</b></legend>
        <table cellpadding="0" cellspacing="0" border="0">
         <tr>
          <td width="250px">Sonderfracht:</td><td><input type="checkbox" name="<?php echo $cv_id; ?>_attributes_sonder" value="1" <?php echo $checked_attributes_sonder; ?> /></td>
         </tr>
         <tr>
          <td width="250px">Lieferstatus unbekannt:</td><td><input type="checkbox" name="<?php echo $cv_id; ?>_shippingtime_unknown" value="1" <?php echo $checked_shippingtime_unknown; ?> /></td>
         </tr>
         <tr>
          <td width="250px">Genereller Lieferstatus:</td><td><?php echo xtc_draw_pull_down_menu($cv_id . '_attributes_shippingtime_id', $attributes_shipping_statuses, $attributes_shippingtime_id); ?></td>
         </tr>
         <tr>
          <td width="250px">Verz&ouml;gerung:</td><td><input type="text" id="<?php echo $cv_id; ?>_shippingtime_delay" name="<?php echo $cv_id; ?>_shippingtime_delay" value="<?php echo $attributes_shippingtime_delay; ?>" maxlength="10" size="10"><?php echo xtc_image(DIR_WS_IMAGES . 'btn_calendar.gif', 'btn_calendar', '', '', 'id="btn_' . $cv_id . '_shippingtime_delay" style="cursor: pointer; padding-left: 3px;"'); ?></td>
         </tr>
        </table>
       </fieldset>
       <script type="text/javascript">
					<!--
					Calendar.setup({
						inputField     :    "<?php echo $cv_id; ?>_shippingtime_delay",      // id of the input field
						ifFormat       :    "%Y-%m-%d",       // format of the input field
						showsTime      :    false,            // will display a time selector
						button         :    "btn_<?php echo $cv_id; ?>_shippingtime_delay",   // trigger for the calendar (button ID)
						singleClick    :    true,           // double-click mode
						step           :    1                // show all years in drop-down boxes (instead of every other year as default)
					});
					-->
		</script>
       
       <script type="text/javascript">
		function wechsle_art_<?php echo $cv_id; ?>() {
		  if (document.SUBMIT_ATTRIBUTES.illuminant_available_<?php echo $cv_id; ?>[0].checked == true) {
			document.SUBMIT_ATTRIBUTES.ieec_<?php echo $cv_id; ?>.disabled = false;
			document.SUBMIT_ATTRIBUTES.light_consumption_<?php echo $cv_id; ?>.disabled = false;
		  } else {
			document.SUBMIT_ATTRIBUTES.ieec_<?php echo $cv_id; ?>.disabled = true;
			document.SUBMIT_ATTRIBUTES.light_consumption_<?php echo $cv_id; ?>.disabled = true;
		  }
		}
		</script>
       <fieldset style="margin:10px">
         <legend style="font-size:14px"><b>Pflicht-Angaben</b></legend>
          <table cellpadding="3" cellspacing="0" border="0" width="100%">
           <tr>
            <td width="100%">
            <?php $required_data = false;
			$google_cat_lower = strtolower($pInfo->google_category);
			 if (strpos($google_cat_lower, 'beleuchtung') || strpos($google_cat_lower, 'leuchte') || strpos($google_cat_lower, 'lampe') || strpos($google_cat_lower, 'licht')) {
				 
				if($lfInfo[$cv_id]->light_features_data['illuminant_available'] == 1) {
					$disabled[$cv_id] = '';
					$checked_yes[$cv_id] = 'checked="checked"';
				}else{
					$disabled[$cv_id] = ' disabled';
					$checked_no[$cv_id] = 'checked="checked"';
				}
			 ?>
             <table width="100%" cellpadding="1" cellspacing="0" border="0" style="border-bottom:1px solid #cccccc">
              <tr>
               <th colspan="2" style="text-align:left">Kategorie Lampen<input type="hidden" name="eec_data_<?php echo $cv_id; ?>" value="true" /></th>
              </tr>
              <tr>
               <td>Energieeffizienzklasse</td><td>von <?php echo xtc_get_eec_drop_down('eec1_' . $cv_id, $lfInfo[$cv_id]->light_features_data['energy_efficiency_category1']); ?> bis <?php echo xtc_get_eec_drop_down('eec2_' . $cv_id, $lfInfo[$cv_id]->light_features_data['energy_efficiency_category2']); ?></td>
              </tr>
              <tr>
               <td>Ist ein Leuchtmittel enthalten?</td>
               <td>	Ja<input type="radio" <?php echo $checked_yes[$cv_id]; ?> name="illuminant_available_<?php echo $cv_id; ?>" value="1" onclick="wechsle_art_<?php echo $cv_id; ?>()" />&nbsp;
               		Nein<input type="radio" <?php echo $checked_no[$cv_id]; ?> name="illuminant_available_<?php echo $cv_id; ?>" value="0" onclick="wechsle_art_<?php echo $cv_id; ?>()" />
               </td>
              </tr>
              <tr>
               <td>Energieeffizienzklasse (enthaltenes Leuchtmittel)</td><td><?php echo xtc_get_eec_drop_down('ieec_' . $cv_id, $lfInfo[$cv_id]->light_features_data['illuminant_energy_efficiency_category'], $disabled[$cv_id]); ?></td>
              </tr>
              <tr>
               <td>Verbrauch kWh/1000h</td><td><?php echo xtc_draw_input_field('light_consumption_' . $cv_id, number_format($lfInfo[$cv_id]->light_features_data['consumption'], 2, '.', ''), 'size="4"' . $disabled[$cv_id]); ?> (leer wenn kein Leuchtmittel)</td>
              </tr>
             </table>
             <?php $required_data = true; } ?>
             <?php if (!$required_data && $pInfo->google_category != '') { ?>
             <div style="color:green">Laut der Angabe der Google Kategorie, sind f&uuml;r dieses Produkt keine Pflicht-Daten notwendig.</div>
             <?php } ?>
             <?php if ($pInfo->google_category == '') { ?>
             <div style="color:red; width:500px">Es muss eine Google Kategorie angegeben werden, damit &uuml;berpr&uuml;ft werden kann, ob f&uuml;r dieses Produkt Pflicht-Angaben notwendig sind.</div>
             <?php } ?>
            </td>
           </tr>
          </table>
         </fieldset>
      </div>
	</div>

<?php } ?>
</div>
<div style="clear:both; padding:10px 0px 0px 10px">
<?php
echo xtc_button('Attribute speichern') . '&nbsp;';
echo xtc_button_link(BUTTON_CANCEL, FILENAME_CATEGORIES . '?cPath=' . $cPath . '&pID=' . $_GET['pID']);
?>
</div>
 <input type="hidden" name="current_product_id_att" value="<?php echo $_GET['pID'] ?>">
 <input type="hidden" name="current_product_id" value="<?php echo $_GET['pID'] ?>">
</form>