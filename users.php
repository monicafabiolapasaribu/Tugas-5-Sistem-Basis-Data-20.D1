<! DOCTYPE html>
<html>
<head>
	<title>Menampilkan data dari database PHP </title>
	<style>
		table,tr,td {
			border:  1px solid green;
		}
		thead {
			background-color:  #6495ED;
		}
	</style>
</head>
<body>
	<h1 style>Clinik_Monic</h1>
	<table>
		<thead>
			<tr>
				<td>No</td>
				<td>Id</td>
				<td>username</td>
				<td>password</td>
				<td>nama lengkap</td>
			</tr>
		</thead>
		<?php
		include "koneksi.php";
		$no = 1;
		$query = mysqli_query($conn, 'SELECT * FROM users');
		while ($data = mysqli_fetch_array($query)) {
?>
<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $data['id'] ?></td>
	<td><?php echo $data['username'] ?></td>
	<td><?php echo $data['password'] ?></td>
	<td><?php echo $data['nama_lengkap'] ?></td>
</tr>
<?php } ?>
</table>
</body>