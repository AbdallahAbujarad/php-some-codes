<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Constants</h1>";
        echo "syntax==>define(name,value)<hr>";

        #name: Specifies the name of the constant
        #value: Specifies the value of the constant

        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
        echo "<hr>";

        echo "Create an Array constant:<br>";
        define("cars", [
          "Alfa Romeo",
          "BMW",
          "Toyota"
        ]);
        echo cars[0];
        echo "<hr>";
    ?>
</body>
</html>