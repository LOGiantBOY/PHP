
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

function controleerOfGetalIsDeelbaarDoor3 ($getal) {
    if ($getal % 3 === 0) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

for ($i = 5; $i <= 30; $i++) {
    if (controleerOfGetalIsDeelbaarDoor3($i)) {
        echo "{$i} is deelbaar door 3<br>";
    } else {
        echo "{$i} is NIET deelbaar door 3<br>";
    }
}
?>

</body>
</html>