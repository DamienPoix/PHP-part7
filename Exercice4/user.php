<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <p>
            <?php
            if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
                echo $_POST['firstname'] . ' ' . $_POST['lastname'];
            } else {
                echo 'Formulaire invalide!!';
            }
            ?>
        </p>
    </body>
</html>
