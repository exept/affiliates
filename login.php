<?php
include_once 'include/config.php';
if(isPostBack())
{
   // dumpVar($_POST);
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($_POST['who_are']==1)
    {
       $sql = "SELECT * FROM affiliates_profile WHERE aff_email = '$email' LIMIT 1";
        $result = row_array($sql);
        if($result['aff_password']==$password)
        {
            $_SESSION['affliate_logged'] = 1;
            $_SESSION['affliate_id'] = $result['aff_id'];
            header('Location:affiliate'); 
            exit;
        } 
    }
    else if($_POST['who_are']==2)
    {
        $sql = "SELECT * FROM marchant_profile WHERE marchant_email = '$email' LIMIT 1";
        $result = row_array($sql);
        if($result['marchant_password']==$password)
        {
            $_SESSION['marchant_logged'] = 1;
            $_SESSION['marchant_id'] = $result['marchant_id'];
            header('Location:merchant');
            exit;
        }
    }
   else if($_POST['who_are']==3)
    {
        $sql = "SELECT * FROM super_admin WHERE super_admin_email = '$email' LIMIT 1";
        $result = row_array($sql);
        if($result['super_admin_password']==$password)
        {
            $_SESSION['superAdmin_logged'] = 1;
            $_SESSION['superAdmin_id'] = $result['super_admin_id'];
            header('Location:systemAdmin'); 
            exit;
        }
    }
    
    
}

$content="login";
require_once(DIR_WS_TEMPLATES."main_page.tpl.php");
?>