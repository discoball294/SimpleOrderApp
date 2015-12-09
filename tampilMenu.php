<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 12/5/15
 * Time: 9:44 PM
 */
session_start();
require_once "dbConnect.php";
$query = "SELECT * FROM menu";
$dataMenu = $db->query($query);
$rowMenu = $dataMenu->fetch_assoc(); ?>
<title>Menu</title>
<link href="css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
<nav class="top-nav deep-orange darken-2">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="page-title">Menu</a>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Lihat Pesanan</a>
                </li>
                <li>
                    <a href="logout.php"><? echo $_SESSION['user'];?>Logout</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<div class="col-md-3"></div>
<div class="col-md-6">
<form method="post" action="prosesPesan.php">
<table border="1" class="table table-responsive table-striped ">
    <thead>
    <th>ID Menu</th>
    <th>Menu</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Jumlah</th>
    </thead>
    <?
    foreach ($dataMenu as $rowMenu) {
        echo "<tbody>";
        echo "<td><div class='form-group'><input readonly class='form-control' name='idmenu[]' size='7' value='" . $rowMenu['id_menu'] . "'></div></td>";
        echo "<td>" . $rowMenu['nama_menu'] . "</td>";
        echo "<td><div class='form-group'><input readonly class='form-control' name='harga[]' size='6' value='" . $rowMenu['harga'] . "'></div></td>";
        echo "<td><div class='form-group'><input readonly class='form-control' name='stok[]' size='2' value='" . $rowMenu['stok'] . "'></div></td>";
        echo "<td><input type='text' name='qty[]' size='3'></td>";
        echo "</tbody>";
    } ?></table>
<input type="submit" value="pesan" class="btn-flat btn-large"></form></div>
