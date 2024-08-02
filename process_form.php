<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        #collect items from the post method that were sent to the server
        $name=$_POST['pets_name'];
        $breed_name=$_POST['breed'];
        $weight=$_POST['weight'];
        $color=$_POST['color'];
        $rate=$_POST['rate'];

        #what should i do with this data?
        #display the data.

        echo "<h2> Contact form submission</h2>";
        echo "Pet's Name:".$name."<br>";
        echo "Pet's Breed:".$breed_name."<br>";
        echo "Pet's Weight:".$weight."<br>";
        echo "Pet's Color:".$color."<br>";
        echo "Pet's Consumption Rate:".$rate."<br>";

    }

    else{
        echo "This page can not be accessed using the get method";
    }
?>