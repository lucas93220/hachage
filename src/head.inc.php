<?php
class User {

public $_css = "./css/style.css";
public $_reset_css = "./css/reset.css";
static $_lang = ["fr","en"];
public $_title = "Inscription";
}
$_new_user = new User;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= $_new_user->_css ?>>
    <link rel="stylesheet" href=<?= $_new_user->_reset_css ?>>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/180x180">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/16x16">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <title><?= $_new_user->_title ?></title>
</head>