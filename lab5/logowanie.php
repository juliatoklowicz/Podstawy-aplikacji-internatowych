<?php session_start();

    require_once("funkcje.php");

    if(isSet($_POST["zaloguj"]))
            {
                $login = test_input($_POST["login"]);
                $haslo = test_input($_POST["haslo"]);
                //echo "Przesłany login: " . $login;
                //echo "<br>";
                //echo "Przesłane hasło: " . $haslo;
                //echo "<br>";
                
                if($login == $osoba1->login and $haslo == $osoba1->haslo) 
                {
                    $_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
                    $_SESSION['zalogowany'] = 1;
                    header("Location: user.php");
                    //echo $zalogowanyImie;
                }
                
                else if($login == $osoba2->login and $haslo == $osoba2->haslo) 
                {
                    $_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
                    $_SESSION['zalogowany'] = 1;
                    header("Location: user.php");
                   // echo $zalogowanyImie;
                }
                
                else 
                {
                    header("Location: index.php");
                }
            }
?>