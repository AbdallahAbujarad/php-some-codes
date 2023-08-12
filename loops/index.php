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
    #all loops are normal but foreach
    $arrayList = [2,4,"ali",true];
    foreach($arrayList as $element)
    {
        echo $element."<br>";
    }
    ?>
</body>
</html>