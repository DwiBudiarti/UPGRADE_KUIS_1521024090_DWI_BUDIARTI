<!DOCTYPE html>
<html>
<head>
	<title>Kuis 1_02</title>
</head>
<body>
	<?php 
	$input = "
		BlokBojonegoro.com - Kendati diguyur hujan deras pawai budaya atau karnaval tingkat SMA dan Umum berlangsung meriah. Ribuan masyarakat sangat antusias menyaksikan pawai budaya menyambut Hari Jadi Bojonegoro ke-339.

		Ketua Panitia Pawai Budaya Suyanto mengatakan tiap tahun peserta pawai budaya menampilkan tema dan kostum yang menarik. Tak heran antusias warga yang menyaksikan sangat banyak. Sampai-sampai sepanjang rute yang dilalui peserta pawai dipadati warga. Tema pawai budaya tahun ini adalah menggali nilai luhur sila sila Pancasila untuk mewujudkan Bojonegoro sebagai daerah tujuan wisata dan budaya 2017, jelas Suyanto.

		Tidak sedikit peserta menampilkan potensi wisata di Bojonegoro seperti kayangan api dan agro belimbing. Sedikitnya 80 kelompok peserta mengikuti pawai budaya dengan rute Start Jl. Mas Tumapel – Jl. Imam Bonjol – Jl. Mastrip – Jl. MH. Thamrin – Jl. Panglima Sudirman – Jl. Teuku Umar – Jl WR Supratman – Jl. Rajawali – Jl. Imam Bonjol – depan SDK St Paulus. (Finish).

		Di akhir acara diumumkan pemenang dan penyerahan tropi juara pawai budaya tingkat mulai TK sampai SMA dan umum.[oel]

		Kategori SMA:
		Juara I SMK Negeri 1 (7) dengan nilai 936
		Juara II SMK Negeri 2 (12) dengan nilai 934,5
		Juara III SMK Negeri 5 (17) dengan nilai 919,5

		Juara Harapan I SMAN 2 (9) dengan nilai 917,5
		Juara Harapan II SMAN 1 (1) dengan nilai 914
		Juara Harapan III SMAN 4 (5) dengan nilai 911

		Kreator Terbaik
		1.SMA Negeri 1
		2.SMK Negeri 1
		3.SMK Negeri 2

		- Kategori Umum
		Juara I UPTD Pendidikan Dander (13) dengan nilai 935
		Juara II PKG Cahaya Mentari (10) dengan nilai 933
		Juara III Sayap Jendela dengan nilai 909

		Juara Harapan I Jetak Suka Banjirr (3) dengan nilai 905
		Juara Harapan II Desa Sambiroto, Kapas (4) dengan nilai 901
		Juara Harapan III AKN Bojonegoro (29) dengan nilai 898

		Kreator Terbaik
		1. Jetak Suka Banjir
		2. PKG Cahaya Mentari
		3. UPTD Pendidikan Dander
	";
	echo nl2br($input);
	echo "<br>";
	echo "<h3>MENGHITUNG JUMLAH KARAKTER</h3>";
	echo "<hr />";
	$count = strlen($input);
	?>
	<table border=2>
		<tr>
			<th width="20">No</th>
			<th width="50">HURUF</th>
			<th width="200">Jumlah karakter</th>
		</tr>
		<tr>
			<td><?php $no=1; echo $no;?></td>
			<td>D</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="d" or $output=="D"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>W</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="w" or $output=="W"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>I</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="i" or $output=="I"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>spasi</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output==" "){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>B</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="b" or $output=="B"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		

		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>U</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="u" or $output=="U"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>D</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="d" or $output=="D"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>I</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="i" or $output=="I"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>A</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="a" or $output=="A"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>R</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="r" or $output=="R"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>T</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="t" or $output=="T"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
		<tr>
			<td><?php $no+=1; echo $no ;?></td>
			<td>I</td>
			<td>
				<?php
					$jml=0;
					for($i=0; $i<=$count; $i++){
						$output = substr($input, $i, 1);
						if ($output=="i" or $output=="I"){
							$jml++;
						}
					}
					echo $jml;
				?>
			</td>
		</tr>
	</table>
</body>
</html>