<?php 
include_once '../include/config.php';

//dumpVar($_GET);
$productId = $_GET['pId'];
$merchantId = $_GET['mId'];
$affiliateId = $_GET['aId'];
$promotionId = $_GET['pnId'];




$sql = "SELECT * FROM affiliate_promotion_status WHERE promotion_id = $promotionId LIMIT 1 ";
$result = row_array($sql);

if(!empty($result))
{
   // dumpVar($result);
    $data['promotion_id'] = $promotionId;
    $data['no_of_clicks'] = $result['no_of_clicks']+1; 
    update(affiliate_promotion_status, $data, promotion_id, $promotionId);
}
else
{
    $data['promotion_id'] = $promotionId;
    $data['no_of_clicks'] = 1;
    insert(affiliate_promotion_status, $data);
}



$sql = "SELECT * FROM marchant_profile WHERE marchant_id = $merchantId LIMIT 1";
$mInfo = row_array($sql);


$linktoMerchant = $mInfo['website'].'?mId='.$merchantId.'&pId='.$productId.'&aId='.$affiliateId.'&promotionId='.$promotionId;

?>

Please click the followin link to sell or buy anything...<br>
<a href='<?php echo $linktoMerchant;?>'><?php echo $linktoMerchant;?></a>