<?php

	include './config/koneksi.php';
	$conn = mysqli_connect("localhost","root","","mebook");
	$title = $_POST['title'];
		$author = $_POST['author'];
	$rating = $_POST['rating'];
		$pages = $_POST['pages'];
		$genre = $_POST['genre'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$status = $_POST['status'];
		    $image = upload();
	

	
		$sql = "INSERT INTO books_data (title, author, rating,pages,genre,category,description,image,status)
						VALUES ('$title', '$author', '$rating', '$pages', '$genre', '$category', '$description', '$image', '$status')";
						$result = mysqli_query($conn, $sql);
			if ($result) {
					echo "<script>alert('Selamat, input buku berhasil!')</script>";
					header("Location: ../admin.php");
				
				} else {
					echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
				}
		

	header("location:../admin.php");

function upload()
{
    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // Check if no file is selected
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!')</script>";
        return false;
    }

    // Valid image extensions
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);

    // Check if the uploaded file is an image
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('File yang Anda upload bukan gambar!')</script>";
        return false;
    }

    // Check file size (1 MB)
    if ($ukuranFile > 1000000) {
        echo "<script>alert('Ukuran gambar terlalu besar!')</script>";
        return false;
    }

    // Generate a unique filename to avoid overwriting existing files
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // Move the uploaded file to the destination directory
    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}

?>


