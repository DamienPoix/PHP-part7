<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <p>
            <?php
            if (!empty($_GET['firstname']) && !empty($_GET['lastname'])) {
                echo $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else {
                echo 'Formulaire invalide!!';
            }
            ?>
        </p>
    </body>
</html>
