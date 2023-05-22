<?php
include "header.php";
include "slider.php";
include "class/product_class.php"
?>
<?php
$product = new product;
$show_product = $product -> show_product();

?>

        <div class="admin-content-right">
            <div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Sản Phẩm</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Loại Sản Phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <th>Màu</th>
                        <th>Màu ảnh</th>
                        <th>Giá</th>
                        <th>Ảnh đại diện</th>
                        <th>Ảnh 1</th>
                        <th>Ảnh 2</th>
                        <th>Ảnh 3</th>
                        <th>Tùy chỉnh</th>
                    </tr>

                <?php
                if($show_product){
                    $i = 0;
                    while($result = $show_product -> fetch_assoc()){
                        $i++;
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['sanpham_id'] ?></td>
                        <td><?php echo $result['loaisanpham_ten'] ?></td>
                        <td><?php echo $result['sanpham_tieude'] ?></td> 
                        <td><?php echo $result['sanpham_ma'] ?></td>
                        <td><?php echo $result['sanpham_mau'] ?></td>
                        <td><img src="<?php echo $result['sanpham_mauanh'] ?>" style="height: 60px; border-radius: 50%;"></td>
                        <td><?php echo $result['sanpham_gia'] ?></td>
                        <td><img src="<?php echo $result['sanpham_anh'] ?>" style="height: 150px;"></td>
                        <td><img src="<?php echo $result['sanpham_anh1'] ?>" style="height: 150px;"></td>
                        <td><img src="<?php echo $result['sanpham_anh2'] ?>" style="height: 150px;"></td>
                        <td><img src="<?php echo $result['sanpham_anh3'] ?>" style="height: 150px;"></td>
                        <td><a href="productedit.php?sanpham_id=<?php echo $result['sanpham_id'] ?>"><img src="img/icon.png" style="height: 12px;"> Sửa</a> <br>-----<br> <a href="productdelete.php?sanpham_id=<?php echo $result['sanpham_id'] ?>"><img src="img/xoa.png" style="height: 12px;"> Xóa</a></td>
                    </tr>
                <?php
                    }}
                ?>
                </table>

            </div>
        </div>
    </section>
</body>

</html>