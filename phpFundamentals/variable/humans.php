<!-- ATTENTION au chemin en fonction d'où se trouve index.html -->

<!-- http://localhost:8000/?name=Alexandre -->
<!-- http://localhost:8000/?name=Pierre -->
<!-- http://localhost:8000/?name=Jennifer -->

<?php include 'variable_types.php'; ?>

<html>
    <head><title>Hi!</title></head>
    <body>
        <?php if (isset($_GET['name'])){ ?>
            <h1>Aloha <?php echo $_GET['name']; ?>!</h1>
        <?php } ?>

        <!-- Store your first name in a variable, then display its value (echo) in a <p> html tag -->
        <p>Hi! My name is <?php echo $_firstname ?>.</p>

        <!-- Then add another variable to contain your age, then display it in a second <p> tag -->
        <p>I am <?php echo $_age ?> years old.</p>

        <!-- Then add yet another variable that describes the colour of your eyes, then display it in another <p> tag -->
        <p>My eyes are <?php echo $_color ?></p>

        <!-- Then add yet another variable that contains the name of all the people in your family. What type of variable would you use for that ? Display the value stored at the first index in another <p> tag -->
        <p>The value stored at the first index : <?php echo $_family[0] ?></p>

    </body>
</html>