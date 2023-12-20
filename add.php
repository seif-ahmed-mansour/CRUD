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
        <h1>add product</h1>
    </center>
    
    <div class="container" style="height: 100vh;">
    <form method="post">
        <label>name</label>
        <input type="text" class="form-control" name="name">
        <label>description</label>
        <input type="text" class="form-control" name="desc">
        <label>price</label>
        <input type="text" class="form-control" name="price">
        <input type="submit" class="btn btn-primary mt-2" value="add product">
        <br>
        <a href="./index.php" class="btn btn-secondary mt-2">back to product list</a>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
        $desc=$_POST["desc"];
        $price=$_POST["price"];
        try{
            require("./Connection.php");
            $query="INSERT INTO `products`(`Name`, `Description`, `Price`) VALUES ('$name','$desc','$price')";
            $conn->query($query);
        }catch(Exception $e){
            die("erorr".$e->getMessage());
        }
    }
    ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>