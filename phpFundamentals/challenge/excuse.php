


<html>
    <head>
        <link rel="icon" href="phpFundamentals/assets/ENG.png" type="image/png">
        <title>Excuse Notes Generator</title>
        <!-- <link rel="stylesheet" type="text/css" href="../../phpFundamentals/css/style.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="/phpFundamentals/css/style.css"> -->
        <link rel="stylesheet" type="text/css" href="phpFundamentals/css/style.css">
    </head>
    <body>

        <div id="excuse-notes-generator">


            <h2>Excuse Notes Generator</h2>

            <form method="post" action="">
                <div>
                    <label for="child" class="label-group">Name of the child :</label>
                    <input type="text" name="child" id="child">
                </div>
                <div>
                    <label for="" class="label-group">Gender :</label>
                    <div>
                        <input type="radio" name="genderChild" id="daugther" value="ma fille ">
                        <label for="daugther">girl</label>
                    </div>
                    <div>
                        <input type="radio" name="genderChild" id="son" value="mon fils ">
                        <label for="son">boy</label>
                    </div>
                </div>
                <div>
                    <label for="teacher" class="label-group">Name of the teacher :</label>
                    <input type="text" name="teacher" id="teacher">
                </div>
                <div>
                    <label for="" class="label-group">Titres de civilité :</label>
                    <div>
                        <input type="radio" name="genderTeacher" id="miss" value="madame ">
                        <label for="miss">Madame</label>
                    </div>
                    <div>
                        <input type="radio" name="genderTeacher" id="mister" value="monsieur ">
                        <label for="mister">Monsieur</label>
                    </div>
                </div>
                <div>
                    <label for="" class="label-group">Date(s) :</label>
                    <div>
                        <label for="startDate">du</label>
                        <input type="date" name="startDate" id="startDate">
                    </div>
                    <div>
                        <label for="endDate">au</label>
                        <input type="date" name="endDate" id="endDate">
                    </div>
                </div>
                <div>
                    <label for="" class="label-group">Reason :</label>
                    <div>
                        <input type="radio" name="reason" id="illness" value=" pour cause de maladie">
                        <label for="illness">illness</label>
                    </div>
                    <div>
                        <input type="radio" name="reason" id="death" value=" en raison de la mort de ">
                        <label for="death">death of the pet</label>
                    </div>
                    <div>
                        <input type="radio" name="reason" id="activity" value=" en raison de son activité extra-scolaire">
                        <label for="activity">extracurricular activity</label>
                    </div>
                    <div>
                        <input type="radio" name="reason" id="personal" value=" pour raisons personnelles">
                        <label for="personal">personal</label>
                    </div>
                </div>
                <input type="submit" value="Send">
            </form>

            <div id="excuse-message">
                <!-- Ici s'affichera le message généré -->
            </div>
            
            <?php 
                
                if (
                    isset($_POST['child']) 
                    AND isset($_POST['genderChild']) 
                    AND isset($_POST['teacher']) 
                    AND isset($_POST['genderTeacher']) 
                    AND isset($_POST['startDate'])
                    AND isset($_POST['endDate'])
                    AND isset($_POST['reason'])
                ) {
                    $child = $_POST['child'];
                    $genderChild = $_POST['genderChild'];
                    $teacher = $_POST['teacher'];
                    $genderTeacher = ucfirst($_POST['genderTeacher']);
                    $reason = $_POST['reason'];

                    // Formatage de la date
                    $startDate = $_POST['startDate'];
                    $endDate = $_POST['endDate'];
                    $startDateTimestamp = strtotime($startDate); // Convertit la date de texte en horodatage Unix
                    $endDateTimestamp = strtotime($endDate); // Convertit la date de texte en horodatage Unix
                    $startDateFormatted = date('d/m/Y', $startDateTimestamp);
                    $endDateFormatted = date('d/m/Y', $endDateTimestamp);

                    $absent = ($genderChild === 'ma fille ') ? 'absente' : 'absent';

                    $illnessExcuses = [' (vomissements)', ' (maux de tête)', ' (rage de dent)', ' (fièvre)', ' (toux)'];
                    $deathExcuses = [' notre chien Gismo', ' notre chat Félix', ' bubulle notre poisson rouge', ' notre perroquet', ' notre poney'];
                    $activityExcuses = [' (volley)', ' (foot)', ' (natation)', ' (gym)', ' (musique)'];
                    $personalExcuses = [' (panne de réveil)', ' (grève des trains)', ' (panne d\'essence)', ' (visite au musé)', ' (sortie de garage enneigée)'];
                    $i = rand(0, 4);
                    $excuse = 
                        ($reason === ' pour cause de maladie') ? $illnessExcuses[$i] :
                        (($reason === ' en raison de la mort de ') ? $deathExcuses[$i] :
                        (($reason === ' en raison de son activité extra-scolaire') ? $activityExcuses[$i] :
                        (($reason === ' pour raisons personnelles') ? $personalExcuses[$i] : '')));
                    

                    $message = $genderTeacher . $teacher . ', ' . $genderChild . $child . ' sera ' . $absent .  ' du ' . $startDateFormatted . ' au ' . $endDateFormatted . $reason . $excuse . '.';

                    // Affichez le message généré dans l'élément "excuse-message"
                    echo '<div id="excuse-message">' . $message . '</div>';

                }
            ?>
        
        </div>

    </body>
</html>


