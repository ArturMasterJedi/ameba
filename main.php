<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Амёбы в стакане</title>
</head>
<body>
<?php
function amebaSpawn(){
    $ameba = 1;
    $result = 0;
    $time = 60;
    for ($i = 0; $i < 60; $i++){
        $result+=($ameba*2);
    }

    $newAmb = 2;
    if ($newAmb > 0){
        $result = $time/$newAmb;
    }
    return $result;
}
echo amebaSpawn();
?>
</body>
</html>