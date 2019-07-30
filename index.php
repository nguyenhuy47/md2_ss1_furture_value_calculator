<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .class1{
            border: 1px;
            margin: 0px;
            padding: 10px;

        }
        .input{
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="class1">
        <h1>Furture Value Calculator</h1>
    <label>Inventment Amount:</label>
    <input class="input" name="inventmentAmount" type="text" size="30" placeholder="your's amount"><br>
        <label>Interest Rate:</label>
    <input class="input" name="interestRate" type="text" size="30" placeholder="your's interest rate" ><br>
        <label>Number of Year:</label>
    <input class="input" name="year" type="text" size="30" placeholder="your's year" ><br>
    <input class="input" type="submit" size="30" value="calculation">
    </div>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_POST["inventmentAmount"];
    $interestRate = $_POST["interestRate"];
    $year = $_POST["year"];
    $calculation = $amount + $amount*$interestRate;
    echo $calculation;

}




?>
