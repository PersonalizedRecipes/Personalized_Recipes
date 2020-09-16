

<html>

<head>
    <title>Choices</title>

    <style>
        body{
            background-color: whitesmoke;
            background-image: url("bg.jpg");
            background-attachment: fixed;
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
            border-radius: 8px;
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
        .radio-toolbar input[type="radio"] {
            display: none;
        }

        .radio-toolbar label {
            color: gray;
            overflow: auto;
            font-family: Garamond;
            font-size: 25px;
            background-color: whitesmoke ;
            border-radius: 25px;
            padding: 10px 265px;
            text-align: center;
            align-content: center;
            alignment: center;
            width: 550px;
            position: center;
            margin-left: 20px;
            background-size: 500px;
            margin-top: 50%;
            opacity: 70%;
        }

        .radio-toolbar input[type="radio"]:checked+label {
            color: white;
            overflow: hidden;
            font-family: Garamond;
            font-size: 25px;
            background-color: red ;
            border-radius: 25px;
            padding: 10px 265px;
            text-align: center;
            width: 550px;
            position: center;
            margin-left: 20px;
            background-size: 500px;
            margin-top: 50%;
            opacity: 70%;
        }


        .logo{

            margin: 10px;
            padding: 0;
            float: left;
            opacity: 80%;

        }
        .button {

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
            margin-top: 10%;

        }
        li a:hover {
            background-color: #111;
        }
        .image{
            margin-top: 300px;
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

    </style>
</head>
<body>
<ul class ="ul1" >
    <li class="logo" ><img src="logo2.jpg"></li>
    <li ><a href="page%201.html"  class='a1'>Home</a></li>

    <li><a href="contactUs.php"  class='a1'>Contact us</a></li>

</ul>
<form action='recipes.php' method='get' class='myform' >
    <h1>Choose a Yummy Recipe:</h1>
    <hr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personalizedrecipes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
    $sql="select RecName from ingredients,ingforrecipe,recipes,ingType,temp where ingID=ingredientsID and RecID=RecipeID and ingType=TypeID";
$result=$conn->query($sql);
if ($result->num_rows> 0)
{

    while($row = $result->fetch_assoc())
    {
        $i=1;
        if($i==1){
  echo  "<div class='split left radio-toolbar' >
        <br><br>
        <input type='radio' id='". $row['RecName']. "' name='recipe' value=". $row['RecName']. ">
        <label for=". $row['RecName']. " >". $row['RecName']. "</label><br><br><br>";
  $i=2;
        }
        else{



  echo "  </div>
    <div class='split right radio-toolbar' >
        <br><br>
        <input type='radio' id=". $row['RecName']. " name='recipe' value=". $row['RecName']. ">
        <label for=". $row['RecName']. " >". $row['RecName']. "</label><br><br><br>
     
 ";
        $i=1;}}}
 echo      "<input type='submit' value='Next' name='Next' class='button' align='bottom'>
    </div></form></body></html>";






