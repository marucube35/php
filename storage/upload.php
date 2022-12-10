<?php

if (isset($_POST['submit'])) {
    $permitted_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $file_name = $_FILES['upload']['name'];
    if (!empty($file_name)) {
        // Get file information
        $file_size = $_FILES['upload']['size'];

        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_name = time() . '-' . $file_name; // Generate new name for file to avoid overwriting

        $destination_path = "uploads/${file_name}";

        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(end($file_extension));

        // Check if file extension is permitted
        if (in_array($file_extension, $permitted_extensions)) {
            // Check if file size is less than 1MB
            if ($file_size < 1000000) {
                move_uploaded_file($file_tmp_name, $destination_path);
                echo "<p style='color: green;'>File uploaded successfully</p><br/>";

                // Remove file from server
                $_FILES['upload'] = '';
            } else {
                echo "<p style='color: red;'>File size is too large</p><br/>";
            }
        } else {
            echo "<p style='color: red;'>Invalid file type</p><br/>";
        }
    } else {
        echo "<p style='color: red;'>No file selected, please choose a file to upload</p><br/>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <!-- enctype attribute="mmultipart/form-data" splits file into multiple parts -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <label for="upload">Choose your image to upload</label></br>
        <input type="file" name="upload" id="upload" /></br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>

</html>