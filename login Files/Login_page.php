<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Login form</title>
    <style>

body {
    margin: 50px auto;
    text-align: center;
    width: 800px;
    font-family: "lato";
}
h3 {
    font-family: 'Passion One';
    font-size: 2rem;
   
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    padding: 10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}

button {
    padding: 10px;
    font-size: 1.5rem;
    font-weight: 100;
    background: black;
    color: white;
    border: none;}
    </style>
</head>

<body>

<div>

<h3> Login Page </h3>

<div class="form">
<form id="login" action="login_post.php" method="post">
  <label class="label" for="fullname">Full Name:</label><br>
  <input class="input" type="text" id="fullname" name="fullname" value=""><br>

  <label class="label" for="email">Email:</label><br>
  <input class="input" type="text" id="email" name="email" value=""><br>

  <label for="password">password</label><br>
  <input class="button" type="submit" value="Submit">
</form> 
 </form>




</div>



</div>

    <?php
$fullname=$_POST["full name"];
$email=$_POST["email"];
$password=$_POST["password"];

if(($fullname=="root")&&($password=="root"))
header("location:landing_page.php");
else{?>
<script>alert("invalid");</script>
<?php


}
?>

</body>
</html>