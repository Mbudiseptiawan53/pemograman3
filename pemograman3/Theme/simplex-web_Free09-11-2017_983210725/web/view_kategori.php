<?php
include "koneksi.php";
include "headher.php";

?>
<table class="table table-dark">
	<tr>
		<td>No</td>
		<td>Jenis Barang</td>
	</tr>
	<?php
		$no=1;
		$query=mysqli_query($koneksi,"select * from kategori");
		while($list_barang=mysqli_fetch_array($query))
		{
		?>
	<tr>
		<td><?php echo $no++?></td>
		<td><?php echo $list_barang ['jenis_barang'];?></td>
	</tr>	
	<?php } ?>
</table>
</html>
<?php
include "footer.php";
?>