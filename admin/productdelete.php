<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product = new product;
if(isset($_GET['sanpham_id']) || $_GET['sanpham_id']!=NULL){
    $sanpham_id = $_GET['sanpham_id'];
}
$delete_product = $product -> delete_product($sanpham_id);
?>