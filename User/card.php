<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Show Dạng card</title>
</head>
        <body>
          <div class="container">
          <?php
            include("../Admind/connect.php");
            $m = "SELECT * FROM sinhvien ORDER BY 'ten',matkhau,ghichu,hinhanh";
            $h = mysqli_query($conn, $m);
            while ($e = mysqli_fetch_assoc($h)) {
                ?>
               <div class="card" style="width:400px">
                <img class="card-img-top" src="<?php echo $e['hinhanh'] ?>" alt="Card image">
                <div class="card-body">
                <h4 class="card-title"><?php echo $e['ten'] ?></h4>
                <p class="card-text"><?php echo $e['ghichu'] ?> </p>
                <a href="#" class="btn btn-primary">XEM CHI TIẾT</a>
                </div>
               </div> 
                <?php
            }
            ?>

          </div>
        <!-- Latest compiled and minified CSS -->
        <!-- jQuery library -->
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>

       