<?php 

$conn = mysqli_connect("localhost","root","","mebook");
$result = mysqli_query($conn, "SELECT * FROM books_data");



 

 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 

?>