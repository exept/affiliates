<?php
include_once '../include/config.php';
$sql  = "SELECT * FROM affiliate_promotions WHERE aff_id = {$_SESSION['affliate_id']} ";
$result = result_array($sql);


$content = "my-affiliates";
require_once(DIR_WS_TEMPLATES_AFFILIATES."main_page.tpl.php");
?>