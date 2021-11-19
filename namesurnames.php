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

    $people = [
        [
            "name" => "Omar",
            "surname" => "Hayam"
        ],
        [
            "name" => "Margerit",
            "surname" => "Tedcher"
        ]
    ];
    ?>

    <?php foreach ($human as $people):?>
        <h2><? echo $people["name"]?> </h2>
        <p><? echo $people["surname"]?> </p>
    <?php endforeach;?>

</body>
</html>