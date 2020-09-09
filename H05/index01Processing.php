<?php

if (isset($_POST['naam']) && !empty($_POST['naam'])) {
    $naam = $_POST['naam'];

} else {
    echo 'Let op geen naam ingevuld!<br>';
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo 'Let op geen e-mail ingevuld!<br>';
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password'];

} else {
    echo 'Let op geen wachtwoord ingevuld!<br>';
}

if (!isset($naam) || !isset($email) || !isset($password)) {
    exit("het script is gestopt");
}

echo "<br>je hebt de volgende gegevens ingevuld:<br>";
echo "Naam: {$naam}<br>";
echo "E-mail: {$email}<br>";
echo "Wachtwoord: {$password}<br>";