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
window.location.href='tampilMenu.php';
</script>";

    } else
        echo "<script>
alert('Username tidak ada atau password salah');
window.location.href='indexdummy.php';
</script>";
}
