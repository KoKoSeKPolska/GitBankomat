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
        $ile = $rezultat->num_rows;
        if(!$ile > 0)
        {
            echo "<h1>blad</h1>";
        }
        else
        {
            $wiersz = $rezultat->fetch_assoc();
            $_SESSION['user'] = $wiersz['login'];
            $_SESSION['pass'] = $wiersz['pin'];
            $_SESSION['zl'] = $wiersz['money'];
            header('Location:konto.php');
            $rezultat->close();
        }
        }

    $polaczenie->close();
}



?>

