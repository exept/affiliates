<?php
include_once 'include/config.php';
if(isPostBack())
{
    //dumpVar($_POST);
    $email = $_POST['marchant_email'];
    $password = $_POST['marchant_password'];
    $sql = "SELECT * FROM marchant_profile WHERE marchant_email = '$email' LIMIT 1";
    $result = row_array($sql);
    //dumpVar($result);
    if($result['marchant_password']==$password)
    {
        $_SESSION['marchant_logged'] = 1;
        header('Location:merchant'); 
        exit;
    }
}

$content="login";
require_once(DIR_WS_TEMPLATES."main_page.tpl.php");
?>