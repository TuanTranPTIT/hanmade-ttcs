<?php
include "class/brand_class.php";
$brand = new brand;
include "class/product_class.php";
$product = new product;
$param = "";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm | HANDMADE</title>
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=2">
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
                <a class="messeger" href="https://www.messenger.com/t/107276115682063/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0" style="font-weight: bold; color: rgb(112, 119, 227);" target="_blank">
                    Chat mua hàng<img src="img/messenger.png" alt="" style="height: 30px;"></a>
            </li>
        </div>
        <div class="others">
            <li>
                <form method="GET" style="display: flex;">
                <input placeholder="Tìm kiếm" type="text" name="tukhoa" value="<?php isset($_GET['tukhoa']) || $_GET['tukhoa']!=NULL ?>">
                <button class="fa fa-search" type="submit" style="border: white; background-color: white;"></button>
                </form>
            </li>
            <li class="fa fa-phone"><p style="font-weight: bold; color: rgb(112, 119, 227);">.0987415208</p></li>
        </div>
    </header>


    <!----------------------------------cartegory--------------------------->
    <section class="cartegory">
        <div class="container">
            <?php

                if(isset($_GET['loaisanpham_id']) || $_GET['loaisanpham_id']!=NULL){
                    $loaisanpham_id= $_GET['loaisanpham_id'];
                    $param .="loaisanpham_id=".$loaisanpham_id."&";
                    $paramSort = "";
                }

                if(isset($_GET['tukhoa']) || $_GET['tukhoa']!=NULL){
                    $tukhoa = $_GET['tukhoa'];
                    $param .= "tukhoa=".$tukhoa."&";
                    $paramSort = "";
                    $search = $product -> search($tukhoa);
                }
                
                $paramSort .= $param;

                $get_brand_product = $product -> get_brand_product($loaisanpham_id);

                $get_brand= $brand -> get_brand($loaisanpham_id);
                if($get_brand){
                    $resultC = $get_brand -> fetch_assoc();
                }
            ?>
            <div class="cartegory-top row">
                <p>Trang chủ</p><span>&#10230;</span>
                <p><?php echo $resultC['danhmuc_ten'] ?></p><span>&#10230;</span>
                <p><?php echo $resultC['loaisanpham_ten'] ?></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cartegory-left">
                    <ul>
                    <?php
                        $show_cartegory1 = $brand -> show_cartegory();
                        if($show_cartegory1){

                            while($resultD = $show_cartegory1 -> fetch_assoc()){
                    ?>
                        <li class="cartegory-left-li"><a href="#"><?php echo $resultD['danhmuc_ten'] ?></a>
                            <ul>
                            <?php
                                $show_brand1 = $brand -> show_brand();
                                if($show_brand1 ){
                                    while($resultE = $show_brand1 -> fetch_assoc() ){
                                        if($resultE['danhmuc_ten'] === $resultD['danhmuc_ten']){
                            ?>
                                            <li>
                                                <a href="cartegory.php?loaisanpham_id=<?php echo $resultE['loaisanpham_id'] ?>">
                                                    <?php echo $resultE['loaisanpham_ten'] ?>
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
    
                    </ul>
                </div>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">
                        <p><?php echo $resultC['loaisanpham_ten'] ?></p>
                    </div>
                    
                    <div class="cartegory-right-top-item">
                            <select id="sort_product" name="sort_product" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option value="">Sắp xếp</option>
                                <option value="cartegory.php?<?=$paramSort?>sort_product=desc" >Giá cao đến thấp</option>
                                <option value="cartegory.php?<?=$paramSort?>sort_product=asc">Giá thấp đến cao</option>
                            </select>         
                    </div>


                    <div class="cartegory-right-content row">
                    <?php
                        
                //------------------------theo loại sp--------------------
                        if($get_brand_product){
                             while($resultB = $get_brand_product  -> fetch_assoc()){
                    ?>
                        <div class="cartegory-right-content-item">
                        
                            <a href="product.php?loaisanpham_id=<?php echo $resultB['loaisanpham_id'] ?>& sanpham_id=<?php echo $resultB['sanpham_id'] ?>"><img src="<?php echo $resultB['sanpham_anh'] ?>" alt=""></a>
                            <h1><?php echo $resultB['sanpham_tieude'] ?></h1>
                            <p><?php echo $resultB['sanpham_gia'] ?><sup>đ</sup></p>

                        </div>


                    <?php
                        }}
                    ?>
                
                    <?php
                //---------------------------tìm kiếm----------------
                       if($search && !$get_brand_product){
                             while($resultF = $search  -> fetch_assoc()){
                    ?>
                        <div class="cartegory-right-content-item">
                        
                            <a href="product.php?loaisanpham_id=<?php echo $resultF['loaisanpham_id'] ?>& sanpham_id=<?php echo $resultF['sanpham_id'] ?>"><img src="<?php echo $resultF['sanpham_anh'] ?>" alt=""></a>
                            <h1><?php echo $resultF['sanpham_tieude'] ?></h1>
                            <p><?php echo $resultF['sanpham_gia'] ?><sup>đ</sup></p>

                        </div>


                    <?php
                        }}
                    ?>
                <!----------------------------------------->
                    </div>
                    <div class="cartegory-right-bottom">
                        <div class="cartegory-right-bottom-items">
                            <p style="color: white;"><span>&#171;</span>1 2 3 4 5<span>&#187;</span>Trang cuối</p>
                        </div>
                    </div>
                </div>
            </div>

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
