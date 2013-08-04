<?php
include_once '../include/config.php';
unset($_SESSION['marchant_logged']);
unset($_SESSION['marchant_id']);
header('Location:'.BASEURL);
exit;
?>
