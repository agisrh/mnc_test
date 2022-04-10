<?php
require_once('koneksi.php');
if($_POST){

	$sql = "UPDATE article SET title='".$_POST['title']."', description='".$_POST['description']."', content='".$_POST['content']."' WHERE id=".$_POST['id'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "<script>
	alert('Data berhasil di update');
	window.location.href='index.php?page=index';
	</script>";
	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}else{
	$query = $koneksi->query("SELECT * FROM article WHERE id=".$_GET['id']);

	if($query->num_rows > 0){
		$data = mysqli_fetch_object($query);
	}else{
		echo "data tidak tersedia";
		die();
	}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<input type="hidden" name="id" value="<?= $data->id ?>">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" value="<?= $data->title ?>" class="form-control" name="title">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" value="<?= $data->description ?>" class="form-control" name="description">
			</div>
			<div class="form-group">
				<label>Konten</label>
				<textarea rows="5" class="form-control" name="content"><?= $data->content ?></textarea>
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="Update" value="Update">
		</form>
	</div>
</div>
<?php
}
mysqli_close($koneksi);
?>