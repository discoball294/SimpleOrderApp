<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 12/5/15
 * Time: 1:53 PM
 */
require_once "dbConnect.php";
require_once "func.php";
$user = $_POST['user'];
$pass = $_POST['pass'];
if ($_POST['group1']=="mahasiswa")
    loginMhs($user,$pass);
else
    loginPenjual($user,$pass);




