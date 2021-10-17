    <?Php 
        $title = 'Index';
        include 'includes/header.php'?>


    <!-- Basic HTML -->
    <h1>Welcome!</h1>

    <?php
        echo ' On this journey of learning PHP';
        echo '<br/>';
        echo "Have an open mind and you'll be fine";
    ?>


    <?php 
        //declare variable
        $name = "Allister Messam";
        $age = "40";
        // echo varibable
        echo $name;
        echo "<h3>Student name is: $name </h3>";
        echo "<br/>";
        echo "<h3>Student's age: $age </h3>";
       // When using a variable put a dot in front of the variable to attach what's on the left
      //and another at the end to attach what's on the right when using single quotation marks.     
        
    
    ?>

    <?php require 'includes/footer.php' ?>



