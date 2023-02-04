<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP1_GOLD</title>
    </head>
    <body>
    <h1>Sum Of The Digits </h1>
  <!--Write a PHP program to compute the sum of the digits of a number-->    
    </head>
    <body>
    <?php  
        $number = 123456789;  
        $sum=0; $rem=0;  
        for ($i =0; $i<=strlen($number);$i++)  
        {  
            $rem=$number%10;  
            $sum = $sum + $rem;  
            $number=$number/10;  
        }  
        echo "Sum of digits 123456789 is $sum";  
    ?>  
    </body>
</html>