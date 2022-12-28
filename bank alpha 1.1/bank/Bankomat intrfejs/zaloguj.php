<?php
session_start();



require_once "baza.php";

$polaczenie = @new mysqli($host, $db_user,$db_password,$db_name);
if($polaczenie->connect_errno!=0)
{
    $blad = "Błąd: ".$polaczenie->connect_errno;
    echo $blad;
}
else
{
    //$_SESSION['login'] = $_POST['login']; to zmienna w index.php
    $_SESSION['haslo'] = $_POST['haslo'];
    $l = $_SESSION['login'];
    $h = $_SESSION['haslo'];
    $sql = "SELECT * FROM uzytkownicy WHERE login = '$l' AND pin = '$h';";

    if($rezultat = @$polaczenie->query($sql))
    {
        $sql2 = "UPDATE uzytkownicy SET log_date = NOW()";
        @$polaczenie->query($sql2);
        $ile = $rezultat->num_rows;
        $wiersz = $rezultat->fetch_assoc();
        if (!empty($wiersz)) 
        {
            $_SESSION['ban'] = $wiersz['ban'];
            $_SESSION['logc'] = $wiersz['log_date_close'];
            $_SESSION['log'] = $wiersz['log_date'];
        }

        if(!$ile > 0)
        {
            if($_SESSION['logc'] > $_SESSION['log'])
            {
                echo'Masz bana do '.$_SESSION['logc'];
            }
            else
            {
                $sql3 = "UPDATE uzytkownicy SET log_date_close = NOW() + INTERVAL 1 HOUR WHERE login = '$l'";
                @$polaczenie->query($sql3);
            }
            
        }
        else if($_SESSION['logc'] <= $_SESSION['log'])
        {
                $_SESSION['user'] = $wiersz['login'];
                $_SESSION['pass'] = $wiersz['pin'];
                $_SESSION['zl'] = $wiersz['money'];
                header('Location: konto.php');
                $rezultat->close();
        }
        else if($_SESSION['logc'] > $_SESSION['log'])
        {
            echo 'Masz bana do '.$_SESSION['logc'];
        }
    }

    $polaczenie->close();
}



?>

