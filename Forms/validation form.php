<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>PHP Form Validation Example</h1>
<form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div style="color: red;">*require field</div>
  
  <div>
    <h2 style="display: inline; font-weight:normal;">Name: </h2>
    <input type="text" name="name" id="" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
    <span style="color: red;">
      *
      <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($_POST['name'])) {
        echo "Name is required";
      }
      if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name']) && !preg_match('/^[a-zA-Z ]+$/', $_POST['name'])) {
        echo "Only letters and white space allowed";
      }
      ?>
    </span>
  </div>
  <br>
  <div>
    <h2 style="display: inline; font-weight:normal;">E-mail: </h2>
    <input type="text" name="email" id="" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <span style="color: red;">
      *
      <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($_POST['email'])) {
        echo "E-mail is required";
      }
      if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['email'] && !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))) {
        echo "Invalid E-mail format";
      }
      ?>
    </span>

  </div>
  <br>
  <div>
    <h2 style="display: inline; font-weight:normal;">Website: </h2>
    <input type="text" name="url" id="" value="<?php echo isset($_POST['url']) ? htmlspecialchars($_POST['url']) : ''; ?>">
    <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['url'])) {
        if (!preg_match("~^(ht|f)tps?://~i",$_POST['url'])) {
          $_POST['url']="https://".$_POST['url'];
        }
        if(!filter_var($_POST['url'],FILTER_VALIDATE_URL))
        {
          echo "Invalid URL format";
        }
        
      }
    ?>
  </div>
  <br>
  <div>
    <h2 style="display: inline; font-weight:normal;">Comment: </h2>
    <textarea name="comment" rows="6" cols="35"><?php echo isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : ''; ?></textarea>
  </div>
  <br>
  <div>
    <h2 style="display: inline; font-weight:normal;">Gender: </h2>
    Male<input type="radio" name="gender" id="" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'male') ? 'checked' : ''; ?>>
    Female<input type="radio" name="gender" id="" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'female') ? 'checked' : ''; ?>>
    Other<input type="radio" name="gender" id="" value="other" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'other') ? 'checked' : ''; ?>>
    <span style="color: red;">
      *
      <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($_POST['gender'])) {
        echo "Gender is required";
      }
      ?>
    </span>
  </div>
  <br>
  <div>
    <input type="submit">
  </div>
  <br>



</form>



<?php

if ($_SERVER['REQUEST_METHOD']==="POST") {
    echo isset($_POST['name'])?$_POST['name']."<br>":'';
    echo isset($_POST['email'])?$_POST['email']."<br>":'';
    echo isset($_POST['url'])?$_POST['url']."<br>":'';
    echo isset($_POST['comment'])?$_POST['comment']."<br>":'';
    echo isset($_POST['gender'])?$_POST['gender']."<br>":'';
}
?>
</body>

</html>