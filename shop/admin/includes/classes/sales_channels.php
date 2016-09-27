<?php
class salesChannels {

	// class constructor
	function salesChannels($products_id, $options_values_id = 0) {
		$sales_channels_query = xtc_db_query('SELECT * FROM ' . TABLE_SALES_CHANNELS_FEES);
		while($sales_channels = xtc_db_fetch_array($sales_channels_query)) {
			$this->sales_channels_data[] = array(	'id' => $sales_channels['id'],
												'channel_name' => $sales_channels['channel_name'],
												'channel_fee' => $sales_channels['channel_fee'],
												'channel_fee_percentage' => $sales_channels['channel_fee_percentage'],
												'channel_payment_fee' => $sales_channels['channel_payment_fee'],
												'channel_payment_fee_percentage' => $sales_channels['channel_payment_fee_percentage'],
												'channel_transaction_fee' => $sales_channels['channel_transaction_fee'],
												'channel_transaction_fee_percentage' => $sales_channels['channel_transaction_fee_percentage'],
												'magnalister_code' => $sales_channels['magnalister_code'],
												'incl_tax' => $sales_channels['incl_tax'],
												'channel_image' => $sales_channels['channel_image']);
		}
		if($products_id != false) {
			
			$sales_channels_prices_query = xtc_db_query('SELECT * FROM ' . TABLE_SALESCHANNELS_PRICES . ' WHERE products_id = ' . $products_id . ' AND options_values_id = ' . $options_values_id);
			
			if($options_values_id > 0) {
			
				$uvp_query = xtc_db_query('SELECT options_values_price_uvp FROM ' . TABLE_PRODUCTS_ATTRIBUTES . ' WHERE products_id = ' . $products_id . ' AND options_values_id = ' . $options_values_id);
				
				$uvp = xtc_db_fetch_array($uvp_query);
				$uvp_price = $uvp['options_values_price_uvp'];
				
			}else{
			
				$uvp_query = xtc_db_query('SELECT products_price_uvp FROM ' . TABLE_PRODUCTS . ' WHERE products_id = ' . $products_id);
				
				$uvp = xtc_db_fetch_array($uvp_query);
				$uvp_price = $uvp['products_price_uvp'];
			
			}
			
			while($sales_channels_prices = xtc_db_fetch_array($sales_channels_prices_query)) {
				
				$sid = $sales_channels_prices['sales_channel_id'];
			
				$this->sales_channels_prices[$sid] = array(	'id' => $sales_channels_prices['id'],
													'products_id' => $sales_channels_prices['products_id'],
													'options_values_id' => $sales_channels_prices['options_values_id'],
													'sales_channel_id' => $sid,
													'products_price' => $sales_channels_prices['products_price'],
													'special_offer' => $sales_channels_prices['special_offer'],
													'blacklist' => $sales_channels_prices['blacklist'],
													'products_uvp' => $uvp_price,
													'last_edit' => $sales_channels_prices['last_edit']);
			}
		}
	}
}
?>