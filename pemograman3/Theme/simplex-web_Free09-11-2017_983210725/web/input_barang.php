<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
</body>

<?php
include("koneksi.php");


if (isset($_POST['save'])){
	$id_kategori=$_POST['id_kategori'];
    $nama_barang=$_POST['nama_barang'];
    $alamat=$_POST['alamat'];
    $no_tlpn=$_POST['no_tlpn'];
    $query=mysqli_query($koneksi,"insert into barang(nama_barang, alamat, no_tlpn) 
    value ('$nama_barang','$alamat','$no_tlpn')");
if($query) {
    header ("location:view_barang.php");
    echo mysqli_eror ();
}
}
include "headher.php";
?>
<form method="POST">
<table class="table table-bordered" border="0">
	<tr>
	    <td>id kategori</td>
		<td><input type="number" name="id_kategori" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
    <td>No Telepon</td>
		<td><input type="text" name="no_tlpn" class="form-control"></td>
	</tr>
	
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

</html>
<?php
include "footer.php";
?>