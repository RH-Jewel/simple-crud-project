<?php
include "database.php";

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        // echo "Data deleted succesfully";
        header('location:index.php');
    } else {
        die(mysqli_error($connect));
    }
}
