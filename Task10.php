<?php
    session_start();

$text = [];
$test1 = [];
$test2 = [];

if (!empty($_POST['text'])) {
    //$_SESSION['text'] = isset($_POST['text']) ? $_POST['text'] : '';
    if (isset($_POST['Submit'])) {
        $_SESSION['text'] = $_POST['text'];

    }
    } if ($text == 1) {
    $test1 = $_SESSION[$text];
    $test2 = '';
    } elseif ($text == 2) {
    $test2 = $text;
    $test1 = '';
    }
/*

if (isset($_POST['Submit'])) {
    $_SESSION['text'] = $_POST['text'];

}
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP AND THE WEB</title>
<style>
    input {
        margin-left: 100px;
    }
</style>
</head>

<body>
    <div>
        <form method="post">
            <label>Type a letter</label>
            <input name="text">
            <button name="Submit">Submit</button>
        </form>

        <input value="<?= $test1 ?>">
        <input value="<?= $test2 ?>">
    </div>
</body>
</html>
