<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
        }
        tr,td {
            border: none;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        td.border {
            border: solid 1px gray;
        }
    </style>
</head>
<body>
<?php
$zwemclubs = array(
    "de Spartelkuikens" => 25,
    "de Waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
);
echo '<table>';
foreach ($zwemclubs as $clubnaam => $ledenAantal) {
    echo '<tr>';
    echo '<td class="border">' . $clubnaam . '</td>';
    echo '<td class="border">' . $ledenAantal . '</td>';
    $aanral_plaatjes = floor($ledenAantal / 5) ;
    echo '<td>';
    for ($i = 0; $i < $aanral_plaatjes; $i++) {
        echo '<img src="//unsplash.it/30" alt="zwemmer">';
    }
    echo '</td>';
    echo '</tr>';
}
echo '</table>';

?>

</body>
</html>