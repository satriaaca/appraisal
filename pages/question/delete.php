<?php
    $id = $_GET['id'];
    $sql = "delete from questions where id = '$id'";
    $row = mysqli_query($link,$sql);
    echo "<script>alert('Question with id = $id has been deleted !'); window.location = 'dashboard.php?page=view-question';</script>"
?>