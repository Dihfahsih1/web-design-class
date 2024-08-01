<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {

                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];
                $email_address = $_POST['email'];
                $dob = $_POST['birth_date'];
                $mobile = $_POST['tele'];

                ?>
                <div class="card">
                    <div class="card-body bg-success">
                        <h3 class="card-title"> User Information </h3>
                        <p class="card-text"><b> First Name: </b> <?php echo $fname; ?></p>
                        <p class="card-text"> Last Name: <?php echo $lname ; ?></p>
                        <p class="card-text"> Email:  <?php echo $email_address ; ?></p>
                        <p class="card-text"> Date of Birth: <?php echo $dob ; ?></p>
                        <p class="card-text"> Telephone: <?php echo $mobile ; ?></p>
                        </div>

                    </div>
                </div>
            <?php
                }
                else{
                    echo "You have not created the account yet";
                }
            ?>
            <!-- Content Row -->
             <div class="col-lg-6">
                <h4>Contact Us</h4>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="form-group">
                        <label for="first_name" >First Name </label>
                        <input name="first_name"  type="text" class="form-control mb-2" required>

                        <label for="last_name">Second Name </label>
                        <input name="last_name"  type="text" class="form-control mb-2">

                        <label for="email">Email Address </label>
                        <input name="email"  type="email" class="form-control mb-2" >

                        <label for="birth_date"> Date of Birth </label>
                        <input name="birth_date"  type="date" class="form-control mb-4">

                        <label for="tele"> Telephone Number </label>
                        <input name="tele"  type="number" class="form-control mb-2" required>

                        <button type="submit" class="btn btn-primary">Create Account</button>

                    </div>                    
                </form>
             </div>

             <div class="col-lg-6">
                <h4>Our Location</h4>
                <img src="images/location.PNG" class="img-fluid" alt="Our Location">
                
             </div>
            
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