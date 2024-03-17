<?php

declare(strict_types=1);

function get_username(object $pdo, string $username){

$query ="SELECT username FROM users WHERE username = :username";
$stmt =  $pdo->prepare($query);
$stmt ->bindparam(':username', $username, PDO::PARAM_STR);
$stmt ->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

return $result;
}

function get_email(object $pdo, string $email){

    $query ="SELECT email FROM users WHERE email = :email;";
    $stmt =  $pdo->prepare($query);
    $stmt ->bindparam(":email", $email);
    $stmt ->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result;
    }

    function validate_password(string $pwd) {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{6,}$/', $pwd)) {
            return false;
        }
        return true;
    }
    
    function is_usersQuery_exceeded(string $usersQuery) {
        if (strlen($usersQuery) > 500) {
            return true;
        }
        return false;
    }
    
    function confirm_password_match(string $pwd, string $confirm_password) {
        return $pwd === $confirm_password;
    }

    function set_user(object $pdo, string $firstname, string $lastname, string $username, string $phone, string $email, string $usersQuery, string $password, string $confirm_password) 
{
    $query = "INSERT INTO users (firstname, lastname, username, phone, email, usersQuery, pwd, confirm_password) VALUES (:firstname, :lastname, :username, :phone, :email, :usersQuery, :pwd, :confirm_password)";
    $stmt = $pdo->prepare($query);
    $options = [
        'cost' => 12
    ];
    $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
    
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":usersQuery", $usersQuery);
    $stmt->bindParam(":pwd", $hashedpwd);
    $stmt->bindParam(":confirm_password", $confirm_password);

    $stmt->execute();
}
