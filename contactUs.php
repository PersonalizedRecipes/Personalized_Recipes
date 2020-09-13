<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us</title>

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
            opacity: 60%;

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

            float: right;
            width: 200px;
            border: whitesmoke;
            padding: 15px 32px;
            border-radius: 25px;
            background-color: red;
            font-family: Garamond;
            color: whitesmoke;
            font-size: 20px;
            opacity: 65%;

        }
        li a:hover {
            background-color: #111;
        }
        .image{
            margin-top: 400px;
            margin-left: 80%;
        }
        hr{
            color: white;
        }
        .split {
            background-attachment: scroll;

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
            opacity: 50%;
            border-radius: 50px;
            position: center;
            margin-top: 70px;
        }
        a{
            color:red;
        }

    </style>
</head>
<body align="center">
<ul class ="ul1" >
    <li class="logo" ><img src="logo2.jpg"></li>
    <li ><a href="page%201.html">Home</a></li>

    <li><a href="contactUs.php">Contact us</a></li>

</ul>

<div class="bg">
<br><br><br>
<h1 align="left">Contact Us:</h1>
<p>Call us on: <e>0795654033</e>.</p>
Or Email us on:<a href="mailto:PersonalizedRecipes@outlook.com"> PersonalizedRecipes@outlook.com</a>
<br><br><br><br><br><br>
</div>
<br><br>
<form action="Ingredients.php" method="get">
    <input type="submit" value="Back to Ingredients" class="button">
</form>
</body>
</html>
