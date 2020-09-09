<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>h3</title>
    <style>
        img {
            display: block;
        }
    </style>
</head>
<body>

<?php
$lionimages = array(
    'lion1.jpg',
    'lion2.jpg',
    'lion3.jpg',
    '4.jpg',
    'lion5.jpg',
    'lion6.jpg',
    'lion7.jpg',
    'lion8.jpg',
    'lion9.jpg',
    'lion10.jpg',
);
$teller = 1;
foreach ($lionimages as $images) {
    echo '<img src="img/'. $images .'" alt="lion '. $teller .'">';
    $teller++;
}

?>
</body>
</html>