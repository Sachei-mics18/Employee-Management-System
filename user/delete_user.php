<?php
    session_start();
    include '../db.php';

    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
        header("Location: login.php");
        exit();
    }

    //process ng pag delete ng acc sa db
    $user_id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = $user_id AND role = 'user'";

    if ($conn->query($sql) === TRUE) {
        header("Location: user.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
?>
