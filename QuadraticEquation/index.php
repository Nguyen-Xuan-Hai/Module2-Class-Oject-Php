<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="numberA" placeholder="Nhập vào giá trị biến a">
    <input type="text" name="numberB" placeholder="Nhập vào giá trị biến b">
    <input type="text" name="numberC" placeholder="Nhập vào giá trị biến c">
    <button type="submit">Submit</button>
    <?php
        include_once "QuadraticEquation.php";
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $numberA = $_POST['numberA'];
            $numberB = $_POST['numberB'];
            $numberC = $_POST['numberC'];
            $QuadraticEquation = new QuadraticEquation($numberA,$numberB,$numberC);
            $QuadraticEquation->getQuadratic();
        }

    ?>
</form>
</body>
</html>
