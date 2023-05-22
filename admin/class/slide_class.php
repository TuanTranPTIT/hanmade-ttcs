<?php
include "database.php";
?>

<?php
class cartegoty{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function insert_cartegory ($danhmuc_ten) {
        $query = "INSERT INTO tb_slide (link_anh) VALUES ('$danhmuc_ten')"; 
        $result = $this -> db ->insert($query);
        header('Location:slidelist.php');
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tb_slide ORDER BY slide_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_cartegory ($danhmuc_id){
        $query = "SELECT * FROM tb_slide WHERE slide_id = '$danhmuc_id'"; 
        $result = $this ->db->select($query);
        return $result;
    }
    public function update_cartegory ($danhmuc_ten, $danhmuc_id) {
        $query = "UPDATE tb_slide SET link_anh = '$danhmuc_ten' WHERE slide_id = '$danhmuc_id'";
        $result = $this -> db -> update($query);
        header('Location:slidelist.php');
        return $result; 
    }
    public function delete_cartegory($danhmuc_id){
        $query = "DELETE FROM tb_slide WHERE slide_id = '$danhmuc_id'";
        $result = $this -> db -> delete($query);
        header('Location:slidelist.php');
        return $result; 
    }
}

?>