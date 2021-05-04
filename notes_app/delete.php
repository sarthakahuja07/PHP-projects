<?php
require_once("../notes_app/connection.php");

$id= $_GET['id'];
$sql="DELETE FROM content_table WHERE id='". $id."'" ;
echo $sql;
if(mysqli_query($conn,$sql)){
    header("Location:index.php");
    
}

?>


<?php
    include("../notes_app/footer.php");

?>