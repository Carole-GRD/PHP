
<!-- https://www.php.net/manual/fr/control-structures.alternative-syntax.php -->


<?php 
    echo'3. "Different greetings according to age" Exercise';
    echo "<br><br>";

    if (isset($_GET['age'])) {
        echo $_GET['age'] .  ' year(s) : ';

        if ( ($_GET['age'] >= 0) AND ($_GET['age'] < 12) ) {
            echo 'Hello kiddo !';
        } 
        elseif ($_GET['age'] < 18) {
            echo 'Hello Teenager !';
        } 
        elseif ($_GET['age'] < 115) {
            echo 'Hello Adult !';
        } 
        elseif ($_GET['age'] >= 115) {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        }
    }

    echo "<br><br>";

?>


<form method="get" action="">
    <label for="age">Please type your age :</label>
    <input type="" name="age">
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php echo "<br><br>"; ?>
