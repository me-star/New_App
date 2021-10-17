<?Php 
        $title = 'Arrays and Printouts';
        include 'includes/header.php'?>
   
    <h1><?php echo $title ?></h1>
    <?php
        $num = 3;
        // This is a variable
        $numbers = array(2,4,6,8,10,12,14,16,18,20);
        // An array of even numbers
        echo $numbers[5];
        //A square barcket with a number inside tells the position in the array.

        $size = count($numbers);
        echo "<p> The size of the array is: $size</p>";
        //Created a variable that has a function to checks the size of the array $numbers

        for($count =0; $count < $size; $count++ ){
            echo "<p>$numbers[$count]</p>";
        }

        //
    
    ?>

<?Php require 'includes/footer.php'?>