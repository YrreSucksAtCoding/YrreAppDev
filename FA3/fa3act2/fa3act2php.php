<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Activity 2 - Arrays</title>

        <link rel="stylesheet" href="fa3act2css.css">
        </head>
    <body>
<?php

$numbers = array(1,2,3,4,5,6,7,8,99);
$addition = array_sum($numbers);
$subtraction = $numbers[0];
for($i = 1; $i < count($numbers); $i++){
    $subtraction -= $numbers[$i];
}

$multiplication = 1;
foreach($numbers as $num){
    $multiplication *= $num;
}

$division = $numbers[0];
for($i = 1; $i < count($numbers); $i++){
    $division /= $numbers[$i];
}

?>
<div class="container">
<h1>USING ARRAYS</h1>
<table>
<tr>
<th colspan="2">

                Array List:
    <?php echo implode(", ", $numbers); ?>
</th>
</tr>
<tr>
    <td>Addition</td>
    <td><?php echo $addition; ?></td>
</tr>
<tr>
    <td>Subtraction</td>
    <td><?php echo $subtraction; ?></td>
</tr>
<tr>
    <td>Multiplication</td>
    <td><?php echo $multiplication; ?></td>
</tr>
<tr>
    <td>Division</td>
    <td><?php echo $division; ?></td>
</tr>
</table>
</div>
</body>
</html>
 