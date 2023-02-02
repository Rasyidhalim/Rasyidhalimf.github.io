<center>
<h1>FORM PENJUALAN BARANG</h1>
<hr>
<table>
<?php
error_reporting(0);
$namapembeli=$_POST['namapembeli'];
$barang=$_POST['barang'];
if ($barang=="samsung") $harga=2000000;
if ($barang=="lg") $harga=5000000;
if ($barang=="sony") $harga=500000;

$jumlah=$_POST['jumlah'];
$antena=$_POST['antena'];
$dvd=$_POST['dvd'];
$blueray=$_POST['blueray'];
if ($charger=="antena") $hargacharger=300000;
if ($ssd=="dvd") $hargassd=7000000;
if ($battery=="blueray") $hargabattery=1500000;

$hargaaksesoris=$hargacharger+$hargabattery+$hargassd+$hargacasing;
$subtotal=($harga*$jumlah)+$hargaaksesoris;
$pajak=0;
$pembayaran=$_POST['pembayaran'];
if ($pembayaran=="DEBIT") $pajak=$subtotal*0.1;
$total=$subtotal+$pajak;



echo "<tr><td>Nama Pembeli <td>: <td>$namapembeli";
echo "<tr><td>Barang <td>: <td>$barang";
echo "<tr><td>Harga <td>: <td>$harga";
echo "<tr><td>Jumlah <td>: <td>$jumlah";
echo "<tr><td>Aksesoris <td>: <td>$battery $casing $ssd $charger";
echo "<tr><td>Harga Aksesoris <td>: <td>Rp. $hargaaksesoris";
echo "<tr><td>Pembayaran <td>: <td>$pembayaran";
echo "<tr><td>Subtotal <td>: <td>Rp. $subtotal";
echo "<tr><td>Pajak <td>: <td>Rp. $pajak";
echo "<tr><td>Total <td>: <td>Rp. $total";