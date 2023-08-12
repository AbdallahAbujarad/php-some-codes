<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello</title>
</head>
<body>
  <form action=<?php echo $_SERVER['PHP_SELF']?> method="post">
    name : <input type="text" name="user" id=""><br><br>
    host : <input type="text" name="host" id=""><br><br>
    pass : <input type="text" name="password" id=""><br><br>
    <input type="submit" value="Create Connection">
<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (!empty($_POST['user']) && !empty($_POST['host']) && !empty($_POST['password'])) { // Check if all fields are filled
    $user = $_POST['user'];
    $host = $_POST['host'];
    $password = $_POST['password'];

    try{
    $conn = mysqli_connect($host, $user, $password);
    echo "<h1>Connection successful!</h1>";
    }catch(mysqli_sql_exception $e){
      echo "<h1>Something went wrong. Please enter the right values.</h1>".$e->getMessage();
    }
    
  } else {
    echo "<h1>Please fill in all the fields.</h1>";
  }
}
mysqli_close($conn);
?>
  </form>
</body>
</html>