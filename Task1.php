<?php
    $equals = [];
    $selector = [];
    $error = [];
    if (!empty($_POST)) {
        $number1 = isset($_POST['numberOne']) ? $_POST['numberOne'] : '';
        $number2 = isset($_POST['numberTwo']) ? $_POST['numberTwo'] : '';
        $select = $_POST['selectOption'];
        if (!is_numeric($number1) || !is_numeric($number2)) {
            $error = 'Only numbers are allowed!';
            $equals = '';
        } else {
            if ($select == 'first') {
                $equals = $number1 + $number2;
                $selector = '+';
                $error = '';
            }
            if ($select == 'second') {
                $equals = $number1 - $number2;
                $selector = '-';
                $error = '';
            }
            if ($select == 'third') {
                $equals = $number1 * $number2;
                $selector = '*';
                $error = '';
            }
            if ($select == 'fourth') {
                $equals = $number1 / $number2;
                $selector = '/';
                $error = '';
            }
        }
        if (empty($number1) || empty($number2) || $select == 'zero') {
            $error = 'All fields are required!';
            $equals = '';
            $selector = '';
            $errorNumeric = '';
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
        height: 400px;
        font-family: Arial, Verdana, sans-serif;
    }
    label {
        display: block;
        font-weight: bold;

    }
    div {
        margin-top: 20px;
        margin-left: 10px;
    }
    select {
        margin-left:10px;
    }
    p {
        margin-top: 20px;
        margin-left: 10px;
        font-weight: bold;
    }
    input {
        padding: 1%;
    }
</style>

<body>

    <p style="color:red"><?=$error?></p>
    <form action="" method="post">
        <div>
            <label>Enter a number:</label>
                <input name="numberOne" value="<?= empty($_POST['numberOne']) ? '' : $_POST['numberOne']; ?>">
        </div>
        <div>
            <label>Enter a second number:</label>
            <input name="numberTwo">
        </div>
            <p>Choose your operation wisely:</p>
            <select name="selectOption">
                <option value="zero"></option>
                <option value="first">+</option>
                <option value="second">-</option>
                <option value="third">*</option>
                <option value="fourth">/</option>
            </select>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
        <p>The answer is:<?=' '.$equals?></p>
        <p>You used the "<?=' '.$selector.' '?>" operator</p>
</body>
</html>
