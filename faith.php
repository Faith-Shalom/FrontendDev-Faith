<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>The sum of 3 and 5 can be seen below</p>
    <form action="faith.php" method="get">
        <h1>A basic Calculator</h1>
        <p>Please enter 2 numbers for computing</p>
        <label for="num1">number1</label>
        <input type="number" name='num1'>
        <br><br>
        <label for="num2">number2</label>
        <input type="number" name='num2'>
        <br><br>
        <input type="Submit">
        <br><br>
    </form>
    <?php
    //echo 3+5;
    ?>
    <?php
    $firstnumber = $_GET['num1'];
    $secondnumber = $_GET['num2'];
    echo "The answer of $firstnumber and $secondnumber is";
    echo $firstnumber + $secondnumber;
    //$username = "Rodney";
    //$userAge = "67";
    //echo "<h1> There is a boy named $username</h1>";
    //echo "<p> He is 19yrs old</p>";
    //echo "He really liked Louris </br>";
    //echo "But $username did'nt likee being 19yrs </br>";
    //MATHEMATICAL OPERATIONS

    //echo 3.6 + 1.4;
    //echo "<br>";
    //echo 3.6 * 1.4;
    //echo "<br>";
    //echo 3.6 / 1.4;
    //echo "<br>";
    //echo 3.6 - 1.4;
    //echo "<br>";
    //echo max (13, 10);
    //echo "<br>";
    //echo pow (13,2);
    // //echo "<br>";

    //A BASIC CALCULATOR WITH TECNOVICE
    ?>
    
</body>
</html>