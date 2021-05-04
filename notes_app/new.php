<?php
require_once("../notes_app/connection.php");
require_once("../notes_app/security_check.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = prep($_POST["title"]);
    $content = prep($_POST["content"]);
    $important = prep($_POST["important"]);


    $sql = "INSERT INTO content_table(title,content,important
    ) VALUES (";
    $sql .= "'" . $title . "'," . "'" . $content . "'," . "'" . $important . "')";




    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    }
}

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
<form action="new.php" method="post">

    <span class="label">Title</span>
    <input type="text" name="title" />

    <span class="label">Content</span>
    <textarea name="content"> </textarea>

    <div class="chkgroup">
        <span class="label-in">Important</span>
        <input type="hidden" name="important" value="0" />
        <input type="checkbox" name="important" value="1" />
    </div>

    <input type="submit" />

</html>

<?php
include("../notes_app/footer.php");

?>