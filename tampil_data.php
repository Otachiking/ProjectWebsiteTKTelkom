<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>

		<?php 
		include 'koneksiakun.php';

		$no = 1;
		$data = mysqli_query($koneksi,"select * from register");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['nama_ortu']; ?></td>
				<td><?php echo $d['nama_anak']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
				<td><?php echo $d['tipe_user']; ?></td>
				<td>
					<a href="edit.php?id= <?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id= <?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		}
		?>
	</table>
</body>
</html>