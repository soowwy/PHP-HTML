<?php
$numbers = [];
$error = [];
$inArray = '';
$min = 0;
$max = 0;


if (!empty($_POST)) {
    $numbers = isset($_POST['numbers']) ? $_POST['numbers'] : '';
    if(empty($numbers)) {
        $error = 'The field must not be empty!';
    } else {
        $inArray = explode(",", $numbers);
        sort($inArray);
        $min = min($inArray);
        $max = max($inArray);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP AND THE WEB</title>
    <style>
        body {
            border: 1px solid black;
            width: 25%;
            height: 300px;
            font-family: Arial, Verdana, sans-serif;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        button {
            margin-top: 20px;
        }
        div,p {
            margin-left: 10px;
        }
        input {
            padding: 1%;
        }
    </style>
</head>

<body>
<form method="post">
    <p style="color:red"><?=( $error)?></p>
    <div>
        <label>Write 10 numbers(separated with comas!):</label>
        <input name="numbers">
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
    <p><?php print_r($inArray)?></p>
    <p style="color:green;">The min element is: <?= $min ?></p>
    <p style="color:green;">The max element is: <?= $max?></p>

</form>

</body>
</html>