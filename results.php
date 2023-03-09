<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $textArray = explode(' ', $_POST['text']);
    foreach($textArray as &$word) {
        if ($word == $_POST['badword']) {
            $word = '***';
        };
    };
    $censuredText = implode(" ", $textArray);
    ?>
    Original Text: <?= $_POST['text'] ?><br>
    Censured Text: <?= $censuredText ?><br>


</body>
</html>