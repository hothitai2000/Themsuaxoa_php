<?php
include 'connect.php';
$sua = $_GET['edit'];
$edit = "SELECT * FROM sinhvien WHERE id=$sua";
$a = mysqli_query($conn, $edit);
$b = mysqli_fetch_assoc($a);
?>

<form enctype="multipart/form-data" action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $sua ?>">
    <br>
    Tên sinh viên:<input type="text" name="name" value="<?php echo $b['ten'] ?>">
    <br>
    <br>
    Mat khau: <input type="text" name="matkhau" value="<?php echo $b['matkhau'] ?>">
        <br>
        <br>
       Ghi chu: <input type= "text" name="ghichu" value="<?php echo $b['ghichu'] ?>">
        <br>
        <br>
       Avatar:<img src='<?php echo $b['hinhanh'] ?>' alt="" width=" 200px " height=" 170px">
       <input type= "file" name="hinhanh" >
    <br>
    <button type="submit " name="btn" value="Sua">Update</button>
</form>