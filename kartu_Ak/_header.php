<?php
require "_assets/libs/vendor/autoload.php";
require_once "_config/config.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="shortcut icon" 
        type="image/png" 
        href="../_assets/images/logo.jpg" /> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Data - Kartu AK I</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
        <link type href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
        <link type="text/css" href="../_assets/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css"  href="../_assets/datepicker/css/datepicker.css"  rel="stylesheet">
        
        

</head>
    
<body>
        <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
        <script src="<?=base_url('_assets/js/boostrap.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/Buttons-1.6.2/js/buttons.flash.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/JSZIP-2.5.0/jszip.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/Buttons-1.6.2/js/buttons.html5.min.js')?>"></script>
        <script src="<?=base_url('_assets/libs/DataTables/Buttons-1.6.2/js/buttons.print.min.js')?>"></script>
        <script src="../_assets/js/jquery-3.5.1.js"></script>
        <script src="../_assets/js/bootstrap.js"></script>
        <script src="../_assets/datepicker/js/bootstrap-datepicker.js"></script>
<div id="wrapper">
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href=""><span class="text-primary"><b>Pendaftaran Kartu AK</b></span></a>
        </li>
        <li>
            <a href="<?=base_url('dashboard')?>">Home</a>
        </li>
        <li>
            <a href="<?=base_url('kartu_ak/add.php')?>">Tambah Data Kartu AK</a>
        </li>
        <li>
            <a href="<?=base_url('kartu_ak/cetak_data.php')?>">Rekap Data</a>
        </li>
        <li>
            <a href=<?=base_url('kartu_ak/data.php')?>>Daftar Pendaftar Kartu AK</a>
        </li>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?=$_SESSION['nama_user'];?>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href="admin.php">Data Admin</a></li>
            <li><a align="left" href="<?=base_url('auth/logout.php')?>" class="glyphicon glyphicon-off gi-2x"><span class="text-danger"> Logout</span></a></li>
        </ul>
        </div>

    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">