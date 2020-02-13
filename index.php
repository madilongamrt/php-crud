

<!DOCTYPE html>

<?php include("server.php"); ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Registrer</h2>
        </div>
        <form action="login.php" method="post">
            
            <div>
                <label for="username">Username :</label>
                <input type="text" name="username" required>
            </div>
            

            <div>
                <label for="password">Password :</label>
                <input type="password" name="password_1" required>
            </div>
            
    
            
            <button type="submit" name="login">Submit</button>
            
            <p not a user? > <a href="register.php"><b>Register</b></a> </p>
        </form>
    </div>
</body>
</html>