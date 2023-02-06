<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>This is the example of include files</h1>
    <p>We can use include here</p>
    <?php
    $a=10;
    $b=20;
    $c= $a + $b;
    //require 'file1.php';
    include 'file.php';
    ?>

    <h2>Stop the Script</h2>
</body>
</html>