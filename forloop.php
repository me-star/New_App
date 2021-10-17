<?Php 
        $title = 'ForLoop';
        include 'includes/header.php'?>
<body>
    <p style="color: red"></p>
    <h1> For Loops</h1>
    <?php
        // For Loops 
        for($count = 0; $count < 5; $count++){
            echo "<p> HELLO WORLD</p>";
        }
    
        for($count = 0; $count <5; $count++){
            echo "<p style='color: purple'>The count is: $count</p>";
        }
    
    ?>


    
<?Php require 'includes/footer.php'?>