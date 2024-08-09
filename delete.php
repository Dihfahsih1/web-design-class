<?php
    include("db_connect.php");

    // get the item ID from the URL
    $item_id = isset($_GET['param']) ? intval($_GET['param']) : 0;

    //query to delete the ID from the table
    $query = "DELETE FROM registration WHERE ID =$item_id";
    
    if(mysqli_query($connection, $query)){
        header("Location: display.php?status=delete");
       
    }
    else{
        echo "There was a problem in query or connection";
    }
?>