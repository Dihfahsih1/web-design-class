
<?php $activePage = 'home';?>
<html>
    <head>
        <title>Index Page</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .card-img-overlay{
                background: rgba(0, 0, 0, 0.881);
                color:white;
            
            }
            .btn-bg-image{
                background: url('https://img.freepik.com/free-photo/red-white-cat-i-white-studio_155003-13189.jpg?t=st=1721912071~exp=1721915671~hmac=240b6c00f74f675b6c16e757472aea3292d609e8518cd0a58c09443131849c99&w=360') no-repeat center center;
                background-size: cover;
                color:white;
                border: none;
                padding: 10px 20px;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
                <div class="row bg-dark">
                    <!-- Menu Row -->
                    <?php
                    include("nav.html");
                ?> 
                </div>

                <div class="row">
                    <a href="pets.html">
                        <img class="img-fluid" src="images/pets/home.jpg" alt="Cat Family">
                    </a>
                    
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="pets.html" style="text-decoration: none; color: black;">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pets are not cool</h4>
                                </div>
                                
                                    <img src="images/pets/Cats.png" alt="" class="card-img-top">

                                <div class="card-body">
                                    <p>
                                        
                                        But often, the planning is done in isolation. The copy is written in a Google Doc, the images are stored in a Dropbox folder and the Sitemap resides in a spreadsheet.
                                    </p>
                                </div>
                                <?php
                                    include("functions.php");
                                ?>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary">
                                        <a href="pets.html" style="text-decoration: none; color: white;">Read More</a>
                                    </button>
                                    
                                </div>
                            </div>
                        </a>
                        
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <img src="images/pets/home.jpg" class="card-img" alt="">
                            <div class="card-img-overlay">
                                <div class="card-title">
                                    Pets are cool to some people
                                </div>
                                <p class="card-text">
                                    It's hard for anyone on the team to see how it all fits together.
                                </p>
                                <p class="card-text">
                                    This template is part of the Website Design collection.
                                </p>
                            </div>

                            
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-bg-image">
                               Click Me
                            </button>
                            
                        </div>
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