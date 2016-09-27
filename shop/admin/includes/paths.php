<?php
/* -----------------------------------------------------------------------------------------
   $Id:$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('HTTP_CATALOG_SERVER', HTTP_SERVER);
  define('HTTPS_CATALOG_SERVER', HTTPS_SERVER);
  
  define('ENABLE_SSL_CATALOG', ((ENABLE_SSL === true) ? 'true' : 'false'));
  
  define('DIR_WS_ADMIN', DIR_WS_CATALOG.DIR_ADMIN);
  define('DIR_FS_ADMIN', DIR_FS_DOCUMENT_ROOT.DIR_ADMIN); 

  define('DIR_WS_IMAGES', 'images/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_ORIGINAL_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/original_images/');
  define('DIR_FS_CATALOG_THUMBNAIL_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/thumbnail_images/');
  define('DIR_FS_CATALOG_INFO_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/info_images/');
  define('DIR_FS_CATALOG_POPUP_IMAGES', DIR_FS_CATALOG_IMAGES .'product_images/popup_images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . 'images/');
  define('DIR_WS_CATALOG_ORIGINAL_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/original_images/');
  define('DIR_WS_CATALOG_THUMBNAIL_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/thumbnail_images/');
  define('DIR_WS_CATALOG_INFO_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/info_images/');
  define('DIR_WS_CATALOG_POPUP_IMAGES', DIR_WS_CATALOG_IMAGES .'product_images/popup_images/');
  define('DIR_WS_CRITERION_IMAGES', DIR_WS_IMAGES . 'criterion/');
  define('DIR_FS_CRITERION_IMAGES', DIR_FS_CATALOG . DIR_WS_IMAGES . 'criterion/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_CATALOG. 'lang/');
  define('DIR_FS_LANGUAGES', DIR_FS_CATALOG. 'lang/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_INC', DIR_FS_CATALOG . 'inc/');
  define('DIR_WS_FILEMANAGER', DIR_WS_MODULES . 'fckeditor/editor/filemanager/browser/default/');
  
	define('DIR_WS_CATALOG_PRODUCTS_QR_CODES', DIR_WS_CATALOG_IMAGES .'qr_codes/products/');
	define('DIR_WS_CATALOG_PRODUCTS_PRICE_TAG', DIR_WS_CATALOG_IMAGES .'price_tags/');
	//Pfadangabe fuer die Bilder -> Exporte
	define('DIR_FS_CATALOG_IMAGES_EXPORT_2000PX', DIR_FS_CATALOG_IMAGES .'product_images_export/2000px/');
	define('DIR_FS_CATALOG_IMAGES_EXPORT_1500PX', DIR_FS_CATALOG_IMAGES .'product_images_export/1500px/');
	define('DIR_FS_CATALOG_IMAGES_EXPORT_1000PX', DIR_FS_CATALOG_IMAGES .'product_images_export/1000px/');
	define('DIR_FS_CATALOG_IMAGES_EXPORT_300PX', DIR_FS_CATALOG_IMAGES .'product_images_export/300px/');
	define('DIR_FS_CATALOG_IMAGES_EXPORT_220PX', DIR_FS_CATALOG_IMAGES .'product_images_export/220px/');
	define('DIR_WS_CATALOG_IMAGES_EXPORT_2000PX', DIR_WS_CATALOG_IMAGES .'product_images_export/2000px/');
	define('DIR_WS_CATALOG_IMAGES_EXPORT_1500PX', DIR_WS_CATALOG_IMAGES .'product_images_export/1500px/');
	define('DIR_WS_CATALOG_IMAGES_EXPORT_1000PX', DIR_WS_CATALOG_IMAGES .'product_images_export/1000px/');
	define('DIR_WS_CATALOG_IMAGES_EXPORT_300PX', DIR_WS_CATALOG_IMAGES .'product_images_export/300px/');
	define('DIR_WS_CATALOG_IMAGES_EXPORT_220PX', DIR_WS_CATALOG_IMAGES .'product_images_export/220px/');
	//*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
	// BEGIN OF MODULE : Automatic preview price & image with product_option
	define('DIR_FS_CATALOG_OPTION_IMAGE', DIR_FS_CATALOG_IMAGES.'product_option_images/');
	define('DIR_WS_CATALOG_OPTION_IMAGE', DIR_WS_CATALOG_IMAGES.'product_option_images/');
	define('DIR_FS_CATALOG_OPTION_IMAGE_EXPORT_2000px', DIR_FS_CATALOG_OPTION_IMAGE.'export/2000px/');
	define('DIR_WS_CATALOG_OPTION_IMAGE_EXPORT_2000px', DIR_WS_CATALOG_OPTION_IMAGE.'export/2000px/');
	define('DIR_FS_CATALOG_OPTION_IMAGE_EXPORT_1500px', DIR_FS_CATALOG_OPTION_IMAGE.'export/1500px/');
	define('DIR_WS_CATALOG_OPTION_IMAGE_EXPORT_1500px', DIR_WS_CATALOG_OPTION_IMAGE.'export/1500px/');
	define('DIR_FS_CATALOG_OPTION_IMAGE_EXPORT_1000px', DIR_FS_CATALOG_OPTION_IMAGE.'export/1000px/');
	define('DIR_WS_CATALOG_OPTION_IMAGE_EXPORT_1000px', DIR_WS_CATALOG_OPTION_IMAGE.'export/1000px/');
	define('DIR_FS_CATALOG_OPTION_IMAGE_EXPORT_300px', DIR_FS_CATALOG_OPTION_IMAGE.'export/300px/');
	define('DIR_WS_CATALOG_OPTION_IMAGE_EXPORT_300px', DIR_WS_CATALOG_OPTION_IMAGE.'export/300px/');
	define('DIR_FS_CATALOG_OPTION_IMAGE_EXPORT_220px', DIR_FS_CATALOG_OPTION_IMAGE.'export/220px/');
	define('DIR_WS_CATALOG_OPTION_IMAGE_EXPORT_220px', DIR_WS_CATALOG_OPTION_IMAGE.'export/220px/');
	define('DIR_FS_CATALOG_INFO_OPTION_IMAGE', DIR_FS_CATALOG_OPTION_IMAGE.'info_images/');
	define('DIR_WS_CATALOG_INFO_OPTION_IMAGE', DIR_WS_CATALOG_OPTION_IMAGE.'info_images/');
	define('DIR_FS_CATALOG_THUMB_OPTION_IMAGE', DIR_FS_CATALOG_OPTION_IMAGE.'thumb_images/');
	define('DIR_WS_CATALOG_THUMB_OPTION_IMAGE', DIR_WS_CATALOG_OPTION_IMAGE.'thumb_images/');
	define('DIR_FS_CATALOG_POPUP_OPTION_IMAGE', DIR_FS_CATALOG_OPTION_IMAGE.'popup_images/');
	define('DIR_WS_CATALOG_POPUP_OPTION_IMAGE', DIR_WS_CATALOG_OPTION_IMAGE.'popup_images/');
	// END OF MODULE : Automatic preview price & image with product_option
	//*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
	//*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
	// BEGIN OF MODULE : Ebay-Images
	define('DIR_FS_CATALOG_EBAY_IMAGE', DIR_FS_CATALOG_IMAGES.'ebay_images/');
	define('DIR_WS_CATALOG_EBAY_IMAGE', DIR_WS_CATALOG_IMAGES.'ebay_images/');
	// END OF MODULE : Ebay-Images
	//*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*

  // SQL caching dir
  define('SQL_CACHEDIR', DIR_FS_CATALOG . 'cache/');

  // LOG dir
  define('DIR_FS_LOG', DIR_FS_CATALOG . 'log/');

  // external
  define('DIR_WS_EXTERNAL', DIR_WS_CATALOG . 'includes/external/');
  define('DIR_FS_EXTERNAL', DIR_FS_CATALOG . 'includes/external/');

?>