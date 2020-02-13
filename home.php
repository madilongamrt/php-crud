<?php

session_start();

if(isset($_SESSION['username'])){
    
    $_SESSION['msg'] = "you must login to view this";
     header('location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
     header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home page</title>
</head>
<body>
    <h1>This is home page</h1>
    
    <?php if(isset($_SESSION['success'])) : ?>
    
    <div>
        <h3>
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            
            ?>
        </h3>
    </div>
    
    <?php endif ?>
    
    <?php if(isset($_SESSION['username'])) : ?>
    
    <h3>wlcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    
    <botton><a href="index.php?logout='1"></a></botton>
    
    <?php endif ?>
</body>
</html>


