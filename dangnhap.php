<?php include_once 'inc/header.php';?>
<div class="tizi_container">
    <div class="tizi-content">
        <ul class="breadcrumbList">
            <li><a href="./">Trang chủ</a></li>
            <li><span>&gt;</span>Đăng nhập</li>
        </ul><!-- breadcrumbList -->

        <div class="tizi-content__page">                
            <div class="tizi-content__left">
                <img src="images/other_page/icon-cart.png" alt="placeholder+image" class="img-raovat show-pc">
                <p class="tizi-dmdtsp show-sp">DANH MỤC RAO VẶT</p>
                <ul class="tizi-dmrv">
                    <li>DANH MỤC RAO VẶT</li>
                    <li><a href="#">Bất động sản</a></li>
                    <li><a href="#">Xe cộ - Phụ tùng xe</a></li>
                    <li><a href="#">Việc làm - Tuyển sinh</a></li>
                    <li><a href="#">Điện tử - Phụ kiện</a></li>
                    <li><a href="#">Điện máy - Gia dụng</a></li>
                    <li><a href="#">Nội thất - Trang trí</a></li>
                    <li><a href="#">Làm đẹp - Sức khỏe</a></li>
                    <li><a href="#">Thời trang - Trang sức</a></li>
                    <li><a href="#">Vật liệu xây dựng - Công nghiệp</a></li>
                    <li><a href="#">Du lịch - Đi xe</a></li>
                    <li><a href="#">Mẹ & Bé</a></li>
                    <li><a href="#">Thể thao - Thể hình</a></li>
                    <li><a href="#">Văn phòng phẩm - Quà tặng</a></li>
                    <li><a href="#">Thú cưng- Cây cảnh</a></li>
                    <li><a href="#">Khác</a></li>
                </ul>

                <ul class="show-pc">
                    <li><a href="#"><img src="images/other_page/img-quangcao-left.png" alt="placeholder+image"></a></li>
                </ul>
            </div><!-- content__left -->
            
            <div class="tizi-content__main">
                <div class="form-login">
                    <form id="form-login" action="/xu-ly-dang-nhap" method="post">
                        <h2>ĐĂNG NHẬP</h2>
                        <div class="form-group">
                            <input id="ten_dangnhap" class="text_dangnhap" name="email_dangnhap" placeholder="Email" type="email">
                            <input id="matkhau_dangnhap" class="text_dangnhap" name="matkhau_dangnhap" placeholder="Nhập mật khẩu" type="password">
                        </div>
                        <div class="form-group login">
                            <label for="nho_taikhoan">Ghi nhớ tài khoản</label>
                            <input type="checkbox" id="nho_taikhoan" class="nho_taikhoan" checked="checked">
                        </div>
                        <div class="form-group check_btn">
                            <button type="submit" id="btn_dangnhap" class="btn btn_login_form">Đăng nhập</button>
                            <a href="/quen-mat-khau" class="btn btn_login_form" id="btn_quenmatkhau">Quên mật khẩu</a>
                        </div>
                        <div class="form-separator">
                            <span>hoặc</span>
                        </div>
                        <div class="form-group">
                            <a class="btn_login2 btn_dangnhapfb" id="facebook">Đăng nhập bằng <i class="fa fa-facebook-official" aria-hidden="true"></i> </a>
                            <a href="/dang-ky" class="btn_login2" id="btn_dangky">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div><!-- content__main -->
        </div>
        <ul class="show-sp advertise">
            <li><a href="#"><img src="images/other_page/img-quangcao-left.png" alt=""></a></li>
            <li><a href="#"><img src="images/other_page/img-quangcao-right.png" alt=""></a></li>
        </ul>
    </div>
</div>
<div class="tizi-footer__sp show-sp">
    <ul>
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Danh mục</a></li>
        <li><a href="#">Giỏ hàng</a></li>
        <li><a href="#">Tài khoản</a></li>
    </ul>
</div><!-- end block show sp -->    
<?php include_once 'inc/footer.php';?>
<!-- footer show pc-->