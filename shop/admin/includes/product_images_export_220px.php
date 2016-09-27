<?php
/* --------------------------------------------------------------
   $Id: product_info_images.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

$a = new image_manipulation(DIR_FS_CATALOG_IMAGES_EXPORT_2000PX . $products_image_export_name, 220, 220, DIR_FS_CATALOG_IMAGES_EXPORT_220PX . $products_image_export_name,100,'');
$a->create();
?>