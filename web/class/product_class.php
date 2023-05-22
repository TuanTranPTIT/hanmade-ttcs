<?php
include "../../admin/database.php";
?>

<?php
class product{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function show_brand(){
        $query = "SELECT * FROM tb_loaisanpham ORDER BY loaisanpham_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function insert_product ($_post) {
        $sanpham_tieude = $_post['sanpham_tieude'];
        $sanpham_ma = $_post['sanpham_ma'];
        $loaisanpham_id = $_post['loaisanpham_id'];
        $sanpham_mau = $_post['sanpham_mau'];
        $sanpham_mauanh = $_post['sanpham_mauanh'];
        $sanpham_gia = $_post['sanpham_gia'];
        $sanpham_anh = $_post['sanpham_anh'];
        $sanpham_anh1 = $_post['sanpham_anh1'];
        $sanpham_anh2 = $_post['sanpham_anh2'];
        $sanpham_anh3 = $_post['sanpham_anh3'];


        $query = "INSERT INTO tb_sanpham (sanpham_tieude, sanpham_ma, loaisanpham_id, sanpham_mau, sanpham_mauanh, sanpham_gia, sanpham_anh, sanpham_anh1, sanpham_anh2, sanpham_anh3
        )VALUES ('$sanpham_tieude', '$sanpham_ma', '$loaisanpham_id', '$sanpham_mau', '$sanpham_mauanh', '$sanpham_gia', '$sanpham_anh', '$sanpham_anh1', '$sanpham_anh2', '$sanpham_anh3')"; 
        $result = $this -> db ->insert($query);
        header('Location:productlist.php');
        return $result;
    }

    public function show_product(){
        
        $query = "SELECT tb_sanpham.*, tb_loaisanpham.loaisanpham_ten
        FROM tb_sanpham
        INNER JOIN tb_loaisanpham ON tb_sanpham.loaisanpham_id = tb_loaisanpham.loaisanpham_id
        ORDER BY tb_sanpham.sanpham_id DESC";
        $result = $this -> db ->select($query);
        return $result;
        
    }

    public function get_product ($sanpham_id){
        $query = "SELECT tb_sanpham.*, tb_loaisanpham.loaisanpham_ten FROM tb_sanpham
        INNER JOIN tb_loaisanpham ON tb_sanpham.loaisanpham_id = tb_loaisanpham.loaisanpham_id
        WHERE tb_sanpham.sanpham_id = '$sanpham_id'"; 
        $result = $this ->db->select($query);
        return $result;
    }

    public function get_brand_product ($loaisanpham_id){
        $query = "SELECT * FROM tb_sanpham WHERE loaisanpham_id = '$loaisanpham_id'";
        if(isset($_GET['sort_product'])) {
            $sortValue = $_GET['sort_product'];
        }
        if ($sortValue == "asc"){
            $query .= " ORDER BY sanpham_gia ASC";
        } else if ($sortValue == "desc") {
            $query .= " ORDER BY sanpham_gia DESC";
        }
        $result = $this ->db->select($query);
        return $result;
    }

    public function update_product ($sanpham_id, $loaisanpham_id, $sanpham_tieude, $sanpham_ma, $sanpham_mau, $sanpham_mauanh, $sanpham_gia, $sanpham_anh, $sanpham_anh1, $sanpham_anh2, $sanpham_anh3) {
        $query = "UPDATE tb_sanpham SET loaisanpham_id ='$loaisanpham_id', sanpham_tieude = '$sanpham_tieude', sanpham_ma = '$sanpham_ma', sanpham_mau ='$sanpham_mau', sanpham_mauanh = '$sanpham_mauanh', sanpham_gia = '$sanpham_gia', sanpham_anh = '$sanpham_anh', sanpham_anh1 = '$sanpham_anh1', sanpham_anh2 = '$sanpham_anh2', sanpham_anh3 = '$sanpham_anh3' WHERE sanpham_id = '$sanpham_id'";
        $result = $this -> db -> update($query);
        header('Location:productlist.php');
        return $result; 
    }
    public function delete_product($sanpham_id){
        $query = "DELETE FROM tb_sanpham WHERE sanpham_id = '$sanpham_id'";
        $result = $this -> db -> delete($query);
        header('Location:productlist.php');
        return $result; 
    }

    public function search($tukhoa){
        $query = "SELECT * FROM tb_sanpham WHERE sanpham_tieude LIKE '%$tukhoa%'";
        if(isset($_GET['sort_product'])) {
            $sortValue = $_GET['sort_product'];
        }
        if ($sortValue == "asc"){
            $query .= " ORDER BY sanpham_gia ASC";
        } else if ($sortValue == "desc") {
            $query .= " ORDER BY sanpham_gia DESC";
        }
        $result = $this ->db->select($query);
        return $result;
    }

}

?>