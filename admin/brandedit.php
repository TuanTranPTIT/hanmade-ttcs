<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand; 
if(isset($_GET['loaisanpham_id']) || $_GET['loaisanpham_id']!=NULL){
    $loaisanpham_id= $_GET['loaisanpham_id'];
}
$get_brand = $brand -> get_brand($loaisanpham_id);
if($get_brand){
    $resultA = $get_brand -> fetch_assoc();
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $danhmuc_id = $_POST['danhmuc_id'];
    $loaisanpham_ten = $_POST['loaisanpham_ten'];
    $update_brand = $brand  -> update_brand($danhmuc_id,$loaisanpham_ten,$loaisanpham_id);
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
                        <option <?php if($result['danhmuc_id']==$resultA['danhmuc_id']){echo "selected";} ?> value="<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_ten'] ?></option>
                        <?php
                            }
                        }
                        ?>

                    </select>
                <br><br>
                <h1>Sửa sản phẩm</h1>
                
                    <input name="loaisanpham_ten" type="text" placeholder="Nhập tên sản phẩm" value="<?php echo $resultA['loaisanpham_ten'] ?>">
                    <button class="admin-btn" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>