<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        
        <a href = "index.php">Index</a>
        <br>
        
        <?php
            require_once("funkcje.php");
           if(!isset($_SESSION['zalogowany']) or $_SESSION['zalogowany'] != 1) 
            {
                header("Location: index.php");
            }
            
            echo "<br>";
            echo "Zalogowano użytkownika " . $_SESSION['zalogowanyImie'];
            echo "<br>";
            
        ?>
        
        <br>
        
        <form action = "index.php" method = "post">
                <input type = "submit" name = "wyloguj" value = "wyloguj">
        </form>
        
        <br>
        
        <fieldset>
            <legend>Dodawanie pliku:</legend>
            <form action='addPhoto.php' method='POST' enctype='multipart/form-data'>
                <input name="photo_file" type="file">
                <input type="submit" name="addFile" value = "dodaj zdjecie">
            </form>
            
            <br>
            
            <img src="/zdjecia/photo.jpg" width = "500" height = "400" alt="Tutaj pojawi się zdjęcie">
        </fieldset>
        
        
    </body>
</html>

