<?php
include "header.php";
include "slider.php";
include "class/slide_class.php"
?>
<?php
$cartegoty = new cartegoty;
$show_cartegory = $cartegoty -> show_cartegory();

?>

        <div class="admin-content-right">
            <div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Ảnh Slide</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tùy chỉnh</th>
                    </tr>

                <?php
                if($show_cartegory){
                    $i = 0;
                    while($result = $show_cartegory -> fetch_assoc()){
                        $i++;
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['slide_id'] ?></td>
                        <td><img src="<?php echo $result['link_anh'] ?>" style="height: 150px;"></td>
                        <td><a href="slideedit.php?slide_id=<?php echo $result['slide_id'] ?>"><img src="img/icon.png" style="height: 12px;"> Sửa</a> --|-- <a href="slidedelete.php?slide_id=<?php echo $result['slide_id'] ?>">Xóa <img src="img/xoa.png" style="height: 12px;"></a></td>
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