<?php
require_once('koneksi.php');
try {
	$sql = "DELETE FROM article WHERE id=".$_GET['id'];
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='index.php?page=index';
	</script>";
?>