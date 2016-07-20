<?php
    $errors = [];
    $number = [];
    $temperature =[];
    if (!empty($_POST)) {
        $number = isset($_POST['number']) ? $_POST['number'] : '';
        $selectFirst = $_POST['selectFirst'];
        $selectSecond = $_POST['selectSecond'];
        if (!is_numeric($number)) {
            $errors = 'Only numbers are allowed!';
            $temperature = '';
        } else {
            if ($selectFirst == 'firstC' && $selectSecond == 'firstF') {
                $temperature = ($number * 9 / 5) + 32;
                $errors = '';
            }
            if ($selectFirst == 'secondF' && $selectSecond == 'secondC') {
                $temperature = (5 / 9) * ($number - 32);
                $errors = '';
            }
            if (($selectFirst == 'secondF' && $selectSecond == 'firstF') ||
                ($selectFirst == 'firstC' && $selectSecond == 'secondC')) {
                $errors = 'You have to select different values!';
                $temperature = '';
            }
        }
        if (empty($number) || $selectFirst == 'zero' || $selectSecond == 'zero') {
            $errors = 'All fields are required!';
            $temperature = '';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP AND THE WEB</title>
</head>
<style>
    body {
        border: 1px solid black;
        width: 25%;
        height: 350px;
        font-family: Arial, Verdana, sans-serif;
    }
    label {
        display: block;
        margin-top: 10px;
    }
    div {
        margin-left: 10px;
    }
    button {
        margin-top: 20px;
    }
    p {
        margin-left: 10px;
    }
    input {
        padding: 1%;
    }
</style>
<body>
    <p style="color: red"><?=$errors?></p>
    <form style="" action="" method="post">
        <div>
            <label>Type a number here:</label>
            <input name="number">
        </div>
        <div>
            <label>From:</label>
        <select name="selectFirst">
            <option value="zero"></option>
            <option value="firstC">C</option>
            <option value="secondF">F</option>
        </select>
        </div>
        <div>
            <label>To:</label>
        <select name="selectSecond">
            <option value="zero"></option>
            <option value="firstF">F</option>
            <option value="secondC">C</option>
        </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        <p style="color: blue;">The result is:<?=' '. $temperature?></p>

    </form>

</body>
</html>

