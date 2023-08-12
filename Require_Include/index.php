<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require 'header.php';
        echo "<br> then <br>".$name1;
        require 'header.php';
    //include => get all variables from the file and do the commands that are inside the file
    //require => do the same thing but don't show anything except error if the file isn't exist or has an error
    //require_once => if the require done before the page won't do it more and if not will do it once and never do it again
    //include_once => if the included done before the page won't do it more and if not will do it once and never do it again
    ?>
    hello world
    



</body>
</html>