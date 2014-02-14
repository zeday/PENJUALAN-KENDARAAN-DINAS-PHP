<?php

/**
 * @author Zeday
 * @copyright 2014
 */

require ("./includes/config.php");
require_once ("./includes/exec.inc.php");
// if the submit buttonhas pressed
if (isset($_POST['submit']))
{
    echo "Data Penjualan Untuk ".$_POST['$ngaran']." sudah disimpan coy<br />";
    echo "Dengan Nomor Polisi Kendaraan ".$_POST['$nopol']."!";
}
?>