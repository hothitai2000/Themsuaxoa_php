<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sửa xóa</title>
</head>
<body>
    <form action="" method="post" enctype="Multipart/form-data">
        Tên sinh viên: <input type="text" name="name">
        <br>
        <br>

        Mật khẩu: <input type="text" name="matkhau">
        <br>
        <br>

        Ghi chú: <input type="text" name="ghichu">
        <br>
        <br>

        Hình Ảnh : <input type="file" name="hinhanh">
        <br>
        <br>
        <button type="submit" name="btn">Gửi đi</button>
    </form>
    <?php
    include 'connect.php';
    if (isset($_POST['btn'])) {
        $n = $_POST['name'];
        $mk = $_POST['matkhau'];
        $gc = $_POST['ghichu'];
        if (isset($_FILES['hinhanh'])){
            $fileHA = $_FILES['hinhanh'];
            $file = $fileHA['name'];
            $path = "/XAMPP/htdocs/Themsuaxoa_php/User/";
            move_uploaded_file($fileHA['tmp_name'], $path.$file);
        }
        $insert = "INSERT INTO sinhvien(ten,matkhau,ghichu,hinhanh) VALUES ('$n','$mk','$gc','$file')";
        mysqLi_query($conn,$insert);
        header('location: http://localhost/Themsuaxoa_php/User/card.php');
        header('location: show.php');

    }
    ?>
</body>
</html>