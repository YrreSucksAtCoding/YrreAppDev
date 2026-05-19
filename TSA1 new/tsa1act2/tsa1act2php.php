<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - Multiplication Table</title>
    <link rel="stylesheet" href="tsa1act2css.css">
</head>
<body>
    <div class="page">
        <h1>Multiplication Table</h1>
        <div class="table-container">
            <table>
                <?php
                for ($row = 0; $row <= 10; $row++) {
                    echo "<tr>";

                    for ($col = 0; $col <= 10; $col++) {
                        $answer = $row * $col;

                        if (($row + $col) % 2 == 0) {
                            echo "<td class='blue'>{$answer}</td>";
                        } else {
                            echo "<td class='pink'>{$answer}</td>";
                        }
                    }

                    echo "</tr>";
                }
                ?>
            </table>
    </div>
</body>
</html>
 