<?php
include ("db_connection.php");
if(empty($_POST['title']) || empty($_POST['summary']) || empty($_POST['category']) || empty($_POST['author'])){
    echo "Enter all values";
}else {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];
    $author = $_POST['author'];
    $bloginput = "INSERT INTO bugs(entryTitle, entrySummary, category, submitter) VALUES ('$title', '$summary', '$category', '$author')";
    $result = mysqli_query($db, $bloginput);
    header("Location: showbugs.php");
}
