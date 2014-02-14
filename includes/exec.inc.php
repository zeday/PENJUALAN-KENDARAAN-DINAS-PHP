<?php

/**
 * @author Zeday
 * @copyright 2014
 */
require ("./includes/config.php");
$id='id';
$ngaran='nama';
$no_induk='nip';
$pkt='pangkat';
$gol='golongan';
$jab='jabatan';
$skpd='instansi';
$h_jual='harga_penjualan';
$angs='cicilan';
$no_kode_barang='kode_kib';
$no_reg='no_register';
$nm_brg='nama_aset';
$jns_brg='jenis_aset';
$mrk_brg='merk_aset';
$tpe_brg='type_aset';
$nopol='no_polisi';
$nostnk='no_stnk';
$nobpkb='no_bpkb';
$nomesin='no_mesin';
$norngka='no_rangka';
$thn_beli='tahun_beli';
$hrg_beli='harga_beli';
$ktrg='keterangan';
$sk='no_sk';
$sk_tgl='tgl_sk';
$sk_hal='perihal';
$tgl='tanggal';
$bln='bulan';
$thn='tahun';
if (! isset($_POST['submit']))
$query = "INSERT INTO biodata_pembeli (nama, jabatan, pangkat, golongan, nip) VALUES ('$ngaran', '$jab','$pkt', '$gol', '$no_induk'))";
$query = "INSERT INTO harga_jualan (harga_penjualan, cicilan) VALUES ('$h_jual', '$angs'))";
$query = "INSERT INTO kendaraan (kode_kib, no_register, nama_aset, jenis_aset, merk_aset, type_aset, no_polisi, no_stnk, no_bpkb, no_mesin, no_rangka, tahun_beli, harga_beli) VALUES ($no_kode_barang, $no_reg, $nm_brg, $jns_brg, $mrk_brg, $tpe_brg, $nopol, $nostnk, $nobpkb, $nomesin, $norngka, $thn_beli, $hrg_beli))";
?>