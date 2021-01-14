<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>School project 2a - Multiplication</title>
</head>
<body>
    <?php
        function generateTable($num) {
            echo "<table>";
            echo "<tr><th>Multiplication table of $num</th></tr>";
            for($i=0; $i<11; $i++) {
                $multiply = $i * $num;
                echo "<tr><td>$num &#10005 $i =</td><td>$multiply</td></tr>";
            }
            echo "</table>";
        }    
    ?>

    <h1>Project 2a - Multiplication</h1>

    <div class="flexbox-container table-3">
        <h2>Click on submit to access the multiplication table of 3</h2>
        <form action="/school-project-2a/tablethree.php" method="GET">
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="flexbox-container table-drop-down">
        <form action="/school-project-2a/index.php" method="GET">
        <label for="table-figure">Pick a number</label>
        <select name="table-figure" id="table-figure">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <button type="submit">Submit</button>
        </form>
        <span class="table-drop-down-message">
            <?php
                if(isset($_GET['table-figure'])) {
                    generateTable((int)$_GET['table-figure']);
                }
            ?>
        </span>
    </div>
    

    <div class="flexbox-container table-checkbox">
        <form action="/school-project-2a/index.php" method="GET">
        <input type="checkbox" name="figure[]" value="1">
        <label for="figure1">1</label>
        <input type="checkbox" name="figure[]" value="2">
        <label for="figure2">2</label>
        <input type="checkbox" name="figure[]" value="3">
        <label for="figure3">3</label>
        <input type="checkbox" name="figure[]" value="4">
        <label for="figure4">4</label>
        <input type="checkbox" name="figure[]" value="5">
        <label for="figure5">5</label>
        <input type="checkbox" name="figure[]" value="6">
        <label for="figure6">6</label>
        <input type="checkbox" name="figure[]" value="7">
        <label for="figure7">7</label>
        <input type="checkbox" name="figure[]" value="8">
        <label for="figure8">8</label>
        <input type="checkbox" name="figure[]" value="9">
        <label for="figure9">9</label>
        <button type="submit">Submit</button>
        </form>
        <span class="table-checkbox-message">
            <?php
                if(!empty($_GET['figure']) && isset($_GET['figure'])) {
                    foreach($_GET['figure'] as $value) {
                        generateTable((int)$value);
                    }                    
                }
            ?>
        </span>
    </div>

    <div class="flexbox-container table-quizz">
                  
    </div>
    

</body>
</html>