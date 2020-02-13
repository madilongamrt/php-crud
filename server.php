<?php
session_start();

// initializing variable
$username = "";
$email = "";


// connection



$db = mysqli_connect('localhost','root', '','practice') or die("could not connect to database");


// register user

$username = mysqli_real_escape_string($db,$_POST['username']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
$password_2= mysqli_real_escape_string($db,$_POST['password_2']);


//form validate


if(empty($username)){
    array_push($error,"Username is required");
}

if(empty($email)){
    array_push($error,"email is required");
}

if(empty($password_1)){
    array_push($error,"password 1 is required");
}

if($password_1 != $password_2){
     array_push($error,"passwords do not match");
}

// existing user
$user_check_query = "select * from user where username ='$username' or email = '$email' LIMIT 1";
$result = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] == $username){
        array_push($error,"This username already exits");
    }
     if($user['email'] == $email){
        array_push($error,"This email id already exits");
    }
    
}

// register user

if(count($error) == 0){
    $password = md5($password_1); //this will encrypt the password
    $query = "INSERT INTO user (username,email,password) values('$username','$email','$password')";
    
    mysqli_query($db,$query);
    
    $_SESSION['username']= $username;
    $_SESSION['success'] = "your login";
    
    header('location: index.php');
}



// login user

if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
}

// check error handling
if(empty($username)){
    array_push($error,"Username is required");
}

if(empty($password_1)){
    array_push($error,"password 1 is required");
}

if(count($error)== 0){
    $password = md5($password);
    
    $query = "SELECT * FROM user WHERE username ='$username'' AND password = '$password'";
    
    $result = mysqli_query($db,$query);
    
    if(mysqli_num_results($result)){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "login successfully";
        header('location: index.php');
    } else{
         array_push($error,"user error");
    }
    
}

?>





