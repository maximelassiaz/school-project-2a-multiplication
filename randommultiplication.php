<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['response'])) {
            $response = (int)$_POST['response'];
        }
        if(isset($_POST['answer'])) {
            $answer = (int)$_POST['answer'];
        }

        if ($response === $answer) {
           echo "<p> Your answer is correct ! </p>"; 
        } else {
            echo "<p> Your answer is not correct ! </p><br>";
            echo "<p> You replied $response </p><br>";
            echo "<p> The correct answer was $answer </p>";
        }
    ?>
</body>
</html>