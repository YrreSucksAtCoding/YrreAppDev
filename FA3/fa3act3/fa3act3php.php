<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Activity 3 - User Defined Function</title>

            <link rel="stylesheet" href="fa3act3css.css">
        </head>
    <body>
<?php

function my_function($param1, $param2, $param3){
    $addition = $param1 + $param2 + $param3;
    $subtraction = $param1 - $param2 - $param3;
    $multiplication = $param1 * $param2 * $param3;
    $division = $param1 / $param2 / $param3;

    return array(
        $addition,
        $subtraction,
        $multiplication,
        $division
    );
}

$param1 = 25;
$param2 = 13;
$param3 = 6;

$result = my_function($param1, $param2, $param3);

?>
<div class="container">
<h1>USING USER DEFINED FUNCTION</h1>
<table>
<tr>
<th colspan="2">

                My Parameter Values:
<?php echo "$param1, $param2, $param3"; ?>
</th>
</tr>
<tr>
    <td>Addition</td>
    <td><?php echo $result[0]; ?></td>
</tr>
<tr>
    <td>Subtraction</td>
    <td><?php echo $result[1]; ?></td>
</tr>
<tr>
    <td>Multiplication</td>
    <td><?php echo $result[2]; ?></td>
</tr>
<tr>
    <td>Division</td>
    <td><?php echo $result[3]; ?></td>
</tr>
</table>
</div>
</body>
</html>
 