<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand; 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $danhmuc_id = $_POST['danhmuc_id'];
    $loaisanpham_ten = $_POST['loaisanpham_ten'];
    $insert_brand = $brand  -> insert_brand($danhmuc_id,$loaisanpham_ten);
}                                                                    
?>                                                                                          

<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Chọn danh mục</h1>
                <form action="" method="POST">
                    <select name="danhmuc_id" id="">
                        <option value="">--Chọn danh mục--</option>
                        <?php
                        $show_cartegory = $brand -> show_cartegory();
                        if($show_cartegory){

                            while($result = $show_cartegory -> fetch_assoc()){

                            
                        ?>
                        <option value="<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_ten'] ?></option>
                        <?php
                            }
                        }
                        ?>

                    </select>
                <br><br>
                <h1>Thêm loại sản phẩm</h1>
                
                    <input name="loaisanpham_ten" type="text" placeholder="Nhập tên loại sản phẩm" style="width: 300px;">
                    <button class="admin-btn" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>