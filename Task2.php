<?php
    $errors = [];
    $showPass = [];
    $diffPass = [];
    $name = [];
    if (!empty($_POST)) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $rePassword = isset($_POST['rePassword']) ? $_POST['rePassword'] : '';

        if (empty($name) || empty($password) || empty($rePassword)) {
            $errors = 'You must fill all the fields!';
            $name = '';
            $showPass = '';
        };
        if (!empty($name) && !empty($password) && !empty($rePassword)) {
            $errors = '';
        }
        if ($password === $rePassword && $password != '') {
            $showPass = crypt($password);
        }
        if ($password !== $rePassword && !empty($name)) {
            $errors = 'You\'ve entered a wrong password, try again!';
            $name = '';
            $showPass = '';
        };

    };

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

    }
    div {
        margin-top: 10px;
        margin-left: 10px;
    }
    p {
        margin-left: 10px;
    }
    input {
        padding: 1%;
    }
</style>
<body>
    <p style="color: red"><?= $errors?></p>
    <form action="" method="post">
        <div>
            <label><strong>Name:</strong></label>
            <input name="name">
        </div>
        <div>
            <label><strong>Password:</strong></label>
            <input type="password" name="password">
        </div>
        <div>
            <label><strong>Repeat password:</strong></label>
            <input type="password" name="rePassword">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <p style="color: rgba(0, 0, 0, 0.97)"><strong>Your name is:</strong></p>
    <p style="color: darkgreen;"><?=$name?></p>
    <p style="color: #000000"><strong>Your password is:</strong></p>
    <p style="color: darkgreen;"><?=$showPass?></p>
</body>
</html>
