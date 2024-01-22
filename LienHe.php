<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Document</title>
    <style>
      .a{
        height: 1000px;
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
    <!-- header  -->
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
                    <div class="option"><a href="#">Option 1</a></div>
                    <div class="option"><a href="#">Option 1</a></div>
                    <div class="option"><a href="#">Option 1</a></div>
                </div>
            </li>
        </li>
        
        <li class="nav-item">
           <a href="DangNhap.php" class="login-btn fas fa-user " ></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-4">
    <h2>Liên hệ chúng tôi</h2>
    <p>Nếu bạn có bất kỳ câu hỏi, đề xuất hoặc cần hỗ trợ, hãy liên hệ với <br>
         chúng tôi qua biểu mẫu dưới đây:</p>

    <!-- Contact Form -->
    <div class="row ">
        <div class="col-md-6 a">
            <form action="process_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Họ và tên:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Nội dung:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Thông tin liên hệ</h4>
            <p>Địa chỉ: 123 Đường ABC, Quận XYZ, Thành phố HCM</p>
            <p>Email: info@example.com</p>
            <p>Điện thoại: 0123 456 789</p>
        </div>
    </div>
</div>
<footer class="mt-4 text-center bg-dark text-white p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Thông tin liên hệ</h5>
                <p>Địa chỉ: 123 Đường 999, Quận 10, Thành phố HCM</p>
                <p>Email: mavand42@example.com</p>
                <p>Điện thoại: 0123 456 789</p>
            </div>
            <div class="col-md-4">
                <h5>Liên kết nhanh</h5>
                <ul class="list-unstyled">
                    <li><a href="TRANGCHU.php">Trang chủ</a></li>
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

    
</body>
</html>