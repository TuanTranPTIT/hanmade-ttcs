<?php
include "header.php";
include "slider.php";
include "class/brand_class.php"
?>
<?php
$brand = new brand;
$show_brand = $brand -> show_brand();

?>

        <div class="admin-content-right">
            <div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Danh Mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại Sản Phẩm</th>
                        <th>Tùy chỉnh</th>
                    </tr>

                <?php
                if($show_brand){
                    $i = 0;
                    while($result = $show_brand -> fetch_assoc()){
                        $i++;
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['loaisanpham_id'] ?></td>
                        <td><?php echo $result['danhmuc_ten'] ?></td>
                        <td><?php echo $result['loaisanpham_ten'] ?></td>
                        <td><a href="brandedit.php?loaisanpham_id=<?php echo $result['loaisanpham_id'] ?>"><img src="img/icon.png" style="height: 12px;"> Sửa</a> --|-- <a href="branddelete.php?loaisanpham_id=<?php echo $result['loaisanpham_id'] ?>">Xóa <img src="img/xoa.png" style="height: 12px;"></a></td>
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