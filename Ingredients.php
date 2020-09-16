<html>
<head>
    <title>Ingredients</title>
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
            border-radius: 50px;
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

            margin-left: 70%;
            margin-top: -10%;
            width: 180px;
            border: whitesmoke;
            padding: 13px 32px;
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
            margin-top: 10%;
            margin-left: 90%;
            width: 100px;
        }
        hr{
            color: white;
        }
        .split {
            background-attachment: scroll;
            width: 50%;
            position: fixed;
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

    </style>
</head>
<body>
<ul class ="ul1" >
    <li class="logo" ><img src="logo2.jpg"></li>
    <li ><a href="page%201.html">Home</a></li>

    <li><a href="contactUs.php">Contact us</a></li>

</ul>



<?php
session_start();

echo       "<form action='Choices.php' method='get' class='myform' >
         <h1>Choose available Ingredients:</h1>
         <hr><div>
         <div style='    width: 180px;
                border: whitesmoke;
                padding: 13px 32px;
                border-radius: 25px;
                background-color: red;
                font-family: Garamond;
                color: whitesmoke;
                font-size: 20px;
                opacity: 70%;
'>
<label for='userName'><p>User Name</p></label><input type='text' name='userName' placeholder='Enter UserName' required>
</div>
       
         ";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personalizedrecipes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql="select IngName,TypeName from ingredients, ingType where ingType=TypeID group by TypeName";
$result=$conn->query($sql);
if ($result->num_rows> 0)
{
    while($row = $result->fetch_assoc())

{ echo "<h2>".$row['TypeName']."</h2>
<input type='checkbox' value='".$row['IngName']."' Name='ingredients' class='myinput' id='".$row['IngName']."'>".$row['IngName']."<br>
            </div>";
    if (isset($row['ingName']))
    {
        foreach ($row['ingName'] as $value){
            $sql="insert into temp values ('".$value."')";
        }
    };
}}

$sql="select CatName from category";

$result2=$conn->query($sql);
if ($result2->num_rows> 0)
{

    echo '<select id="category" class="button">';
    while($row = $result2->fetch_assoc())
    {
        echo  "<option value='".$row['CatName']."'>".$row['CatName']."</option>";
    }
    echo "</select>";
}
$conn->close();

echo        "<div><input src='Nextbutton.png' type='image' align='bottom' class='image'></div>
        </form></body></html>";