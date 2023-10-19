
<!-- https://www.php.net/manual/fr/control-structures.alternative-syntax.php -->


<?php 
    echo'4. Display a different greeting according to the user\'s age and gender.';
    echo "<br><br>";

    if ((isset($_GET['age'])) AND (isset($_GET['gender']))) {
        // echo $_GET['age'] .  ' year(s) ';
        // echo '<br>gender : ' . $_GET['gender'] .  '<br>';

        if ($_GET['gender'] == 'woman') $gender = 'Miss';
        else $gender = 'Mister';
        

        if ( ($_GET['age'] >= 0) AND ($_GET['age'] < 12) ) echo 'Hello ' . $gender . ' kiddo !';
        elseif ($_GET['age'] < 18) echo 'Hello ' . $gender . ' Teenager !';
        elseif ($_GET['age'] < 115) echo 'Hello ' . $gender . ' Adult !';
        elseif ($_GET['age'] >= 115) echo 'Wow! Still alive ' . $gender . ' ? Are you a robot, like me ? Can I hug you ?';
        
    }

    echo "<br><br>";

?>


<form method="get" action="">
    <div>
        <label for="age">Please type your age :</label>
        <input type="number" name="age">
    </div>
    <div>
        <label for="gender">Man</label>
        <input type="radio" name="gender" value="man">
        <label for="gender">Woman</label>
        <input type="radio" name="gender" value="woman">
    </div>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php echo "<br><br>"; ?>
