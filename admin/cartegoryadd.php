<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegoty = new cartegoty;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $danhmuc_ten = $_POST['danhmuc_ten'];
    $insert_cartegory = $cartegoty  -> insert_cartegory($danhmuc_ten);
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
?>                                                                                          

<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Thêm Danh Mục</h1>
                <form action="" method="POST">
                    <input name="danhmuc_ten" type="text" placeholder="Nhập tên danh mục">
                    <button class="admin-btn" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>