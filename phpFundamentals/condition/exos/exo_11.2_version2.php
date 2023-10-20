<?php 
    echo'11. Ternary exercises';
    echo "<br><br>";
    echo'2. In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here : https://giphy.com/explore/finding). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.';
    echo "<br><br>";
    echo 'VERSION 2 ...';
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
    $race = '';

    if (isset($_POST['race'])) {

        $race = $_POST['race'];

        switch ($race) {
            case 'human': 
                $src = 'https://giphy.com/embed/4MeureSJCsTjG';
                $href = 'https://giphy.com/gifs/misc-brad-pitt-4MeureSJCsTjG';
                break;
            
            case 'cat': 
                $src = 'https://giphy.com/embed/VbnUQpnihPSIgIXuZv';
                $href = 'https://giphy.com/gifs/computer-cat-wearing-glasses-VbnUQpnihPSIgIXuZv';
                break;
            
            case 'unicorn': 
                $src = 'https://giphy.com/embed/fckbO2dUKL3bmuYFoW';
                $href = 'https://giphy.com/gifs/PlayWonderlands-unicorn-day-butt-stallion-fckbO2dUKL3bmuYFoW';
                break;
            
            default:
                echo 'Pas de GIF !';
                break;
        }
        echo ($race == 'human' OR $race == 'cat' OR $race == 'unicorn') ? 
            '<iframe src=' . $src . ' width="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href=' . $href . '>via GIPHY</a></p>' 
            :
            '<p></p>';
    }

    echo "<br><br>";

?>

