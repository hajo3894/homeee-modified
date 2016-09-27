<?php
/*
  * Produkt Filter
  * Copyright 2009 - xt-shopservice.de
  * Sebastian Schramm & Daniel Siekiera
 */
 
require('includes/application_top.php');

/* require_once(DIR_FS_INC.'xtc_parse_input_field_data.inc.php'); */
require_once(DIR_FS_INC . 'xtc_wysiwyg.inc.php');

$languages = xtc_get_languages();

	
	// Status
	$status = array();
  if($_GET['action'] == 'editcategories'){
    $status[] = array('id' => 0, 'text' => UPDATE_SAVE);
  }else{
    //$status[] = array('id' => 0, 'text' => TABLE_FOOTER_STATUS_0);
  }  
	$status[] = array('id' => 1, 'text' => TABLE_FOOTER_STATUS_1);
	$status[] = array('id' => 2, 'text' => TABLE_FOOTER_STATUS_2);
	$status[] = array('id' => 3, 'text' => TABLE_FOOTER_STATUS_3);
	
	// Edit
	$listedit = array();
	$listedit[] = array('id' => 0, 'text' => TABLE_HEADING_ACTION_EDIT_0);
	$listedit[] = array('id' => 1, 'text' => TABLE_HEADING_ACTION_EDIT);
  
  // Kategorie
  $select_categories = array();
  
  $categories_query = xtc_db_query("SELECT id, titel 
    FROM ".TABLE_PRODUCT_FILTER_CATEGORIES." 
    WHERE language_id = '".$_SESSION['languages_id']."' 
    ORDER BY position ASC"); 
    
  //$select_categories[] = array('id' => 0, 'text' => TABLE_FOOTER_STATUS_0); 
  
  while($categories = xtc_db_fetch_array($categories_query)){
    $select_categories[] = array('id' => $categories['id'], 'text' => $categories['titel']);
  }
	
	$languages = xtc_get_languages();
	
switch($_GET['action']){
	
	case 'set':
	
		$max_elements = count($_POST['status']);      

		if($_POST['set_status'] == 1){
			
			$update_array = array('status' => '0'); 
				
			for($i = 0; $i < $max_elements; $i++){

				if((int)$_GET['cat']){
					xtc_db_perform(TABLE_PRODUCT_FILTER_ITEMS, $update_array, 'update', "id = '".$_POST['status'][$i]."'");
				}else{
					xtc_db_perform(TABLE_PRODUCT_FILTER_CATEGORIES, $update_array, 'update', "id = '".$_POST['status'][$i]."'");
					xtc_db_perform(TABLE_PRODUCT_FILTER_ITEMS, $update_array, 'update', "categories_id = '".$_POST['status'][$i]."'");
				}
			}

		}elseif($_POST['set_status'] == 2){
			
			$update_array = array('status' => '1');
			
			for($i = 0; $i < $max_elements; $i++){
				if((int)$_GET['cat']){
					xtc_db_perform(TABLE_PRODUCT_FILTER_ITEMS, $update_array, 'update', "id = '".$_POST['status'][$i]."'");
				}else{
					xtc_db_perform(TABLE_PRODUCT_FILTER_CATEGORIES, $update_array, 'update', "id = '".$_POST['status'][$i]."'");
					xtc_db_perform(TABLE_PRODUCT_FILTER_ITEMS, $update_array, 'update', "categories_id = '".$_POST['status'][$i]."'");
				}
			}
		
		}elseif($_POST['set_status'] == 3){
			
			for($i = 0; $i < $max_elements; $i++){
	
				if((int)$_GET['cat']){
					xtc_db_query("DELETE FROM ".TABLE_PRODUCT_FILTER_ITEMS." where id = '".$_POST['status'][$i]."'");
					
					if(file_exists(DIR_FS_CRITERION_IMAGES .  $_POST['image_name'][$i])) {
						unlink(DIR_FS_CRITERION_IMAGES .  $_POST['image_name'][$i]);
					}
					
				}else{
					xtc_db_query("DELETE FROM ".TABLE_PRODUCT_FILTER_CATEGORIES." where id = '".$_POST['status'][$i]."'");
					xtc_db_query("DELETE FROM ".TABLE_PRODUCT_FILTER_ITEMS." where categories_id = '".$_POST['status'][$i]."'");
				}  
			}
		}
      
		if((int)$_GET['cat']){
			xtc_redirect(xtc_href_link(FILENAME_PRODUCT_FILTER, 'action=showitems&cat='.(int)$_GET['cat']));
		}else{
			xtc_redirect(xtc_href_link(FILENAME_PRODUCT_FILTER));
		}
		
	break;
	
    case 'insertcategorie':
	
		$lang = sizeof($languages);
		$error = false;
		$error_msg = '';

		for ($i = 0; $i < $lang; $i++){
			
			$languages_id = $languages[$i]['id'];
			
			if($_POST['titel'][$languages_id] == '') {
				
				$error = true;
				$error_msg = INSERT_FILTER_CATEGORY_NOT_ALL_LANG;
				
			}
			
		}

		
		if(!$error) {
		
			if($_POST['categorie_id'] == ''){
				
				// nächste ID ermitteln
				$next_query = xtc_db_query("SELECT MAX(id) AS ID FROM ".TABLE_PRODUCT_FILTER_CATEGORIES);
				$next_id = xtc_db_fetch_array($next_query);
				$nextid = $next_id['ID'];

				if($nextid!=0 ? $nextid+=1 : $nextid=1);

				for ($i = 0; $i < $lang; $i++){
					$languages_id = $languages[$i]['id'];

					$new_categorie_array = array(
												'id'          => $nextid,
												'language_id' => $languages_id,
												'titel' 			=> xtc_db_prepare_input($_POST['titel'][$languages_id]),
												'position'			=> xtc_db_prepare_input($_POST['position'][$languages_id]),
												'multi'			=> xtc_db_prepare_input($_POST['multi']),
												'attribute_individual' => xtc_db_prepare_input($_POST['attribute_individual']));

					xtc_db_perform(TABLE_PRODUCT_FILTER_CATEGORIES, $new_categorie_array);    
				}  

			// Update  
			}elseif($_POST['categorie_id'] != ''){

				for ($i = 0; $i < $lang; $i++){
					$languages_id = $languages[$i]['id'];

					xtc_db_query("UPDATE ".TABLE_PRODUCT_FILTER_CATEGORIES." SET 
					titel = '".xtc_db_prepare_input($_POST['titel'][$languages_id])."',
					position = '".xtc_db_prepare_input($_POST['position'][$languages_id])."',
					multi = 	'".xtc_db_prepare_input($_POST['multi'])."', 
					attribute_individual = '" . xtc_db_prepare_input($_POST['attribute_individual']) . "' 
					  WHERE id = '".$_POST['categorie_id']."'
					  AND language_id = '".$languages_id."'");
				}      
			}
			
			$messageStack->add_session(INSERT_FILTER_CATEGORY_SUCCESS, 'success');
		
		}else{
			
			$messageStack->add_session($error_msg, 'error');
			
		}
      
		xtc_redirect(xtc_href_link(FILENAME_PRODUCT_FILTER));
		
	break;
	
    case 'updatestartsite':
		$lang = sizeof($languages);
	  
		// Einfuegen
		if($_POST['id'] != 1){
			for($i = 0; $i < $lang; $i++){
				$languages_id = $languages[$i]['id'];
          
				$new_start_array = array(
					'id'          	=> 1,
					'language_id' 	=> $languages_id,
					'description' 	=> xtc_db_prepare_input($_POST['description'][$languages_id]));
					
				xtc_db_perform(TABLE_PRODUCT_FILTER_START, $new_start_array);  
			}
		// Upadte
		}else{
			for($i = 0; $i < $lang; $i++){
				$languages_id = $languages[$i]['id'];
          
				xtc_db_query("UPDATE ".TABLE_PRODUCT_FILTER_START." SET 
					description 	= '".xtc_db_prepare_input($_POST['description'][$languages_id])."'
					WHERE id = 1 AND language_id = '".$languages_id."'");
			}
		}
        xtc_redirect(xtc_href_link(FILENAME_PRODUCT_FILTER));
      break;
	  

    case 'insertitem':

	//------------------------
	$lang = sizeof($languages);
	$error = false;
	$image_error = false;
	$error_msg = '';

	for ($i = 0; $i < $lang; $i++){
		
		$languages_id = $languages[$i]['id'];
		
		if($_POST['name'][$languages_id] == '') {
			
			$error = true;
			$error_msg = INSERT_CRITERION_NOT_ALL_LANG;
			
		}
		
	}
	  
	if(!$error) {
	  
		if($_POST['item_id'] == ''){
			
			// nächste ID ermitteln
			$next_query = xtc_db_query("SELECT MAX(id) AS ID FROM ".TABLE_PRODUCT_FILTER_ITEMS);
			$next_id = xtc_db_fetch_array($next_query);
			$nextid = $next_id['ID'];

			if($nextid!=0 ? $nextid+=1 : $nextid=1);

			if($_FILES['criterion_image']['name'] != '') {
				
				//image
				$filename = pathinfo($_FILES['criterion_image']['name'], PATHINFO_FILENAME);
				$extension = strtolower(pathinfo($_FILES['criterion_image']['name'], PATHINFO_EXTENSION));
				
				//Überprüfung der Dateiendung
				$allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
				if(!in_array($extension, $allowed_extensions)) {
					$messageStack->add_session(NEWITEM_UPLOAD_FAIL, 'error');
					$image_error = true;
				}
				
				if(!$image_error) {
					
					if($_POST['image_name'] != '') {
						unlink(DIR_FS_CRITERION_IMAGES . $_POST['image_name']);
					}
					$image_name = $nextid . '_' . $_POST['categories_id'] . '.' . $extension;
					move_uploaded_file($_FILES['criterion_image']['tmp_name'], DIR_FS_CRITERION_IMAGES . $image_name);
					
				}else{
					
					$image_name = $_POST['image_name'];
					
				}
				
			}else{
				
				if($_POST['delete_image'] == 'true') {
					
					unlink(DIR_FS_CRITERION_IMAGES . $_POST['image_name']);
					$image_name = '';
					
				}else{
				
					$image_name = $_POST['image_name'];
					
				}
				
			}

			for ($i = 0; $i < $lang; $i++){
				$languages_id = $languages[$i]['id'];
			  
				$new_item_array = array(
										'id'            => $nextid,
										'language_id'   => $languages_id,
										'categories_id' => xtc_db_prepare_input($_POST['categories_id']),
										'title' 		=> xtc_db_prepare_input($_POST['name'][$languages_id]),
										'name' 			=> xtc_db_prepare_input($_POST['name'][$languages_id]),
										'description' 	=> xtc_db_prepare_input($_POST['criterion_description'][$languages_id]),
										'position' 	    => xtc_db_prepare_input($_POST['position']),
										'image' 			=> xtc_db_prepare_input($image_name));

				xtc_db_perform(TABLE_PRODUCT_FILTER_ITEMS, $new_item_array);
				
			}  

		// UPDATE  
		}elseif($_POST['item_id'] != ''){
			
			if($_FILES['criterion_image']['name'] != '') {
				
				//image
				$filename = pathinfo($_FILES['criterion_image']['name'], PATHINFO_FILENAME);
				$extension = strtolower(pathinfo($_FILES['criterion_image']['name'], PATHINFO_EXTENSION));
				
				//Überprüfung der Dateiendung
				$allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
				if(!in_array($extension, $allowed_extensions)) {
					$messageStack->add_session(NEWITEM_UPLOAD_FAIL, 'error');
					$image_error = true;
				}
				
				if(!$image_error) {
					
					if($_POST['image_name'] != '') {
						unlink(DIR_FS_CRITERION_IMAGES . $_POST['image_name']);
					}
					$image_name = $_POST['item_id'] .  '.' . $extension;
					move_uploaded_file($_FILES['criterion_image']['tmp_name'], DIR_FS_CRITERION_IMAGES . $image_name);
					
				}else{
					
					$image_name = $_POST['image_name'];
					
				}
				
			}else{
				
				if($_POST['delete_image'] == 'true') {
					
					unlink(DIR_FS_CRITERION_IMAGES . $_POST['image_name']);
					$image_name = '';
					
				}else{
				
					$image_name = $_POST['image_name'];
					
				}
				
			}

			for ($i = 0; $i < $lang; $i++){
				$languages_id = $languages[$i]['id'];

				xtc_db_query("UPDATE ".TABLE_PRODUCT_FILTER_ITEMS." SET 
				categories_id = '".xtc_db_prepare_input($_POST['categories_id'])."',
				title 			  = '".xtc_db_prepare_input($_POST['name'][$languages_id])."',
				name 			    = '".xtc_db_prepare_input($_POST['name'][$languages_id])."',
				description 	= '".xtc_db_prepare_input($_POST['criterion_description'][$languages_id])."',
				position      = '".xtc_db_prepare_input($_POST['position'])."', 
				image = '" . $image_name . "' 
				  WHERE id = '".$_POST['item_id']."'
				  AND language_id = '".$languages_id."'");
			}
			
		}
		
		$messageStack->add_session(INSERT_FILTER_CRITERION_SUCCESS, 'success');
		
	}else{

		$messageStack->add_session($error_msg, 'error');

	}	

      xtc_redirect(xtc_href_link(FILENAME_PRODUCT_FILTER, 'action=showitems&cat='.$_POST['categories_id']));
      break; 
		default:
      // Kategorie
      $categories_query = xtc_db_query("SELECT id, titel, status, position 
        FROM ".TABLE_PRODUCT_FILTER_CATEGORIES." 
        WHERE language_id = '".$_SESSION['languages_id']."'
        ORDER BY position ASC");
        
      if($_GET['action'] == 'showitems'){
        $categorie_query = xtc_db_query("SELECT titel  
          FROM ".TABLE_PRODUCT_FILTER_CATEGORIES."
          WHERE id = '".(int)$_GET['cat']."'
          AND language_id = '".$_SESSION['languages_id']."'"); 
        $categorie = xtc_db_fetch_array($categorie_query);
        
        $items_query = xtc_db_query("SELECT 
          fi.id, 
          fi.title, 
          fi.position AS position,
          fi.status AS status,
          fi.categories_id AS categories_id, 
		 fi.image AS image_name 
          FROM ".TABLE_PRODUCT_FILTER_ITEMS." fi
          WHERE fi.categories_id = '".(int)$_GET['cat']."' 
          AND fi.language_id = '".$_SESSION['languages_id']."'
          ORDER BY fi.title ASC"); 
      }
        
  }
?>
<?php

require (DIR_WS_INCLUDES.'head.php'); 

// Include WYSIWYG if is activated
if (USE_WYSIWYG == 'true') {
	
	$query = xtc_db_query("SELECT code FROM ".TABLE_LANGUAGES." WHERE languages_id='".(int)$_SESSION['languages_id']."'");
	$data = xtc_db_fetch_array($query);
	
	// generate editor for description
	if ($_GET['action'] == 'edititem' || $_GET['action'] == 'newitem') {
		for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
			echo xtc_wysiwyg('criterion_description', $data['code'], $languages[$i]['id'], '', 'light');
		}
	}
}

?>

<link rel="stylesheet" type="text/css" href="includes/product_filter.css">
<script type="text/javascript" src="includes/javascript/accordion.js"></script>
<script type="text/javascript">
	<!--
		ddaccordion.init({
			headerclass: "cat_titel", //Shared CSS class name of headers group that are expandable
			contentclass: "cat_items", //Shared CSS class name of contents group
			revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover
			mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
			collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
			defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
			onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
			animatedefault: false, //Should contents open by default be animated into view?
			persiststate: true, //persist state of opened contents within browser session?
			toggleclass: ["", "cat_active"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
			togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
			animatespeed: "slow", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
			oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
			},
			onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
				//do nothing
			}
		});
	//-->
</script>
<script type="text/javascript">
<!--
function checkboxes(wert){
  var my = document.leiste;
  var len = my.length;
	for (var i = 0; i < len; i++) {
    var e = my.elements[i];
    if (e.name == "status[]") {
      e.checked = wert;
    }
  }
}
//-->
</script>	
</head>

<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" bgcolor="#FFFFFF">
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>

<table border="0" width="100%" cellspacing="2" cellpadding="2">
  <tr>
    <td class="columnLeft2" width="<?php echo BOX_WIDTH; ?>" valign="top">
    
      <table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="1" cellpadding="1" class="columnLeft">
      <?php require(DIR_WS_INCLUDES . 'column_left.php'); ?>
      </table>
      
    </td>
    <td class="boxCenter" width="100%" valign="top">
       
<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="80" rowspan="2"><?php echo xtc_image(DIR_WS_ICONS.'heading/icon_content.png'); ?></td>
    <td class="pageHeading"><?php echo HEADING_TITLE; ?></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td class="main"><?php echo CONTENT_NOTE; ?></td>
  </tr>  
</table>
<table border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td class="filter_settings"><b><?php echo TABLE_HEADING_NAVIGATION;?></b></td>
    <td class="filter_settings"><a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER);?>"><?php echo TABLE_HEADING_NAVIGATION_OVERVIEW;?></a></td>
    <td class="filter_settings"><a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER,'action=newcategorie')?>"><?php echo TABLE_HEADING_NAVIGATION_NEWCATEGORIE;?></a></td>
    <td class="filter_settings"><a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER,'action=newitem')?>"><?php echo TABLE_HEADING_NAVIGATION_NEWITEM;?></a></td>
    <!--td class="filter_settings"><a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER,'action=startsite')?>"><?php echo TABLE_HEADING_NAVIGATION_STARTSITE;?></a></td-->
  </tr>  
</table><br />
<?php
$categories_array_ul = array();
  $cats = 0; $item = 0;

// Rubrik
  $categories_query_ul = xtc_db_query("SELECT id, titel
    FROM product_filter_categories 
    WHERE status = 1 
    AND language_id = '".$_SESSION['languages_id']."'
    ORDER BY position ASC");
    
  while($categories_ul = xtc_db_fetch_array($categories_query_ul)){
    $categories_array_ul[$cats] = array(
      'cat_id'     => $categories_ul['id'],
      'cat_title'  => $categories_ul['titel'],
      'cat_edit_link'   => 'product_filter.php?action=editcategories&cat='.$categories_ul['id'],
      'cat_open_link' => 'product_filter.php?action=showitems&cat='.$categories_ul['id'],
      'items'            => '');
      
		$items_query_ul = xtc_db_query("SELECT id, title, position 
			FROM product_filter_items 
			WHERE status = 1 
			AND categories_id = '".$categories_ul['id']."' 
			AND language_id = '".$_SESSION['languages_id']."'
			ORDER BY title ASC");  
        
		while($items_ul = xtc_db_fetch_array($items_query_ul)){
			$categories_array_ul[$cats]['ITEMS'][$item] = array(
				'item_id'    => $items_ul['id'],
				'item_pos'	=> $items_ul['position'],
				'item_title' 	=> $items_ul['title'],
				'item_link' 	=> 'product_filter.php?action=edititem&item='.$items_ul['id']);
        
			$item++;  
		}
    $cats++;
  }// WHILE CATEGORIES
/*
echo '<pre>';
print_r($categories_array);
echo '</pre>';
*/
?>
<table border="0" cellpadding="4" cellspacing="4" width="100%">
	<tr>
		<td class="filter_content" valign="top" width="40%" style="border:1px solid #eee;">
			<?php
				if(!empty($categories_array_ul)) {
					foreach($categories_array_ul AS $categories_li) {
						$count_items_query = xtc_db_query("SELECT COUNT(id) AS number FROM ".TABLE_PRODUCT_FILTER_ITEMS." WHERE categories_id = '".$categories_li['cat_id']."' AND language_id = '".$_SESSION['languages_id']."'"); 
	  					$count_items = xtc_db_fetch_array($count_items_query);
						echo '<div class="cat_edit">
									<a href="'.$categories_li['cat_open_link'].'"><img src="images/icons/go.gif" title="In die Kategorie wechseln" alt="" /></a> 
									<a href="'.$categories_li['cat_edit_link'].'"><img src="images/icons/edit.gif" title="Bearbeiten" alt="" /></a>
								</div>
								<div class="cat_titel"> '.$categories_li['cat_title'].' ('.$count_items['number'].')</div>';
						echo '<div class="cat_items">';
						if($categories_li['ITEMS'] > 0) {
							foreach($categories_li['ITEMS'] AS $items_li) {
								echo '<a href="'.$items_li['item_link'].'">
											'.$items_li['item_pos'].' - '.$items_li['item_title'].'
										</a>';
							}
						} else {
							echo '<em>'.TABLE_CAT_EMPTY.'</em>';
						}
						echo '</div>';
					}
				} else {
					echo '<em>'.TABLE_NO_CAT.'</em>';
				}
			?>
		</td>
		<td valign="top" width="60%" style="border:1px solid #eee;">
<?php 
  if($_GET['action'] == 'newcategorie' || $_GET['action'] == 'editcategories'){
    echo xtc_draw_form('categorie', FILENAME_PRODUCT_FILTER, 'action=insertcategorie', 'post', '');
    
    $count_languages = sizeof($languages);
?>
<table border="0" cellspacing="0" cellpadding="4">
<?php 
    for($i = 0; $i < $count_languages; $i ++){
    
      $edit_categorie_query = xtc_db_query("SELECT id, titel, status, position, multi, attribute_individual 
          FROM ".TABLE_PRODUCT_FILTER_CATEGORIES."
          WHERE id = '".(int)$_GET['cat']."'
          AND language_id = '".$languages[$i]['id']."'");
      $edit_categorie = xtc_db_fetch_array($edit_categorie_query);    
?>
  <tr> 
    <td class="filter_header"><?php echo TABLE_HEADING_NEWCATEGORIE_NAME . ' ('.$languages[$i]['code'].')';?>&nbsp;<img src="../lang/<?php echo $languages[$i]['directory']; ?>/icon.gif" align="absmiddle" alt="" /></td>
    <td class="filter_header"><?php echo xtc_draw_input_field('titel['.$languages[$i]['id'].']', $edit_categorie['titel'],'size="55"');?></td>
    <td class="filter_header"><?php echo TABLE_HEADING_NEWCATEGORIE_POSITION;?></td>
    <td class="filter_header"><?php echo xtc_draw_input_field('position['.$languages[$i]['id'].']', $edit_categorie['position'],'size="4"');?></td>
  </tr>
    
<?php  
    }
?>
<tr>
   <td class="filter_header" colspan="4"><?php echo TABLE_HEADING_NEWCATEGORIE_MULTI;?>&nbsp;<?php echo xtc_draw_selection_field('multi', 'checkbox', '1',$edit_categorie['multi']==1 ? true : false); ?></td>
  </tr>
  <tr>
   <td class="filter_header" colspan="4"><?php echo TABLE_HEADING_NEWCATEGORIE_ATT_INDIVIDUAL;?>&nbsp;<?php echo xtc_draw_selection_field('attribute_individual', 'checkbox', '1',$edit_categorie['attribute_individual']==1 ? true : false); ?></td>
  </tr>
  <tr>
    <td colspan="4" align="right"><?php echo xtc_draw_hidden_field('categorie_id', $edit_categorie['id']) . '<input type="submit" class="filter_button" value="'.TABLE_STATUS_CAT.'" />';?></td>
  </tr>      
</table>
</form>
<br />  
<?php    
  }
?>

<?php
// STARTSITE

	if($_GET['action'] == 'startsite'){
		echo xtc_draw_form('start', FILENAME_PRODUCT_FILTER, 'action=updatestartsite', 'post', '');

?>

<table width="100%" border="0" cellpadding="5" cellspacing="1" align="center" style="border-bottom:1px solid #dddddd;">
<?php
	$count_languages = sizeof($languages);
	for($i = 0; $i < $count_languages; $i++) {
  
  	// EDIT ITEM
  $start_query = xtc_db_query("SELECT id, description AS text FROM ".TABLE_PRODUCT_FILTER_START." 
    WHERE id = 1 AND language_id = '".$languages[$i]['id']."'"); 
					
	$start = xtc_db_fetch_array($start_query);	
?>
  <tr>
    <td colspan="2" class="filter_header"><b><?php echo $languages[$i]['name'].$languages[$i]['directory'];?></b><td>
  </tr>
<?php
  }
?>  
  <tr>
    <td class="filter_content" height="20">&nbsp;</td>
  </tr>  
	<tr>
		<td class="filter_content">
<?php echo xtc_draw_hidden_field('id',$start['id']) . '<input type="submit" class="button" onClick="this.blur();" value="'.BUTTON_SAVE.'"/>'; ?>
<a class="button" onClick="this.blur();" href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER); ?>"><?php echo BUTTON_BACK; ?></a></td>
	</tr> 
</table>

</form>
<!-- news bearbeiten ende -->



<?php 
  }elseif($_GET['action'] == 'edititem' 	|| $_GET['action'] == 'newitem'){
		
		echo xtc_draw_form('item', FILENAME_PRODUCT_FILTER, 'action=insertitem', 'post', 'enctype="multipart/form-data"');

?>

<table width="100%" border="0" cellpadding="5" cellspacing="1" align="center">
<?php
	$count_languages = sizeof($languages);
	for($i = 0; $i < $count_languages; $i++) {
  
  	// Item bearbeiten
  $items_query = xtc_db_query("SELECT 
          fi.id, 
          fi.title AS item_title, 
          fi.name AS item_name, 
          fc.titel AS categorie_name,
          fi.position AS position,
          fi.description AS description, 
          fi.categories_id AS categories_id, 
		 fi.image AS image_name 
          FROM ".TABLE_PRODUCT_FILTER_ITEMS." fi, 
            ".TABLE_PRODUCT_FILTER_CATEGORIES." fc
          WHERE fi.id = '".(int)$_GET['item']."' 
          AND fi.language_id = '".$languages[$i]['id']."'
          AND categories_id = fc.id 
		  ORDER BY fi.name ASC"); 
					
	$items = xtc_db_fetch_array($items_query);	
?>
  <tr>
    <td colspan="2" class="font"><img src="../lang/<?php echo $languages[$i]['directory']; ?>/icon.gif" align="absmiddle" alt="" /> <b><?php echo $languages[$i]['name'];?></b><td>
  </tr>
  <tr>
    <td valign="top" colspan="2">
   		<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center" style="border:1px solid #dddddd;">
		  <tr>
		    <td width="20%" class="filter_header"><?php echo TABLE_HEADING_NEWITEM_NAME;?></td>
		    <td class="filter_content"><?php echo xtc_draw_input_field('name['.$languages[$i]['id'].']', $items['item_name'],'size="50"');?>&nbsp;<span style="color:red; font-size:9px">(* <?php echo REQUIRED; ?>)</td>
		  </tr>
		  <tr>
		    <td width="20%" class="filter_header"><?php echo TABLE_HEADING_NEWITEM_DESCRIPTION;?></td>
		    <td class="filter_content"><?php echo xtc_draw_textarea_field('criterion_description['.$languages[$i]['id'].']', 'soft','103', '10', $items['description']);?></td>
		  </tr>
		</table>
		<hr />
	</td>
  </tr> 
<?php
    }
?>  
  <tr>
	  <td valign="top" colspan="2">
	  	<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center" style="border:1px solid #dddddd;">
	  		<tr>
	  			<td width="20%" class="filter_header"><?php echo TABLE_HEADING_TITLE;?></td>
	   			<td class="filter_content"><?php echo xtc_draw_pull_down_menu('categories_id', $select_categories, $items['categories_id'], 'style="width:400px;"');?></td>
	  		</tr>
	  	</table>
	  </td>
  </tr>
  <tr>
  	<td valign="top" colspan="2">
	  	<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center" style="border:1px solid #dddddd;">
	  		<tr>
    			<td width="20%" class="filter_header"><?php echo TABLE_HEADING_NEWITEM_IMAGE;?></td>
    			<td class="filter_content"><?php echo xtc_draw_file_field('criterion_image') . xtc_draw_hidden_field('image_name', $items['image_name']);?>
			<?php if($items['image_name'] != '') { ?>
			<br /><img style="padding-top:5px" src="../<?php echo DIR_WS_CRITERION_IMAGES . $items['image_name'];?>" border="0" /><br />
			<?php echo xtc_draw_checkbox_field('delete_image','true') . ' ' . TABLE_FOOTER_STATUS_3 . '?'; ?>
			<?php } ?>
			</td>  
  			</tr>
  		</table>
  	</td>
  <tr>  
  <tr>
  	<td valign="top" colspan="2">
	  	<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center" style="border:1px solid #dddddd;">
	  		<tr>
    			<td width="20%" class="filter_header"><?php echo TABLE_HEADING_NEWCATEGORIE_POSITION;?></td>
    			<td class="filter_content"><?php echo xtc_draw_input_field('position', $items['position'],'size="4"');?></td>  
  			</tr>
  		</table>
  	</td>
  <tr>
	
		<td class="filter_content" colspan="2">
<?php echo xtc_draw_hidden_field('item_id',$items['id']) . '<input type="submit" class="button" onClick="this.blur();" value="'.BUTTON_SAVE.'"/>'; ?>
<a class="button" onClick="this.blur();" href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER); ?>"><?php echo BUTTON_BACK; ?></a></td>
		</tr>
	  	</table>
	  </td>
	</tr> 
</table>

</form>
<br />

<?php 
  }elseif($_GET['action'] == 'showitems'){ ?>
  
<?php  echo xtc_draw_form('leiste', FILENAME_PRODUCT_FILTER, 'action=set&cat='.(int)$_GET['cat'], 'post','');?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
		<td class="filter_header" width="5%" align="center"><input type="checkbox" onClick="javascript:checkboxes(this.checked);"></td>
    <td class="filter_header" width="80%"><b><?php echo $categorie['titel'];?></b></td>
    <td class="filter_header" width="5%"><b><?php echo TABLE_HEADING_NEWCATEGORIE_POSITION;?></b></td>
    <td class="filter_header" width="10%"><b><?php echo TABLE_HEADING_ACTION;?></b></td>
  </tr>
<?php  
	// alle anzeigen
	$i = 0;
  while($items = xtc_db_fetch_array($items_query)){
?>
  <tr class="<?php echo ($i%2 ? 'filter_bg' : 'filter_bg2');?>">
		<td class="filter_content" align="center"><?php echo xtc_draw_selection_field('status[]', 'checkbox', $items['id']) . xtc_draw_hidden_field('image_name[]', $items['image_name']);?></td>
    <td class="filter_content"><a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER,'action=edititem&item='.$items['id'])?>"><?php echo ($items['status'] == 0 ? '<font color="#ff0000">'.$items['title'].'</font>' : $items['title']);?></a></td>
    <td class="filter_content" align="center"><?php echo $items['position'];?></td>
    <td class="filter_content">
    	<a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER,'action=edititem&item='.$items['id'])?>">
    		<img src="images/icons/edit.gif" title="Bearbeiten" alt="" />
    	</a>
    </td>
  </tr> 
<?php
	$i++;
	}
?>	
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
		<td class="filter_header" width="70" align="center"><?php echo TABLE_FOOTER_STATUS;?>
		<td class="filter_header" width="70" align="center"><?php echo xtc_draw_pull_down_menu('set_status', $status, '', 'style="width:100px;"');?></td>
		<td class="filter_header" width="50" align="center"><?php echo '<input type="submit" class="filter_button" value="'.TABLE_STATUS.'" />';?></td>
		<td class="filter_header">&nbsp;</td>
	</tr>
</table>	
</form>

<?php
  } else{
  // Alle Kategorien
?>

<?php echo xtc_draw_form('leiste', FILENAME_PRODUCT_FILTER, 'action=set', 'post','');?>
<table width="100%" border="0" cellspacing="1" cellpadding="4">
  <tr>
		<td class="filter_header" width="5%" align="center"><input type="checkbox" onClick="javascript:checkboxes(this.checked);"></td>
    <td class="filter_header" width="80%"><b><?php echo TABLE_HEADING_TITLE;?></b></td>
    <td class="filter_header" width="5%"><b><?php echo TABLE_HEADING_NEWCATEGORIE_POSITION;?></b></td>
    <td class="filter_header" width="10%"><b><?php echo TABLE_HEADING_ACTION;?></b></td>
  </tr>
<?php  
	// alle anzeigen
	$i = 0;
  while($categories = xtc_db_fetch_array($categories_query)){
  // Alle Items
  $count_offline_items_query = xtc_db_query("SELECT COUNT(id) AS number FROM ".TABLE_PRODUCT_FILTER_ITEMS." WHERE categories_id = '".$categories['id']."' AND language_id = '".$_SESSION['languages_id']."' AND status = 0"); 
  $count_offline_items = xtc_db_fetch_array($count_offline_items_query);  
  
  $count_items_query = xtc_db_query("SELECT COUNT(id) AS number FROM ".TABLE_PRODUCT_FILTER_ITEMS." WHERE categories_id = '".$categories['id']."' AND language_id = '".$_SESSION['languages_id']."'"); 
  $count_items = xtc_db_fetch_array($count_items_query);    
?>
  <tr class="<?php echo ($i%2 ? 'filter_bg' : 'filter_bg2');?>">
		<td class="filter_content" align="center"><?php echo xtc_draw_selection_field('status[]', 'checkbox', $categories['id']);?></td>
    <td class="filter_content">
<?php 
    $field_name = ($categories['status'] == 0 ? '<font color="#ff0000">
    	<a href="'.xtc_href_link(FILENAME_PRODUCT_FILTER,'action=editcategories&cat='.$categories['id']).'">'.$categories['titel'].'</a><br>
    '.TABLE_HEADING_INFOCENTER_TOPIC . $count_items['number'].', '.TABLE_HEADING_INFOCENTER_TOPIC_OFF . $count_offline_items['number'].'</font>' : '<b><a href="'.xtc_href_link(FILENAME_PRODUCT_FILTER,'action=editcategories&cat='.$categories['id']).'">'.$categories['titel'].'</a></b><br>
    '.TABLE_HEADING_INFOCENTER_TOPIC . $count_items['number'].', '.TABLE_HEADING_INFOCENTER_TOPIC_OFF . $count_offline_items['number']);
    echo $field_name;
?></td>
  <td class="filter_content" align="center">
<?php   
  $field_position = $categories['position'];
  echo $field_position;
?>  
    </td>
    <td class="filter_content">
    <a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER,'action=showitems&cat='.$categories['id'])?>"><?php echo xtc_image(DIR_WS_ICONS . 'go.gif', ICON_FOLDER);?></a>
    <a href="<?php echo xtc_href_link(FILENAME_PRODUCT_FILTER,'action=editcategories&cat='.$categories['id'])?>"><?php echo xtc_image(DIR_WS_ICONS . 'edit.gif', TABLE_HEADING_ACTION_EDIT);?></a></td>
  </tr> 
<?php
	$i++;
	}
?>	
</table>
<br>

<!-- LEISTE -->
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
		<td class="filter_header" width="70" align="center"><?php echo TABLE_FOOTER_STATUS;?>
		<td class="filter_header" width="70" align="center"><?php echo xtc_draw_pull_down_menu('set_status', $status, '', 'style="width:100px;"');?></td>
		<td class="filter_header" width="50" align="center"><?php echo '<input type="submit" class="filter_button" value="'.TABLE_STATUS.'" />';?></td>
		<td class="filter_header">&nbsp;</td>
	</tr>
</table>	
</form>
<?php
  }
?>
        </td>
      </tr>
</table>
</td>
</tr>
</table>

<?php
  if(USE_SPAW=='true') {
?>
<script type="text/javascript">
  HTMLArea.loadPlugin("SpellChecker");
  HTMLArea.loadPlugin("TableOperations");
  HTMLArea.loadPlugin("CharacterMap");
  HTMLArea.loadPlugin("ContextMenu");
  HTMLArea.loadPlugin("ImageManager");
      
HTMLArea.onload = function() {
  var editor = new HTMLArea("description");
  editor.registerPlugin(TableOperations);
  editor.registerPlugin(ContextMenu);
  editor.registerPlugin(CharacterMap);
  editor.registerPlugin(ImageManager);
  editor.generate();
};
HTMLArea.init();
</script>
<?php
  }
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="smallText"><tr><td align="center">&copy; <?php echo date('Y'); ?> - xt-shopservice.de</td></tr></table>
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>