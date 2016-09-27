<?php

/* -----------------------------------------------------------------------------------------
   $Id: database_query.php 1188 2007-05-31 14:24:34Z franz $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );

define('MODULE_DATABASE_QUERY_TEXT_DESCRIPTION', 'Datenbank Befehle ausf&uuml;hren');
define('MODULE_DATABASE_QUERY_TEXT_TITLE', 'Datenbank Query');
define('MODULE_DATABASE_QUERY_STATUS_DESC','Modulstatus');
define('MODULE_DATABASE_QUERY_STATUS_TITLE','Status');
define('EXPORT_YES','Nur Herunterladen');
define('EXPORT_NO','Am Server Speichern');
define('EXPORT','Bitte den Sicherungsprozess AUF KEINEN FALL unterbrechen. Dieser kann einige Minuten in Anspruch nehmen.');
define('EXPORT_TYPE','<hr noshade><b>Speicherart:</b>');
define('DATE_FORMAT_EXPORT', '%d.%m.%Y');  // this is used for strftime()

//include(DIR_WS_FUNCTIONS . 'get_cheapest_c_price.php');

// include needed functions
class database_query {
	var $code, $title, $description, $enabled;

	function database_query() {
		global $order;

		$this->code	   = 'database_query';
		$this->language   = '';
		$this->title = MODULE_DATABASE_QUERY_TEXT_TITLE;
		$this->description = MODULE_DATABASE_QUERY_TEXT_DESCRIPTION;
		$this->sort_order = MODULE_DATABASE_QUERY_SORT_ORDER;
		$this->enabled = ((MODULE_DATABASE_QUERY_STATUS == 'True') ? true : false);
		$this->CAT=array();
		$this->PARENT=array();
	}
	
	

	function process($file) {
		@xtc_set_time_limit(0);
		
		
		/*
		$data_query = xtc_db_query('SELECT * FROM product_filter_items');
		
		while($data = xtc_db_fetch_array($data_query)) {
			
			$sql_data_array = array('id' => $data['id'],
									'language_id' => 1,
									'categories_id' => $data['categories_id'],
									'title' => $data['title'],
									'name' => $data['name'],
									'description' => $data['description'],
									'status' => $data['status'],
									'position' => $data['position']);
			
			xtc_db_perform('product_filter_items', $sql_data_array);
			
		}
		*/
		
		/*
		$db_query = xtc_db_query('SELECT * FROM products');
		
		while($db = xtc_db_fetch_array($db_query)) {
			
			$products_id = $db['products_id'];
			
			$attributes_count_query = xtc_db_query("select count(*) as count from " . TABLE_PRODUCTS_ATTRIBUTES . " where products_id = '" . $products_id . "'");
			$attributes_count = xtc_db_fetch_array($attributes_count_query);
		
			if ($attributes_count['count'] > 0) {
				xtc_db_query('UPDATE products SET products_ean = "" WHERE products_id = ' . $products_id);
			}
		}
		*/
		
		/*
		print '<pre>';
		print_r(getCheapestCompetitionPrice(2038, 0));
		print '</pre>';
		*/
		
		/*
		$fp = fopen('includes/modules/export/blz.csv', 'r');
		while ($data = fgetcsv($fp, 1024, ";")) {
		  if ($data[3] != ''){
		  
		  if(strlen($data[2]) == 1) {
			$data[2] = str_pad($data[2], 2, "0", STR_PAD_LEFT);
		  }
			$cdata = array ('blz' => $data[0],
							'bankname' => $data[1],
							'prz' => $data[2],
							'bic' => $data[3]);
							
			xtc_db_perform('bankdata', $cdata);
		  }
		}
		*/
		
		
		//echo iban_get_bank_part('DE38356605991202488010');

		/*
		//Saleschannels Historie mit aktuellen Preisen füllen
		
		$data_query = xtc_db_query('SELECT * FROM ' . TABLE_SALESCHANNELS_PRICES);
		
		while($data = xtc_db_fetch_array($data_query)) {
		
			$data_array = array(	'products_id' => $data['products_id'],
								'options_values_id' => $data['options_values_id'],
								'sales_channels_id' => $data['sales_channel_id'],
								'history_price' => xtc_round($data['products_price'] * ((100 + 19) / 100)),
								'timestamp' => $data['last_edit']);
			
			xtc_db_perform(TABLE_SALESCHANNELS_PRICES_HISTORY, $data_array);
		}
		*/
		
		//Funktion - Ethnicraft Preise prozentual runter setzen
		/*
		$percent_value = 10; //set the percent value for down
		$hersteller_id = 43; //changeing the manufacture
		$sales_channel_id = 2;  //set the sales channel
		$reason = 'Universo Positivo 10% Aktion 01/16'; //set the reason for the pricing
		
		$data_query = xtc_db_query('SELECT products_id, products_price, products_tax_class_id FROM ' . TABLE_PRODUCTS . ' WHERE hersteller_id = ' . $hersteller_id . ' AND products_status = 1');

		while($data = xtc_db_fetch_array($data_query)) {
			$products_id = $data['products_id'];
		
			$attributes_count_query = xtc_db_query("select count(*) as count from " . TABLE_PRODUCTS_ATTRIBUTES . " where products_id = '" . $products_id . "'");
			$attributes_count = xtc_db_fetch_array($attributes_count_query);
		
			if ($attributes_count['count'] > 0) {
				
				$attributes_data_query = xtc_db_query('SELECT options_values_price, options_values_id FROM ' . TABLE_PRODUCTS_ATTRIBUTES . ' WHERE products_id = ' . $products_id);
				while($attributes_data = xtc_db_fetch_array($attributes_data_query)) {
					
					//check about special offer
					$special_offer_query = xtc_db_query('SELECT id FROM ' . TABLE_SALESCHANNELS_PRICES . ' WHERE products_id = ' . $products_id . ' AND options_values_id = ' . $attributes_data['options_values_id'] . ' AND special_offer = 0 AND sales_channel_id = ' . $sales_channel_id);
					
					if(xtc_db_num_rows($special_offer_query) == 1) {
					
						//new price
						$new_price = $attributes_data['options_values_price'] - ($attributes_data['options_values_price'] * $percent_value / 100);
						
						savingPriceDB($new_price, $products_id, $attributes_data['options_values_id'], $data['products_tax_class_id'], $sales_channel_id, false, false, 1, $reason);
						
					}
				}
				
			}else{
				
				//check about special offer
				$special_offer_query = xtc_db_query('SELECT id FROM ' . TABLE_SALESCHANNELS_PRICES . ' WHERE products_id = ' . $products_id . ' AND options_values_id = 0 AND special_offer = 0 AND sales_channel_id = ' . $sales_channel_id);
				
				if(xtc_db_num_rows($special_offer_query) == 1) {
						
					//new price
					$new_price = $data['products_price'] - ($data['products_price'] * $percent_value / 100);
					savingPriceDB($new_price, $products_id, 0, $data['products_tax_class_id'], $sales_channel_id, false, false, 1, $reason);
					
				}
			}
		}
		*/
		
		
		
		//Funktion - Preise wieder auf UVP setzen (Filter -> Hersteller)
		/*
		$hersteller_id = 3; //hier den Hersteller setzen
		$sales_channel_id = 2;  //set the sales channel
		
		
		$data_query = xtc_db_query('SELECT products_id, products_price_uvp FROM ' . TABLE_PRODUCTS . ' WHERE hersteller_id = ' . $hersteller_id . ' AND products_status = 1');
		$saleschannel_query = xtc_db_query('SELECT * FROM ' . TABLE_SALES_CHANNELS_FEES);
		while($data = xtc_db_fetch_array($data_query)) {
			$products_id = $data['products_id'];
		
			$attributes_count_query = xtc_db_query("select count(*) as count from " . TABLE_PRODUCTS_ATTRIBUTES . " where products_id = '" . $products_id . "'");
			$attributes_count = xtc_db_fetch_array($attributes_count_query);
		
			if ($attributes_count['count'] > 0) {
				
				//Update
				$attributes_data_query = xtc_db_query('SELECT options_values_price_uvp, options_values_id FROM ' . TABLE_PRODUCTS_ATTRIBUTES . ' WHERE products_id = ' . $products_id);
				while($attributes_data = xtc_db_fetch_array($attributes_data_query)) {
						
					savingPriceDB($attributes_data['options_values_price_uvp'], $products_id, $attributes_data['options_values_id'], 1, $sales_channel_id, false, false, 0, $reason = 'Eigene Anpassung - UVP');

				}
				
			}else{
					
				savingPriceDB($data['products_price_uvp'], $products_id, 0, 1, $sales_channel_id, false, false, 0, $reason = 'Eigene Anpassung - UVP');
					
			}
		}
		*/
		
		
		//Funktion - Artikel und zugehörige Attribute nach Hersteller deaktivieren
		
		/*
		$hersteller_id = 13; //hier den Hersteller setzen
		
		$data_query = xtc_db_query('SELECT products_id FROM ' . TABLE_PRODUCTS . ' WHERE hersteller_id = ' . $hersteller_id);
		while($data = xtc_db_fetch_array($data_query)) {
			
			$products_id = $data['products_id'];
		
			xtc_db_query('UPDATE ' . TABLE_PRODUCTS . ' SET products_status = 0 WHERE products_id = ' . $products_id);
			xtc_db_query('UPDATE ' . TABLE_PRODUCTS_ATTRIBUTES . ' SET attributes_active = 0 WHERE products_id = ' . $products_id);				
			
		}
		*/
		
		/*
		//part delivery table update with options_values_id
		$data_query = xtc_db_query('SELECT products_model, id FROM ' . TABLE_ORDERS_PART_DELIVERY . ' WHERE attributes_value != ""');
		
		while($data = xtc_db_fetch_array($data_query)) {
			
			$model = substr($data['products_model'], 8);
			$ov_query = xtc_db_query('SELECT options_values_id FROM ' . TABLE_PRODUCTS_ATTRIBUTES . ' WHERE attributes_model = "' . $model . '"');
			$ov = xtc_db_fetch_array($ov_query);
			
			if($ov['options_values_id'] != ''){
				
				xtc_db_query('UPDATE ' . TABLE_ORDERS_PART_DELIVERY . ' SET options_values_id = ' . $ov['options_values_id'] . ' WHERE id = ' . $data['id']);
				
			}
			
		}
		*/
		
		/*
		//Sendungstarife anlegen
		
		//dpd
		$shipment_cost[1] = array(2 => 9.04, 4 => 9.82, 6 => 10.57, 8 => 11.39, 10 => 12.32, 12 => 13.23, 14 => 14.16, 16 => 15.07, 18 => 15.98, 20 => 16.89, 25 => 18.99,31.5 => 21.20);
		$shipment_cost[2] = array(2 => 11.87, 4 => 12.88, 6 => 13.78, 8 => 14.72, 10 => 15.83, 12 => 16.93, 14 => 18.04, 16 => 19.18, 18 => 20.29, 20 => 21.39, 25 => 23.55, 31.5 => 25.86);
		$shipment_cost[4] = array(2 => 14.54, 4 => 15.64, 6 => 16.65, 8 => 17.69, 10 => 18.89, 12 => 20.09, 14 => 21.30, 16 => 22.55, 18 => 23.75, 20 => 24.95, 25 => 27.26, 31.5 => 29.75);
		$shipment_cost[5] = array(2 => 17.48, 4 => 18.71, 6 => 19.81, 8 => 20.95, 10 => 22.16, 12 => 23.35, 14 => 24.55, 16 => 25.82, 18 => 27.01, 20 => 28.22, 25 => 30.58, 31.5 => 33.17);
		$shipment_cost[6] = array(2 => 20.70, 4 => 22.11, 6 => 23.30, 8 => 24.55, 10 => 25.95, 12 => 27.33, 14 => 28.73, 16 => 30.19, 18 => 31.58, 20 => 32.98, 25 => 35.52, 31.5 => 38.27);
		$shipment_cost[7] = array(2 => 37.12, 4 => 39.04, 6 => 40.95, 8 => 43.04, 10 => 45.53, 12 => 47.92, 14 => 50.43, 16 => 52.82, 18 => 55.21, 20 => 57.61, 25 => 62.47, 31.5 => 68.60);
		
		
		
		for($a = 1; $a <= 2; $a++) {
				
			foreach($shipment_cost[$a] as $key => $value) {
				
				xtc_db_query('INSERT INTO shipment_cost_intern_package (shipment_choise, zone, until_weight, shipment_cost) VALUE ("dpd", ' . $a . ', ' . $key . ', ' . $value . ')');

			}
		}
		
		
		//dhl
		$value = 8.85;
		
		for($a = 1; $a <= 31; $a++) {
			
			$value = $value + 0.6;
				
			xtc_db_query('INSERT INTO shipment_cost_intern_package (shipment_choise, zone, until_weight, shipment_cost) VALUE ("dhl", 3, ' . $a . ', ' . $value . ')');
			
			//sperrgut
			xtc_db_query('INSERT INTO shipment_cost_intern_package (shipment_choise, zone, until_weight, shipment_cost) VALUE ("dhls", 3, ' . $a . ', ' . ($value + 20) . ')');
			
		}
		*/
		
		/*
		//get horrible revenu data
		$data_query = xtc_db_query('SELECT products_id, products_price_uvp FROM products WHERE products_status = 1');
		$sales_channel_id = 5; //set the channel
		$min_revenue = 15; // set the min revenue percent value
		
		while($data = xtc_db_fetch_array($data_query)) {
			
			$products_id = $data['products_id'];
			
			$attributes_count_query = xtc_db_query("SELECT options_values_id, options_values_price_uvp  FROM " . TABLE_PRODUCTS_ATTRIBUTES . " WHERE products_id = '" . $products_id . "'");
		
			if(xtc_db_num_rows($attributes_count_query) > 0) {
				
				while($attributes = xtc_db_fetch_array($attributes_count_query)) {
				
					$options_values_id = $attributes['options_values_id'];
					
					$price_query = xtc_db_query('SELECT products_price FROM ' . TABLE_SALESCHANNELS_PRICES . ' WHERE products_id = ' . $products_id . ' AND options_values_id = ' . $options_values_id . ' AND sales_channel_id = ' . $sales_channel_id . ' AND products_price < ' . $attributes['options_values_price_uvp']);
					
					if(xtc_db_num_rows($price_query) > 0) {
						
						$price = xtc_db_fetch_array($price_query);
						
						$revenue = getRevenueValue($products_id, $options_values_id, ($price['products_price'] * 1.19), 0, $sales_channel_id);
						
						if($revenue != false && $revenue[0]['revenue_percent'] < $min_revenue) {
							
							echo $products_id . ' - ' . $options_values_id . '<br />';
							
						}
						
					}
				
				}
				
			}else{
				
				$options_values_id = 0;
					
				$price_query = xtc_db_query('SELECT products_price FROM ' . TABLE_SALESCHANNELS_PRICES . ' WHERE products_id = ' . $products_id . ' AND options_values_id = ' . $options_values_id . ' AND sales_channel_id = ' . $sales_channel_id . ' AND products_price < ' . $data['products_price_uvp']);
				
				if(xtc_db_num_rows($price_query) > 0) {
					
					$price = xtc_db_fetch_array($price_query);
					
					$revenue = getRevenueValue($products_id, $options_values_id, ($price['products_price'] * 1.19), 0, $sales_channel_id);
					
					if($revenue != false && $revenue[0]['revenue_percent'] < $min_revenue) {
						
						echo $products_id . ' - ' . $options_values_id . '<br />';
						
					}
					
				}
				
			}
			
		}
		*/	
		
		/*
		$total = 0;
		
		$data_query = xtc_db_query('SELECT orders_id, currency_value FROM orders WHERE (refferers_id = "0" OR refferers_id = "2" OR refferers_id = "20" OR refferers_id = "11" OR refferers_id = "") AND DATE_FORMAT(date_purchased, "%Y-%c") = "2016-1" AND orders_status != 12');
		
		while($data = xtc_db_fetch_array($data_query)) {
			
			$orders_total_query = xtc_db_query('SELECT value FROM orders_total WHERE orders_id = ' . $data['orders_id'] . ' AND class = "ot_total"');
			
			$orders_total = xtc_db_fetch_array($orders_total_query);
			
			if($data['currency_value'] > 1) {
				$total += $orders_total['value'] / $data['currency_value'];
			}else{
				$total += $orders_total['value'] / 1.19;
			}
			
			
		}
		
		echo $total;
		
		*/
		
	}
	
	function display() {
		$customers_statuses_array = xtc_get_customers_statuses();
		return array('text' => '<br>' . xtc_button('START') . xtc_button_link(BUTTON_CANCEL, xtc_href_link(FILENAME_MODULE_EXPORT, 'set=' . $_GET['set'] . '&module=database_query')));
	}

	function check() {
		if (!isset($this->_check)) {
			$check_query = xtc_db_query("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_DATABASE_QUERY_STATUS'");
			$this->_check = xtc_db_num_rows($check_query);
		}
		return $this->_check;
	}

	function install() {
		xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value,  configuration_group_id, sort_order, set_function, date_added) values ('MODULE_DATABASE_QUERY_STATUS', 'True',  '6', '1', 'xtc_cfg_select_option(array(\'True\', \'False\'), ', now())");
	}

	function remove() {
		xtc_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
	}

	function keys() {
		return array('MODULE_DATABASE_QUERY_STATUS');
	}
}
	?>