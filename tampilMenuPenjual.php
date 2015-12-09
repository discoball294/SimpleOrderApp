<title>Menu</title>
<link href="css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
<nav>
    <div class="nav-wrapper deep-orange darken-2">
        <a href="#" class="brand-logo">Pesanan</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="addDeposit.php">Tambah Deposit</a></li>
            <li><a href="tambahMenu.php">Tambah Menu</a></li>
            <li class="active"><a href="tampilMenuPenjual.php">Lihat Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="col-md-3"></div>
<div class="col-md-6">
    <form class="col s12" action="" method="post" style="margin: 15px;">

        <div class="row">
            <div class="input-field col s12">
                <input name="id_pesanan" placeholder="ID Pesanan" type="text" class="validate">
                <label class="active deep-orange-text">ID Pesanan</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Cari
        </button>
    </form>
    <?php
    /**
     * Created by PhpStorm.
     * User: bryan
     * Date: 12/9/15
     * Time: 6:32 PM
     */
    session_start();
    require_once "dbConnect.php";
    require_once "func.php";
    if (isset($_POST['id_pesanan']) == false) {
        $_POST['id_pesanan'] = "";
        cari($_POST['id_pesanan']);
    } else {
        cari($_POST['id_pesanan']);
    } ?>


    <form action="" method="post">
        <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Update Status
        </button>
    </form>
    <?
    if (isset($_POST['idmenu']) == false)
        echo "";
    else{
        updStatus($_POST['idmenu']);

    }


    ?>
</div>
<script src="js/materialize.min.js" type="application/javascript"></script>
<script src="js/jquery-2.1.4.min.js" type="application/javascript"></script>