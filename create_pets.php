<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Create Pets</title>
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
                    if (isset($_GET['status'])){
                        if ($_GET['status'] == 'success'){
                            echo "<p style='color:green'> The pet has been created successfully!</p>";
                        }
                    }
                ?>
                <h4>Create Pets Form</h4>
                <form action="process_form.php" method="POST">
                    <div class="form-group">
                        <label for="name" >Pet's Name </label>
                        <input name="pets_name"  type="text" class="form-control mb-2" required>

                        <label for="breed">Breed </label>
                        <input name="breed"  type="text" class="form-control mb-2">

                        <label for="weight">Weight(KG) </label>
                        <input name="weight"  type="number" class="form-control mb-2" >

                        <label for="color">Color </label>
                        <input name="color"  type="text" class="form-control mb-4">

                        <label for="rate"> Food Consumption rate(%) </label>
                        <input name="rate"  type="number" class="form-control mb-2" required>

                        <button type="submit" class="btn btn-primary">Create Pet</button>

                    </div>                    
                </form>
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