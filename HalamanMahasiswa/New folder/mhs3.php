<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "sbd_10113076";
 
$conn = mysqli_connect($host, $user, $pass) or die (mysqli_error());
mysqli_select_db($conn, $db_name) or die (mysqli_error());

$id = $_SESSION['id_siswa'];
$kelas = $_SESSION['id_kelas'];
?>

<form action="mhs.php" method="post" name="postform">
		<table width="99%" border="0" class="datatable">
		<tr>
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
		$semester = isset($_POST['semester']);
		
		$query=mysqli_query($conn, "select distinct id_siswa from absensi2 where id_kelas='$kelas' and semester='$semester' order by semester desc");
	
		$c=0;
		while($row=mysqli_fetch_array($query)){
			$siswa=mysqli_fetch_array(mysqli_query($conn, "select * from siswa where id_siswa='$row[id_siswa]'"));

			?>
			<tr>
				<td><?php echo $c=$c+1;?></td>
				<td><?php echo $siswa['nama_siswa'];?></td>

				<td align="center">
				<?php
					$hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Hadir' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>

				<td align="center">
				<?php
					$hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Sakit' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>

				<td align="center">
				<?php
					$hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Izin' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>

				<td align="center">
				<?php
					$hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Alpa' order by id_siswa desc");
					
					$jumlah=mysqli_num_rows($hadir);
					echo $jumlah;
				?>
				</td>	
				
			</tr>
			<?php
			
		}
		?>
		</table>