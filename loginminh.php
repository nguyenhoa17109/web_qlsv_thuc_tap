<!DOCTYPE html>
<html lang="en">
<head>
	<title>CN | Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginStyle/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginStyle/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginStyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginStyle/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginStyle/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginStyle/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginStyle/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vloginStyle/endor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginStyle/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginStyle/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginStyle/css/main.css">
<!--===============================================================================================-->
	<!-- Rev slider css -->
	<link href="loginStyle/vendors/revolution/css/settings.css" rel="stylesheet">
	<link href="loginStyle/vendors/revolution/css/layers.css" rel="stylesheet">
	<link href="loginStyle/vendors/revolution/css/navigation.css" rel="stylesheet">
	
	<!-- Extra plugin css -->
	<link href="loginStyle/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	
	<link href="loginStyle/css/style.css" rel="stylesheet">
	<link href="loginStyle/css/responsive.css" rel="stylesheet">
</head>
<body>
	<header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height: 50px;">
                    <ul class="navbar-nav" style="height: 50px; ">
                        <li class="nav-item"><a class="nav-link" href="index.html" style="height: 50px; line-height: 0px;">Trang chủ</a></li>
                        <li><a href="login.html" line-height: 0px;>
                            <button class="btn btn-secondary submit_btn" type="button" style="border-radius: 0; font-size: 24px; top: 5px;" >Đăng nhập</button>
                            </a></li>
                    </ul>
                </div>
            </nav>
        </header>
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="xulydangnhap.php" method="POST">
				<span class="login100-form-title p-b-37">
					Đăng nhập
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input type="text" name="username" class="input100" value="" placeholder="Tên đăng nhập">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input type="password" name="password" class="input100" value="" placeholder="Mật khẩu">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button type="submit" name="login" value="Đăng nhập" class="login100-form-btn"
					>Đăng nhập</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						<a href="#" class="txt2 hov1">
						Quên mật khẩu?
					</a>
					</span>
				</div>
			</form>
		</div>
	</div>
	
	<!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Được tạo bởi <i class="fa fa-heart-o" aria-hidden="true"></i> với <a href="https://colorlib.com" target="_blank">MH</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h5>
                    </div>
                    <div class="float-sm-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

	
	
<!--===============================================================================================-->
	<script src="loginStyle/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginStyle/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginStyle/vendor/bootstrap/js/popper.js"></script>
	<script src="loginStyle/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginStyle/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginStyle/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginStyle/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginStyle/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginStyle/js/main.js"></script>

</body>
</html>