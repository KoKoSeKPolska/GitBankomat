<?php
session_start();
$_SESSION['kwota'] = $_POST['kwota'];
require_once "baza.php";
$l = $_SESSION['login'];
$polaczenie = @new mysqli($host, $db_user,$db_password,$db_name);
if($polaczenie->connect_errno!=0)
{
    $blad = "Błąd: ".$polaczenie->connect_errno;
    echo $blad;
}
else
{
    if($_SESSION['kwota'] > ($_SESSION['zl'] / 2))
    {
        $_SESSION['zaduzo'] = '<span> Kwota nie może być większa niż połowa stanu konta </span>';
        header('Location: konto.php');
    }
    /*else
    {
        if($_SESSION['kwota'] > $_SESSION['zl'])
        {
            $sql3 = "UPDATE uzytkownicy SET log_date_close = NOW() + INTERVAL 1 DAY WHERE login = '$l'";
            @$polaczenie->query($sql3);
            echo "<script>alert('Zostałeś zbanowany do:')".$_SESSION['logc']."</script>";
        }
    }*/

        }


?>