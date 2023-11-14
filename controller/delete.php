<?php 

include '../config/koneksi.php';

//create delete 

$id = $_GET['id'];

if (isset($_GET['id'])) {
    $sql = "DELETE FROM books_data WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Selamat, delete buku berhasil!')</script>";
        header("Location: ../admin.php");
    } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
}


?>