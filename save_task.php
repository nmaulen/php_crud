<?php

include("db.php")

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    // echo $title
    // echo $description
    $query = "INSERT INTO tasks(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Task SAved succesfully'
    $_SESSION['message_type'] = 'success'

    header('Location: index.php');


}
?>