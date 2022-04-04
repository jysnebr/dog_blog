<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Dogs!</title>
    <link rel="icon" href="images/paw.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="nav-icon" id="dd-icon">
        <div class="header">
            <nav>
               <div class="lft-con">
                    <a href="index.php"><img src="images/hotdogs.png" alt="PawImg"></a>
                    <div class="coll-header">
                        <a href="javascript:void(0);" class="icon" onclick="dropDown()"><i class="fa fa-bars fa-2x"></i></a>
                    </div>    
               </div>  
                <div class="nav-wlinks" id="coll-nav">
                    <ul>
                        <li><a class="wide-link" href="index.php">Home</a></li>
                        <li><a class="wide-link" href="breed.php">Breeds</a></li>
                        <li><a class="wide-link" href="about.php">About</a></li>
                    </ul>
                </div>    
            </nav>
        </div>
    </div>
    
    <div class="txt_mid">
        <h1>I WOOF YOU</h1>
        <p>Lets explore all the famous dog breeds to help you decide what breed suits you!</p>
        <a href="breed.php">See all the breeds</a>
    </div>

    <footer>
        
    </footer>

    <script src="boi.js"></script>
</body>
</html>