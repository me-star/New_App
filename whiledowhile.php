<?Php 
        $title = 'WhiledoWhile';
        include 'includes/header.php'?>

<body>
    <h1> While Loop</h1>
    <?php
        $grade = 0;
        //Infinite Loop
        //while($grade < 10){
        //    echo "<p> I AM LESS THAN 10!</P>";
        //}
        //Pre-Condition Loop
        while($grade <10){
            echo "<p> I AM LESS THAN 10!</P>";
            $grade++;
        }
        
        echo "Exited Loop!"
    ?>


    <h1> Do-While Loop</h1>
    <?php
        //Post Condition Loop
        $grade = 0;
        do{
            echo "<p> I AM Do while LOOP</P>";
           $grade++;
        }
        while($grade <10);

        echo "Exited Loop!"


    ?>




<?Php require 'includes/footer.php'?>