<?php
$conn = mysqli_connect("localhost:3307","root","","wad_project3");
$result = mysqli_query($conn,"SELECT * FROM student");
//ambil data (fetch) data dari object $result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() // mengembalikan array associative
//mysqli_fetch_array() // mengembalikan array keduanya
//mysql_fetch_object() // mengembalikand objek
var_dump($result);
echo "<br/>";
var_dump(mysqli_fetch_object($result));
?>
?>