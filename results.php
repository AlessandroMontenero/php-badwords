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
    $nOfWords = count($textArray);
    $nOfChar = 0;
    foreach($textArray as &$word) {
        $nOfChar = $nOfChar + strlen($word);
        if (strtolower($word) == strtolower($_POST['badword'])) {
            $word = str_repeat('*', strlen($word));
        };
    };
    $censuredText = implode(" ", $textArray);
    
    ?>


    Original Text: <?= $_POST['text'] ?> (<?= $nOfWords ?> words, <?= $nOfChar ?> characters)<br>
    Censured Text: <?= $censuredText ?><br>


</body>
</html>