<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
       Tên sinh viên:<input type="text" name="name">
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
        if(isset($_POST['btn']))
        {
            $n=$_POST['name'];
            $mk=$_POST['matkhau'];
            $gc=$_POST['ghichu'];
            $ha=$_POST['hinhanh'];
            if(isset($_FILES['hinhanh']))
            {
                $file1=$_FILES['hinhanh'];
                $file2=$file1['name'];
                move_uploaded_file($file1['tmp_name'],$file2);
            }
            $insert ="INSERT INTO sinhvien (ten,matkhau,ghichu,hinhanh) VALUES ($n, $mk,$gc,$ha)";
            mysqli_query($conn,$insert );
            header("location:card.php");
        }
        ?>
</body>
</html>