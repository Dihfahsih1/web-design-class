<?php
    include('db_connect.php');

    //sql query to select all pets
    $query = "SELECT * FROM registration";

    //execute the query
    $result = mysqli_query($connection, $query);

    //check if there are any results in the table
    if(mysqli_num_rows($result) >0){
        //Fetch and display the data
        while($row =mysqli_fetch_assoc($result)){
            echo "<ul> <li>"  .$row['pet_name'] . "</li> </ul>" "<br>";
        }
    }

?>