<!DOCTYPE html>
<html>
  <head>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta content="" name="copyright">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="ja" http-equiv="Content-Language">
    <meta content="text/css" http-equiv="Content-Style-Type">
    <meta content="text/javascript" http-equiv="Content-Script-Type">
    <meta id="viewport" name="viewport" content="" />
    <script>
        if(screen.width <= 768){
            document.getElementById("viewport").setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
        }
    </script>
    <title>Tizi</title>
    <link type="text/css" rel="stylesheet" href="js/jquery.bxslider.css">
    
    <!-- <link type="text/css" rel="stylesheet" href="css/fontawesome.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <style>
        .bxslider1 li a {width: 30%;display: inline;float: left;}
        .bxslider1 li img {max-width: 100%}
        .bx-next {background: red}
    </style>
  </head>
<body class="dang-tin">
<div id="wrapper">
    <div class=" tizi-header">
        <div class="tizi-header__container">            
            <div class="tizi-header__logo"> 
                <h1><a href="./"><img src="images/top/logo.png" alt="logo"></a></h1>               
            </div><!-- logo -->
            
            <div class="tizi-header__search show-pc">
                <form action="#" method="post">
                    <input class="search" type="text" name="name" id="name" value="" placeholder="Tìm kiếm..." />
                    <input class="submit show-pc" type="submit" value="" />
                </form>
                <ul class="navi">
                    <li class="active"><a href="raovat.php">Bất động sản</a></li>
                    <li><a href="vieclam.php">Việc làm, tuyển sinh</a></li>
                    <li><a href="raovat.php">Rao vặt</a></li>
                    <li><a href="raovat.php">Xe cộ</a></li>
                    <li><a href="raovat.php">Mẹ và bé</a></li>
                    <li><a href="raovat.php">Điện tử - phụ kiện</a></li>
                </ul>
            </div><!-- search -->
            
            <div class="tizi-group-login">
                <div class="tizi-post">
                    <a class="show-pc" href="dangtin.php">Đăng tin</a>
                    <!-- <a style="background-color:unset " href="giohang.php"><span class="chat show-sp"></span>
                    <span class="cart">
                        <strong>0</strong>
                    </span>
                    </a> -->
                    
                </div>
                <ul class="show-pc">
                    <li><a href="trogiup.php">Trợ giúp</a></li>
                    <li><a href="dangky.php">Đăng ký</a></li>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                </ul> 
                <!-- <a href="#" class="show-sp"><i class="fas fa-search icon_search"></i></i></a> -->
                <a href="#" class="show-sp icon_search"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32"><path d="M20.669 18.667h-1.059l-0.368-0.365c1.299-1.502 2.091-3.473 2.091-5.63 0-0.002 0-0.003 0-0.005v0c0-4.786-3.88-8.667-8.667-8.667s-8.667 3.88-8.667 8.667c0 4.786 3.88 8.667 8.667 8.667v0c0.002 0 0.004 0 0.006 0 2.155 0 4.126-0.79 5.638-2.097l-0.011 0.009 0.368 0.365v1.056l6.664 6.655 1.988-1.988-6.651-6.667zM12.667 18.667c-3.314 0-6-2.686-6-6s2.686-6 6-6v0c3.314 0 6 2.686 6 6s-2.686 6-6 6v0z"></path></svg></a>         
            </div><!-- login -->
            <div id="nav-tizi">
              <span>&nbsp;</span>
              <span>&nbsp;</span>
              <span>&nbsp;</span>
            </div>
            <div class="menu_sp">
                <ul>
                    <li class="active"><a href="#">Bất động sản</a></li>
                    <li class="plus">
                        <a href="#">Việc làm, tuyển sinh</a>
                        <ul>
                            <li>
                                <a href="#">Việc làm 01</a>
                            </li>
                            <li>
                                <a href="#">Việc làm 02</a>
                            </li>
                            <li>
                                <a href="#">Việc làm 03</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Rao vặt</a></li>
                    <li><a href="#">Xe cộ</a></li>
                    <li><a href="#">Mẹ và bé</a></li>
                    <li><a href="#">Điện tử - phụ kiện</a></li>
                </ul>
            </div>
            <form action="#" method="post" id="search-sp">
                <input class="search-sp" type="text" name="name" id="name" value="" placeholder="Tìm kiếm..." />
            </form>
        </div>
    </div>