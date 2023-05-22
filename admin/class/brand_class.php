<?php
include "database.php";
?>

<?php
class brand{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tb_danhmuc ORDER BY danhmuc_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function show_loaisanpham_ajax($danhmuc_id){
        $query = "SELECT * FROM tb_loaisanpham WHERE danhmuc_id = $danhmuc_id ORDER BY loaisanpham_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }

    public function insert_brand ($danhmuc_id,$loaisanpham_ten) {
        $query = "INSERT INTO tb_loaisanpham (danhmuc_id, loaisanpham_ten) VALUES ('$danhmuc_id','$loaisanpham_ten')"; 
        $result = $this -> db ->insert($query);
        header('Location:brandlist.php');
        return $result;
    }
    public function show_brand(){
        //$query = "SELECT * FROM tb_loaisanpham ORDER BY loaisanpham_id DESC";
        
        $query = "SELECT tb_loaisanpham.*,tb_danhmuc.danhmuc_ten
        FROM tb_loaisanpham INNER JOIN tb_danhmuc ON tb_loaisanpham.danhmuc_id = tb_danhmuc.danhmuc_id
        ORDER BY tb_danhmuc.danhmuc_id ASC";
        $result = $this -> db ->select($query);
        return $result;
        
    }
    public function get_brand ($loaisanpham_id){
        $query = "SELECT * FROM tb_loaisanpham WHERE loaisanpham_id = '$loaisanpham_id'"; 
        $result = $this ->db->select($query);
        return $result;
    }
    public function update_brand($danhmuc_id,$loaisanpham_ten,$loaisanpham_id) {
        $query = "UPDATE tb_loaisanpham SET danhmuc_id = '$danhmuc_id', loaisanpham_ten='$loaisanpham_ten' WHERE loaisanpham_id = '$loaisanpham_id'";
        $result = $this -> db -> update($query);
        header('Location:brandlist.php');
        return $result; 
    }
    public function delete_brand($loaisanpham_id){
        $query = "DELETE FROM tb_loaisanpham WHERE loaisanpham_id = '$loaisanpham_id'";
        $result = $this -> db -> delete($query);
        header('Location:brandlist.php');
        return $result; 
    }
}

?>