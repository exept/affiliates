<?php
include_once '../include/config.php';

unset($_SESSION['affliate_logged']);
unset($_SESSION['affliate_id']);
header('Location:'.BASEURL);
exit;
?>
