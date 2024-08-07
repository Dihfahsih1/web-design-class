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
            <?php
                include("nav.html");
            ?> 
        </div>
        <?php
                include('db_connect.php');

                //sql query to select all pets
                $limit = 15;
                $query = "SELECT * FROM registration LIMIT $limit";

                //execute the query
                $result = mysqli_query($connection, $query);
            ?>
        <div class="row mt-4">
        <button class="btn-sm btn-primary"><a href="create_pets.php" style="color:white; text-decoration:none">Creat Pets</a></button>
            <table id="table" class="table table-striped table-bordered">

                <caption>A table showing Pets</caption>
                <!-- <tr>: Table row -->
                    <tr class="table-primary">
                        <th class="th">Name</th> <!-- <th>: Table header cell -->
                        <th class="th">Breed</th>
                        <th class="th">Weight</th>
                        <th class="th">Color</th>
                        <th class="th">Consumption Rate</th>
                        <th class="th">Actions</th>
                    </tr>
                <tbody>
                    <?php
                          //check if there are any results in the table
                        if(mysqli_num_rows($result) > 0){
                            //Fetch and display the data
                            while($row =mysqli_fetch_assoc($result)){
                        ?> 
                        <!-- Put the retrieved data in a row -->
                            <tr  class="table-success">
                                <td class="td"><?php echo $row['pet_name'];?></td> <!-- <td>: Table data cell -->
                                <td class="td"><?php echo $row['pet_breed'];?></td>
                                <td class="td"><?php echo $row['pet_weight'];?></td>
                                <td class="td"><?php echo $row['pet_color'];?></td>
                                <td class="td"><?php echo $row['consumption_rate'];?></td>
                               
                                <td class="td"><button class="btn btn-success"> Edit</button> | <button class="btn btn-danger"> Delete</button></td>
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


    
    <?php
        include('js.html');
       ?>
</body>
</html>