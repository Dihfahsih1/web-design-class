<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Collect items from the POST method
    $id = $_POST['id'];
    $name = $_POST['pets_name'];
    $breed_name = $_POST['breed'];
    $weight = $_POST['weight'];
    $color = $_POST['color'];
    $rate = $_POST['rate'];
    

    # Insert into the database query
    $sql = "UPDATE registration  SET pet_name=?, pet_breed=?, pet_weight=?, pet_color=?, consumption_rate=? WHERE ID=$id";

    // Prepare the statement
    if ($stmt = mysqli_prepare($connection, $sql)) {

        # Bind parameters 
        mysqli_stmt_bind_param($stmt, "ssiss", $name, $breed_name, $weight, $color, $rate);

      
        # Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            header("Location: display.php?status=update");
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        # Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo "This page cannot be accessed using the GET method";
}

# Close the connection
mysqli_close($connection);
?>