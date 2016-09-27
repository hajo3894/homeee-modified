<?php

$filter_array = array (array ('id' => '', 'text' => TEXT_NONE));

$cat_db_query = xtc_db_query("SELECT id, titel, multi, status FROM ".TABLE_PRODUCT_FILTER_CATEGORIES." WHERE language_id = '".$_SESSION['languages_id']."' AND attribute_individual = 0");


//echo $count;

while($cat_db = xtc_db_fetch_array($cat_db_query)) {
	$filter_array[$cat_db['id']]['name'] = $cat_db['titel'];
	$filter_array[$cat_db['id']]['multi'] = $cat_db['multi'];
	$filter_array[$cat_db['id']]['id'] = $cat_db['id'];
	$filter_array[$cat_db['id']]['status'] = $cat_db['status'];
	
	$filter_query = xtc_db_query("SELECT id, name, categories_id, position FROM ".TABLE_PRODUCT_FILTER_ITEMS." WHERE categories_id = '".$cat_db['id']."' AND language_id = '".$_SESSION['languages_id']."' ORDER BY name ASC");
	
	while ($filter = xtc_db_fetch_array($filter_query)) {
		$filter_array[$cat_db['id']]['content'][] = array ('id' => $filter['id'], 'text' => $filter['name']);
	}
}



//alle bereits vorhandene Daten auslesen
$products_filter_array = array();
$products_filter_query = xtc_db_query(" SELECT filter_id FROM products_to_filter WHERE products_id = '".(int) $_GET['pID']."'");
while($products_filter = xtc_db_fetch_array($products_filter_query))
	$products_filter_array[] = $products_filter['filter_id'];
	
?>

<div class="dashboard_module" style="height:100%">
<header><h3><?php echo TEXT_PRODUCTS_FILTER_EDIT; ?></h3></header>
<div class="dashboard_module_content">

				<?php 	$num = 0;
						
						foreach($filter_array as $cat_id => $cat_data) {	
							
							if(is_array($cat_data['content'])) {
								
								echo '<div style="float:left; margin: 20px; border:1px solid #E2E2E2">';
								echo '<div style="padding:5px; background-color: #7C7C7C; color: white"><strong style="font-size:14px">'.$cat_data['name'].'</strong>';
								if($cat_data['status'] == 0){
									echo '(<span style="font-size:11px; color:red">offline</span>)<br />';
								}
								echo '</div>';
								echo '<div style="height:400px; width:160px; overflow:scroll; padding:10px; background-color: white">';
								foreach($cat_data['content'] as $filter_data)
								{
									$checked = false;
									if(in_array($filter_data['id'],$products_filter_array))
									$checked = true;
									if($cat_data['multi'] == 1){
										echo '<div class="main">' . xtc_draw_checkbox_field('filter[]',$filter_data['id'],$checked).$filter_data['text'].'</div>';
									}else{
										echo '<div class="main">' . xtc_draw_radio_field('filter[]', $filter_data['id'], $checked).$filter_data['text'].'</div>';
									}
									
								}
								if($cat_data['multi'] == 0){
									echo '<div class="main">' . xtc_draw_radio_field('filter[]', 'none').'Keine Auswahl</div>';
								}
								echo '</div>';
								echo '</div>';
								
							}else{
								
								$num--;
								
							}
					
							
							$num++;
							
							if($num == 5) {
								
								$num = 0;

								echo '<div style="clear:both; width:100%"></div>';
									
							}
							
						}
				?>
				
<div style="clear:both"></div>
</div>
</div>