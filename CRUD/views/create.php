<?php
require_once('koneksi.php');
if($_POST){
	try {
		$sql = "INSERT INTO article (title, description, content, publish_date) VALUES ('".$_POST['title']."','".$_POST['description']."','".$_POST['content']."','".date('Y-m-d')."')";
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}

	} catch (Exception $e) {
		echo $e;
		die();
	}
	  echo "<script>
	alert('Data berhasil di simpan');
	window.location.href='index.php?page=index';
	</script>";
}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" value="" class="form-control" name="title">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" value="" class="form-control" name="description">
			</div>
			<div class="form-group">
				<label>Konten</label>
				<textarea rows="5" class="form-control" name="content"></textarea>
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="create" value="Create">
		</form>
	</div>
</div>