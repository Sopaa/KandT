<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="../save/index.html">WtfWeb</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($page == 'index.php'){ echo 'class="active"';}?>><a href="index.php">Teletubbies</a></li>
                    <li <?php if($page == 'kittens.php'){ echo 'class="active"';}?>><a href="kittens.php">Kittens</a></li>
                    <li <?php if($page == 'ironmaiden.php'){ echo 'class="active"';}?>><a href="ironmaiden.php">Iron Maiden</a></li>
                    <li <?php if($page == 'jpp.php'){ echo 'class="active"';}?>><a href="jpp.php">J-P</a></li>
                </ul>
            </div>
        </div>
    </nav>
