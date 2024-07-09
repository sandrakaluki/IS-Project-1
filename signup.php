<?php
?>
<DOCTYPE html> 
<html lang="en">

<head> 
<meta charset="utf-8">
<meta name= "viewport" content="width=device-width">
<meta name= "keywords" content="carbon footprint,greenhouse gases">
<meta name="author" content=" Sandra and Adrian"> 
<title> Carbon Coin - Sign Up </title>
<link rel="stylesheet" href="Frontend/css/style.css" />
<img src="">
</head>

<body>
<div class="sign-up-container">
    <h1> Sign Up </h1>
    <form action="home.php" method="post">

 <div class="input-container">
    <style>
        .sign-up-container{
    background: #00ff73;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px;
}
        </style>
<label for="First Name"> First Name </label>
<input required type="text" id="fname" name="fname">

<label for="Last Name"> Last Name </label>
<input required type="text" id="lname" name="lname">

<label for="password"> Password </label>
<input required type="text" id="password" password="password">
</div>

<div class="button-container">
<button type="submit" class="btn"> Sign Up
    <style>
.button-container {
    display: flex;
    justify-content: space-between;
}

.button-container .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #00ff84;
    color: #ffffff;
    cursor: pointer;
    font-size: 1em;
}

.button-container .btn:hover {
    background-color: #00b506;
}

.button-container .btn:active {
    background-color: #007f2a;
}
</style>
</button> 
</div>
</form>
</body>
</html>