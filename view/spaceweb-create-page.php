<?php

$fullname = isset($fullname)?$fullname:"";
$email = isset($email)?$email:"";
$phone = isset($phone)?$phone:"";
$opinion = isset($opinion)?$opinion:"";
$developer = isset($developer)?$developer:"";
$letter = isset($letter)?$letter:"";

$skills = isset($skills)?$skills:[];
$errors = isset($errors)?$errors:[];

?>

<?php include'spaceweb-nav.php'; ?>

<?php include'spaceweb-header-create-page.php'; ?>

<?php include'spaceweb-header-crud.php'; ?>

<?php include'spaceweb-form-create-page.php'; ?>

<?php include'spaceweb-features-crud.php'; ?>

<?php include'spaceweb-footer-crud.php'; ?>