<?php
date_default_timezone_set("Asia/Colombo");

$site_http_path = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/system/";


define('HTTP_PATH', $site_http_path);
define('DOC_ROOT', 'C:/xampp/htdocs/system/');
define('SITE_NAME', 'GALAXY System');

// define('ADMIN_PATH', $adminpath);
/*define('TAG_LINE', 'The Live Auction');*/

define('COMPANY_ADDRESS', "Galaxy Printers Kurunegala, Sri Lanka.");
define('COMPANY_EMAIL', "naflin456@gmail.com");
define('COMPANY_PHONE', "+94 77 063 7753");

$CURRENT_PAGE = basename($_SERVER['PHP_SELF']);

header("Cache-Control: no cache");
// session_cache_limiter("private_no_expire");

/* Admin e-mails */
$mailArray = array("naflin566@gmail.com", "naflin456@gmail.com");