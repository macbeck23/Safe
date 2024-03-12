<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS for form layout */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 5px;
            width: 200px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: auto;
        }
    </style>
</head>
<body>
    
    <form action="login.php" method="post">
        <label for="userName">What is your name?</label>
        <input type="text" id="userName" name="userName">

        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname">

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        // Example of using $_POST superglobal to retrieve form data
        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $surname = $_POST['surname'];

            echo "<p>Submitted Name: $userName</p>";
            echo "<p>Submitted Surname: $surname</p>";
        }
    ?>

</body>
</html>