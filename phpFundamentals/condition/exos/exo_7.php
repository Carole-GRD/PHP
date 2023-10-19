
<!-- https://www.php.net/manual/fr/control-structures.alternative-syntax.php -->


<?php 
    echo'7. Achieve the same, without the ELSE';
    echo "<br><br>";

    if ((isset($_GET['name'])) AND (isset($_GET['gender'])) AND (isset($_GET['age']))) {

        $name = $_GET['name'];
        $gender = $_GET['gender'];
        $age = $_GET['age'];

        $message = 'Sorry you don\'t fit the criteria, ' . $name . '.';
        if ( ($gender === 'woman') AND (($age > 20) AND ($age <= 40)) ) $message = 'Welcome to the team ' . $name . ' !';
        echo $message;
    }

    echo "<br><br>";

?>


<form method="get" action="">
    <div>
        <label for="name">Name :</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age :</label>
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
