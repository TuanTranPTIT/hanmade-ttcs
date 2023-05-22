<?php
include "class/brand_class.php";
$brand = new brand;
include "class/product_class.php";
$product = new product;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm | HANDMADE</title>
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css?v=1">
</head>

<body>
    <header>
        <div class="logo">
            <a href="homepage.php"><img src="img/logo.jpeg" alt="" width="120px" height="60px"></a>
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
                <a class="messeger" href="https://www.messenger.com/t/107276115682063/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" style="font-weight: bold; color: rgb(112, 119, 227);">
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

            <li class="fa fa-phone"><p style="font-weight: bold; color: rgb(112, 119, 227);">.0987415208</p></li>
        </div>
    </header>
    <!--------------------------------product------------------------->
    <section class="product">
        <div class="container">
            <?php
                if(isset($_GET['sanpham_id']) || $_GET['sanpham_id']!=NULL){
                    $sanpham_id= $_GET['sanpham_id'];
                }
                $get_product = $product -> get_product($sanpham_id);
                if($get_product){
                    $resultB = $get_product -> fetch_assoc();
                }
            ?>
            <div class="product-top row">
                <p>Trang chủ</p><span>&#10230;</span>
                <p><?php echo $resultB['loaisanpham_ten'] ?></p><span>&#10230;</span>
                <p><?php echo $resultB['sanpham_tieude'] ?></p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="<?php echo $resultB['sanpham_anh'] ?>" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="<?php echo $resultB['sanpham_anh'] ?>" alt="">
                        <img src="<?php echo $resultB['sanpham_anh1'] ?>" alt="">
                        <img src="<?php echo $resultB['sanpham_anh2'] ?>" alt="">
                        <img src="<?php echo $resultB['sanpham_anh3'] ?>" alt="">
                    </div>

                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1><?php echo $resultB['sanpham_tieude'] ?></h1>
                        <p><?php echo $resultB['sanpham_ma'] ?></p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?php echo $resultB['sanpham_gia'] ?><sup>đ</sup></p>
                    </div><br>
                    <div class="product-content-right-product-color">
                        <p><span style="font-weight: bold;">Màu sắc</span>:<?php echo $resultB['sanpham_mau'] ?></p>
                        <div class="product-content-right-product-color-img">
                            <img src="<?php echo $resultB['sanpham_mauanh'] ?>" alt="">
                        </div>
                    </div><br><br>
                    <div class="product-content-right-product-size">
                        <p style="font-weight: bold;">Size</p>
                        <div class="size">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                            <span>XXL</span>
                        </div>
                    </div>
                    
                    <p style="color: rgb(120, 117, 117);">Chat với HANDMADE để được tư vấn size phù hợp</p><br>

                    <div class="product-content-right-product-button">
                        <button><a href="https://www.messenger.com/t/107276115682063/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"><p>CHAT VỚI HANMADE ĐỂ MUA NGAY</p></a></button>
                    </div><br>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item GioiThieu">
                                    <p>CHÍNH SÁCH ĐỔI TRẢ</p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-GioiThieu">
                                    <p>- Free ship cho đơn hàng trên 400,000đ.<br><br> - Mức phí: 30,000đ nội thành và 40,000đ ngoại thành<br><br> - Được kiểm tra hàng trước khi nhận hàng<br><br> - Đổi hàng trong vòng 30 ngày kể từ khi nhận hàng<br><br>-
                                        Không áp dụng đổi/trả sản phẩm trong CTKM<br><br> - Miễn phí đổi trả nếu lỗi sai sót từ phía HANDMADE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------product-related-------------->
    <section class="product-related container">
        <div class="product-related title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>

        <div class="product-content row">
        <?php
            if(isset($_GET['loaisanpham_id']) || $_GET['loaisanpham_id']!=NULL){
                $loaisanpham_id= $_GET['loaisanpham_id'];
            }
            $get_brand_product = $product -> get_brand_product($loaisanpham_id);
            $i = 5;
            if($get_brand_product){
                 while($i-->0 && $resultC= $get_brand_product -> fetch_assoc()){
        ?>
            <div class="product-related-item">
                <a href="product.php?sanpham_id=<?php echo $resultC['sanpham_id'] ?>"><img src="<?php echo $resultC['sanpham_anh'] ?>" alt=""></a>
                <h1><?php echo $resultC['sanpham_tieude'] ?></h1>
                <p><?php echo $resultC['sanpham_gia'] ?><sup>đ</sup></p>
            </div>
        <?php
            }}
        ?>
        </div>
    </section>
    <!----------------------------------app--------------------------->
    <section class="app-container">
        <div class="messenger">
            <a href="https://www.messenger.com/t/107276115682063/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"><img src="img/messenger.png" alt=""><br>
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

    <!----------------------------------footer------------------------->

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