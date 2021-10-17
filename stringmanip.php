<?Php 
        $title = 'StringManipulation';
        include 'includes/header.php'?>
<h1> String Manipulation</h1>
    <?php
        //Concatenation of strings
    
        $phrase1 = "The student who came late";
        $phrase2 = "stood with a Rock";
        $name = "John Croowe";
        echo $phrase1.", name was Tiffany and she " .$phrase2;
        echo "<br/>";
        echo "<hr/>";
        //String transformation
        echo "Uppercase first letter: ". ucfirst($name). "<br/>";
        echo "Uppercase first letter of each word: ". ucwords($name). "<br/>";
        echo "Upper case: ". strtoupper($phrase2). "<br/>";
        echo "Lower case: ". strtolower("THIS WAS ALL UPPER CASE"). "<br/>";
        echo "<hr/>";
        echo "Repeat String: ".str_repeat('a',5) . "<br/>";
        echo "Repeat String - Nested Function: ".strtoupper(str_repeat('a',5)) . "<br/>";
        echo "Get a Substring: ".substr($name, 5, 10) . "<br/>";

        echo "Get position of string: ".strpos($name,'e'). "<br/>";

        echo "Find Character R: ". strchr($name, 'r'). "<br/>"; 
        echo "Find Character S: ". strchr($name, 'S'). "<br/>"; 
        echo "Find Character o: ". strchr($name, 'o'). "<br/>"; 
        echo "Find Character w: ". strchr($name, 'w'). "<br/>"; 
    
        echo "Find the length of string: ". strlen($name) ."<br/>";
        
        echo "Without Trim: " . "A" . " B C D" . "E" . "<br/>";
        echo "Trim space on both side: " . "A" . trim(" B C D ") . "E" . "<br/>";
        echo "Trim spaces on the left: " . "A" . ltrim(" B C D ") . "E" . "<br/>";
        echo "Trim spaces on the right: " . "A" . rtrim(" B C D ") . "E" . "<br/>";
        
        echo "Replace string with another: ".str_replace("late", "early", $phrase1). "<br/>"; 

    
    ?>
    
    <?Php require 'includes/footer.php'?>