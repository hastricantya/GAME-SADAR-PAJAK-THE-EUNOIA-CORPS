<?php
  $jawaban1 = $_POST['jawaban1'];
  $jawaban2 = $_POST['jawaban2'];
  $jawaban3 = $_POST['jawaban3'];
  $nilai=0;
  $total="";
  if($jawaban1 == 'c1'){
  	$nilai=$nilai+1;
  	if ($jawaban2 == 'a2') {
  		$nilai=$nilai+1;
  		if ($jawaban3 == 'b3') {
  			$nilai=$nilai+1;
  		}else{
  			$nilai;
  		}
  	}elseif($jawaban3 == 'b3') {
  		$nilai=$nilai+1;
  	}else{
  		$nilai;
  	}
  }
  elseif ($jawaban2 == 'a2'){
  	$nilai=$nilai+1;
  	if ($jawaban3 == 'b3') {
  		$nilai=$nilai+1;
  	}else{
  		$nilai;
  	}
  }
  elseif ($jawaban3 == 'b3'){
  	$nilai=$nilai+1;
  }else{
  	$nilai;
  }
?>
<html>
<head>
	<title>Hasil Permainan</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<style type="text/css">
		.mulai_lagi {
		  background-color: #4CAF50;
		  border: none;
		  color: white;
		  padding: 16px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		}
		.mulai_lagi {
		  background-color: white;
		  color: black;
		  border: 2px solid #555555;
		}

		.mulai_lagi:hover {
		  background-color: #555555;
		  color: white;
		}
		.kartu{
			background: white;
			padding: 58px;
			margin-left: 280px;
			margin-right: 280px;
			margin-top: 45px;
			border-radius: 24px;
		}
		.kartu h4{
			color: black;
		}
	</style>
</head>
<body>
	<header>
		<div>
			<ul>
				<li><a href="index.html">Beranda</a></li>
				<li><a href="carabermain.html">Cara Bermain</a></li>
				<li><a href="apaitupajak.html">Apa itu Pajak?</a></li>
				<li><a href="asah_pengetahuan.html">Asah Pengetahuan</a></li>
				<li><a href="kontak.html">Kontak</a></li>
			</ul>
		</div>

		<div class="logo">
			<img src="sadar_pajak.png" width="10%">
		</div>
		<div class="kartu">
			<center><label><h1><?php
			 if ($nilai==3) {
			  	echo "Selamat, nilai yang sempurna!";echo "<br>";echo "<br>";echo "<img src='100.png'>";
			  }
			  elseif ($nilai==2) {
			  	echo "Lumayan, usaha yang tidak sia-sia!";echo "<br>";echo "<br>";echo "<img src='67.png'>";
			  }
			  elseif ($nilai==1) {
			  	echo "Kurang, sepertinya kurang teliti!";echo "<br>";echo "<br>";echo "<img src='33.png'>";
			  }
			  else{
			  	echo "Waduh, harus belajar lebih giat lagi!";echo "<br>";echo "<br>";echo "<img src='0.png' width='160'>";
			  }
			?></h1></label></center><br>
			<center><h4><?php
			  if ($nilai==3) {
			  	$total=100;
			  	echo "Nilai Anda : ";echo strval($total);
			  }
			  elseif ($nilai==2) {
			  	$total=67;
			  	echo "Nilai Anda : ";echo strval($total);
			  }
			  elseif ($nilai==1) {
			  	$total=33;
			  	echo "Nilai Anda : ";echo strval($total);
			  }
			  else{
			  	$total=0;
			  	echo "Nilai Anda : ";echo strval($total);
			  } ?></h4>
		</center>
		</div>
		<br>
		<center>
			<form action="game3.html">
				<button class="mulai_lagi" type="submit">Mulai lagi?</button>
			</form>
			<form action="asah_pengetahuan.html">
				<button class="mulai_lagi" type="submit">Kembali</button>
			</form>
		</center>
</button>
	</header>
<br><br><br><br>
<footer class="copy">
		<p align="center">Copyright &copy; Hastri Cantya D. & Yovan Febriawan N. 2021</p>
		<p align="center">All rights reserved</p>
</footer>
</body>
</html>