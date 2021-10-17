<?Php 
        $title = 'IfStatement';
        include 'includes/header.php'?>
<body>
    <h1> If Statement</h1>
    <h3 style="color: red"></h3>
    <?php
        // An if statement is a decision making statement, and carrys out an action based on a given condition.
        echo "<h2>If Statement</h2>";

        $grade = 30;

        if($grade >= 50){
            echo "<h3 style='color: green'> YOU HAVE PASSED</h3>";
        }
        else{    
            echo "<h3 style='color: red'> YOU HAVE FAILED MISERABLY LOL!</h3>";
        }
        
        $grade = 'A';

        if($grade == 'A'){
            echo "<h2 style='color: green'> Yah A Gwaan Wid Tings :)</h2>";
        }
        elseif($grade == 'B'){
            echo "<h2 style='color: orange'> Not Bad But Still Could Be Better</h2>";
        }
        else{ 
            echo "<h2 style='color: red'> DIS NUH SAFE AT ALL</h2";}
    ?>    


<?Php require 'includes/footer.php'?>