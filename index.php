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
        <h1>CRUD App</h1>
    </center>
    <div class="container">
        <?php
        try{
            require("./Connection.php");
            $query="SELECT `ID`, `Name`, `Description`, `Price`FROM `products`";
            $result=$conn->query($query);
            $products=$result->fetch_all(MYSQLI_ASSOC);
        }
        catch(Exception $e){
            die("ERORR404"." ".$e->getMessage());
        }
        ?>
        <table class="table">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php
                foreach($products as $product){
                    $id=$product["ID"];
                    echo "<tr>";
                    foreach($product as $key=>$value){
                        if($key!=="ID"){
                            echo "<td>$value</td>";
                        }
                    }
                    echo "<td><a class='btn btn-info' href='update.php?id=$id'>Update</a>
                    <a class='btn btn-danger m-1' href='delete.php?id=$id'>delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
        <a href="./add.php" class='btn btn-primary'>add product</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>