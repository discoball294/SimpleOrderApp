<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 12/8/15
 * Time: 10:37 AM
 */
require"dbConnect.php";
function AutoID()
{
    global $db;
    $querycount="SELECT count(id_pesanan) as LastID FROM master_pesanan";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function FormatNoPsn($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoTrans = "PSN0000".$num; break;
        case 2 : $NoTrans = "PSN000".$num; break;
        case 3 : $NoTrans = "PSN00".$num; break;
        case 4 : $NoTrans = "PSN0".$num; break;
        default: $NoTrans = $num;
    }
    return $NoTrans;
}