<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php
    $id = $_GET["id"];
    echo("<div class='container d-flex justify-content-center align-items-center' >
    <h1>are you sure that you want to delete this product?</h1>
    </div>
    <div class='container d-flex justify-content-center align-items-center' style='height: 100vh;'>
        <a class='btn btn-danger m-2' href='./confirmDelete.php?id=$id'>confirm</a>
        <a class='btn btn-success m-2' href='./index.php'>cancel</a>
    </div>")
    ?>
</body>

</html>