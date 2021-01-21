

<!DOCTYPE html>
<html>

	<?php include('include/header.php'); ?>
	<!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
<!--
				<div class="contact_from">
                    <form action="xulydangnhap.php" method="POST">
-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5>Bắt đầu làm quen với CN</h5>
                                <h2>Chào mừng bạn đến với<br /> công ty Công Nghệ</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
							<div class="row monthly__plans active">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="pricing__item">
										<h4>Đăng nhập</h4>
										<h3 style="background-color: cadetblue ">Say hello :)</h3>
										<form method="post" action="xulydangnhap.php">
                            				<input type="text" name="username"  class="form-control hl input_user" value="<?php if(isset($_COOKIE["tenDangNhap"]) )echo $_COOKIE["tenDangNhap"] ;?>" placeholder="Tài khoản">
                            				<input type="password" name="password" class="form-control hl input_pass" value="<?php if(isset($_COOKIE["matKhau"]) )echo $_COOKIE["matKhau"];?>" placeholder="Mật khẩu">
											<div class="col-12">
                                    <div class="form-group">
<!--                                        <div class="custom-control custom-checkbox">-->
                                        <!-- class="custom-control-input" id="customControlInline"/ -->
                                        <input type="checkbox"  name="name" value='checked'>
                                            <label class="custom-control-label" for="customControlInline">Nhớ mật khẩu</label>
<!--                                        </div>-->
                                    </div>
 											<input type="submit" name ="login" value="Đăng nhập" class=" site-btn">
                    					</form>
									</div>
								</div>
							</div>

                        </div>
                    </div>
                </div>
<!--
				 </form>
				</div>
-->
            </div>
        </div>
    </section>
	 <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
        </div>
    </section>

	<?php include('include/footer.php'); ?>
</body>
</html>