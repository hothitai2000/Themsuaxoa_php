<?php
include "connect.php";
$id=$_GET['xoa'];
$_FILES=$_GET['hinhanh'];
$delete="DELETE FROM sinhvien WHERE id=$id";
mysqli_query($conn,$delete);
 header('location: show.php');
?>