<?php 
session_start();
	if (!isset($_SESSION['user'])) {
		$user = array();
	}else{
		$user = $_SESSION['user'];
	}
	$nim 		= isset($_POST['nim']) ? $_POST['nim'] : "";
	$nama 		= isset($_POST['nama']) ? $_POST['nama'] : "";
	$email 		= isset($_POST['email']) ? $_POST['email'] : "";
	$jk 		= isset($_POST['jk']) ? $_POST['jk'] : "";
	$jurusan 	= isset($_POST['jurusan']) ? $_POST['jurusan'] : "";
	$fakultas	= isset($_POST['fakultas']) ? $_POST['fakultas'] : "";
	$hobi		= isset($_POST['hobi']) ? $_POST['hobi'] : "";
	
	

$data = $_FILES['dokumen']['name'];
if (isset($_POST['submit'])) {
	move_uploaded_file($_FILES['dokumen']['tmp_name'], "upload/".$_FILES['dokumen']['name']);
	echo "<h2>Berikut data data mahasiswanya<h2>";
	
}

	// $file = $_FILES['dokumen'];
	// $nama_file = $file['name'];
	// $nama_tmp = $file['tmp_name'];
	// $upload_dir = "upload/";
	// move_uploaded_file ($nama_tmp,$upload_dir.$nama_file);
	$userbaru = array (
					'nim' => $nim,
					'nama' => $nama,
					'email' => $email,
					'jk' => $jk,
					'jurusan' => $jurusan,
					'fakultas' => $fakultas,
					'hobi' => $hobi
					);
	array_push($user, $userbaru);
	$_SESSION['user'] = $user;
	

 ?>
 <img src="upload/<?php echo $nama_file; ?>">
<table>
	<tr>
		<th>NIM</th>
		<th></th>
		<th>Nama</th>
		<th></th>
		<th>Email</th>
		<th></th>
		<th>Jenis Kelamin</th>
		<th></th>
		<th>Jurusan</th>
		<th></th>
		<th>Fakultas</th>
		<th>Hobi</th>
	</tr>
	<?php
	$user = $_SESSION['user'];
	$num = 0;
	while ($num < count($user)) {
	?>
	<tr>
		<td><?php echo $user[$num]['nim']; ?></td>
		<td></td>
		<td><?php echo $user[$num]['nama']; ?></td>
		<td></td>
		<td><?php echo $user[$num]['email']; ?></td>
		<td></td>
		<td><?php echo $user[$num]['jk']; ?></td>
		<td></td>
		<td><?php echo $user[$num]['jurusan']; ?></td>
		<td></td>
		<td><?php echo $user[$num]['fakultas']; ?></td>
		<td><?php 
			 	
			foreach ($hobi as $hb) {
			echo $hb; 
			}
			?>
		</td>
		<td> <?php echo "<img src = 'upload/$data' >"; ?></td>
	
		
	</tr>
	<?php
	$num++;
	}
	?>
</table>
<br>
<a href="registrasi.php">Tambah Data</a>
