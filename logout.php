<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 12/8/15
 * Time: 9:47 PM
 */
session_start();
session_unset();
session_destroy();
?><script>
    alert('Berhasil logout');
    window.location.href='index.php';
</script>