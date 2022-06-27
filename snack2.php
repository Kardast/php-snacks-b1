<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


if (strlen($name) > 3) {

    $message1 = "ok lunghezza";

    $position_at = strpos($mail, '@');

    if ($position_at !== false) {

        $message2 = "ok chiocciola";

        $position_dot = strpos($mail, '.', $position_at);

        if ($position_dot !== false) {

            $message3 = "ok chiocciola e punto";

            $age_number = is_numeric($age);

            if ($age_number !== false) {

                $message4 = "ok numero età";

                $result = "Accesso Riuscito";
            } else {

                $message4 = "nope numero età";

                $result = "Accesso Negato";
            }

        } else {

            $message3 = "nope chiocciola e punto";
        }
    } else {

        $message2 = "nope chiocciola";
    }

} else{
    $message1 = "nope lunghezza";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><?= var_dump($name)?></p>
    <p><?= var_dump($mail)?></p>
    <p><?= var_dump($age)?></p>
    <h4><?= $message1?></h4>
    <h4><?= $message2?></h4>
    <h4><?= $message3?></h4>
    <h4><?= $message4?></h4>

    <h1><?= $result?></h1>


</body>
</html>