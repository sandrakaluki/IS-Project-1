<?php
?>
<DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8">
<meta name= "viewport" content="width=device-width">
<meta name= "keywords" content="carbon footprint,greenhouse gases">
<meta name="author" content=" Sandra and Adrian">
<title> Carbon Coin - Home </title>

<link rel="stylesheet" href="Frontend/css/style.css" />
</head>

<body>
<style>
body{
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to right,#00ff73,#00ff11);
    color:green;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;

}
</style>

<p> Choose the activities that you have done today </p>

<div class="home-container">
    <style>
        .home-container {
    background: #00ff73;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px;
}
        </style>
     <p style="color:green";  > Activities:</p>
      <input type="checkbox" name="activities[]" value="Cooking">Cooking
      <input type="checkbox" name="activities[]" value="Driving">Activities
      <input type="checkbox" name="activities[]" value="Electrity">Electricity

      <button type="Calculate">Calculate
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
</body>
</html>