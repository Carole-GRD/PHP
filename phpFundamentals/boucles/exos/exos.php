
<?php

    // ------------------------------------------------
    //                  EXERCICES
    // ------------------------------------------------


    // EXO 1
    echo 'EXO 1';
    echo '<br>';
    echo '---------------------------';
    echo '<br>';

    $number = 1;

    while ($number <= 120) {
        echo $number . '<br>';
        $number++;
    }

    echo '<br><br>';


    // ------------------------------------------------

    // EXO 2
    echo 'EXO 2';
    echo '<br>';
    echo '---------------------------';
    echo '<br>';

    for ($number = 1; $number <= 120; $number++) {
        echo $number . '<br>';
    }

    echo '<br><br>';


    // ------------------------------------------------

    // EXO 3
    echo 'EXO 3';
    echo '<br>';
    echo '---------------------------';
    echo '<br>';

    $firstnames = ['Stephane', 'Justine', 'Thomas', 'Pierre', 'Lucas', 'Tim', 'Elodie', 'Justin', 'Kim', 'Elisabeth'];

    foreach($firstnames as $firstname) {
        echo $firstname . '<br>';
    }

    echo '<br><br>';


    // ------------------------------------------------

    // EXO 4
    echo 'EXO 4';
    echo '<br>';
    echo '---------------------------';
    echo '<br>';

    $countries = ['Argentina', 'Belgium', 'Cape Verde', 'Djibouti', 'Egypt', 'Guinea', 'Ivory Coast', 'Kenya', 'Libya', 'Madagascar'];

?>
    <label for="country-select">Choose a country :</label>
    <select name="countries" id="country-select">
        <?php foreach($countries as $countrie) { ?>
            <option value="<?php $countrie ?>">
                <?php echo $countrie ?>
            </option>
        <?php } ?>
    </select>

<?php


    echo '<br><br>';


    // ------------------------------------------------

    // EXO 5
    echo 'EXO 5';
    echo '<br>';
    echo '---------------------------';
    echo '<br>';

    $countriesWithISOCode = array(
        'AR' => 'Argentina', 
        'BE' => 'Belgium', 
        'CV' => 'Cape Verde', 
        'DJ' => 'Djibouti', 
        'EG' => 'Egypt', 
        'GN' => 'Guinea', 
        'CI' => 'Ivory Coast', 
        'KE' => 'Kenya', 
        'LY' => 'Libya', 
        'MG' => 'Madagascar'
    );


?>

    <label for="country-iso-select">Choose a country (with iso code in value of the option) :</label>
    <select name="countries-iso" id="country-iso-select">
        <?php foreach($countriesWithISOCode as $key => $countrieWithISOCode) { ?>
            <option value="<?php $key ?>">
                <?php echo $countrieWithISOCode ?>
            </option>
        <?php } ?>
    </select>
