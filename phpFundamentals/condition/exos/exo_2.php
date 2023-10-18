

<!-- https://www.php.net/manual/fr/control-structures.alternative-syntax.php -->


<?php echo'2. "Different greetings according to time" Exercise'; ?>


<?php   
    // $now = ; // How to get the current time in PHP ? Google is your friend ;-)
    date_default_timezone_set('Europe/Brussels');
    $hour = date('H', time());
    echo $hour;
    $min = date('i', time());
    echo $min;

    // Test the value of $now and display the right message according to the specifications.
    if( ($hour >= 5 AND $hour < 9) OR ($hour == 9 AND $min == 0) ){
        echo'Good morning !';
    } elseif ( ($hour == 9 AND $min > 0) OR ($hour >= 10 AND $hour < 12) OR ($hour == 12 AND $min == 0) ) {
        echo'Good day !';
    } elseif ( ($hour == 12 AND $min > 0) OR ($hour >= 13 AND $hour < 16) OR ($hour == 16 AND $min == 0) ) {
        echo'Good afternoon !';
    } elseif ( ($hour == 16 AND $min > 0) OR ($hour >= 17 AND $hour < 21) OR ($hour == 21 AND $min == 0) ) {
        echo'Good evening !';
    }
    elseif ( ($hour == 21 AND $min > 0) OR ($hour > 22 AND $hour < 24) OR ($hour >= 0 AND $hour < 5) ) {
        echo'Good night !';
    }
?>