<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <?php
        $n = 5;
        for ($i = 1; $i <= 10; $i++) {
            $res = $n * $i;
            echo "<tr>";
            echo "<td>$n * $i = $res</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>