<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 12/9/15
 * Time: 9:54 PM
 */
require_once "func.php";
?>
<title>Tambah Menu</title>
<link href="css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
<nav>
    <div class="nav-wrapper deep-orange darken-2">
        <a href="#" class="brand-logo">Tambah Menu</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="addDeposit.php">Tambah Deposit</a></li>
            <li class="active"><a href="tambahMenu.php">Tambah Menu</a></li>
            <li><a href="tampilMenuPenjual.php">Lihat Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="col-md-4"></div>
<div class="col-md-4">
    <form class="col s12" action="" method="post" style="margin: 15px;">

        <div class="row">
            <div class="input-field col s12">
                <input name="id_menu" placeholder="ID Menu" type="text" class="validate" required>
                <label class="active deep-orange-text">ID Menu</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="nama" placeholder="Nama Menu" type="text" class="validate waves-input-wrapper" required>
                <label class="active deep-orange-text">Nama Menu</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="harga" placeholder="Harga" type="text" class="validate" required>
                <label class="active deep-orange-text">Harga</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Tambah
        </button>
    </form>

<?
if (isset($_POST['id_menu']) == false && isset($_POST['nama']) == false && isset($_POST['harga']) == false)
echo "";
else
insMenu($_POST['id_menu'],$_POST['nama'],$_POST['harga']);

?>
</div>
<script src="js/materialize.min.js" type="application/javascript"></script>
<script src="js/bootstrap.js" type="application/javascript"></script>