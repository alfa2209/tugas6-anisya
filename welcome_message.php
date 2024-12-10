<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<title>Data Provinsi Bengkulu</title>
</head>
<body>
	<h1>Data Provinsi Bengkulu</h1>
	<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kemendagri</th>
				<th>Kabupaten/Kota</th>
				<th>Ibukota</th>
				<th>Luas Wilayah (km2)</th>
				<th>Penduduk (Jiwa)</th>
				<th>Jumlah Kecamatan</th>
				<th>Jumlah Kelurahan</th>
				<th>Jumlah Desa</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($provinsi as $p): ?>
			<tr>
				<td><?= $p['No']; ?></td>
				<td><?= $p['Kode Kemendagri']; ?></td>
				<td><?= $p['Kabupaten/Kota']; ?></td>
				<td><?= $p['Ibukota']; ?></td>
				<td><?= $p['Luas Wilayah (km2)']; ?></td>
				<td><?= $p['Penduduk (Jiwa)']; ?></td>
				<td><?= $p['Jumlah Kecamatan']; ?></td>
				<td><?= $p['Jumlah Kelurahan']; ?></td>
				<td><?= $p['Jumlah Desa']; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
