<?php
include_once '../include/config.php';
include_once '../img-class.php';
if (isPostBack())
{
    //dumpVar($_POST);
    
    
    $THUMB_WIDTH = 94;
    $THUMB_HEIGHT = 70;    
    $image      = $_FILES['photo']['name'];
    
    $image_type = $_FILES['photo']['type'];
    if ($image_type == 'image/jpeg' || $image_type == 'image/pjpeg' ||
        $image_type == 'image/jpg' || $image_type == 'image/png' ||
        $image_type == 'image/x-png' || $image_type == 'image/gif')
       { 
            $destination1 = '../images/addImages/'; 
            $destination2 = '../images/addImages/thumb/'; 
            $destination3 = '../images/addImages/medium/'; 

            $file_type = explode(".", $image);
            $image_name_split = explode(' ', $file_type[0]);
            $image_name_base = implode('_', $image_name_split);
            $extension = strtolower($file_type[count($file_type) - 1]);
            $image_name = time().'_'.$image_name_base.'.'.$extension;

            $img = new Img();   

            $img->process($_FILES['photo']['tmp_name'], $destination1 . $image_name, 'SAME', "", "");
            $img->resize(true, true);

            $img->process($_FILES['photo']['tmp_name'], $destination2 . $image_name, 'EXACT', $_POST['banner_width'], $_POST['banner_height']);
            $img->resize(true, true);
            
            $img->process($_FILES['photo']['tmp_name'], $destination3 . $image_name, 'EXACT', '500', '120');
            $img->resize(true, true);
       } 
    $data['banners'] = $image_name;
    $data['banner_height'] = $_POST['banner_height'];
    $data['banner_width'] = $_POST['banner_width'];
    $data['commision'] = $_POST['commision'];
    $data['service_url'] = $_POST['service_url'];
    $data['product_description'] = $_POST['product_description'];
    $data['validity_ends'] = $_POST['validity_ends'];
    $data['country_allowed'] = $_POST['country_allowed'];
    $data['promotional_methods'] = $_POST['promotional_methods'];
    $data['is_active'] = $_POST['is_active'];
    $data['banners'] = $_POST['banners'];
    $data['marchant_id'] = $_SESSION['marchant_id'];
    if(insert(marchant_product, $data))
    {
        header('Location:index.php');
        exit;
    }
}


$content="add-affiliate";
require_once(DIR_WS_TEMPLATES_MERCHANT."main_page.tpl.php");
?>