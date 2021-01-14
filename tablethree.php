<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Multiplication of 3</title>
</head>
<body>
    <h1>Multiplication table of 3</h1>

    <table>
        <tr>
            <th>Multiplication table of 3</th>
        </tr>
        <?php for($i=0; $i<11; $i++) {
            $multiply = $i * 3;
            echo "<tr><td>3 &#10005 $i =</td><td>$multiply</td></tr>";
        }  ?>
    </table>
</body>
</html>