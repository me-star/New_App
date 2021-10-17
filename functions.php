<?Php 
        $title = 'SimpleFunctions';
        include 'includes/header.php'?>
<body>
    <h1>Simple Functions</h1>

    <?php
        /*Defining a Function*/

        function writeMessage(){
            echo "You are really a nice person, nice to meet you! <br/>";
        }
    
        /*Calling a Function*/

        writeMessage();

        echo "<hr/>";

        writeMessage();

        /*Functions with parameters*/

        function addition($num1,$num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }
        /*Pass by reference - use ampersand ($) in parameter*/
        function changeNum(&$num){
            $num = $num + 10;  // $num+= 10 alternate way of writing
        }
          
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }



        $num = 500;
        addition(10, 20);
        addition(10, $num);
        addition('10', "50");

        changeNum($num);
        echo $num. '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';
    ?>


<?Php require 'includes/footer.php'?>