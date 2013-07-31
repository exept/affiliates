<?php
include_once 'include/config.php';
if($_POST)
{
    //dumpVar($_POST);
    $data['marchant_fname'] = $_POST['marchant_fname'];
    $data['marchant_lname'] = $_POST['marchant_lname'];
    $data['marchant_email'] = $_POST['marchant_email'];
    $data['marchant_password'] = $_POST['marchant_password'];
    $data['marchant_username'] = $_POST['marchant_username'];
    $data['company'] = $_POST['company'];
    $data['website'] = $_POST['website'];
    $data['address'] = $_POST['address'];
    $data['country'] = $_POST['country'];
    $data['city'] = $_POST['city'];
    $data['state'] = $_POST['state'];
    $data['zip'] = $_POST['zip'];
    $data['marchant_contact'] = $_POST['marchant_contact'];
    if(insert(marchant_profile, $data))
    {
        header('Location:login.php');
        exit;
    }
    
}

?>
