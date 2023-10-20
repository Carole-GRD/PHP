


<html>
    <head><title>Hi!</title></head>
    <body>

        <h2>Consolidation Challenge: Fake Excuse Notes Generator</h2>

        <form method="post" action="">
            <div>
                <label for="child">Name of the child :</label>
                <input type="text" name="child" id="child">
                <input type="radio" name="genderChild" id="daugther" value="ma fille ">
                <label for="daugther">girl</label>
                <input type="radio" name="genderChild" id="son" value="mon fils ">
                <label for="son">boy</label>
            </div>
            <div>
                <label for="teacher">Name of the teacher :</label>
                <input type="text" name="teacher" id="teacher">
                <input type="radio" name="genderTeacher" id="miss" value="madame ">
                <label for="miss">Madame</label>
                <input type="radio" name="genderTeacher" id="mister" value="monsieur ">
                <label for="mister">Monsieur</label>
            </div>
            <div>
                <label for="startDate">du</label>
                <input type="date" name="startDate" id="startDate">
                <label for="endDate">au</label>
                <input type="date" name="endDate" id="endDate">
            </div>
            <div>
                <label for="">Reason :</label>
                <input type="radio" name="reason" id="illness" value=" pour cause de maladie">
                <label for="illness">illness</label>

                <input type="radio" name="reason" id="death" value=" en raison de la mort de ">
                <label for="death">death of the pet</label>

                <input type="radio" name="reason" id="activity" value=" en raison de son activité extra-scolaire">
                <label for="activity">extracurricular activity</label>

                <input type="radio" name="reason" id="personal" value=" pour raisons personnelles">
                <label for="personal">personal</label>
            </div>
            <input type="submit" value="Send">
        </form>
        
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

                $startDate = $_POST['startDate'];
                $endDate = $_POST['endDate'];
                $startDateTimestamp = strtotime($startDate); // Convertit la date de texte en horodatage Unix
                $endDateTimestamp = strtotime($endDate); // Convertit la date de texte en horodatage Unix
                $startDateFormatted = date('d/m/Y', $startDateTimestamp);
                $endDateFormatted = date('d/m/Y', $endDateTimestamp);

                $reason = $_POST['reason'];

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
                echo $message;

            }
        ?>


    </body>
</html>


