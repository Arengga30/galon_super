<?php
include 'config.php';


$id = $_GET['id'];
$sqlDelete = "DELETE FROM user WHERE id='$id'";
mysqli_query($conn, $sqlDelete);

header("location: settings.php");
?>