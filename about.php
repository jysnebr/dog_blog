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
        <div class="header-breed">
            <nav>
               <div class="lft-con">
                    <a href="index.php"><img src="images/hotdogs.png" alt="PawImg"></a>
                    <div class="coll-header">
                        <a href="javascript:void(0);" class="icon" onclick="dropDown()"><i class="fa fa-bars fa-2x"></i></a>
                    </div>    
               </div>  
                <div class="nav-wlinks" id="coll-nav">
                    <ul>
                        <li><a class="wide-link slct" href="index.php">Home</a></li>
                        <li><a class="wide-link slct" href="breed.php">Breeds</a></li>
                        <li><a class="wide-link" id="underline" href="about.php">About</a></li>
                    </ul>
                </div>    
            </nav>
        </div>
    </div>

    <div class="abt-page">
        <div id="mr-pogi">
            <img src="images/gradpic.png" alt="picOfDeveloper">
        </div>
        <div class="abt-container">
            <div class="abt-remarks">
                <div>
                    <h1>Hello! I'm Jayson D. Eubra</h1>
                    <p>Graduated Bachelor of Science in Mathematics Major in Computer Science in Bulacan State University Malolos Bulacan.<br> 
                        This website<span id="cut">...</span><span id="readMore"> is merely a byproduct of what I've learned so far in web development through online courses. 
                        <br>This is a responsive Non-Bootstrap Website.</span></p>
                </div>
                <div>
                    <a href="javascript:void(0);" id="btnReadMore" onclick="seeMore()">Read More</a>
                </div>
            </div>
            <div class="soc-acct">
                <table>
                    <tr>
                        <td><i class="fa-solid fa-envelope" id="abt-spc"></i></td>
                        <td>eubra.jayson223@gmail.com</td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-facebook-square" id="abt-spc"></i></td>
                        <td><a href="https://www.facebook.com/jayson.eubs">www.facebook.com/jayson.eubs</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-github" id="abt-spc"></i></td>
                        <td><a href="https://github.com/jysnebr">https://github.com/jysnebr</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-linkedin" id="abt-spc"></i></td>
                        <td><a href="https://www.linkedin.com/in/jayson-eubra-066402234/">https://www.linkedin.com/in/jayson-eubra-066402234//a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    <script src="boi.js"></script>
</body>
</html>