<?php
include 'config.php';


$id = $_GET['id'];
$sqlDelete = "DELETE FROM data_galon WHERE id='$id'";
mysqli_query($conn, $sqlDelete);

header("location: data_galon.php");
?>