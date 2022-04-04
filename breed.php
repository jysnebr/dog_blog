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
                        <li><a class="wide-link" href="index.php">Home</a></li>
                        <li><a class="wide-link" href="breed.php">Breeds</a></li>
                        <li><a class="wide-link" href="about.php">About</a></li>
                    </ul>
                </div>    
            </nav>
        </div>
    </div>
    
    <div class="search-bar">
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search">
            <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="dog-container">
        <table class="table-content">
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>Breed</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
        <?php
            $sql_dg = "SELECT * FROM dog_tbl";
            $dg_result = mysqli_query($con,$sql_dg);
            $q_result = mysqli_num_rows($dg_result);
            if ($q_result > 0){
                while ($row = mysqli_fetch_assoc($dg_result)){
                    echo "  <tr>
                                <td><img id='image' src=".$row['picture']."></imgae></td>
                                <td id='dg_space'>".$row['breed']."</td>
                                <td id='dg_des'>".$row['des_']."</td> 
                            </tr>
                        ";
                }
            }
        ?>
            </tbody>
        </table>
    </div>
    <script src="boi.js"></script>
</body>
</html>