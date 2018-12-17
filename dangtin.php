<?php include_once 'inc/header.php';?>
<div class="tizi_container">
    <div class="tizi-content">
        <div class="tizi-content__page">
            <div class="show-pc">
                <ul class="progressbar step">
                    <li class="active">
                        <a>Tạo đăng tin</a>
                    </li>
                    <li>
                        <a>Hoàn tất tin đăng</a>
                    </li>
                </ul><!-- breadcrumbList -->
            </div>
            
            <div class="tizi-content__left">
                <p class="tizi-dmdtsp show-sp">DANH MỤC ĐĂNG TIN</p>
                <ul class="tizi-dmrv">
                    <li>DANH MỤC ĐĂNG TIN</li>
                    <li><a href="raovat.php">Bất động sản</a></li>
                    <li><a href="raovat.php">Xe cộ - Phụ tùng xe</a></li>
                    <li><a href="raovat.php">Việc làm - Tuyển sinh</a></li>
                    <li><a href="raovat.php">Điện tử - Phụ kiện</a></li>
                    <li><a href="raovat.php">Điện máy - Gia dụng</a></li>
                    <li><a href="raovat.php">Nội thất - Trang trí</a></li>
                    <li><a href="raovat.php">Làm đẹp - Sức khỏe</a></li>
                    <li><a href="raovat.php">Thời trang - Trang sức</a></li>
                    <li><a href="raovat.php">Vật liệu xây dựng - CN</a></li>
                    <li><a href="raovat.php">Du lịch - Đi xe</a></li>
                    <li><a href="raovat.php">Dịch vụ - Đối tác</a></li>
                    <li><a href="raovat.php">Mẹ & Bé</a></li>
                    <li><a href="raovat.php">Thể thao - Thể hình</a></li>
                    <li><a href="raovat.php">Văn phòng phẩm - Quà tặng</a></li>
                    <li><a href="raovat.php">Thú cưng- Cây cảnh</a></li>
                    <li><a href="raovat.php">Khác</a></li>
                </ul>              
                <div class="tizi-remind">
                    <div><a href="#">Nhắc nhở</a></div>
                    <p>
                        >>Đẩy tin miễn phí <a href="daytin.php">TẠI ĐÂY</a><br>
                        >>Nên mô tả chi tiết sản phẩm:
                        thương hiệu, tình trạng, phụ kiện
                        đi kèm...<br>
                        >>Đăng tin bằng tiếng Việt có dấu.<br>
                        >>Ảnh phải thuộc dạng: JPG, JPEG,
                        GIF, PNG (các định dạng khác tin sẽ
                        bị lỗi ảnh)
                    </p>
                </div>               
            </div><!-- content__left -->
            
            <div class="tizi-content__main">
                <div class="tizi-content__main--left">                    
                    <div class="show-sp">
                        <ul class="progressbar step">
                            <li class="active">
                                <a>Tạo đăng tin</a>
                            </li>

                            <li>
                                <a>Hoàn tất tin đăng</a>
                            </li>
                        </ul>
                    </div>
                    <p class="xhtk xhtk-ber">Bất động sản > <span>Bán đất</span></p>
                    <form class="form-dangtin" action="#" method="post">
                        <div class="block">
                            <label for="select-choice">Phương thúc tin <span>(*)</span></label>
                            <select name="select-choice" class="select-choice">
                                <option value="Choice 1">Miển phí</option>
                                <option value="Choice 2">Vip</option>
                                <option value="Choice 3">Siêu Vip</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="select-choice">Tỉnh/Thành <span>(*)</span></label>
                            <select name="select-choice" class="select-choice">
                                <option value="Choice 1">Cần bán</option>
                                <option value="Choice 2">Cho thuê</option>
                                <option value="Choice 3">Cần mua</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="select-choice">Quận/Huyện <span>(*)</span></label>
                            <select name="select-choice" class="select-choice">
                                <option value="Choice 1">Cần bán</option>
                                <option value="Choice 2">Cho thuê</option>
                                <option value="Choice 3">Cần mua</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="select-choice">Phường/Xã</label>
                            <select name="select-choice" class="select-choice">
                                <option value="Choice 1">Cần bán</option>
                                <option value="Choice 2">Cho thuê</option>
                                <option value="Choice 3">Cần mua</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="select-choice">Đỉa chỉ</label>
                            <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Nhập địa chỉ" />
                        </div>
                        <div class="block">
                            <label for="select-choice">Thuộc dự án <span>(*)</span></label>
                            <select name="select-choice" class="select-choice">
                                <option value="Choice 1">Cần bán</option>
                                <option value="Choice 2">Cho thuê</option>
                                <option value="Choice 3">Cần mua</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="select-choice">Loại bất động sản <span>(*)</span></label>
                            <select name="select-choice" class="select-choice">
                                <option value="Choice 1">Cần bán</option>
                                <option value="Choice 2">Cho thuê</option>
                                <option value="Choice 3">Cần mua</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="select-choice">Tiêu đề <span>(*)</span></label>
                            <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Nhập tiêu đề đăng tin" />
                        </div>
                        <div class="block">
                            <label for="select-choice">Diện tích <span>(*)</span></label>
                            <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Nhập diện tích" />
                        </div>
                        <div class="block">
                            <label for="select-choice">Hướng <span>(*)</span></label>
                            <select name="select-choice" class="select-choice">
                                <option value="Choice 1">Chọn hướng</option>
                                <option value="Choice 2">Đông</option>
                                <option value="Choice 3">Tây</option>
                            </select>
                        </div>
                        <div class="block">
                            <label for="select-choice">Giá <span>(*)</span></label>
                            <div class="block-child">
                                <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Nhập giá" />
                                <div>
                                    <i>+ Giảm giá <span>(%)</span></i>
                                    <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Không bắt buộc nhập" />
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <label for="textarea">Nội dung<span>(*)</span></label>
                            <textarea cols="40" rows="8" name="textarea" id="textarea" placeholder="Điền nội dung tin chi tiết bạn muốn rao bằng Tiếng việt có dấu..."></textarea>
                        </div>
                        <div class="block">
                            <label for="textarea"><span>Hình ảnh</span></label>
                            <div class="block-upload">
                                <p>ĐĂNG ẢNH THẬT ĐỂ ĐẠT HIỆU QUẢ TỐT NHẤT</p>
                                <img src="images/dang_tin/img-upload.png" alt="placeholder+image">
                                <input type="file" name="" value="">
                                <ul>
                                    <li>
                                        <img src="http://dummyimage.com/100x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                                        <span>X</span>
                                    </li>
                                    <li>
                                        <img src="http://dummyimage.com/100x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                                        <span>X</span>
                                    </li>
                                    <li><img src="http://dummyimage.com/100x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"><span>X</span></li>
                                    <li><img src="http://dummyimage.com/100x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"><span>X</span></li>
                                    <li><img src="http://dummyimage.com/100x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"><span>X</span></li>
                                </ul>
                                <p>Click vào khung để đăng ảnh</p>
                            </div>
                        </div>
                        <p class="xhtk xhtk-ber">THÔNG TIN LIÊN HỆ</p>
                        <div class="block">
                            <label for="select-choice">Họ và tên <span>(*)</span></label>
                            <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="block">
                            <label for="select-choice">Điện thoại <span>(*)</span></label>
                            <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Nhập số điện thoại" />
                        </div>
                        <div class="block">
                            <label for="select-choice">Đỉa chỉ <span>(*)</span></label>
                            <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Nhập địa chỉ" />
                        </div>
                        <div>
                            <input class="btn" type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
                <div class="tizi-content__right">
                    <div class="tizi-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15338.264557266499!2d108.2199704!3d16.03608525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1536203534320"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p class="tizi-tdm">TIN ĐĂNG MẪU</p>
                    <ul class="tizi-list-raovat">
                        <li>
                            <a href="#">
                                <i>Tiêu đề</i>: <span>Bán đất mặt tiền dự án Thủ Đức House, đường Trần Não, Quận 2</span>
                                <p>
                                    Cần bán đất dự án Thủ Đức House, Quận 2, mặt tiền đường 30m, dự án nằm ngay góc ngã 4 Trần Não và Lương Định Của, khu đô thị mới Thủ Thiêm.<br>
                                    - Lô L - M: diện tích 7,5x20m đường rộng 30m giá 83tr/m2.<br>
                                    - Lô H: diện tích 7,5x20m đối diện công viên giá 75tr/m2.<br>
                                    - Lô M: diện tích7,5x20m đường 12m giá 75tr/m2.
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i>Tiêu đề</i>: <span>Bán đất mặt tiền dự án Thủ Đức House, đường Trần Não, Quận 2</span>
                                <p>
                                    Cần bán đất dự án Thủ Đức House, Quận 2, mặt tiền đường 30m, dự án nằm ngay góc ngã 4 Trần Não và Lương Định Của, khu đô thị mới Thủ Thiêm.<br>
                                    - Lô L - M: diện tích 7,5x20m đường rộng 30m giá 83tr/m2.<br>
                                    - Lô H: diện tích 7,5x20m đối diện công viên giá 75tr/m2.<br>
                                    - Lô M: diện tích7,5x20m đường 12m giá 75tr/m2.
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- content__main -->
        </div>
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