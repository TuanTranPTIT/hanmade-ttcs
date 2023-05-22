<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegoty = new cartegoty;
if(isset($_GET['danhmuc_id']) || $_GET['danhmuc_id']!=NULL){
    $danhmuc_id = $_GET['danhmuc_id'];
}
$get_cartegory = $cartegoty -> get_cartegory($danhmuc_id);
if($get_cartegory){
    $result = $get_cartegory -> fetch_assoc();
}
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $danhmuc_ten = $_POST['danhmuc_ten'];
    $update_cartegory = $cartegoty  -> update_cartegory ($danhmuc_ten, $danhmuc_id);
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
?>                                                                                          

<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Sửa Danh Mục</h1>
                <form action="" method="POST">
                    <input name="danhmuc_ten" type="text" value="<?php echo $result['danhmuc_ten']?>">
                    <button class="admin-btn" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>