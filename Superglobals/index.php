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
    echo "(dollar)GLOBALS==>stores all global variables in an array called (dollar)GLOBALS[index]. The index holds the name of the variable.";
    
    $x = 75;
    $y = 25;
     
    function addition() {
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
     
    addition();
    echo "$z<hr>";



    function String()
    {
        $GLOBALS['b'] ='ali';
    }
    String();
    echo $b."<hr><hr><hr>";

    //$_SERVER,$_REQUEST,$_POST and $_GET is advanced


    
    ?>

    

</body>
</html>