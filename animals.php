<!--
 * Project:	    A-03 : ANIMAL-SERVE – WEBSITE DEVELOPED USING CGI AND PHP
 * Author:	    Hoang Phuc Tran - 8789102
                Canie Phung - 6983324
 * Date:		October 10, 2022
 * Description: A php file for the php-zoo.html. It is used to display an salutation, 
 an image, and a short information about the selected animal
 */
-->
<!DOCTYPE html>
<html>
    <head>
    <title>Animal Information</title>
    </head>

    <body style="background-color:#e6f0e6">
    <?php

    // Read the value from the form 
    $nameInput = $_POST['nameInput'];
    $animalInput = $_POST['animalInput'];

    // Check if the path exists or not
    if(file_exists("./theZoo/$animalInput.txt") == true)
    {
        // Open the file
        $file = fopen("./theZoo/$animalInput.txt", "r");

        // Check if the file can open
        if($file)
        {
    ?>
           
            <!-- Display an salutation -->
            <h3 align="center">Hello, <?php echo $nameInput?>, Here are detail information about <?php echo $animalInput?>! </h2>
             </br></br></br>
            
    <?php
        
             
            // Read the file line by line
            while (($lineRead = fgets($file)) !== false) 
			{
                echo $lineRead;
			}

            // Close the file
            fclose($file);
        }
        // If the file cannot open
        else
        {
            die("Cannot open $animalInput.txt");
            fclose($file);
        }
    }
    // If the path does not exist
    else
    {
        echo "The HTML cannot load because the file path does not exit.";
        echo "<br>";
        echo "Please check the file path again!";
    }
    ?>
    
    </body >
</html>