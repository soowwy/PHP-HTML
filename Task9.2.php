<?php
    session_start();
    $name = $_SESSION['name'];
    $testValue = $_GET['name'];
    $secondTest = $_GET['secondTest'];
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
        div {
            margin-left: 10px;
        }
        input {
            padding: 1%;
        }
        p {
            color: green;
        }
    </style>
</head>

<body>
    <div>
    <a href="Task9.1.php">Click back</a>
    <form method="post" action="Task9.1.php">
    <label>Test:</label>
    <input name="secondName">
    <label>Second test:</label>
    <input name="someTest">
    <button>Send</button>
    </form>
    <p><?=$name?></p>
    <p><?=$testValue?></p>
    <p><?=$secondTest?></p>
    </div>
</body>
</html>