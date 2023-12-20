<?php
try {
    $id = $_GET["id"];
    require("./Connection.php");
    $query = "DELETE FROM `products` WHERE id=$id";
    $conn->query($query);
    header("location:index.php");
} catch (Exception $e) {
    die("can't delete");
}
