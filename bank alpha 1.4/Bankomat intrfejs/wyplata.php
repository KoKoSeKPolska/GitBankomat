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
    if($_SESSION['kwota'] > $_SESSION['zl'])
    {
        $sql = "UPDATE uzytkownicy SET log_date_close = NOW() + INTERVAL 1 DAY WHERE login = '$l'";
        @$polaczenie->query($sql);
        header('Location: ../Bankomat Karta/index.php');
    }
    else
    {
        if($_SESSION['kwota'] > ($_SESSION['zl'] / 2))
        {
        $_SESSION['zaduzo'] = '<span> Kwota nie może być większa niż połowa stanu konta </span>';
        header('Location: konto.php');
        }
        else
        {
            $_SESSION['kwota'];
            $wydane_banknoty = array();

              while ($_SESSION['kwota'] > 0) 
              {
                if ($_SESSION['kwota'] >= 200) {
                  $wydane_banknoty[] = 200;
                  $_SESSION['kwota'] -= 200;
                  $sql3 = "UPDATE kasetka SET ilosc_banknotow = ilosc_banknotow - 1 WHERE id = 5; ";
                  @$polaczenie->query($sql3);
                } elseif ($_SESSION['kwota'] >= 100) {
                  $wydane_banknoty[] = 100;
                  $_SESSION['kwota'] -= 100;
                  $sql3 = "UPDATE kasetka SET ilosc_banknotow = ilosc_banknotow - 1 WHERE id = 4; ";
                  @$polaczenie->query($sql3);
                } elseif ($_SESSION['kwota'] >= 50) {
                  $wydane_banknoty[] = 50;
                  $_SESSION['kwota'] -= 50;
                  $sql3 = "UPDATE kasetka SET ilosc_banknotow = ilosc_banknotow - 1 WHERE id = 3; ";
                  @$polaczenie->query($sql3);
                } elseif ($_SESSION['kwota'] >= 20) {
                  $wydane_banknoty[] = 20;
                  $_SESSION['kwota'] -= 20;
                  $sql3 = "UPDATE kasetka SET ilosc_banknotow = ilosc_banknotow - 1 WHERE id = 2; ";
                  @$polaczenie->query($sql3);
                } elseif ($_SESSION['kwota'] >= 10) {
                  $wydane_banknoty[] = 10;
                  $_SESSION['kwota'] -= 10;
                  $sql3 = "UPDATE kasetka SET ilosc_banknotow = ilosc_banknotow - 1 WHERE id = 1; ";
                  @$polaczenie->query($sql3);
                }
              }
              header('Location: gotowka.php');

                




        }
    }

}


?>