<?php
$input = "AKADEMI KOMUNITAS NEGERI BOJONEGORO 1521024090 DWI BUDIARTI";
echo "<h3>MEMBALIK KATA</h>";
echo "<br>";
 ?>
 <table border=2>
 		<tr>
 				<th width="150">Input</th>
 				<td width="700"><?php echo $input;?></td>
 		</tr>
 		<tr>
 				<th> Output </th>
 				<td>
 						<?php
 							$arr_input = explode(" ",$input);
 							$jumlah_kata=count($arr_input);
 							$awal=$jumlah_kata-1;
 							$akhir=0;
 							for($i=$awal;$i>=$akhir;$i--){
 								echo $arr_input[$i]." ";
 							}
 						?>
 					</td>
 				</tr>
 			</table>
