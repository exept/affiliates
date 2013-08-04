<?php
include_once 'include/config.php';
if($_POST)
{
    //dumpVar($_POST);
    $data['aff_name'] = $_POST['aff_name'];
    $data['aff_lname'] = $_POST['aff_lname'];
    $data['aff_email'] = $_POST['aff_email'];
    $data['aff_password'] = $_POST['aff_password'];
    $data['aff_username'] = $_POST['aff_username'];
    $data['payment'] = $_POST['payment'];
    $data['website'] = $_POST['website'];
    $data['address'] = $_POST['address'];
    $data['country'] = $_POST['country'];
    $data['city'] = $_POST['city'];
    $data['zip'] = $_POST['zip'];
    $data['aff_contact'] = $_POST['aff_contact'];
    if(insert(affiliates_profile, $data))
    {
        header('Location:login.php');
        exit;
    }
    
}

?>
