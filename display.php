<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Table</title>
</head>

<body>
    <div class="container">
        <div class="row bg-dark">
            <?php include("nav.html"); ?> 
        </div>
        <?php
            include('db_connect.php');

            // SQL query to select all pets
            $limit = 15;
            $query = "SELECT * FROM registration LIMIT $limit";

            // Execute the query
            $result = mysqli_query($connection, $query);
        ?>
        <div class="row mt-4">
        <?php
                    if (isset($_GET['status'])){
                        if ($_GET['status'] == 'success'){
                            echo "<p style='color:green'> The pet has been created successfully!</p>";
                        }
                    }
                ?>
            <button class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createPetModal">Create Pets</button>
            <table id="table" class="table table-striped table-bordered">
                <caption>A table showing Pets</caption>
                <tr class="table-primary">
                    <th class="th">Name</th>
                    <th class="th">Breed</th>
                    <th class="th">Weight</th>
                    <th class="th">Color</th>
                    <th class="th">Consumption Rate</th>
                    <th class="th">Actions</th>
                </tr>
                <tbody>
                    <?php
                        // Check if there are any results in the table
                        if(mysqli_num_rows($result) > 0){
                            // Fetch and display the data
                            while($row = mysqli_fetch_assoc($result)){
                    ?> 
                        <!-- Put the retrieved data in a row -->
                        <tr class="table-success">
                            <td class="td"><?php echo $row['pet_name']; ?></td>
                            <td class="td"><?php echo $row['pet_breed']; ?></td>
                            <td class="td"><?php echo $row['pet_weight']; ?></td>
                            <td class="td"><?php echo $row['pet_color']; ?></td>
                            <td class="td"><?php echo $row['consumption_rate']; ?></td>
                            <td class="td">
                                <button class="btn btn-success">Edit</button> | 
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="row">
            <hr />
            <!-- The Footer row -->
            All rights reserved || Copyright@2024
        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="createPetModal" tabindex="-1" aria-labelledby="createPetModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPetModalLabel">Create Pets Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                        if (isset($_GET['status']) && $_GET['status'] == 'success') {
                            echo "<p style='color:green'>The pet has been created successfully!</p>";
                        }
                    ?>
                    <form action="process_form.php" method="POST">
                        <div class="form-group">
                            <label for="name">Pet's Name</label>
                            <input name="pets_name" type="text" class="form-control mb-2" required>

                            <label for="breed">Breed</label>
                            <input name="breed" type="text" class="form-control mb-2">

                            <label for="weight">Weight (KG)</label>
                            <input name="weight" type="number" class="form-control mb-2">

                            <label for="color">Color</label>
                            <input name="color" type="text" class="form-control mb-4">

                            <label for="rate">Food Consumption Rate (%)</label>
                            <input name="rate" type="number" class="form-control mb-2" required>

                            <button type="submit" class="btn btn-primary">Create Pet</button>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('js.html'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
