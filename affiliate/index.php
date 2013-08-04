<?php 
include_once '../include/config.php';

$sql = "SELECT * FROM marchant_product WHERE is_active=1 ORDER BY product_id DESC";
$products = result_array($sql);

$content = "index";
require_once(DIR_WS_TEMPLATES_AFFILIATES."main_page.tpl.php");
?>