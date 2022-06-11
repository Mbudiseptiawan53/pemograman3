<?php
include "koneksi.php";
include "headher.php";
?>
	
	<a href ="input_barang.php" class="btn btn-danger">Tambah Barang</a>
	<table class="table table-dark">
	    <tr>
	        <td>No</td>
			<td>id_kategori</td>
	        <td>Nama Barang</td>
	        <td>Alamat</td>
	        <td>NO. Telpon</td>
	        <td colspan="4">Action</td>
	    </tr>
	    <?php
	        $no=1;
	        $query=mysqli_query($koneksi,"select * from barang");
	        while($list_barang=mysqli_fetch_array($query))
	        {
	        ?>
	    <tr>
	        <td><?php echo $no++?></td>
			<td><?php echo $list_barang ['id_kategori'];?></td>
	        <td><?php echo $list_barang ['nama_barang'];?></td>
	        <td><?php echo $list_barang ['alamat'];?>
	        <td><?php echo $list_barang ['no_tlpn'];?>
	        <td><a href="edit_barang.php?id_barang=<?php echo $list_barang['id_barang'];?>">Edit</td>
	        <td><a href="hapus_barang.php?id_barang=<?php echo $list_barang['id_barang'];?>">Hapus</td>
	    </tr>   
	    <?php } ?>
	
	</table>
	</html>

</html>
<?php
include "footer.php";
?>
