<?php
$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];
?>

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

<?php if (!isset($_POST['knop'])) { ?>

    <!-- formulier -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Naam: <input type="text" name="mailadres" placeholder="mailadres">
        Wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord">
        <input type="submit" name="knop" value="VERSTUUR">
    </form>

    <?php
} else {

    // input valideren
    if (!isset($_POST['mailadres']) OR empty($_POST['mailadres'])) {
        header("Location: " . $_SERVER['PHP_SELF']);
    }
    if (!isset($_POST['wachtwoord']) OR empty($_POST['wachtwoord'])) {
        header("Location: " . $_SERVER['PHP_SELF']);
    }
    // mailadres en wachtwoord opslaan in variabelen
    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];
    // loopen door een associatieve array met geldige inlog gegevens
    foreach ($users as $key => $value) {
        if ($key == $mailadres AND $value == $wachtwoord) {
            // als we een match hebben print WELKOM
            exit("Welkom!");
        }
    }
    // anders sorry geen toegang
    exit("Sorry geen toegang");

}

?>
</body>
</html>