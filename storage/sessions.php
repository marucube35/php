<?php
// Start the session to use session variables
session_start();

if (isset($_POST['submit'])) {
    // Get data from front-end
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Validation
    if ($username == "admin" &&  $password == "1") {
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        // Redirect
        header('Location: dashboard.php');
    } else {
        echo "Incorrect username/password";
    }
}

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
    <h3>Login to your account</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>