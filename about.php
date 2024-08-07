<?php $activePage = 'about';?>
<html>
    <head>
        <title>About Page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>

        <div class="container">
            <div class="row bg-dark">
                <?php
                    include("nav.html");
                ?> 
            </div>
        </div>
        
        <h3>HTML LISTS</h3>
        <h5>Un oredered lists</h5>
        <ul style="list-style-type:none;">
            <li>
                Bananas
            </li>
            <li>
                Cherries
            </li>
            <li>
                Berries
            </li>
            <li>
                Oranges
            </li>
        </ul>

        <h5>Oredered lists</h5>
        <ol type="i">
            <li>
                Bananas
            </li>
            <li>
                Cherries
            </li>
            <li>
                Berries
            </li>
            <li>
                Oranges
            </li>
        </ol>

        <?php
            include("functions.php");
        ?>

        <video width="600"  height="500" controls poster="images/pets/Cats.jpg" muted>
            <source src="videos/worship.mp4" type="video/mp4">
            <track src="lyrics.vtt" kind="subtitles" srclang="en" label="English"></track>

        </video>
        <iframe width="300" height="300" src="https://www.youtube.com/embed/Rq9BDHZX3Vg" title="How Hibo became a Software Engineer and landed a job within few months" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <?php
        include('js.html');
       ?>
    </body>
</html>