<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<center>
<h3>APLIKASI PENDAFTARAN MAHASISWA</h3>
	<form action="prosesregis.php" method="post" enctype="multipart/form-data">		
		<table>
			<tr>
				<td>Nim  </td>
				<td>:</td>
				<td><input type="text" name="nim"  pattern="[0-9]{10}" title="Nim harus angka dan 10 karakter"  required ></td>					
			</tr>	
			<tr>
				<td>Nama  </td>
				<td>:</td>
				<td><input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title=" inputan harus huruf dan maks 25 karakter" required></td>					
			</tr>	
			<tr>
				<td>Email  </td>
				<td>:</td>
				<td><input type="email" name="email" placeholder="email@gmail.com" required></td>					
			</tr>	
			<tr>
				<td>Jenis Kelamin</td> 
				<td>:</td>
				<td><input type="radio" name="jk" value="Perempuan">Perempuan 
    			<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="jurusan">
					<option value="MI">Manajemen Informatika</option>
					<option value="DPR">Digital Public Relation</option>
					<option value="DKV">DKV</option>
					<option value="Ikom">Ilmu Komunikasi</option>
					<option value="MBTI">MBTI</option>
					<option value="Akuntansi">Akuntansi</option>
					<option value="TK">Teknik Komputer</option>
					</select></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<td>Hobi</td> 
				<td>:</td>
				<td><input type="checkbox" name="hobi[]" value="Bernyanyi">Bernyanyi<br>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi[]" value="Berenang">Berenang<br></td>
			</tr>
			<tr>
				<td colspan="3"><br><center><input type="file" name="dokumen" ></center></td>
			</tr>
			<tr>
				<td></td>
				<td><br><input type="submit" name="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>


</body>
</html>
