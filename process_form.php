<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Collect items from the POST method
    $name = $_POST['pets_name'];
    $breed_name = $_POST['breed'];
    $weight = $_POST['weight'];
    $color = $_POST['color'];
    $rate = $_POST['rate'];
    
    # Collect avatar data
    $avatar_tmp_name = $_FILES['avatar']['tmp_name'];
    $avatar_data = file_get_contents($avatar_tmp_name);

    # Insert into the database query
    $sql = "INSERT INTO registration (pet_name, pet_breed, pet_weight, pet_color, consumption_rate, avatar) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    if ($stmt = mysqli_prepare($connection, $sql)) {

        # Bind parameters (excluding the BLOB data)
        mysqli_stmt_bind_param($stmt, "ssissb", $name, $breed_name, $weight, $color, $rate, $null);

        # Send the BLOB data
        mysqli_stmt_send_long_data($stmt, 5, $avatar_data);

        # Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            header("Location: display.php?status=success");
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


<!-- Key Changes:
Binding the BLOB:

The mysqli_stmt_bind_param function is used to bind the parameters, including a placeholder for the BLOB.
The placeholder for the BLOB data is passed as $null, and then the BLOB data is sent separately using mysqli_stmt_send_long_data.


Use "ssissb" in mysqli_stmt_bind_param where the last b is for BLOB data, and pass $null initially.

Correct the function to mysqli_stmt_send_long_data.
