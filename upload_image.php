<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        #content {
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
            padding: 20px;
        }
        img {
            margin: 5px;
            width: 350px;
            height: 250px;
        }
    </style>
</head>

<?php
include('db_connect.php');

if (isset($_POST['uploadfile'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = $_SERVER['DOCUMENT_ROOT'] . "/july-web/images/" . $filename;

    if (move_uploaded_file($tempname, $folder)) {
        $sql = "INSERT INTO pets_image (filename) VALUES ('$filename')";
        if (mysqli_query($connection, $sql)) {
            echo "<h3 style='color:green'>Image uploaded successfully!</h3>";
        } else {
            echo "<h3>Failed to insert data into database!</h3>" . mysqli_error($connection);
        }
    } else {
        echo "<h3>Failed to upload image!</h3>";
        echo "<p>Error details: " . print_r(error_get_last(), true) . "</p>";
    }
}
?>

<body>
    <div id="content">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" required />
            </div>
            <button class="btn btn-primary" type="submit" name="uploadfile">UPLOAD</button>
        </form>
    </div>

    <div id="display-image">
    <?php
        $query = "SELECT filename FROM pets_image";
        $result = mysqli_query($connection, $query);
        if ($result) {
            while ($data = mysqli_fetch_assoc($result)) {
                $imagePath = "./images/" . $data['filename'];
                echo file_exists($imagePath) ? "<img src='$imagePath' alt='Uploaded Image'>" : "<p>Image not found: $imagePath</p>";
            }
        } else {
            echo "<h3>Failed to retrieve images!</h3>";
        }
    ?>
    </div>
</body>

</html>
