<?php
include 'connect.php';
if (isset($_POST['btn'])) {
    $n = $_POST['name'];
    $mk = $_POST['matkhau'];
    $gc = $_POST['ghichu'];
    $fileha = $_FILES['hinhanh'];
    $ten_file = $fileha['name'];
    $id = $_POST['id'];
    if (!empty($ten_file)) {
        $sql = "UPDATE sinhvien SET ten='$n',matkhau='$mk',ghichu='$gc' ,hinhanh='$ten_file' WHERE id=$id";
        move_uploaded_file($fileha['tmp_name'], $ten_file);
        if (mysqli_query($conn, $sql)) {
            header('location:show.php');
        }
    }
    else{
        $sql = "UPDATE sinhvien SET ten='$n',matkhau='$mk',ghichu='$gc'  WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            header('location:show.php');
        }
    }
}
?>