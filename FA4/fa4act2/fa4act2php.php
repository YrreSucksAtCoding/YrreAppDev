<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - String Functions</title>

    <style>
        body{
            margin:0;
            background:#222;
            font-family:Georgia;
        }

        .container{
            width:95%;
            margin:20px auto;
            background:white;
            border:4px double black;
            padding:5px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th, td{
            border:1px solid gray;
            padding:20px;
            text-align:center;
            font-size:18px;
        }

        th{
            background:#f2f2f2;
        }

        .title{
            font-size:30px;
            padding:30px;
            background:#fafafa;
        }

        tr:hover{
            background:#ffe4ec;
            transition:0.3s;
        }
    </style>
</head>

<body>

<div class="container">

<table>

<tr>
    <th class="title" colspan="6">List of Names</th>
</tr>

<tr>
    <th>Name</th>
    <th>Number of Characters</th>
    <th>Uppercase First Character</th>
    <th>Replace Vowels with @</th>
    <th>Check Position of Character "a"</th>
    <th>Reverse Name</th>
</tr>

<?php

$names = array(
    "tokai teio",
    "silence suzuka",
    "rice shower",
    "aston machan",
    "admire vega",
    "special week",
    "mejiro mcqueen",
    "gold ship",
    "vodka",
    "daiwa scarlet",
    "symboli rudolf",
    "air groove",
    "biwa hayahide",
    "kitasan black",
    "satono diamond",
    "narita brian",
    "winning ticket",
    "agnes tachyon",
    "tm opera o",
    "grass wonder"
);

foreach($names as $name){

    $characters = strlen($name);

    $uppercase = ucwords($name);

    $replace = str_replace(
        array("a","e","i","o","u","A","E","I","O","U"),
        "@",
        $name
    );

    $position = strpos($name, "a");

    if($position === false){
        $position = "No a found";
    }

    $reverse = strrev($name);

    echo "
    <tr>
        <td>$name</td>
        <td>$characters</td>
        <td>$uppercase</td>
        <td>$replace</td>
        <td>$position</td>
        <td>$reverse</td>
    </tr>
    ";
}

?>

</table>

</div>

</body>
</html>