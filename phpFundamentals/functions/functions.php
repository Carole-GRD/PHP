
<html>
    <head><title>Hi!</title></head>
    <link rel="stylesheet" type="text/css" href="/phpFundamentals/css/style.css">
    <body>
        <?php
            /**
                * Series of exercises on PHP - boucles.
            */  
        ?>
        <?php 
            echo "Fonctions";
            echo "<br><br>";


            $str = 'This is going to be shuffled !';
            echo 'str : ' . $str;
            echo "<br><br>";

            $words = explode(" ", $str);     //  → split() in PHP

            foreach($words as $key => $word) {
                $words[$key] = str_shuffle($word);
            }
            echo 'words shuffle : ' . implode(' ', $words);     //  → join() in PHP
            echo "<br><br>";


            // --------------------------------------------------
            //                   EXERCICES
            // --------------------------------------------------


            // EXO 1
            echo 'EXO 1';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            function capitalize($name) {

                // si la première lettre est un "e" avec accent aigu (c'est-à-dire un "é")
                // ATTENTION : le "é" correspond au deux premiers caractères du nom
                if (str_split($name)[0] . str_split($name)[1] === 'é') {
                    // transforme la chaîne de caractère (le nom) en tableau de lettres
                    $letters = str_split($name);
                    // supprime la première lettre 
                    $restOfLetters = array_splice($letters, 2);
                    // transforme le tableau de lettres en chaîne de caractères  
                    $restOfString = implode('', $restOfLetters);

                    return 'É' . $restOfString;

                } else {
                    $name = ucfirst($name);
                    return $name;
                }
                
            
            }
            echo capitalize('carole');
            echo '<br>';
            echo capitalize('émile');


            echo '<br><br>';

            
            // ------------------------------------------------

            // EXO 2
            echo 'EXO 2';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            echo date('Y');

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 3
            echo 'EXO 3';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            $datetime = new DateTime( "now", new DateTimeZone( "Europe/Brussels" ) );
            echo $datetime->format( 'd/m/Y H:i:s' );

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 4
            echo 'EXO 4';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            function sum($num_1, $num_2) {
                return $num_1 . ' + ' . $num_2 . ' = ' . ($num_1 + $num_2);
            }
            echo sum(4, 5);
            echo '<br>';
            echo sum(-10, 3);

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 5
            echo 'EXO 5';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            function checkNumber($num) {
                if ( !is_numeric($num) ) {
                    return 'Error: argument is the not a number.';
                }
                else {
                    return 'ok';
                }
            }
            echo checkNumber(5);       // ok
            echo '<br>';
            echo checkNumber('5');     // ok
            echo '<br>';
            echo checkNumber('a');     // Error: argument is the not a number.
            // echo '<br>';
            // echo checkNumber(a);       // Undefined constant "a"

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 6
            echo 'EXO 6';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            function acronym($sentence) {
                // transforme la phrase en un tableau de mots
                $words = explode(' ', $sentence);
                // pour chaque mot, on ne garde que la première lettre en majuscule
                foreach($words as $key => $letter) {
                    $words[$key] = ucfirst($letter[0]);
                }
                // transforme le tableau en "mot" (acronyme)
                return implode('', $words);

            }
            echo acronym('In code we trust!');     // ICWT


            echo '<br><br>';


            // ------------------------------------------------

            // EXO 7
            echo 'EXO 7';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            function replace($word) {

                if (str_contains($word, 'ae')) {
                    $index = strpos($word, 'ae');
                    $letters = str_split($word);
                    array_splice($letters, $index, 2, '&aelig;');
                    $newWord = implode('', $letters);
                    return $newWord;
                }
                else {
                    return 'no "ae" in this word';
                }

            }
            echo replace('caecotrophie');
            echo '<br>';
            echo replace('caecophonie');
            echo '<br>';
            echo replace('cacophonie');
            echo '<br>';
            echo replace('chaenichthys');
            echo '<br>';
            echo replace('microsphaera');
            echo '<br>';
            echo replace('sphaerotheca');

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 8
            echo 'EXO 8';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            function replace_2($word) {
                if (str_contains($word, '&aelig;')) {
                    $index = strpos($word, '&aelig;');
                    $letters = str_split($word);
                    array_splice($letters, $index, 7, 'ae');
                    $newWord = implode('', $letters);
                    return $newWord;
                }
                else {
                    return 'no "&aelig;" in this word';
                }
            }
            echo replace_2('c&aelig;cotrophie');
            echo '<br>';
            echo replace_2('c&aelig;cophonie');
            echo '<br>';
            echo replace('cacophonie');
            echo '<br>';
            echo replace_2('ch&aelig;nichthys');
            echo '<br>';
            echo replace_2('microsph&aelig;ra');
            echo '<br>';
            echo replace_2('sph&aelig;rotheca');
            

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 9
            echo 'EXO 9';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            function feedback($message, $class) {
                return '<div class="' . $class . '">' . $message . '</div>';
            }
            echo feedback("Incorrect email address", "error");
            echo feedback("Incomplete email address", "warning");
            echo feedback("Correct email address", "info");

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 10
            echo 'EXO 10';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 11
            echo 'EXO 11';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 12
            echo 'EXO 12';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 13
            echo 'EXO 13';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            

            echo '<br><br>';


            // ------------------------------------------------

            // EXO 14
            echo 'EXO 14';
            echo '<br>';
            echo '---------------------------';
            echo '<br>';

            

            echo '<br><br>';


            // ------------------------------------------------


        ?>
    </body>
</html>
