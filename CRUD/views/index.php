<?php
require_once('koneksi.php');

$query = "SELECT * FROM article ORDER BY publish_date DESC";
$urlcrud = "index.php?page=/";
?>
<div class="row">
	<div class="col-lg-12">
		<a href="<?= $urlcrud.'create' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="success">
				<th width="5%">No</th>
				<th width="20%">Judul</th>
				<th width="20%">Deskripsi</th>
				<th width="33%">Konten</th>
				<th width="12%">Tanggal Publish</th>
				<th width="10%" style="text-align: center;">Aksi</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$query)){
				$i=1;
				while($obj=mysqli_fetch_object($data)){
					?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $obj->title ?></td>
						<td><?= $obj->description ?></td>
						<td><?= $obj->content ?></td>
						<td><?= $obj->publish_date ?></td>
						<td style="text-align: center;">
						<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= $urlcrud.'hapus&id='.$obj->id ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="<?= $urlcrud.'edit&id='.$obj->id ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
						</td>
					</tr>
					<?php
					$i++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
</div>
<?php
mysqli_close($koneksi);
?>