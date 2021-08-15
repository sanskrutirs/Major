<?php
include "config.php";
error_reporting(0);

$Id = $_GET['Id'];
$major = "DELETE FROM major WHERE ID = '$Id'";

$result = mysqli_query($major, "SELECT * FROM major ORDER BY Id DESC");

if ($result) {
    echo "Record deleated from database";
}
else{
    echo "Failed";
}
?>