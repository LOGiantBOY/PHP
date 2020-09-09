<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$originalString = "of toch wel? tein tkrew eictnuf njim huh";

echo "oringnalstring: {$originalString}<br>";
echo"reversedstring:" . reversedString($originalString);

function reversedString ($originalString) {
    $stringLenght = strlen($originalString);
    $reverseSring = "";
    for ($i = $stringLenght - 1; $i >= 0; $i--) {
        $reverseSring .= substr($originalString, $i, 1);
    }
    return $reverseSring;
}

?>

</body>
</html