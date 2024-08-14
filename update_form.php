<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Update Pet Form</title>
</head>
<body>
<div class="container">
        <div class="row bg-dark">
            <!-- Menu Row -->
            <?php
                    include("nav.html");
                ?> 
        </div>

        <div class="row mt-4">
       
            <!-- Content Row -->
             <div class="col-lg-6">
                <?php
                include('db_connect.php');
                    if (isset($_GET['status'])){
                        if ($_GET['status'] == 'success'){
                            echo "<p style='color:green'> The pet has been created successfully!</p>";
                        }
                    }
                ?>
                <h4>Update a pet Form</h4>
                <?php 
                    // get the item ID from the URL
                    $item_id = $_GET['param'];

                    $query = "SELECT * FROM registration WHERE ID =$item_id";

                    // Execute the query
                    $result = mysqli_query($connection, $query);
                    if(mysqli_num_rows($result) > 0){
                        // Fetch and organize your data
                        $row = mysqli_fetch_assoc($result);
                ?> 
                <form action="process_update.php" method="POST">
                    <div class="form-group">
                        <!-- Hidden field to store item ID -->
                        <input name="id"  type="hidden" value="<?php echo $row['ID'];?>">

                        <label for="name" >Pet's Name </label>
                        <input name="pets_name"  type="text" class="form-control mb-2" value="<?php echo $row['pet_name'];?>">

                        <label for="breed">Breed </label>
                        <input name="breed"  type="text" class="form-control mb-2" value="<?php echo $row['pet_breed'];?>">

                        <label for="weight">Weight(KG) </label>
                        <input name="weight"  type="number" class="form-control mb-2" value="<?php echo $row['pet_weight'];?>" >

                        <label for="color">Color </label>
                        <input name="color"  type="text" class="form-control mb-4" value="<?php echo $row['pet_color'];?>">

                        <label for="rate"> Food Consumption rate(%) </label>
                        <input name="rate"  type="number" class="form-control mb-2" value="<?php echo $row['consumption_rate'];?>">

                        <button type="submit" class="btn btn-primary">Update Pet</button>

                    </div>                    
                </form>

                <?php
                    }
                    else{
                        echo "No records with that ID";
                    }
                mysqli_close($connection);
                ?>
             </div>

             
            
        </div>

        <div class="row">
            <hr />
            <!-- The Footer row -->
             All rights reserved || Copyright@2024

        </div>
    </div>
    
</body>
</html>