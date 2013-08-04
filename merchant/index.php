<?php
include_once '../include/config.php';

$sql = "SELECT * FROM affiliates_profile ORDER BY aff_id DESC";
$affliateInfo = result_array($sql);
//dumpVar($affliateInfo);
$sql = "SELECT * FROM marchant_profile ORDER BY marchant_id DESC";
$merchantInfo = result_array($sql);
//dumpVar($merchantInfo);
$content="index";
require_once(DIR_WS_TEMPLATES_MERCHANT."main_page.tpl.php");
?>