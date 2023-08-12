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
        $txt = "hello world";
        echo "length ==>".strlen("Hello")."<br>";#to get length
        echo "words counter==>". str_word_count("$txt")."<br>";
        echo "reverse ==>".strrev("Hello")."<br>";#reverse
        echo "position=>".strpos($txt,"world")."<br>";#to get position
        echo "replace ==>".str_replace("hello","hi",$txt)."<br>";#to get length
        

    ?>
</body>
</html>