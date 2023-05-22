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
$delete_cartegory = $cartegoty -> delete_cartegory($danhmuc_id);

?>