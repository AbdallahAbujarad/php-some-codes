<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post"><!--in action you can put an php file-->
        Red<input type="radio" name="color" value="red">
        Green<input type="radio" name="color" value="green">
        Blue<input type="radio" name="color" value="blue">
        <button name="changeColor">Change Background Color</button>
    </form>
    <?php
        if(isset($_POST['changeColor']))
        {
            echo "<style>body{background : ".$_POST['color'].";}</style>";
        }
    ?>

</body>
</html>