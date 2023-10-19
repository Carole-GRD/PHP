
<!-- https://www.php.net/manual/fr/control-structures.alternative-syntax.php -->


<?php 
    echo'5. Display a different greeting according to the user\'s age, gender and mothertongue.';
    echo "<br><br>";

    if ((isset($_GET['age'])) AND (isset($_GET['gender'])) AND (isset($_GET['mothertongue']))) {

        if ($_GET['gender'] == 'woman') $gender = 'Miss';
        else $gender = 'Mister';

        if ($_GET['mothertongue'] == 'yes')  $greetings = 'Hello ';
        else  $greetings = 'Aloha ';
        

        if ( ($_GET['age'] >= 0) AND ($_GET['age'] < 12) ) echo  $greetings . $gender . ' kiddo !';
        elseif ($_GET['age'] < 18) echo  $greetings . $gender . ' Teenager !';
        elseif ($_GET['age'] < 115) echo  $greetings . $gender . ' Adult !';
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
        <p>Man or Woman ?</p>
        <label for="gender">Man</label>
        <input type="radio" name="gender" value="man">
        <label for="gender">Woman</label>
        <input type="radio" name="gender" value="woman">
    </div>
    <div>
        <p>Do you speak English ?</p>
        <label for="mothertongue">Yes</label>
        <input type="radio" name="mothertongue" value="yes">
        <label for="mothertongue">No</label>
        <input type="radio" name="mothertongue" value="no">
    </div>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php echo "<br><br>"; ?>
