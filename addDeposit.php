<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 12/9/15
 * Time: 3:40 PM
 */
require_once"func.php";
?>
<title>Menu</title>
<link href="css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
<nav>
    <div class="nav-wrapper deep-orange darken-2">
        <a href="#" class="brand-logo">Tambah Deposit</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href=""><?//echo $_SESSION['nama'];?></a></li>
            <li><a href="tampilPesanan.php">Lihat Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="col-md-4"></div>
<div class="col-md-4">
    <form class="col s12" action="" method="post" style="margin: 15px;">

        <div class="row">
            <div class="input-field col s12">
                <input name="nim" placeholder="NIM" type="text" class="validate" required>
                <label class="active deep-orange-text">NIM</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="jml" type="text" class="validate waves-input-wrapper" required>
                <label class="active deep-orange-text">Jumlah Deposit</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Proses
        </button>
    </form>
</div>
<script src="js/materialize.min.js" type="application/javascript"></script>
<script src="js/jquery-2.1.4.min.js" type="application/javascript"></script>
<?
if (isset($_POST['nim'])==false && isset($_POST['jml'])==false){
    echo "";
} else {
    $nim = $_POST['nim'];
    $jml = $_POST['jml'];
    addDep($nim, $jml);
}
?>