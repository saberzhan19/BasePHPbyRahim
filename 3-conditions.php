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

        $users = [
            [
                "name" => "Omar",
                "surname" => "Hayam",
                "role" => "admin"
            ],
            [
                "name" => "Margerit",
                "surname" => "Tedcher",
                "role" => "user"
            ],
            [
                "name" => "Sam",
                "surname" => "Adams",
                "role" => "admin"
            ],
            [
                "name" => "Harry",
                "surname" => "Tryman",
                "role" => "user"
            ]
        ];
    ?>

    <h2>Administrators</h2>
    
    <?php foreach ($users as $user):?>
        <!-- условие, если у пользователя ролe равняеться аdмин, то выводим. Надпись команды снизу -->
        <?php if($user["role"] == "admin"):?>
        
        <? echo $user["name"];?> -
        <? echo $user["name"];?> <? echo $user["role"];?> <br>
        
        <?php endif;?>

    <?php endforeach;?>

    <h2>Users</h2>
    <?php foreach ($users as $user):?>
        <!-- условие, если у пользователя ролe равняеться аdмин, то выводим. Надпись команды снизу -->
        <?php if($user["role"] == "user"):?>
        
        <? echo $user["name"];?> -
        <? echo $user["name"];?> <? echo $user["role"];?> <br>
        
        <?php endif;?>

    <?php endforeach;?>

</body>
</html>
