<?php
include "header.php";
include "slider.php";
include "class/email_class.php";
?>
<?php
$email = new email;
if(isset($_GET['email_id']) || $_GET['email_id']!=NULL){
    $email_id = $_GET['email_id'];
}
$delete_email = $email -> delete_email($email_id);

?>