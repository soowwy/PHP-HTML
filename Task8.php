<?php

session_start();

    $error = [];
    if (!empty($_POST)) {
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';

        if (empty($firstName) || empty($lastName)) {
            $error = 'All fields are required!';
            die;
        } else {
            $count = $_SESSION['hit']++;
            if ($count == 20) {
                $_SESSION['hit'] = 0;
            }
            $error = '';
        }
        if (is_numeric($firstName) || is_numeric($lastName)) {
            $error = 'the input must NOT be numeric!';

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
            height: 400px;
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
    <p style="color:orangered;"><?= $error ?></p>
    <form action="" method="post">
        <div>

            <label>First Name:</label>
            <input name="firstName">
        </div>
        <div>
            <label>Last Name:</label>
            <input name="lastName">
        </div>
        <div>
            <button>Submit</button>
        </div>
        <p style="color: brown;">The number of requests sent is:<?=' '. $count ?></p>
    </form>
</body>
</html>
