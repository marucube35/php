<?php

require 'components/header.php';
$entry =  $errors = ['name' => '', 'email' => '', 'body' => ''];
if (isset($_POST['submit'])) {
    // Validations
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $errors[$key] = ucfirst($key) . ' is required';
        } else {
            $entry[$key] = htmlspecialchars($value);
        }
    }

    // Check if there are no errors
    $success = empty($errors['name']) && empty($errors['email']) && empty($errors['body']);
    if ($success) {
        // Create SQL statement
        $sql = "insert into feedback (name, email, body) values (?, ?, ?);";

        try {
            $statement = $connection->prepare($sql);

            // Bind data to the parameters of the SQL statement
            //* this way can avoid SQL injection
            $statement->bindParam(1, $entry['name']);
            $statement->bindParam(2, $entry['email']);
            $statement->bindParam(3, $entry['body']);

            // Execute the SQL statement
            $statement->execute();

            // Redirect to the feedback list page
            header('Location: feedback_list.php');
        } catch (PDOException $e) {
            echo "Cannot insert data into the database: "
                . $e->getMessage();
        }
    }
}
?>

<h1> Enter your feedback here </h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <!-- If there is an error, add the classname 'is-invalid' -->
        <input type="text" name="name" id="name" class="form-control
        <?php echo $errors['name'] ? 'is-invalid' : ''; ?>" placeholder="Enter your name">
        <small id="subtext" class="text-danger">
            <?php echo $errors['name']; ?>
        </small>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control
        <?php echo $errors['email'] ? 'is-invalid' : ''; ?>
        " placeholder="Enter your email">
        <small id="subtext" class="text-danger">
            <?php echo $errors['email']; ?>
        </small>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label"></label>
        <textarea class="form-control
        <?php echo $errors['body'] ? 'is-invalid' : ''; ?>
        " name="body" id="body" rows="3"></textarea>
        <small id="subtext" class="text-danger">
            <?php echo $errors['body']; ?>
        </small>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Send</button>
</form>

<?php include 'components/footer.php' ?>