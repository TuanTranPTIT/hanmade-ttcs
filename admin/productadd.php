<?php
include "header.php";
include "slider.php";
include "class/product_class.php"

?>
<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $insert_product = $product -> insert_product($_POST);
}                    
?>
 <div class="admin-content-right">
    <h1> Thêm Sản Phẩm</h1><br>
            <div class="product-add-content">
              
            <form action="" method="POST">
                    

                   <label for="">Chọn loại sản phẩm</label> <br>
                    <select required="required" name="loaisanpham_id" id="loaisanpham_id">
                        <option value="">--Chọn--</option>
                    <?php
                        $show_brand = $product -> show_brand();
                        if($show_brand){while($result = $show_brand -> fetch_assoc()){
                    ?>
                        <option value="<?php echo $result['loaisanpham_id'] ?>"><?php echo $result['loaisanpham_ten'] ?></option>
                    <?php
                    }}
                    ?>           
                    </select><br><br>

                    <label for="">Tên sản phẩm</label>
                    <input required type="text" name="sanpham_tieude"> <br><br>

                    <label for="">Mã sản phẩm</label>
                    <input required type="text" name="sanpham_ma"> <br><br>

                    <label for="">Màu sản phẩm</label>
                    <input required type="text" name="sanpham_mau"> <br><br>

                    <label for="">Link ảnh màu</label>
                    <input required type="text" name="sanpham_mauanh"> <br><br>

                    <label for="">Giá sản phẩm</label>
                    <input required type="text" name="sanpham_gia"> <br><br> 

                    <label for="">Link ảnh đại diện</label>
                    <input required type="text" name="sanpham_anh"> <br><br>

                    <label for="">Link ảnh 1</label>
                    <input required type="text" name="sanpham_anh1"> <br><br>

                    <label for="">Link ảnh 2</label>
                    <input required type="text" name="sanpham_anh2"> <br><br>

                    <label for="">Link ảnh 3</label>
                    <input required type="text" name="sanpham_anh3"> <br><br>

                    <button class="admin-btn" name="submit" type="submit">Thêm</button> 
                </form>
            </div>           
        </div>
    </section>
</body>
</html>  