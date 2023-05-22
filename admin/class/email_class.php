<?php
include "database.php";
?>

<?php
class email{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function show_email(){
        $query = "SELECT * FROM tb_email ORDER BY email_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    
    public function delete_email($email_id){
        $query = "DELETE FROM tb_email WHERE email_id = '$email_id'";
        $result = $this -> db -> delete($query);
        header('Location:emaillist.php');
        return $result; 
    }
}

?>