<?php
if (isset($_POST['btn-upload'])) {

	$img = $_FILES['img']['name'];
	$img_loc = $_FILES['img']['tmp_name'];
	$folder = "image/";

	if (move_uploaded_file($img_loc, $folder.$img)) {
		echo "Upload gambar berhasil <br>";
		echo "<img src = '".$folder.$img."'>";
	} else {
		echo "Upload gambar gagal";
	}
}
?>