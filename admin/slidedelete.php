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
$delete_cartegory = $cartegoty -> delete_cartegory($danhmuc_id);

?>