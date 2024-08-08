<?php
    include('db_connect.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        #collect items from the post method that were sent to the server
        $name=$_POST['pets_name'];
        $breed_name=$_POST['breed'];
        $weight=$_POST['weight'];
        $color=$_POST['color'];
        $rate=$_POST['rate'];

        #what should i do with this data?
        #Insert into the database query
        $sql="INSERT INTO registration(pet_name,pet_breed, pet_weight,pet_color, consumption_rate) VALUES(?,?,?,?,?)";


        //prepare statement
        if ($stmt = mysqli_prepare($connection, $sql)){

            #bind parameters
            mysqli_stmt_bind_param($stmt, "ssisi", $name, $breed_name, $weight, $color,$rate);
            
            #execute the statement
            mysqli_stmt_execute($stmt);
        }

        header("Location: display.php?status=success");

    }

    else{
        echo "This page can not be accessed using the get method";
    }
?>