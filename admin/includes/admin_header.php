<?php session_start(); ?>
<?php ob_start(); ?>
<?php include "../includes/db.php" ?>

<?php

if (!isset($_SESSION['s_role'])) {
    header("Location: ../index.php");
}
else {
    if ($_SESSION['s_role'] !== 'admin') {
        header("Location: ../index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BusIT.com - Admin</title>

    <link href="css/master.css" rel="stylesheet" >

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body>
