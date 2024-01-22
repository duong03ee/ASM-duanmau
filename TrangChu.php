<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>TRANGCHU SHIRT NEW</title>
  <style>
    img{
      text-align: center;
    }
    .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.card-hover .card-body {
    background-color: #f8f9fa;
}

.card-hover .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
.nav-item {
            position: relative;
        }

        .options {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #3498db;
            padding: 10px;
            border-radius: 0 0 5px 5px;
            z-index: 1;
        }

        .nav-item:hover .options {
            display: block;
        }

        .option {
            margin-bottom: 5px;
        }

        .option a {
            color: #fff;
            text-decoration: none;
            font-weight: normal;
        }

        .option a:hover {

            text-decoration: underline;
        }
        .login-btn {
          color: darkgray;
            display: inline-flex;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .login-btn i {
            margin-right: 5px;
        }
        .login-btn :hover{
            color: #f8f9fa;

        }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SHIRT NEW</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="GioiThieu.php">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="LienHe.php">Liên hệ</a>
        </li>

            <li class="nav-item">
                <a class="nav-link" href="TrangChu.php">Danh mục </a>
                <div class="options">
                    <div class="option"><a href="#">Sản Phẩm Hot</a></div>
                    <div class="option"><a href="#">Sản Phẩm Mới</a></div>
                </div>
            </li>
        </li>
        
        <li class="nav-item">
           <a href="DangNhap.php" class="login-btn fas fa-user " ></a>
        </li>
      </ul>
    </div>
  </nav>
  <img src="banrer/1.png" alt="" width="100%" height="700px" algin="center">
    <!-- Product Section -->
    <div class="container mt-4">
        <h2>Sản phẩm mới</h2>
        <div class="row">
            <?php
               include "connect.php";
               $sql = "SELECT `id`, `name`, `price`, `image` FROM `sp` WHERE 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // print_r($rows);
            foreach($rows as $product){

                    echo "<div class = 'col-md-3 mb-3'>
                    <div class='card-hover'>
                    <img src='img/{$product['image']}' class='card-img-top' alt=''>
                    <div class = 'card-body'>
                    <h5 class='card-title'>{$product['name']}</h5>
                    <p class='card-text'>Giá: {$product['price']}$</p>
                    <a href='#' class='btn btn-primary'>Mua ngay</a>
                    </div>
                    </div>
                   </div>";
                }
            ?>
        </div>
    </div>
    <div class="container mt-4">
        <h2>Sản phẩm hot</h2>
        <div class="row">
            <?php
               include "connect.php";
               $sql = "SELECT `id`, `name`, `price`, `image` FROM `sphot` WHERE 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // print_r($rows);
            foreach($rows as $product){

                echo "<div class = 'col-md-3 mb-3'>
                <div class='card-hover'>
                <img src='img/{$product['image']}' class='card-img-top' alt=''>
                <div class = 'card-body'>
                <h5 class='card-title'>{$product['name']}</h5>
                <p class='card-text'>Giá: {$product['price']}$</p>
                <a href='#' class='btn btn-primary'>Mua ngay</a>
                </div>
                </div>
               </div>";
                }
            ?>
        </div>
    </div>
    <footer class="mt-4 text-center bg-dark text-white p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Thông tin liên hệ</h5>
                <p>Địa chỉ: 123 Đường 999, Quận Nam Từ Liêm, Thành phố Hà Nội</p>
                <p>Email: mavand42@example.com</p>
                <p>Điện thoại: 0123 456 789</p>
            </div>
            <div class="col-md-4">
                <h5>Liên kết nhanh</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Danh mục sản phẩm</a></li>
                    <li><a href="GioiThieu.php">Giới thiệu</a></li>
                    <li><a href="LienHe.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Theo dõi chúng tôi</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <p class="mt-3">&copy; <?php echo date("Y"); ?> shirt new. All rights reserved.</p>
</footer>


 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>