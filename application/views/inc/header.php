<?php
    $user = $this->session->userdata("utilisateur");
    if(!isset($user)) redirect("http://localhost/tp-supermarket/");;
    $user = unserialize($this->session->userdata("utilisateur"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/shop-homepage.css" rel="stylesheet') ?>">
</head>
<body>
