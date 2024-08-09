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
        $avatar_tmp_name=$_FILES['avatar']['tmp_name'];
        $avatar_data = file_get_contents($avatar_tmp_name);
        $sql="INSERT INTO registration(pet_name,pet_breed, pet_weight,pet_color, consumption_rate, avatar) VALUES(?,?,?,?,?,?)";


        //prepare statement
        if ($stmt = mysqli_prepare($connection, $sql)){

            #bind parameters
            mysqli_stmt_bind_param($stmt, "ssisib", $name, $breed_name, $weight, $color,$rate,$avatar_data);
            mysql_stmt_send_long_data($stmt, 'b',$avatar_data);
            #execute the statement
            mysqli_stmt_execute($stmt);
        }

        //header() redirects the user to another page specified in the location
        header("Location: display.php?status=success");

    }

    else{
        echo "This page can not be accessed using the get method";
    }
?>