<?php
include "header.php";
include "slider.php";
include "class/product_class.php"

?>
<?php
$product = new product;


if(isset($_GET['sanpham_id']) || $_GET['sanpham_id']!=NULL){
    $sanpham_id= $_GET['sanpham_id'];
}
$get_product = $product -> get_product($sanpham_id);
if($get_product){
    $resultA = $get_product -> fetch_assoc();
}
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $loaisanpham_id = $_POST['loaisanpham_id'];
    $sanpham_tieude = $_POST['sanpham_tieude'];
    $sanpham_ma = $_POST['sanpham_ma'];
    $sanpham_mau = $_POST['sanpham_mau'];
    $sanpham_mauanh = $_POST['sanpham_mauanh'];
    $sanpham_gia = $_POST['sanpham_gia'];
    $sanpham_anh = $_POST['sanpham_anh'];
    $sanpham_anh1 = $_POST['sanpham_anh1'];
    $sanpham_anh2 = $_POST['sanpham_anh2'];
    $sanpham_anh3 = $_POST['sanpham_anh3'];
    $update_product = $product -> update_product ($sanpham_id, $loaisanpham_id, $sanpham_tieude, $sanpham_ma, $sanpham_mau, $sanpham_mauanh, $sanpham_gia, $sanpham_anh, $sanpham_anh1, $sanpham_anh2, $sanpham_anh3);
}                    
?>
 <div class="admin-content-right">
        <h1>Sửa Sản Phẩm</h1>
            <div class="product-add-content">
              
            <form action="" method="POST">
                    

            <label for="">Chọn loại sản phẩm</label> <br>
                    <select name="loaisanpham_id" id="">
                        <option value="">--Chọn danh mục--</option>
                        <?php
                        $show_brand = $product -> show_brand();
                        if($show_brand){

                            while($result = $show_brand -> fetch_assoc()){

                            
                        ?>
                        <option <?php if($result['loaisanpham_id']==$resultA['loaisanpham_id']){echo "selected";} ?> value="<?php echo $result['loaisanpham_id'] ?>"><?php echo $result['loaisanpham_ten'] ?></option>
                        <?php
                            }
                        }
                        ?>

                    </select>
                <br><br>

                    <label for="">Tên sản phẩm</label> <br>
                    <input required type="text" name="sanpham_tieude" value="<?php echo $resultA['sanpham_tieude'] ?>"> <br><br>

                    <label for="">Mã sản phẩm</label> <br>
                    <input required type="text" name="sanpham_ma" value="<?php echo $resultA['sanpham_ma'] ?>"> <br><br>

                    <label for="">Màu sản phẩm</label> <br>
                    <input required type="text" name="sanpham_mau" value="<?php echo $resultA['sanpham_mau'] ?>"> <br><br>

                    <label for="">Link ảnh màu</label> <br>
                    <input required type="text" name="sanpham_mauanh" value="<?php echo $resultA['sanpham_mauanh'] ?>"> <br><br>

                    <label for="">Giá sản phẩm</label> <br>
                    <input required type="text" name="sanpham_gia" value="<?php echo $resultA['sanpham_gia'] ?>"> <br><br> 

                    <label for="">Link ảnh đại diện</label> <br>
                    <input required type="text" name="sanpham_anh" value="<?php echo $resultA['sanpham_anh'] ?>"> <br><br>

                    <label for="">Link ảnh 1</label> <br>
                    <input required type="text" name="sanpham_anh1" value="<?php echo $resultA['sanpham_anh1'] ?>"> <br><br>

                    <label for="">Link ảnh 2</label> <br>
                    <input required type="text" name="sanpham_anh2" value="<?php echo $resultA['sanpham_anh2'] ?>"> <br><br>

                    <label for="">Link ảnh 3</label> <br>
                    <input required type="text" name="sanpham_anh3" value="<?php echo $resultA['sanpham_anh3'] ?>"> <br><br>

                    <button class="admin-btn" name="submit" type="submit">Sửa</button> 
                </form>
            </div>           
        </div>
    </section>
</body>
</html>  