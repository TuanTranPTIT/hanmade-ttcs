<?php
include "class/brand_class.php";
$brand = new brand;
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ | HANDMADE</title>
        <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="style.css?v=2">
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="img/logo.jpeg" alt="" width="120px" height="60px">
            </div>
            <div class="menu">
                <?php
                $show_cartegory = $brand -> show_cartegory();
                if($show_cartegory){

                    while($result = $show_cartegory -> fetch_assoc()){
                ?>
                    <li>
                        <a href="">
                            <?php echo $result['danhmuc_ten'] ?>
                        </a>
                        <ul class="sub-menu">
                            <?php
                    $show_brand = $brand -> show_brand();
                    if($show_brand ){
                        while($resultA = $show_brand -> fetch_assoc() ){
                            if($resultA['danhmuc_ten'] === $result['danhmuc_ten']){
                    ?>
                                <li>
                                    <a href="cartegory.php?loaisanpham_id=<?php echo $resultA['loaisanpham_id'] ?>">
                                        <?php echo $resultA['loaisanpham_ten'] ?>
                                    </a>
                                </li>
                                <?php
                        }}}
                    ?>
                        </ul>
                    </li>
                    <?php
                    }}
            ?>
            </div>
            <div class="messenger">
                <li>
                    <a class="messeger" href="https://www.messenger.com/t/107276115682063/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" style="font-weight: bold; color: rgb(112, 119, 227);" target="_blank">
                    Chat mua hàng<img src="img/messenger.png" alt="" style="height: 30px;"></a>
                </li>

            </div>
            <div class="others">
                <li>
                    <form method="GET" style="display: flex;" action="cartegory.php?tukhoa=<?$_GET['tukhoa']?>">
                        <input placeholder="Tìm kiếm" type="text" name="tukhoa" value="<?php isset($_GET['tukhoa']) || $_GET['tukhoa']!=NULL ?>">
                        <button class="fa fa-search" type="submit" style="border: white; background-color: white;"></button>
                    </form>
                </li>
                <li class="fa fa-phone">
                    <p style="font-weight: bold; color: rgb(112, 119, 227);">.0987415208</p>
                </li>
            </div>

        </header>
        <section id="slide">
            <div class="aspect-ratio-123">
                <img src="img/slide1.png" alt="">
                <img src="img/slide2.png" alt="">
                <img src="img/slide3.png" alt="">
            </div>
            <div class="dot-container">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </section>
        <!----------------------------------app--------------------------->
        <section class="app-container">
            <div class="messenger">
                <a href="https://www.messenger.com/t/107276115682063/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" target="_blank"><img src="img/messenger.png" alt=""><br>
                    <p style="font-size: bold; color: rgb(86, 118, 215);">--Chat với HANDMADE để mua hàng ngay nào--</p>
                </a>

                <p style="font-size: bold; color: #000;">----</p>
                <p style="font-size: 16px;">Hoặc Gọi Vào Hotline</p><br>
                <p style="font-size: bold; color: rgb(86, 118, 215);">0987415208</p><br>
                <p style="font-size: 16px;">Để được nhân viên tư vấn và đặt hàng</p>
            </div>
            <div class="app">
                <a><img src="img/facebook.png" alt=""></a>
                <a><img src="img/instagram.png" alt=""></a>
                <a><img src="img/youtube.png" alt=""></a>
            </div>
            <p style="font-weight: bold;">Nhận bản tin HANDMADE <br><br></p>
            <p style="font-size: 16px;">Đăng ký nhận bản tin HANDMADE để được cập nhật những mẫu thiết kế mới nhất</p>
            <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $email = $_POST['email'];
                $insert_email = $brand  -> insert_email($email);
            } 
            ?>
            <form action="" method="POST">
                <input type="text" placeholder="Nhập email của bạn..." name="email" id="">
                <button class="admin-btn" type="submit">Gửi</button>
            </form>
        </section>
        <!--------------------------------footer-------------------------->
        <div class="footer-top">
            <li>
                <a href=""><img src="img/dathongbao.png" alt=""></a>
            </li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Tuyển Dụng</a></li>
            <li><a href="">Giới thiệu</a></li>
        </div>
        <p>

        </p>
    </body>
    <script src="script.js">
    </script>

    </html>
