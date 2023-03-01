
<?php
session_start();
if(!isset($_SESSION["username"])){
    header ("Location: login.php ");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-Game</title>
    <!-- <a href="logout.php">logout</a> -->
    <link rel="stylesheet" href="../css/style.css">

    <script src="../script1.js"></script>

    <center>
        <h1 data-text="Quiz"> Quiz</h1>
    </center>
    <style>
        .bg-1 {
            background-color: #8F89E5;
        }

        .bg-2 {
            background-color: #94979a;
        }

        .bg-3 {
            background-color: #fbf9f8;
        }
    </style>

</head>
<header>
    <nav>
        <ul class="nav__links">


            <li> <a href="quiz1.html">Quiz 1 </a></li>
            <li> <a href="Quiz2.html">Quiz 2 </a></li>
            <li> <a href="Quiz3.html">Quiz 3 </a></li>
            <li> <a href="Quiz4.html">Quiz 4 </a></li>
            <li> <a href="Quiz5.html">Quiz 5 </a></li>




        </ul>
    </nav>
    <a class="cta" href="contact.html"><button> Contact </button></a>
    <a class="cta" href="../php/login.php"><button> Login </button></a>

</header>

<body>

    <div class="container-fluid bg-1 text-center">

        <center><img src="../Images/Hirn.png" alt="">
        </center>
    </div>
    <div class="container-fluid bg-2 text-center">
        <br><br><br><br><br><br><br><br><br>

    </div>

    <div class="container-fluid bg-3 text-center">
        <br><br><br>



       <footer>
            <h6>Impressum</h6>
             
            <h6> Datenschutz</h6>
        </footer>

    </div>









</body>



</html>