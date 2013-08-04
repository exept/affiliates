<?php
include_once '../include/config.php';

unset($_SESSION['superAdmin_logged']);
unset($_SESSION['superAdmin_id']);
header('Location:'.BASEURL);
exit;
?>
