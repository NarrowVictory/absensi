<?php

$link 	= mysqli_connect('localhost' , 'root' , '' , 'sbd_10113076') or die(mysqli_connect_error());
?>
<form action="?page=rekap_absensi2" method="post" name="postform">
		<table width="99%" border="0" class="datatable">
		<tr>
			<select name="kelas">
			<option value="0" selected="selected">Pilih Kelas</option>
			<?php 
			
			$query=mysqli_query($link, "select * from kelas order by nama_kelas asc");
			
			while($row=mysqli_fetch_array($query))
			{
				?><option value="<?php  echo $row['id_kelas']; ?>"><?php  echo $row['nama_kelas']; ?></option><?php 
			}
			?>
			</select>
			<select name="semester">
			<option value="0" selected="selected">Pilih Semester</option>
			<option value="1" >1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="6" >6</option>
			<option value="7" >7</option>
			<option value="8" >8</option>		
			</select>			
		  </td>
		</tr>
		<tr><td colspan="5" align="left"><input type="submit" value="Tampilkan"></td></tr>
		</table>	
		</form>	

<table class="datatable">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Hadir (H)</th>
			<th>Sakit (S)</th>
			<th>Ijin (I)</th>
			<th>Alfa (A)</th>
		</tr>
		<?php
		//untuk option
		$kelas = $_POST['kelas'];
		$semester = $_POST['semester'];

		
		$query=mysqli_query($link, "select distinct id_siswa from absensi2 where id_kelas='$kelas' and semester='$semester' order by semester desc");
	
		$c=0;
		while($row=mysqli_fetch_array($query)){
			$siswa=mysqli_fetch_array(mysqli_query($link, "select * from siswa where id_siswa='$row[id_siswa]'"));

			?>
			<tr>
				<td><?php echo $c=$c+1;?></td>
				<td><?php echo $siswa['nama_siswa'];?></td>

				<td align="center">
				<?php
					$hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Hadir' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>

				<td align="center">
				<?php
					$hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Sakit' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>

				<td align="center">
				<?php
					$hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Izin' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>

				<td align="center">
				<?php
					$hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Alpa' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>


				
				
			
				
				
				
			</tr>
			<?php
			
		}
		?>
		</table>