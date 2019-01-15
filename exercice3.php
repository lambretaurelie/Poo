<!--Créer la méthode **chat** qui prend en paramètre une variable **charac** de type STRING dans la classe
**character**. Cette méthode renvoie un STRING.-->

<?php
class character {// création de la classe characteres.
//déclaration de la variable
    private $_charac = 'toto';
    // Déclaration des methodes.
    function chat($charac) {
        return $result = $charac;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
<?php
echo $result;
?>
    </body>
</html>