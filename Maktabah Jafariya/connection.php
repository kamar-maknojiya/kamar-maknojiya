<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>

<body>
    <?php

    $servername = "localhost:3308";
    $user = "root";
    $password = "";
    $db = "admission";

    $conn = mysqli_connect($servername,$user,$password,$db);

        
    ?>

</body>

</html>