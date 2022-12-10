<?php

echo "<h1> Super globals </h1> <br/>";

// Three main super global variables:  $_SERVER, $_GET, $_POST

// print_r($_SERVER);

// We will use $_GET to get the query string parameter
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
echo "Name: $name <br/>";
echo "Age: $age <br/>";

// User $POST to send sensitive data to the server
// because it is not visible in the URL
$email = htmlspecialchars($_POST['email'] ?? ''); // prevent XSS
$password = htmlspecialchars($_POST['password'] ?? '');
echo "Email: $email <br/>";
echo "Password: $password <br/>";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- PHP_SELF return itself -->
    <h3>Your identity</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
        </div>
        <button type="submit">Submit</button>
    </form>
    <h3>Login to your account</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>