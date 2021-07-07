<?php 
	echo "<h4>Tugas 3 Page 1 <i>//Pembagian & Perkalian</i></h4><br>";
	$jarak = 360;
	$kecepatan = 90;
	$jam = 60;

	echo "Jarak kota A - Z = 360 Km <br>";
	echo "Kecepatan motor = 90 Km/jam <br>";
	echo "Waktu tempuh = ? <br>";
	$jawab1 = $jarak / $kecepatan;
	$jawabmenit = $jam * $jawab1; 
	echo "Jawaban : $jawabmenit menit<br>";

	echo "<br><br><br>";

	echo "<h4>Tugas 3 Page 2 <i>//Pembagian Persen Bunga</i></h4><br>";
	$tabungan = 150000;
	$bunga = 12.5;

	echo "Tabungan Awal = 150000 <br>";
	echo "Bunga Setahun = 12,5% <br>";
	echo "Total Tabungan Setahun = ? <br>";
	$bungadalamrupiah = $tabungan / $bunga;
	echo "Jawaban: Rp. $bungadalamrupiah";
?>
