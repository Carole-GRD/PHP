

<?php

        // Foreach
        echo 'Foreach';
        echo '<br>';
        echo '-------';
        $names = array('John', 'jeanne', 'Joan', 'émile');
        echo '<pre>';
        print_r($names);
        echo '</pre>';
    
        foreach ($names as $name){
            echo ucfirst($name);
        }
        echo '<pre>';
        print_r($names);
        echo '</pre>';
    
        echo '<br><br>';
    
        
        // ------------------------------------------------
    
        // Foreach, with the key index
        echo 'Foreach, with the key index';
        echo '<br>';
        echo '---------------------------';
        // $names = array('John', 'jeanne', 'Joan', 'émile');
        // var_dump($names);
        echo '<pre>';
        print_r($names);
        echo '</pre>';
    
        foreach ($names as $key => $value){
            $names[$key] = ucfirst($value);
        }
        // var_dump($names);
        echo '<pre>';
        print_r($names);
        echo '</pre>';
    
        echo '<br><br>';
    
        
        // ------------
        //   Exercice
        // ------------
        echo 'Exercice';
        echo '<br>';
        echo '---------------------------';
        echo '<br>';
    
        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
    
        foreach($pronouns as $pronoun) {
            echo ($pronoun === 'He/She') ? 
                ($pronoun . ' codes' . '<br>') :
                ($pronoun . ' code' . '<br>');
        }
?>