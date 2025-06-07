<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $boyName ="Morata";
    $girlName = "Christel";
    $CompanyName ="Creative";
    echo "There was a boy named" . strtoupper($boyName) . "who met a fair girl <br>";
    echo "At $CompanyName , her name was" .strtolower( $girlName) . "<br>";
    echo "At . $CompanyName . They spent the whole day mopping the company<br>";
    echo strlen($CompanyName);
    ?>
</body>
</html>