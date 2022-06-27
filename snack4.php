<?php

$newArray = [];

while (count($newArray) < 15) {
    $number = rand(1, 100);

    if (!in_array($number, $newArray)) {
        $newArray[] = $number;
    }
}
var_dump($newArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php

    for ($i=0; $i < count($newArray) ; $i++) { 
        echo "<div> {$newArray[$i]} </div>";
    }

    ?>
</body>
</html>