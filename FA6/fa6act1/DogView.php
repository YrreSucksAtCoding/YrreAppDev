<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM dogs");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dog Records</title>
<link rel="stylesheet" href="style.css">
<style>
body{
    font-family:Arial;
}
table{
    width:100%;
    border-collapse:collapse;
}
th,td{
    border:1px solid black;
    padding:10px;
    text-align:center;
}
th{
    background:#28a745;
    color:white;
}
</style>
</head>
<body>

<h2>Dog Information Records</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Address</th>
    <th>Color</th>
    <th>Height</th>
    <th>Weight</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['breed']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['color']; ?></td>
    <td><?php echo $row['height']; ?></td>
    <td><?php echo $row['weight']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>