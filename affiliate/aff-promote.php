<?php 
include_once '../include/config.php';
$merchant_product_id =  $_GET['id'];
$sql = "SELECT * FROM marchant_product WHERE product_id = $merchant_product_id LIMIT 1";
$merchantProductInfo= row_array($sql);
//dumpVar($merchantProductInfo);
$sql = "SELECT * FROM marchant_profile WHERE marchant_id = {$merchantProductInfo['marchant_id']} LIMIT 1";
$marchant_name = row_array($sql);
//dumpVar($marchant_name);
$data['merchnt_name'] = $marchant_name['marchant_fname'].  ' '.$marchant_name['marchant_lname'];
$data['product_comission'] = $merchantProductInfo['commision'];
$data['product_description'] = $merchantProductInfo['product_description'];
$data['redirect_url'] = BASEURL.'merchant/test.php'.'/back-again?pId='.$merchantProductInfo['product_id'].'&mId='.$merchantProductInfo['marchant_id'].'&aId='.$_SESSION['affliate_id'];
//dumpVar($data);
$content = "aff-promote";
require_once(DIR_WS_TEMPLATES_AFFILIATES."main_page.tpl.php");
?>