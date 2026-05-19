<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="tsa2act2css.css">
</head>
<body>

<?php

/* USER DEFINED FUNCTIONS */

function cube($s){
    return pow($s, 3);
}

function rectangularPrism($l, $w, $h){
    return $l * $w * $h;
}

function cylinder($r, $h){
    return pi() * pow($r, 2) * $h;
}

function cone($r, $h){
    return (1/3) * pi() * pow($r, 2) * $h;
}

function sphere($r){
    return (4/3) * pi() * pow($r, 3);
}

?>

<table>

    <tr>
        <th colspan="3" class="title">
            Volume of Shapes
        </th>
    </tr>

    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <!-- CUBE -->
    <tr>
        <td>s = 5</td>
        <td>V = s³</td>
        <td><?php echo cube(5); ?></td>
    </tr>

    <!-- RECTANGULAR PRISM -->
    <tr>
        <td>l = 5, w = 4, h = 3</td>
        <td>V = lwh</td>
        <td><?php echo rectangularPrism(5,4,3); ?></td>
    </tr>

    <!-- CYLINDER -->
    <tr>
        <td>r = 3, h = 7</td>
        <td>V = πr²h</td>
        <td><?php echo round(cylinder(3,7), 2); ?></td>
    </tr>

    <!-- CONE -->
    <tr>
        <td>r = 4, h = 6</td>
        <td>V = ⅓πr²h</td>
        <td><?php echo round(cone(4,6), 2); ?></td>
    </tr>

    <!-- SPHERE -->
    <tr>
        <td>r = 5</td>
        <td>V = ⁴⁄₃πr³</td>
        <td><?php echo round(sphere(5), 2); ?></td>
    </tr>

</table>

</body>
</html>