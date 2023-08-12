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
        $max_int = PHP_INT_MAX;
        $min_int = PHP_INT_MIN;
        $size_int = PHP_INT_SIZE;
        
        $max_float = PHP_FLOAT_MAX;
        $min_float = PHP_FLOAT_MIN;
        $dig_float = PHP_FLOAT_DIG;
        $eps_float = PHP_FLOAT_EPSILON;

        echo "max integer :".$max_int."<br>";
        echo "min integer :".$min_int."<br>";
        echo "integer size:".$size_int."<br>";
        echo "max float :".$max_float."<br>";
        echo "min float :".$min_float."<br>";
        echo "dicimal digits number ==> float :".$dig_float."<br>";
        echo "The smallest representable positive ==> float :".$eps_float."<br>";
        
        echo "<br><br><br><br><h1>TO CHECK<h1/>";
        $x=9;
        echo "the number is ".$x." check int"."<br>";
        echo var_dump(is_int($x))."<br>";#to check if it is integer
        echo var_dump(is_integer($x))."<br>";#to check if it is integer
        echo var_dump(is_long($x))."<br>";#to check if it is integer
        
        echo "<br>";
        
        $x="5.5";
        echo "the number is ".$x." check float"."<br>";
        echo var_dump(is_float($x))."<br>";#to check if it is integer
        echo var_dump(is_double($x))."<br>";#to check if it is integer

        $x = 1.9e411;
        echo "the number is ".$x." check number infinte ot finite"."<br>";
        echo "infinite".var_dump(is_infinite($x))."<br>";#to check if it is infinte
        echo "finite".var_dump(is_finite($x))."<br>";#to check if it is finite

        #is_nan() to check if the number can be calculated or not
        #also var_dump function returns the data type and value
        echo"<br><br>check if the value is a real number or not";
        $x = acos(8);
        var_dump($x);

        echo "<br><br>check if it's numric or not<br>";
        $x = 5985;
        echo var_dump(is_numeric($x))."<br>";

        $x = "5985";
        echo var_dump(is_numeric($x))."<br>";

        $x = "59.85" + 100;
        echo var_dump(is_numeric($x))."<br>";

        $x = "Hello";
        echo var_dump(is_numeric($x))."<br>";

        echo "<br><br>Casting<br>";
        // Cast float to int
        $x = 23465.768;
        echo $x." before casting float to int"."<br>";
        $int_cast = (int)$x;
        echo $int_cast;

        echo "<br><br>";

        // Cast string to int
        $x = "23465.768";
        echo $x." before casting String to float"."<br>";
        $float_cast = (float)$x;
        echo $float_cast."<br><br>";
        echo $x." before casting String to int"."<br>";
        $int_cast = (int)$x;
        echo $int_cast."<br><br>";

        /*Math methods
        
        
        echo(sqrt(4)) return 2
        
        
        echo(min(0, 150, 30, 20, -8, -200));  // returns -200
        echo(max(0, 150, 30, 20, -8, -200));  // returns 150
        
        
        echo(rand()) return random integer
        echo(rand(10, 100)); return random integer between 10 & 100
        

        echo(abs(-6.7));  // returns 6.7
        



        
        echo(round(0.60));  // returns 1
        echo(round(0.49));  // returns 0
        
        echo(round(-0.60));  // returns -1
        echo(round(-0.49));  // returns 0
        
        echo(round(0.5));  // returns 1
        echo(round(-0.5));  // returns -1
        */

        /*Arithmetic Operators
        +
        -
        *
        /
        %
        ** for power
        */

        /*Assignment Operators
        x = y ==> x = y

        x += y ==> x = x + y

        x -= y ==>  x = x - y

        x *= y ==> x = x * y

        x /= y ==> x = x / y

        x %= y ==> x=x % y
        */

        /*Comparison Operators
        ==

        === //Returns true if $x is equal to $y, and they are of the same type

        != //Returns true if $x is not equal to $y

        <> //Returns true if $x is not equal to $y

        !== //Returns true if $x is not equal to $y, or they are not of the same type.


        >

        <

        >=

        <=

        <=> Returns an 1,0, or -1 less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. 

        */

        /*Increment / Decrement Operators
        ++$x
        $x++
        --$x
        $x--
        */

        /*Logical Operators
            and
            or
            xor
            &&
            ||
            !
        */

        /*String Operators
            . //Concatenation 
            .= //Appending==>$txt1.=$txt2==>$txt1 = $txt1.$txt2
        */

        /*Conditional Assignment Operators
        ?://$x = expr1 ?
            expr2 : expr3
                    Returns the value of $x.
                    The value of $x is expr2 if expr1 = TRUE.
                    The value of $x is expr3 if expr1 = FALSE

        ??//$x = expr1 ??
            expr2
                Returns the value of $x.

                The value of $x is expr1 if expr1 exists,
                and is not NULL.

                If expr1 does not exist, or is NULL, the
                value of $X is expr2.
        */
        
        $bool = true;
        $x = $bool?"ali":5;
        echo $x."<br>";

        $bool = false;
        $x = $bool?"ali":5;
        echo $x."<br>";

        $value="role";
        $x = $value??"ali";
        echo $x."<br>";

        $value=null;
        $x = $value??"ali";
        echo $x."<br>";
    ?>
</body>
</html>