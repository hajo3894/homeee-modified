<?php
/* --------------------------------------------------------------
   $Id: product_collis.php 950 2005-05-14 16:45:21Z mz $   

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );
class products_collis {

	// class constructor	
	function products_collis($products_id, $options_values_id = 0) {
		
		if($options_values_id == 0) {
		
			$products_colli_query = xtc_db_query('SELECT * FROM ' . TABLE_PRODUCTS_COLLIS . ' WHERE products_id = ' . $products_id);
			while($products_colli = xtc_db_fetch_array($products_colli_query)) {
				$this->products_colli_data[$products_colli['colli_nr']] = array(
						'id' => $products_colli['id'],
						'products_id' => $products_colli['products_id'],
						'weight' => $products_colli['weight'],
						'width' => $products_colli['width'],
						'length' => $products_colli['length'],
						'height' => $products_colli['height'],
						'products_sonder' => $products_colli['products_sonder'],
						'shipment_choise' => $products_colli['shipment_choise'],
						'cardboard' => $products_colli['cardboard'],
						'packaging_note' => $products_colli['packaging_note'],
						'upgrade' => $products_colli['upgrade']);
			}
		
		}else{
			
			$products_colli_query = xtc_db_query('SELECT * FROM ' . TABLE_PRODUCTS_ATTRIBUTES_COLLIS . ' WHERE products_id = ' . $products_id . ' AND options_values_id = ' . $options_values_id);
			while($products_colli = xtc_db_fetch_array($products_colli_query)) {
				$this->products_colli_data[$products_colli['colli_nr']] = array(
						'id' => $products_colli['id'],
						'products_id' => $products_colli['products_id'],
						'options_values_id' => $products_colli['options_values_id'],
						'weight' => $products_colli['weight'],
						'width' => $products_colli['width'],
						'length' => $products_colli['length'],
						'height' => $products_colli['height'],
						'products_sonder' => $products_colli['products_sonder'],
						'shipment_choise' => $products_colli['shipment_choise'],
						'cardboard' => $products_colli['cardboard'],
						'packaging_note' => $products_colli['packaging_note'],
						'upgrade' => $products_colli['upgrade']);
			}
			
			
			
			
		}
	}
}
?>