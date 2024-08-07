<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row bg-dark">
            <?php
                    include("nav.html");
                ?> 
        </div>
        <div class="row">
            <h1>The ugliest creatures</h1>
            <img src="images/pets/Cats.jpg" alt="cats family">
            <p>This is a cats family that people hate most</p>
        </div>
    </div>
    <?php
        include('js.html');
       ?>
</body>
</html>