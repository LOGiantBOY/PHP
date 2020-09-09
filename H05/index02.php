<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h1>Selecteer welke dieren je wilt zien</h1>
<form action="index02Processing.php" method="get">
    <div class="form-group">
        <select multiple class="form-control" name="animalnames[]" id="animalnames">
            <option value="dog">Hond</option>
            <option value="cat">Kat</option>
            <option value="snake">Slang</option>
            <option value="snail">Slak</option>
            <option value="panda">Panda</option>
        </select>
    </div>
    <button class="btn btn-primary">SHOW!(dieren)</button>
</form>
</body>
</html>