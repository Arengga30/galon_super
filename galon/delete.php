<?php
include 'config.php';


$nim = $_GET['nim'];
$sqlDelete = "DELETE FROM data_galon WHERE nim='$nim'";
mysqli_query($conn, $sqlDelete);

header("location: data_galon.php");
?>