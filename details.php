<?php
    include("db_connect.php");


    // get the item ID from the URL
    $item_id = isset($_GET['param']) ? intval($_GET['param']) : 0;

    //Fetch item details from the database
    $query = "SELECT * FROM registration WHERE ID =$item_id";

    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)> 0){
        $item=mysqli_fetch_assoc($result);
       
    }
    else{
        echo "There is no item found with that ID";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Details Page</title>
</head>

<body>
    <div class="container">
        <div class="row bg-dark">
            <?php include("nav.html"); ?> 
        </div>
        <h3>The details of <?php echo $item['pet_name']; ?></h3>
        <img src="images/pets/Cats.png">
        <ul>
            <li><b>Name: </b><?php echo $item['pet_name']; ?></li>
            <li><b>Breed: </b><?php echo $item['pet_breed']; ?></li>
            <li><b>Color: </b><?php echo $item['pet_color']; ?></li>
            <li><b>Weight: </b><?php echo $item['pet_weight']; ?></li>
            <li><b>Rate: </b><?php echo $item['consumption_rate']; ?></li>
             
        </ul>
       
        <div class="row mt-4">
        
        </div>

        <div class="row">
            <hr />
            <!-- The Footer row -->
            All rights reserved || Copyright@2024
        </div>
    </div>

  
    <?php include('js.html'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
