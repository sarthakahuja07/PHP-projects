<?php
require_once("../notes_app/connection.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Notes App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        Notes App
    </header>
    <div>
        <div>
            <a class="nav-link" href="new.php">Add a new note</a>

        </div>
        <?php
        $sql = "SELECT * FROM content_Table";
        $all = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($all)) {


        ?>
            <div class="note">

                <div class="titleContainer">
                    <span class="nt-title"> <?php echo $row['title']?></span>
                    <div class="nt-links">
                        <a class="nt-link" href=<?php echo "edit.php?id=".$row['id'].'&title='.$row['title']?>>edit note</a>
                        <a class="nt-link" href=<?php echo "delete.php?id=".$row['id'].'&title='.$row['title']?>>[X] delete note</a>
                    </div>
                </div>

                <div class="nt-content">
                    <?php
                    if($row['important']==1){
                        echo'<span class="imp">IMPORTANT</span>';
                    }
                    echo'<span>'. $row['content']. '</span>';

                    ?>

                </div>
            </div>
        <?php
        }
        mysqli_free_result($all);
        ?>
    </div>
</body>

</html>
<?php
include("../notes_app/footer.php");

?>