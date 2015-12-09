<?php
/**
 * Created by PhpStorm
 * User: bryan
 * Date: 12/5/15
 * Time: 11:27 PM
 */
session_start();
require_once "dbConnect.php";
require_once "funcAutoNum.php";
require_once "func.php";
$idTrans=FormatNoPsn(AutoID());
echo $idTrans;

$query="INSERT INTO `master_pesanan`(`id_pesanan`, `nim`, `tgl_pesan`) VALUES ('".$idTrans."','".$_SESSION['user']."',now())";
$db->query($query) or die("<script>
alert('Terjadi kesalahan $idTrans');
window.location.href='index.php';
</script>");
if(isset($_POST["qty"])){
    $capture_field_vals ="";
    $ecArr="";
    $total=0;
    $totalQty=0;
    foreach($_POST["qty"] as $key => $text_field){
        if ($text_field==""){
            $capture_field_vals .= "0, ";
        }
        else{
            //$totalQty += $_POST['qty'][$key];
            $total += ($_POST['harga'][$key]*$_POST['qty'][$key]);
            insDetail($idTrans,$_POST['idmenu'][$key],$_POST['qty'][$key]);
        }
    }
    $deposit=$_SESSION['saldo']-$total;
    updPesanan($total,$idTrans);
    addDep($_SESSION['user'],$deposit);
    $_SESSION['saldo']=$deposit;
    echo"<script>
alert('Terjadi kesalahan');
window.location.href='tampilMenu.php';
</script>";
}
