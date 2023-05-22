<?php
include "header.php";
include "slider.php";
include "class/slide_class.php";
?>
<?php
$cartegoty = new cartegoty;
if(isset($_GET['slide_id']) || $_GET['slide_id']!=NULL){
    $danhmuc_id = $_GET['slide_id'];
}
$get_cartegory = $cartegoty -> get_cartegory($danhmuc_id);
if($get_cartegory){
    $result = $get_cartegory -> fetch_assoc();
}
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $danhmuc_ten = $_POST['link_anh'];
    $update_cartegory = $cartegoty  -> update_cartegory ($danhmuc_ten, $danhmuc_id);
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
?>                                                                                          

<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Sửa Ảnh Slide</h1>
                <form action="" method="POST">
                    <input name="link_anh" type="text" value="<?php echo $result['link_anh']?>" style="width: 500px;">
                    <button class="admin-btn" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>