<?php

function isAdminLoggedin()
{
    if (isset($_SESSION['is_admin_loggedin']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

if (!function_exists('message'))
{

    function message($message)
    {
        $_SESSION['message'] = $message;
    }

}

if (!function_exists('exception'))
{

    function exception($message)
    {
        $_SESSION['exception'] = $message;
    }

}

function ger_membership_plan_cost($membership_id)
{
    $sql = "SELECT membership_cost FROM nan_membership WHERE membership_id = $membership_id LIMIT 1";
    $res = row_array($sql);
    return $res['membership_cost'];
}

function get_membership_vat($membership_id)
{
    $sql = "SELECT vat FROM nan_membership WHERE membership_id = $membership_id LIMIT 1";
    $res = row_array($sql);
    return $res['vat'];
}

function subscription_end_date($membership_id)
{
    $sql = "SELECT subscription_interval FROM nan_membership WHERE membership_id = $membership_id LIMIT 1";
    $res = row_array($sql);
    $month = $res['subscription_interval'];
    $todayDate = date("Y-m-d");
    $dateMonthAdded = strtotime(date("Y-m-d", strtotime($todayDate)) . "+$month month");
    return date('Y-m-d H:i:s', $dateMonthAdded);
}

function ger_membership_plan_name($membership_id)
{
    $sql = "SELECT membership FROM nan_membership WHERE membership_id = $membership_id LIMIT 1";
    $res = row_array($sql);
    return $res['membership'];
}

function get_membership_validity($user_id)
{
    $sql = "SELECT subscription_end_date FROM nan_user WHERE user_id = $user_id AND DATE(subscription_end_date) >= CURDATE() AND status = 1 LIMIT 1";
    $res = row_array($sql);
    if ($res)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function isValidMember()
{
    if (isset($_SESSION['membership_validity']) && $_SESSION['membership_validity'] == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function send_congratulation_mail($user_id)
{
    $sql = "SELECT * FROM nan_user WHERE user_id = $user_id LIMIT 1";
    $res = row_array($sql);
    $membership = ger_membership_plan_name($res['membership_id']);
    $no_of_month = subscription_end_date($res['membership_id']);

    $mailBody = file_get_contents('../signup-congratulation.php', true);
    
    $mailBody   = str_replace('~~USERNAME~~',$res['sur_name'],$mailBody); 
    $mailBody   = str_replace('~~MEMBERSHIP~~',$membership,$mailBody); 
    $mailBody   = str_replace('~~SITENAME~~',BASEURL,$mailBody); 
    $mailBody   = str_replace('~~NO_OF_MONTH~~',$no_of_month,$mailBody); 
    
    $subject    = 'Signup - '.BASEURL; 
    $message    = $mailBody;
    $to         = $res['email'];
    $headers    = MAILHEADER;
    mail($to, $subject, $message, $headers);  
}
?>