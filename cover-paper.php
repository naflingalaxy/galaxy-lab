<?php
include 'top.php';
include 'includes/auth.php';

// require_once DOC_ROOT.'includes/functions.php';

$main_menu_category = "paper";
$current_page_name_variable = "cover-paper";


// $page_data = $db->query("SELECT item_url FROM tbl_galaxy_stock_items WHERE item_section = '1'");

   
$include_file = DOC_ROOT.'pages/cover_paper_page.php';
include DOC_ROOT.'template.php';
?>