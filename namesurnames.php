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
    //хранилище данных
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

<!-- снизу вывод данных, формула действия -->

    <?php foreach ($people as $man):?>
        <h2><? echo $man["name"]?> </h2>
        <p><? echo $man["surname"]?> </p>
    <?php endforeach;?>

</body>
</html>