
<!-- https://www.php.net/manual/fr/control-structures.alternative-syntax.php -->


<?php 
    echo'8. "School sucks!" Exercise';
    echo "<br><br>";

    if (isset($_GET['note'])) {

        $note = $_GET['note'];

        if ($note < 0 OR $note > 20): $message = 'Note invalid';
        elseif ($note <= 4): $message = 'This work is really bad. What a dumb kid !';
        elseif ($note <= 9): $message = 'This is not sufficient. More studying is required.';
        elseif ($note == 10): $message = 'Barely enough !';
        elseif ($note == 11 OR $note == 12 OR $note == 13 OR $note == 14): $message = 'Not bad !';
        elseif ($note == 15 OR $note == 16 OR $note == 17 OR $note == 18): $message = 'Bravo, bravissimo !';
        elseif ($note == 19 OR $note == 20): $message = 'Too good to be true : confront the cheater !';
        endif;

        echo $message;
    }

    echo "<br><br>";

?>


<form method="get" action="">
    <div>
        <label for="note">Note :</label>
        <input type="number" name="note">
    </div>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php echo "<br><br>"; ?>
