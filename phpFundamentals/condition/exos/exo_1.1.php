
<!-- https://www.php.net/manual/fr/control-structures.alternative-syntax.php -->


<?php 
    echo'1.1 Clean your room Exercise'; 
    echo "<br><br>";

    $room_is_filthy = true; ?>

    <?php if( $room_is_filthy ){
        echo "Yuk, Room is dirty : let's clean it up !";
        // cleanup_room();
        echo "<br>Room is now clean!";
        $room_is_filthy = false;
    } else {
        echo "<br>Nothing to do, room is neat.";
    } 

    echo "<br><br>";
?>



