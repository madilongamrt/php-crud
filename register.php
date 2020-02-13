<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>register</h2>
        </div>
        <form action="register.php" method="post">
           
            <?php include('error.php') ?>
            
            <div>
                <label for="username">Username :</label>
                <input type="text" name="username" required>
            </div>
            
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" required>
            </div>
            
            <div>
                <label for="password">Password :</label>
                <input type="password" name="password_1" required>
            </div>
            
            <div>
                <label for="password">Conform Password :</label>
                <input type="password" name="password_2" required>
            </div>
            
            <button type="submit" name="register">Submit</button>
            
            <p Already a user? > <a href="login.php"><b>Login</b></a> </p>
        </form>
    </div>
</body>
</html>