<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <style>
        ul{list-style-type:none;
            margin:0px;
            padding:0px;


        }
        ul li{float:left;
            width:187px;
            height:50px;
            background-color:black;
            opacity:.8;
            line-height:50px;
            font-size:14px;
            text-align:center;
        }
        ul li a{text-decoration:none;color:white;display:block;}
        ul li a:hover{background-color:red;color:white;}
        ul li ul li{display:none;}
        ul li:hover ul li{display:block;color:white;}
        .ul{position:relative;
            text-align: right;
        }
        .icon-bar {
            width: 90px;
            background-color: #555;
        }

    </style>
<body>




<div class="container-fluid">
    <div class="navbar-header">
        <!-- <div class="container text-center"> -->
        <img src="../uploads/p5.jpg" width="100%" height="200px">
        <!-- </div> -->
    </div>
</div>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <?php
                include '../config/conn.php';
                $query=mysqli_query($conn,"select * from menu WHERE ISNULL(menu_sub_of) ORDER BY menu_index ");
                foreach($query as $row)
                {
                    $menu_id=$row['menu_id'];
                    ?>
<!--                    <li class="active"><a href="#">--><?php //echo  $row['menu_title']?><!--</a></li>-->
                    <li><a href="../frontend/homePage.php"><?php echo  $row['menu_title']?></a>
                        <ul>
                            <?php
                                $select=mysqli_query($conn,"select * from menu WHERE menu_sub_of=$menu_id ORDER BY menu_index");
                            foreach ($select as $submenu) {
                                ?>
                                <li><a href="../frontend/pageDetail.php?send_id=<?php echo $submenu['menu_id'];?>"><?php echo  $submenu['menu_title']?></a></li>
                            <?php
                                }
                            ?>



                        </ul>

                    </li>
<!--                    <li><a href="#">Deals</a></li>-->
<!--                    <li><a href="#">Stores</a></li>-->
<!--                    <li><a href="#">Contact</a></li>-->
                    <?php
                }
            ?>







            </ul>
            <ul class="nav navbar-nav navbar-right">

<!--                <li><a href="../login/login.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>-->
                <!-- <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
                <li><a href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            </ul>
        </div>
    </div>
</nav>



</body>
</html>