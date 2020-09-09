<?php

$readfullname = isset($readfullname)?$readfullname:"";
$reademail = isset($reademail)?$reademail:"";
$readphone = isset($readphone)?$readphone:"";
$readletter = isset($readletter)?$readletter:"";
$user = isset($user)?$user:"";
$idupdated = isset($idupdated)?$idupdated:"";

$readalldata = isset($readalldata)?$readalldata:"";

?>

<?php include'spaceweb-nav.php'; ?>

<?php include'spaceweb-header-update-page.php'; ?>

<?php include'spaceweb-header-crud.php'; ?>

<?php include'spaceweb-form-update-page.php'; ?>

<?php include'spaceweb-features-crud.php'; ?>

<?php include'spaceweb-footer-crud.php'; ?>