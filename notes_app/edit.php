<?php
require_once("../notes_app/connection.php");
require_once("../notes_app/security_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $title=prep($_POST['title']);
    $content=prep($_POST['content']);
    $important=prep($_POST['important']);
    $id=prep($_POST['id']);
    echo $id." <br>";
    
     $sql="UPDATE content_table SET title='".$title ."', content='".$content."', important =".$important." WHERE id=".$id; 
     echo $sql. "<br>";
     if(mysqli_query($conn,$sql)){
         header("Location:index.php");
     }else{
            echo mysqli_error($conn);
     }   
}
$id = $_GET['id'];  
$sql2 = 'SELECT * FROM content_table WHERE id = ' . $id;

$note = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($note);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Notes App</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    Notes App
</header>

<div class="titleDiv">
    <div class="backLink"><a class="nav-link" href="index.php"> Home</a></div>
    <div class="head">New Note</div>
</div>
<form action="edit.php" method="post">

    <span class="label">Title  </span>
    <input type="text" name="title" value=<?php echo $row['title']; ?>  />
    <span class="label">Content</span>
    <textarea name="content" ><?php echo $row['content']; ?></textarea>
    <input type="hidden" name="id" value=<?php echo $row['id']; ?> >
    <div class="chkgroup">
        <span class="label-in">Important</span>
        <input type="hidden" name="important" value="0" >
        <input type="checkbox" name="important" value="1" <?php if ($row['important']==1) {
                                                            echo "checked";
                                                        }
                                                        ?> >
    </div>

    <input type="submit" />

</html>
<?php
include("../notes_app/footer.php");

?>