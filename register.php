<?php

/**
 * @author Zeday
 * @copyright 2014
 */
require ("./includes/config.php");
require_once ("./includes/exec.inc.php");

?>
<form method="post" action="./modules/addbuyer.php">
<table border="1" width="100%" cellpadding="2">
<tr>
<td width="30%" align="left">Nama</td><td width="220%" align="left"><input width="600%" type="text" id="<? $_POST['$ngaran'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">NIP</td><td width="220%" align="left"><input width="300%" type="number" id="<? $_POST['$no_induk'] ?>"/></td></tr>
<td width="30%" align="left">Pangkat</td><td width="220%" align="left"><input width="300%" type="text" id="<? $_POST['$pkt'] ?>"/></td></tr>
<td width="30%" align="left">Golongan</td><td width="220%" align="left"><input width="50%" type="text" id="<? $_POST['$gol'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Jabatan</td><td width="220%" align="left"><input width="600%" type="text" id="<? $_POST['$jab'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">SKPD</td><td width="220%" align="left"><input width="600%" type="text" id="<? $_POST['$instansi'] ?>"/></td></tr>
<tr><INPUT type="submit" value="Send"> <INPUT type="reset"></tr>
</table>
<br>
<table border="1" width="100%" cellpadding="2">
<tr>
<td width="30%" align="left">Kode KIB </td><td width="220%" align="left"><input width="255&" type="text" id="<? $_POST['$no_kode_barang'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Nomor Register </td><td width="220%" align="left"><input width="50%" type="text" id="<? $_POST['$no_reg'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Nama Barang </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$nm_brg'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Jenis Barang </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$jns_brg'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Merk </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$mrk_brg'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Type </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$tpe_brg'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Nomor Polisi </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$nopol'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Nomor STNK </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$nostnk'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Nomor BPKB </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$nobpkb'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Nomor Mesin </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$nomesin'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Nomor Rangka </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$norngka'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Tahun Pengadaan </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$thn_beli'] ?>"/></td></tr>
<tr>
<td width="30%" align="left">Harga Penjualan </td><td width="220%" align="left"><input width="220%" type="text" id="<? $_POST['$hrg_beli'] ?>"/></td></tr>
</table>
<input type="submit" value="Simpan"/><input type="reset"/>
</form>

