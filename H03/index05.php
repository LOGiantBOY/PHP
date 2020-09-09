<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>img {
            width: 150px;
        }
        img.red-border {
            border: solid red 2px;
        }
        img.green-border {
            border: solid green 2px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i <=9; $i++) {
    if ($i % 2 == 0) {
        $borderColor = "red";
    } else {
        $borderColor = "green";
    }
    echo '<img class= "'. $borderColor .'-border" src="img/lion'. $i .'.jpg" alt="lion'. $i .' ">';

}
?>
</body>
</html>