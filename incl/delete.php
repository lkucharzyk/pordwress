<?php

require('../config/conn.php');

$id = $_GET['id'];
$del = mysqli_query($conn,"DELETE FROM sites WHERE id = '$id'");

if($del)
{
    mysqli_close($conn);
    header("location:../index.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>