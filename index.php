<?php

    require_once("store.php");

    $users = $store->getUsers();

    foreach($users as $user){
        echo $user['first_name']." ".$user['last_name']." ".$user['email']."<br/>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Php Store</title>
</head>
<body>
<!-- <h1>You are so selosa but iloveyouu so much Langga</h1> -->
    
</body>
</html>