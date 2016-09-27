<?php
/* --------------------------------------------------------------
   $Id: configure.php 9258 2016-01-25 08:41:50Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce (configure.php,v 1.13 2003/02/10); www.oscommerce.com
   (c) 2003 XT-Commerce (configure.php)

   Released under the GNU General Public License
   --------------------------------------------------------------*/

  // Define the webserver and path parameters
  // * DIR_FS_* = Filesystem directories (local/physical)
  // * DIR_WS_* = Webserver directories (virtual/URL)

  // global defines
  define('HTTP_SERVER', 'http://modified.homeee.de'); // eg, http://localhost - should not be empty for productive servers
  define('HTTPS_SERVER', 'https://modified.homeee.de'); // eg, https://localhost - should not be empty for productive servers
  define('DIR_FS_DOCUMENT_ROOT', '/www/htdocs/w014f718/webshop/modified/'); // absolut path required
  define('DIR_WS_CATALOG', '/'); // relative path required
  define('DIR_FS_CATALOG', DIR_FS_DOCUMENT_ROOT);

  // secure SSL
  define('ENABLE_SSL', false); // secure webserver for checkout procedure?
  define('USE_SSL_PROXY', false); // using SSL proxy?

  // define our database connection
  define('DB_MYSQL_TYPE', 'mysql'); // define mysql type set to 'mysql' or 'mysqli'
  define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
  define('DB_SERVER_USERNAME', 'd02320a7');
  define('DB_SERVER_PASSWORD', 'NychN8J2MMTJZNYK');
  define('DB_DATABASE', 'd02320a7');
  define('USE_PCONNECT', 'false'); // use persistent connections?
  define('STORE_SESSIONS', 'mysql'); // leave empty '' for default handler or set to 'mysql'
  define('DB_SERVER_CHARSET', 'latin1'); // set db charset 'utf8' or 'latin1'

  if (DB_DATABASE != '') {
    // set admin directory DIR_ADMIN
    require_once(DIR_FS_CATALOG.'inc/set_admin_directory.inc.php');

    // include standard settings
    require(DIR_FS_CATALOG.(defined('RUN_MODE_ADMIN')? DIR_ADMIN : '').'includes/paths.php');
  }
?>