<?php
$id = $_GET["id"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_REQUEST['name'];
    $desc = $_REQUEST['desc'];
    $price = $_REQUEST['price'];
    try {
        require("./Connection.php");
        $query = "UPDATE `products` SET `Name`='$name',`Description`='$desc',`Price`='$price' WHERE `id`= $id";
        $conn->query($query);
        header("location:index.php");
    } catch (Exception $e) {
        die("can't Update");
    }
}else{
    $query = "SELECT `Name`, `Description`, `Price` FROM `products` WHERE `id` = $id";
    require("./Connection.php");
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $name = $row['Name'];
    $desc = $row['Description'];
    $price = $row['Price'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>update product</h1>
    </center>

    <div class="container" style="height: 100vh;">
        <form method="post">
            <label>name</label>
            <input type="text" class="form-control" name="name" value=<?php echo $name; ?>>
            <label>description</label>
            <input type="text" class="form-control" name="desc" value=<?php echo $desc; ?>>
            <label>price</label>
            <input type="text" class="form-control" name="price" value=<?php echo $price; ?> >
            <input type="submit" class="btn btn-primary mt-2" value="update product">
        </form>
</body>

</html>