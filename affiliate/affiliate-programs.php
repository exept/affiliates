<?php 
include_once '../include/config.php';
if(isPostBack())
{
    $pdata['marchant_id'] = $_POST['marchant_id']; 
    $pdata['aff_url'] = $_POST['aff_url']; 
    $pdata['service_url'] = $_POST['service_url']; 
    $pdata['aff_id'] = $_SESSION['affliate_id']; 
    insert(affiliate_promotions, $pdata);
    header('Location:'.BASEURL.'affiliate');
    exit;
}

$productId = $_GET['id'];
$sql = "SELECT * FROM marchant_product WHERE product_id = $productId LIMIT 1";
$productInfo = row_array($sql);
//dumpVar($productInfo);

$sql = "SELECT * FROM marchant_profile WHERE marchant_id = {$productInfo['marchant_id']} LIMIT 1";
$marchant_name = row_array($sql);
//dumpVar($marchant_name);
$sql = "SELECT max(promotion_id) FROM affiliate_promotions LIMIT 1";
$promId = row_array($sql);
$promotionId = $promId['max(promotion_id)']+1;
$data['merchantId'] = $productInfo['marchant_id'];
$data['merchnt_name'] = $marchant_name['marchant_fname'].  ' '.$marchant_name['marchant_lname'];
$data['product_comission'] = $productInfo['commision'];
$data['product_description'] = $productInfo['product_description'];
$data['aff_url'] = BASEURL.'affiliate/test.php'.'/back-again?pId='.$productInfo['product_id'].'&pnId='.$promotionId.'&mId='.$productInfo['marchant_id'].'&aId='.$_SESSION['affliate_id'];
$data['service_url'] = $productInfo['service_url'];
$content = "affiliate-programs";
require_once(DIR_WS_TEMPLATES_AFFILIATES."main_page.tpl.php");
?>