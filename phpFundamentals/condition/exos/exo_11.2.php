<?php 
    echo'11. Ternary exercises';
    echo "<br><br>";
    echo'2. In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here : https://giphy.com/explore/finding). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.';
    echo "<br><br>";
?>

<form method="post" action="">
    <label for="">Are you a human, a cat or a unicorn ?</label>
    <div>
        <input type="radio" name="race" id="human" value="human">
        <label for="human">Human</label>
    </div>
    <div>
        <input type="radio" name="race" id="cat" value="cat">
        <label for="cat">Cat</label>
    </div>
    <div>
        <input type="radio" name="race" id="unicorn" value="unicorn">
        <label for="unicorn">Unicorn</label>
    </div>
    <input type="submit"  name="submit" value="Gif">
</form>


<?php 
    if (isset($_POST['race'])) {

        $race = $_POST['race'];

        switch ($race) {
            case 'human': 
                echo '<iframe src="https://giphy.com/embed/4MeureSJCsTjG" width="480" height="313" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/misc-brad-pitt-4MeureSJCsTjG">via GIPHY</a></p>';
                break;
            
            case 'cat': 
                echo '<iframe src="https://giphy.com/embed/VbnUQpnihPSIgIXuZv" width="384" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/computer-cat-wearing-glasses-VbnUQpnihPSIgIXuZv">via GIPHY</a></p>';
                break;
            
            case 'unicorn': 
                echo '<iframe src="https://giphy.com/embed/fckbO2dUKL3bmuYFoW" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/PlayWonderlands-unicorn-day-butt-stallion-fckbO2dUKL3bmuYFoW">via GIPHY</a></p>';
                break;
            
            default:
                echo 'Pas de GIF !';
                break;
        }
    }

    echo "<br><br>";

?>