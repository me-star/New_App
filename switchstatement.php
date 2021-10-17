<?Php 
        $title = 'Switchstatement';
        include 'includes/header.php'?>
<body>
    <h1> Switch Statement</h1>
    <?php
        $grade = 'C';

        switch($grade){
            case 'A':
                echo "<h2 style='color: green'> Yah A Gwaan Wid Tings :)</h2>";
                break;
            case 'B':
                 echo "<h2 style='color: orange'> Not Bad But Still Could Be Better</h2>";   
                 break;
            default:
                echo "<h2 style='color: red'> DIS NUH SAFE AT ALL...</h2";      


        }
    
    ?>



<?Php require 'includes/footer.php'?>