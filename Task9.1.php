<?php
    session_start();
    $name = 'This sentence is added with SESSION!';
    $_SESSION['name'] = $name;
    $secondName = $_POST['secondName'];
    $someTest = $_POST['someTest'];
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
            color:green;
        }
    </style>
</head>

<body>
    <div>
        <a href="Task9.2.php">Click ahead</a>
    <form method="get" action="Task9.2.php">
        <label>Test:</label>
        <input name="name" >
        <label>Second test:</label>
        <input name="secondTest">
        <button>Send</button>
    </form>
    <p><?=$secondName?></p>
    <p><?=$someTest?></p>
        </div>

</body>
</html>