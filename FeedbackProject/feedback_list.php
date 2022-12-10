<?php
require "./components/header.php";

echo "<h1>Feedback list</h1>";

// Create SQL statement
$sql = "select name, email, body from feedback;";
if ($connection != null) {
    try {
        // Execute the SQL statement
        $statement = $connection->prepare($sql);
        $statement->execute();

        // Fetch the results
        $feedbacks = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Display the results
        foreach ($feedbacks as $feedback) {
            echo '<ul class="list-group">';
            echo "<li class='list-group-item'>"
                . "<p>{$feedback['name']}</p>"
                . "<p>{$feedback['email']}</p>"
                . "<p>{$feedback['body']}</p>"
                . "</li>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

include "./components/footer.php";
