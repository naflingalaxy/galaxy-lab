<?php
date_default_timezone_set("Asia/Colombo");

$site_http_path = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/galaxy-lab/";


define('HTTP_PATH', $site_http_path);
define('DOC_ROOT', 'C:/xampp/htdocs/galaxy-lab/');
define('SITE_NAME', 'GALAXY System');

// define('ADMIN_PATH', $adminpath);
/*define('TAG_LINE', 'The Live Auction');*/

define('COMPANY_ADDRESS', "Galaxy Printers Kurunegala, Sri Lanka.");
define('COMPANY_EMAIL', "naflin456@gmail.com");
define('COMPANY_PHONE', "+94 77 063 7753");

$CURRENT_PAGE = basename($_SERVER['PHP_SELF']);

header("Cache-Control", "no-store, no-cache, must-revalidate");
// session_cache_limiter("private_no_expire");
$current_page_url_name = basename($_SERVER['PHP_SELF'],".php");
$current_page_name_without_extention = basename($_SERVER['PHP_SELF'],".php");
$current_page = preg_replace("/[^a-zA-Z]/", " ", $current_page_name_without_extention);
$current_date_time = date("Y-m-d h:i:sa");
/* Admin e-mails */
$mailArray = array("naflin566@gmail.com", "naflin456@gmail.com");

// board uniq ids
$uniq_id_artboard = "ARTB";
$uniq_id_ivery = "IVERYB";
$uniq_id_ice = "ICEB";
$uniq_id_box = "BOXB";
$uniq_id_bristal = "BRISTALB";
