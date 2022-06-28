<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';
// utilizzando il ?? stai scrivendo: //isset($_GET['name']) ? $_GET['name'] : ''//

if (strlen($name) > 3) {

    $position_at = strpos($mail, '@');

    if ($position_at !== false) {

        $position_dot = strpos($mail, '.', $position_at);

        if ($position_dot !== false) {

            $age_number = is_numeric($age);

            if ($age_number !== false) {

                echo 'Acesso riuscito';
            } else {

                echo 'Acesso negato';
            }

        } else {

            echo 'Acesso negato';
        }
    } else {

        echo 'Acesso negato';
    }

} else{

    echo 'Acesso negato';
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
</body>
</html>