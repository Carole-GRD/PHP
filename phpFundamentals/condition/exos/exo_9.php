
<!-- https://www.php.net/manual/en/control-structures.switch.php -->


<?php 
    echo'9. The "Switch" structure.';
    echo "<br><br>";

    if (isset($_GET['note'])) {

        $note = $_GET['note'];

        switch ($note) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo 'This work is really bad. What a dumb kid !';
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                echo 'This is not sufficient. More studying is required.';
                break;
            case 10:
                echo 'Barely enough !';
                break;
            case 11:
            case 12:
            case 13:
            case 14:
                echo 'Not bad !';
                break;
            case 15:
            case 16:
            case 17:
            case 18:
                echo 'Bravo, bravissimo !';
                break;
            case 19:
            case 20:
                echo 'Too good to be true : confront the cheater !';
                break;
            default:
                echo 'Note invalid';
        }
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
