<?php
include "header.php";
include "slider.php";
include "class/email_class.php"
?>
<?php
$email = new email;
$show_email = $email -> show_email();

?>

        <div class="admin-content-right">
            <div class="admin-content-right-cartegory-list">
                <h1>Danh Sách Email Khách Hàng</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Email khách hàng</th>
                        <th>Tùy chỉnh</th>
                    </tr>

                <?php
                if($show_email){
                    $i = 0;
                    while($result = $show_email -> fetch_assoc()){
                        $i++;
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['email_id'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><a href="emaildelete.php?email_id=<?php echo $result['email_id'] ?>">Xóa <img src="img/xoa.png" style="height: 12px;"></a></td>
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
