<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP2_GOLD</title>
    </head>
    <body>
    <h1>Pattern Using For Loops</h1>
  <!--Write a PHP program that multiplies corresponding elements of two given lists-->    
    <?php
    function multiply_two_lists($x, $y)
    {
        $a = explode(' ',trim($x));
        $b = explode(' ',trim($y));
        $value = 10;
        foreach($a as $num=> $value)
        {
            $output[$num] = $a[$num]*$b[$num];
        }
        return implode(' ',$output);
    }
    echo multiply_two_lists(("20 12 5"), ("1 3 3"))."\n";
    ?>
    </body>
</html>