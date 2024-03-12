<?php

declare(strict_types=1);

function is_input_empty(string $firstname, string $lastname, string $username, $phone, string $email, string $usersQuery, string $pwd, string $confirm_password) {
    if(empty($firstname) || empty ($lastname) || empty ($username) || empty($phone) || empty($email) || empty($usersQuery) || empty($pwd) ||empty($confirm_password)) {
        return true;
}
else {
    return false;
} 
}

function is_email_invalid(string $email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
}
else {
    return false;
} 
}

function is_username_taken(object $pdo, string $username) {

    if(get_username($pdo,  $username)) {
        return true;
}
else {
    return false;
} 
}

function is_email_registered(object $pdo, string $email) {

    if(get_email($pdo, $email)) {
        return true;
}
else {
    return false;
} 


function validate_password(object $pdo, string $password): bool {
    $result = preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{6,}$/', $password);
    return (bool)$result;
}

function is_usersQuery_exceeded(object $pdo, string $usersQuery): bool {
    $result = strlen($usersQuery) > 500;
    return (bool)$result;
}

function confirm_password_match(object $pdo, string $password, string $confirm_password): bool {
    $result = $password === $confirm_password;
    return (bool)$result;
}
}function create_user(object $pdo, string $firstname , string $lastname, string $username, string $phone, string $email, string $usersQuery, string $pwd, string $confirm_password) 
{
set_user($pdo, $firstname , $lastname,  $username,  $phone, $email, $usersQuery, $pwd, $confirm_password);
   
}

