

<?php 
    echo'11. Ternary exercises';
    echo "<br><br>";
    echo'1. In a new file ternary.php declare a $hello variable which value is a greeting message. That greeting message depends on another variable $gender, which can either be "M" or "F". Finish by displaying the resulting message.';
    echo "<br><br>";

    // change the variable : $gender = 'M' OR 'F';
    $gender = 'F';
    
    echo $hello = ($gender == 'M') ? 'Hello Mister !' : 'Hello Miss !' ;
    
    echo "<br><br>";

?>