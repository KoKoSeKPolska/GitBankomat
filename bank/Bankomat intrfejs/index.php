<?php
session_start();
$_SESSION['login'] = $_POST['login'];
require_once "baza.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Logowanie</title>
</head>
<body>
    <div class="div1">
        <div class="bankomat">
            <div class="ekran">
                <form id="ekranforma" action="zaloguj.php" method="post">
                    <span><p>Wpisz pin przy pomocy NumPada lub użyj klawiatury</p></span>
                    <?php echo $_SESSION['login'] ?>
                        <input type="password" maxlength="9" id="pinpole" name="haslo">
                        

                </form>

            </div>
            <div class="num_pad">
                <div class="pinpad">
                    <button  id="btn1" class="btn" onclick="klik('1')">    
                        <h1>1</h1>
                    </button>
                    <button id="btn4" class="btn" onclick="klik('4')">
                        <h1>4</h1>
                    </button>
                    <button id="btn7" class="btn" onclick="klik('7')">
                        <h1>7</h1>
                    </button>
                </div>
                <div class="pinpad">
                    <button id="btn2" class="btn" onclick="klik('2')">
                        <h1>2</h1>
                    </button>
                    <button id="btn5" class="btn" onclick="klik('5')">
                        <h1>5</h1>
                    </button>
                    <button id="btn8" class="btn" onclick="klik('8')">
                        <h1>8</h1>
                    </button>
                </div>
                <div class="pinpad">
                    <button id="btn3" class="btn" onclick="klik('3')">
                        <h1>3</h1>
    
                    </button>
                    <button id="btn6" class="btn" onclick="klik('6')">
                        <h1>6</h1>
    
                    </button>
                    <button id="btn9" class="btn" onclick="klik('9')">
                        <h1>9</h1>
                    </button>
                </div>
                <div class="pinpad">
                    <button id="ok" class="ok btn" type="submit" form="ekranforma">
                        <h1>OK</h1>
        
                    </button>
                    <button id="stop" class="stop btn">
                        <h1>STOP</h1>
        
                    </button>
                    <button id="clear" class="clear btn" onclick="klik('c')">
                        <h1>CLEAR</h1>
                    </button>
                </div>

                </div>

            </div>

        </div>

    </div>
</body>
</html>