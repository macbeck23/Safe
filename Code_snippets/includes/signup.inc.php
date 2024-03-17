<?php

if($_SERVER['REQUEST_METHOD'] === "POST"){

        $firstname =$_POST["firstname"];
        $lastname =$_POST["lastname"];
        $username =$_POST["username"];
        $phone =$_POST["phone"];
        $email =$_POST["email"];
        $usersQuery =$_POST["usersQuery"];
        $pwd =$_POST["pwd"];
        $confirm_password =$_POST["confirm_password"];

try {
   
    require_once 'dbh_inc.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_contr.inc.php';

    //error handlers
$errors =[];

    if (is_input_empty($firstname, $lastname, $username, $phone, $email, $usersQuery, $pwd, $confirm_password)) {
         $errors["empty_input"]="Please fill in all fields";
        }
    if (is_email_invalid( $email)) {
        $errors["invalid_email"]="Email is not valid";
   
    }
    if (is_username_taken( $pdo, $username)){
        $errors["username_taken"]="Username already taken!";

    } 
    if (is_email_registered($pdo, $email)) {
        $errors["email_used"]="This email is already registered";
     
    }
    if (is_usersQuery_exceeded($usersQuery)) {
        $errors["usersQuery_exceeded"] = "Your query must be 500 characters or less";
    }

    // Error message for password not matching the requirements
    if (!validate_password($pwd)) {
        $errors["invalid_password"] = "Password must contain at least one number, one uppercase letter, one lowercase letter, one special character, and be at least 6 characters long";
    }

    // Error message for password and confirm_password not matching
    if ($pwd !== $confirm_password) {
        $errors["password_mismatch"] = "Passwords do not match";
    }

   
    require_once 'config-session.inc.php';

    if($errors){
        $_SESSION["errors_signup"] =$errors;

        
        header("location:../index.php");
        die();
    }

    create_user($pdo, $firstname, $lastname, $username,  $phone,  $email, $usersQuery,  $pwd, $confirm_password) ;

    header("location:../index.php?signup=success");

    $pdo = null;
    $stmt = null;
    

}  catch (PDOException $e) {
    die("Query failed ". $e->getMessage());
}
}else {
    header("location:../index.php");
    die();
}
