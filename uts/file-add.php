<html>
<head>
	<title>Tambah Anggota</title>
</head>
 
<body>
	<a href="index.php">Kembali ke Beranda</a>
	<br/><br/>
 
	<form action="file-add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$nim = $_POST['nim'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(nama,jurusan,nim) VALUES('$nama','$jurusan','$nim')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>