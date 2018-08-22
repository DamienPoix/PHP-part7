<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        //déclaration du if pour afficher et masquer
            if(empty($_GET)){
        ?>
        <form action="index.php" method="GET" enctype="multipart/form-data">
            <select name="gender">
                <option>Mr</option>
                <option>Mme</option>
            </select>
            <label for="lastname">Nom : </label><input type="text" name="lastname" />
            <label for="firstname">Prénom : </label><input type="text" name="firstname" />
            <input type="file" name="file">
             <input type="submit" value="Envoyer">
        </form>
        <?php
            } else {
              //else pour comparer les variables pour savoir si elles sont existante
        ?>
        <div>
            <p>
                <?php
                //
                if(isset($_GET['gender'])){
                    echo $_GET['gender'] . ' ';
                }
                if(isset($_GET['lastname'])){
                    echo $_GET['lastname']. ' ';
                }
                if(isset($_GET['firstname'])){
                    echo $_GET['firstname'];
                }
                if (isset($_GET['file'])) {
                echo ' '.pathinfo($_GET['file'],PATHINFO_FILENAME) . ' ' . pathinfo($_GET['file'], PATHINFO_EXTENSION);
              }
                ?>
            </p>
        </div>
        <?php
            }
        ?>
    </body>
</html>
