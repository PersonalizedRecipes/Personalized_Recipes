<?php
session_start();
if(  isset($_GET['recipe'])) {
$r = $_GET['recipe'];


?>
<html lang="jj">

<head>
    <title>Choices</title>

    <style>
        body{
            background-color: whitesmoke;
            background-image: url("bg.jpg");
            background-attachment: scroll;
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
            font-size: 20px;
            font-family: Garamond;
            color: dimgrey;
            font-weight: bold;
        }

        .ul1 {
            margin: 5px;
            padding: 0;
            overflow: hidden;
            background-color: red;
            border: 1px solid red;
            border-radius: 100px;
            border-width: 5px;
            opacity: 80%;

        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }


        h1{

            color: red;
            font-family: Garamond;
            font-size: 30px;
            text-align: center;

        }
        h2 {
            color: gray;
            overflow: hidden;
            font-family: Garamond;
            font-size: 25px;
            background-color: whitesmoke ;
            border-radius: 25px;
            padding: 10px 10px;
            text-align: center;
            width: 550px;
            position: center;
            margin-left: 35px;
            background-size: 200px;
            margin-top: 0;
            opacity: 70%;
        }
        .logo{

            margin: 10px;
            padding: 0;
            float: left;
            opacity: 80%;

        }
        .button {
            margin-top: 35%;
            margin-left: 90%;
            float: right;
            width: 200px;
            border: whitesmoke;
            padding: 15px 32px;
            border-radius: 25px;
            background-color: red;
            font-family: Garamond;
            color: whitesmoke;
            font-size: 20px;
            opacity: 70%;

        }
        li a:hover {
            background-color: #111;
        }
        .image{
            margin-top: 35%;
            margin-left: 90%;
            width: 100px;
        }
        hr{
            color: white;
        }
        .split {
            background-attachment: scroll;
            height: 100%;

            width: 50%;
            position: fixed;
            z-index: 1;
            overflow-x: hidden;
            text-align: center;
        }
        .right{
            right:0;
        }
        .left {
            left: 0;
        }
        .myinput[type="checkbox"]:checked:after{
            position: relative;
            display: block;
            border-width: 6px;
            border-style: solid;
            content: "";
            border-color: red;
            background-color: red;
            background-position: center;
            background-size: 500px;
            border-radius: 2px;
        }
        .bg{
            background-color: whitesmoke;
            opacity: 60%;
            border-radius: 25px;
            position: center;
            margin-top: 70px;
        }
        a{
            color:red;
        }
        myinput[type="checkbox"]:checked:after{
            position: relative;
            display: block;
            border-width: 6px;
            border-style: solid;
            content: "";
            border-color: red;
            background-color: red;
            background-position: center;
            background-size: 500px;
            border-radius: 2px;

        }

    </style>
</head>
<body>
<ul class ="ul1" >
    <li class="logo" ><img src="logo2.jpg"></li>
    <li ><a href="page%201.html"  class='a1'>Home</a></li>

    <li><a href="contactUs.php"  class='a1'>Contact us</a></li>

</ul>
<form action='Choice.php' method='get' class='myform' >




    <?php
    include 'db.php';

    echo "<h1 >Recipe Name:" . $r . "</h1><hr>
   <div class='split left radio-toolbar' >
   <h2>Ingredients</h2>
<input type='checkbox' value='" . "" . "' Name='" . "" . "' class='myinput'" . "" . "<a href='www.google.com'> Link</a><br>

 <br><br><br>
 <h2>Directions:</h2>
<p class='split left'>hiii"/*paragraph from sql */ . "</p> 
<br><br><h2>Note:"/*sql */ . "</h2> 
<br><br><br><h2>Time Taken:</h2>
</div>
<div class='split right radio-toolbar'>
 
 <h2>For More Ingredients"/*sql */ . "</h2>
 <div align='left'>
<a href='https://cozmo.jo/fruits-vegetables/african-lemons.html'>Click here</a>
</div>
    
    </div>
<form action='Ingredients.php' method='get'>
        <input type='submit' value='Next' class='button'>
    </form>";

}
    else
        header("Location: ingredients.php");
    ?>

</body></html>