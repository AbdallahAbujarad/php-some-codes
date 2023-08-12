<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" >
    fill it <input type="text" name="text"><br>
    <button type="submit">sure</button><br>
    </form>
    
    <?php
    echo $_SERVER['PHP_SELF']."<br>";//يقوم باسترجاع اسم الملف مع اسم المجلد الذي يتواجد فيه
    echo $_SERVER['SCRIPT_FILENAME']."<br>";//يقوم بإرجاع عنوان مسار الملف حالياً بالكامل
    echo $_SERVER['REQUEST_METHOD']."<br>";//Post إرجاع طريقة الطلب المستخدمة للومصول إلى الصفحة مثل
    echo $_SERVER['QUERY_STRING']."<br>";//يقوم بجلب البيانات الموجودة على الرابط (اي عندما مثلا تكون الطريقة جيت يقوم بجلب البيانات على الرابط التي تم ادخالها)
    echo $_SERVER['SERVER_ADDR']."<br>";//يقوم بإرجاع عنوان الأي بي لخادم المضيف
    echo $_SERVER['SERVER_NAME']."<br>";//يقوم بإرجاع اسم الخادم المضيف للموقع
    echo $_SERVER['REMOTE_ADDR']."<br>";//يقوم بإعادة عنوان أي بي مكان المستخدم الذي يتصفح لموقعك
    

    ?>
</body>
</html>