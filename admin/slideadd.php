<?php
include "header.php";
include "slider.php";
include "class/slide_class.php";
?>
<?php
$cartegoty = new cartegoty;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $danhmuc_ten = $_POST['link_anh'];
    $insert_cartegory = $cartegoty  -> insert_cartegory($danhmuc_ten);
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
?>                                                                                          

<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Thêm ảnh slider</h1>
                <form action="" method="POST">
                    <input name="link_anh" type="text" placeholder="Nhập link ảnh" style="width: 500px;">
                    <button class="admin-btn" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
 </div>

</html>