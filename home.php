<?php
    require 'db_con.php';
    session_start();

    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
?>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <h2>Welcome ,<?php echo $email;?></h2>
    </body>
</html>