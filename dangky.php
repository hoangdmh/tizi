<?php include_once 'inc/header.php';?>
<div class="tizi_container">
    <div class="tizi-content">
        <ul class="breadcrumbList">
            <li><a href="./">Trang chủ</a></li>
            <li><span>&gt;</span>Đăng ký</li>
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
                    <form id="form-login" action="/xu-ly-dang-ky" method="post" class="form-register">
                        <h2>ĐĂNG KÝ</h2>

                        <div class="form-group">
                            <label><span class="icon_bb">*</span>Email: </label>
                            <input id="email_dangky" class="text_dangnhap" name="email_dangky" type="empty" placeholder="VD: google@gmail.com">
                        </div>
                        <div class="form-group">
                            <label><span class="icon_bb">*</span>Mật khẩu: </label>
                            <input id="matkhau_dangky" class="text_dangnhap" name="matkhau_dangky" type="password" placeholder="Mật khẩu nên dùng ít nhất 8 ký tự">
                        </div>
                        <div class="form-group">
                            <label><span class="icon_bb">*</span>Họ Tên: </label>
                            <input id="hoten_dangky" class="text_dangnhap" name="hoten_dangky" type="text" placeholder="Ghi rõ họ tên">
                        </div>
                        <div class="form-group">
                            <label><span class="icon_bb">*</span>Số điện thoại: </label>
                            <input id="sodienthoai_dangky" class="text_dangnhap" name="sodienthoai_dangky" type="text" placeholder="Số điện thoại dùng để liên lạc">
                        </div>
                        <div class="form-group">
                            <label><span class="icon_bb">*</span>Địa chỉ: </label>
                            <input id="diachi_dangky" class="text_dangnhap" name="diachi_dangky" type="text" placeholder="Địa chỉ dùng để liên lạc">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btn_dangnhap" class="btn btn_login_form">Đăng ký</button>
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
</div><!-- content -->
    
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