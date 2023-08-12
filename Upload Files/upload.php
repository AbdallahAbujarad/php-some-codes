<?php

    $target_dir = "uploads\\";
    $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
    global $uploadOk;
    $uploadOk=1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    function uploadFailed($string)
    {
        echo $string;
        $GLOBALS['uploadOk'] = 0;
    }

    //make upload file
    if (!file_exists($target_dir)) {
        mkdir($target_dir);
    }

    //check if it's a real image or a fake one
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if ($check == false) {
            uploadFailed("Woops, it's not an image");
        }
    }

    //check file existence
    if (file_exists($target_file)&&$uploadOk===1) {
        uploadFailed("Sorry, the file already exists");
    }

    //limit file size
    if ($_FILES['fileToUpload']['size']>500000&&$uploadOk===1) {
        uploadFailed("Sorry, it can't be more 500000 byte");
    }

    //limit file type
    if ($uploadOk===1&&$imageFileType!='gif'&&$imageFileType!='jpeg'&&$imageFileType!='jpg'&&$imageFileType!='png') {
        uploadFailed('Sorry, It should be an image of type png,jpeg,jpg or gif');
    }
    

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) {
        echo "the image with name ".$_FILES['fileToUpload']['name']." uploaded";
    }else {
        uploadFailed("Sorry,Something went wrong. Try again later");
    }

    if ($uploadOk==0) {
        echo '
        <form action="index.php">
        <input type="submit" value="Back To Junk Fat!!">
        </form>
        ';
    }
?>