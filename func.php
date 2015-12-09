<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 12/8/15
 * Time: 11:31 AM
 */
require "dbConnect.php";
function insDetail($id_pesanan, $id_menu, $jumlah)
{
    global $db;
    $dtl = "INSERT INTO detail_pesanan VALUES ('" . $id_pesanan . "','" . $id_menu . "','" . $jumlah . "','Proses')";
    $db->query($dtl) or die("<script>
alert('Terjadi kesalahan '" . $db->error() . "'');
window.location.href='index.php';
</script>");
}

function updPesanan($total, $id_pesanan)
{
    global $db;
    $upd = "UPDATE `master_pesanan` SET `total_harga`='" . $total . "' WHERE `id_pesanan` LIKE '%" . $id_pesanan . "%'";
    $db->query($upd) or die("<script>
alert('Terjadi kesalahan');
window.location.href='index.php';
</script>");
}

function loginMhs($nim, $pass)
{
    global $db;
    $query = 'SELECT * FROM user_mhs';
    $data = $db->query($query);
    $sukses = 0;
    $row = $data->fetch_assoc();
    foreach ($data as $row) {

        if ($nim == $row['nim'] && $pass == $row['password']) {
            $sukses = 1;
            session_start();
            $_SESSION['user'] = $row['nim'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['saldo'] = $row['deposit'];
        }
    }
    if ($sukses == 1) {
        echo "<script>
alert('Berhasil Login');
window.location.href='tampilMenu.php';
</script>";

    } else
        echo "<script>
alert('Username tidak ada atau password salah');
window.location.href='indexdummy.php';
</script>";
}

function loginPenjual($user, $pass)
{
    global $db;
    $query = 'SELECT * FROM user_slr';
    $data = $db->query($query);
    $sukses = 0;
    $row = $data->fetch_assoc();
    foreach ($data as $row) {

        if ($user == $row['id_penjual'] && $pass == $row['pass']) {
            $sukses = 1;
            session_start();
            $_SESSION['user'] = $row['id_penjual'];
            $_SESSION['nama'] = $row['nama_penjual'];
        }
    }
    if ($sukses == 1) {
        echo "<script>
alert('Berhasil Login');
window.location.href='tampilMenuPenjual.php';
</script>";

    } else
        echo "<script>
alert('Username tidak ada atau password salah');
window.location.href='indexdummy.php';
</script>";
}

function addDep($nim, $jml)
{
    global $db;
    $upd = "UPDATE user_mhs SET deposit='$jml' WHERE nim='$nim'";
    $db->query($upd) or die("<script>
alert('Terjadi kesalahan '" . $db->error() . "'');
window.location.href='index.php';
</script>");
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Berhasil</strong>
</div>";
}

function updStatus($id_pesanan)
{
    global $db;
    $upd = "UPDATE detail_pesanan SET status='Siap' WHERE id_pesanan='$id_pesanan'";
    $db->query($upd) or die("<script>
alert('Terjadi kesalahan '" . $db->error() . "'');
window.location.href='index.php';
</script>");
}

function cari($id_pesanan)
{
    global $db;
    if (isset($id_pesanan) == false) {
        $query = "SELECT * FROM status_fix WHERE status LIKE '%Proses%' ORDER BY id_pesanan ASC";
        $dataMenu = $db->query($query);
        $rowMenu = $dataMenu->fetch_assoc();
    } else {
        $query = "SELECT * FROM status_fix WHERE id_pesanan LIKE '%" . $id_pesanan . "%' AND status LIKE '%Proses%'";
        $dataMenu = $db->query($query);
        $rowMenu = $dataMenu->fetch_assoc();
    }
    ?>
    <form method="post" action="">
    <table border="1" class="table table-responsive table-striped ">
        <thead>
        <th>ID Pesanan</th>
        <th>Nama</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Status</th>
        </thead>
        <?
        foreach ($dataMenu as $rowMenu) {
            echo "<tbody>";
            echo "<td><div class='form-group'><input readonly class='form-control' name='idmenu' size='7' value='" . $rowMenu['id_pesanan'] . "'></div></td>";
            echo "<td>" . $rowMenu['nama'] . "</td>";
            echo "<td><div class='form-group'><input readonly class='form-control' name='harga[]' size='6' value='" . $rowMenu['nama_menu'] . "'></div></td>";
            echo "<td><div class='form-group'><input readonly class='form-control' name='stok[]' size='2' value='" . $rowMenu['harga'] . "'></div></td>";
            echo "<td><div class='form-group'><input readonly class='form-control' name='stok[]' size='2' value='" . $rowMenu['jumlah'] . "'></div></td>";
            echo "<td><div class='form-group'><input readonly class='form-control text-danger' name='stok[]' size='2' value='" . $rowMenu['status'] . "'></div></td>";
            echo "</tbody>";
        } ?></table>
<?
}
function insMenu($id_menu, $nama_menu, $harga)
{
    global $db;
    $dtl = "INSERT INTO menu VALUES ('" . $id_menu . "','" . $nama_menu . "','" . $harga . "')";
    $db->query($dtl) or die("<script>
alert('Terjadi kesalahan');
window.location.href='index.php';
</script>");
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Sukses!</strong> Tambah data berhasil
</div>";
}
