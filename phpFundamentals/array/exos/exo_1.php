

<?php 

    $family = ['Greg', 'Saliha', 'Charlie', 'Léon', 'Michel', 'Séverine', 'Thierry', 'Axel', 'Sophie', 'Geoffrey', 'Carole', 'Andy', 'Jesse'];
    print_r($family);

    echo '<br><br>';


    $recipe = ['spaghetti', 'viande', 'tomate', 'fromage', 'poivre', 'sel', 'épices à spaghetti', 'basilique'];
    print_r($recipe);

    echo '<br><br>';
    

    $films = ['Titanic', 'Matrix', 'Gimini Man', 'Divergente'];
    echo 'Mon film préféré : ' . $films[2];

    echo '<br><br>';
    
    
    $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 

    array_push($countries, 'England');
    $countries[] = 'Sweden';

    echo '<pre>';
    print_r($countries);
    echo '</pre>';

    echo '<br><br>';

    echo '<pre>';
    var_dump($countries);
    echo '</pre>';

    echo '<br><br>';



    // -----------------
    // Associative Arrays
    // -----------------

    $person['function'] = 'Junior Web Developer';
    echo $person['function'];
    // returns 'Junior Web Developer'
    echo '<br>';
    $person['function'] = 'Senior Web Developer';
    echo $person['function'];
    // returns 'Senior Web Developer'

    echo '<br><br>';
    
    
    $user = array (
        'firstname' => 'Juan',
        'lastname' => 'Pablo',
        'adress' => '3 Paradijsestraat',
        'city' => 'Antwerpen'
    );
    echo $user['lastname'];

    echo '<br><br>';


    $me = array(
        'firstname' => 'Carole',
        'lastname' => 'Gérard',
        'age' => 45,
        'favoriteSeason' => 'summer',
        'likeSoccer' => false
    );
    echo '<pre>';
    print_r($me);
    echo '</pre>';

    echo $me['likeSoccer'] ? 'vrai' : 'faux';

    echo '<br><br>';



    // -----------------------
    // Multidimensional arrays
    // -----------------------

    $me = array(
        'firstname' => 'Carole',
        'lastname' => 'Gérard',
        'age' => 45,
        'favoriteSeason' => 'summer',
        'likeSoccer' => true,
        'favorite_movies' => array('Harry Potter', 'Matrix', 'Gimini Man', 'Divergente'),
    );
    $me['hobbies'] = array('piano', 'volley', 'chess');
    $me['mother'] = array(
        'firstname' => 'Marie-Claire',
        'lastname' => 'Dehaut',
        'age' => 63,
        'favoriteSeason' => 'autumn',
        'likeSoccer' => false,
        'favorite_movies' => array('Top Chef', 'Pretty Woman', 'Thelma et Louise', 'Titanic'),
    ); 
    $me['mother']['hobbies'] = array('marche', 'golf');
    // echo '<pre>';
    // print_r($me);
    // echo '</pre>';

    echo '<br><br>';




    // -----------------------------
    // Manipulating arrays exercises
    // -----------------------------


    // Count the number of elements
    echo 'Number of my mom\'s hobbies : ' . count($me['mother']['hobbies']);
    echo '<br>';
    // echo sizeof($me['mother']['hobbies']);
    // echo '<br>';
    echo 'Many of my hobbies : ' . count($me['hobbies']);
    echo '<br>';
    echo 'Total number of hobbies : ' . count($me['hobbies']) + count($me['mother']['hobbies']);


    // Add an element in a multi-dimensional array
    $me['hobbies'][] = 'Taxidermy ';
    // echo '<pre>';
    // print_r($me);
    // echo '</pre>';


    // Replace
    $me['lastname'] = 'Durand';
    echo '<pre>';
    print_r($me);
    echo '</pre>';


    // Create a new array from 2 others (or more)
    


    // More array exercises


?>

