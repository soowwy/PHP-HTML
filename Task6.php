<?php
$error = [];
if (!empty($_POST)) {
    $firstName = isset($_POST['fName']) ? $_POST['fName'] : '';
    $lastName = isset($_POST['lName']) ? $_POST['lName'] : '';
    $selectDay = $_POST["selectDay"];
    $selectMonth = $_POST["selectMonth"];
    $selectYear = $_POST["selectYear"];
    if (is_numeric($firstName) || is_numeric($lastName)) {
        $error = 'Your name MUST NOT be numeric!';
    } else {
        if (empty($firstName) || empty($lastName) || $selectDay == "zero" || $selectMonth == "zero" || $selectYear == "zero") {
            $error = 'All fields are required!';
        } else {
            $error = '';
        }
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
    <p style="color:red"><?=$error?></p>
    <div>
        <label>First name:</label>
        <input name="fName" value="<?= htmlentities(empty($_POST['fName']) ? '' : $_POST['fName']); ?>">
    </div>
    <div>
        <label>Last name:</label>
        <input name="lName" value="<?= htmlentities(empty($_POST['lName']) ? '' : $_POST['lName']); ?>">
    </div>
    <div>
        <label>Select your age:</label>
    <select name="selectDay" >
        <option value="zero"></option>
        <option value="one">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
        <select name="selectMonth">
            <option value="zero"></option>
            <option value="one">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <select name="selectYear">
            <option value="zero"></option>
            <option value="one">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>

        </select>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

</body>
</html>
