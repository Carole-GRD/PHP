

<?php

    // While loop
    echo 'While loop';
    echo '<br>';
    echo '---------------------------';
    echo '<br>';

    $amount_of_lines = 1;

    while ($amount_of_lines <= 100)
    {
        echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
        // shorthand writing for 
        // $amount_of_lines = $amount_of_lines +1;
        $amount_of_lines ++; 
    }

    echo '<br><br>';

?>