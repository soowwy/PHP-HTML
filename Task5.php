<?php

$errors = [];
$request = [];
if(!empty($_POST)) {
    $text = isset($_POST['text']) ? $_POST['text'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $request = $_REQUEST;
    if (empty($text) || empty($number)) {
        $errors = 'You must fill all fields!';
        $request = '';
    } else {
        $errors = '';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Task5</title>
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
        div {
            margin-left: 10px;
        }
        input {
            padding: 1%;
        }
    </style>
</head>
<body>
<div>
<form method="post" action="">
    <label>Type something:</label>
    <input type="text" name="text" />
    <label>Type a number here:</label>
    <input type="number" name="number"/>
    <label></label>
    <button type="submit">Submit</button>
    <p><?= print_r($request)?></p>
    <p style="color:red;"><?= $errors?></p>
</form>
    </div>
</body>
</html>