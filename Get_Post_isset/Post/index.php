<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        Number 1 <input type="number" name="n1"/>
        Number 2 <input type="number" name="n2"/>
        <button type="submit" name="sum">إرسال</button>
    </form>
    <?php
    //isset to do what you want when you press on the button and used for get also
    if(isset($_POST['sum']))
    {
        echo $_POST['n1']+$_POST['n2'];
    }
    ?>
</body>
</html>