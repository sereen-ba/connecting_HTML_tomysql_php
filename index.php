<?php 

$dbServername = 'localhost'; //define the server

$dbName ='control' ; //define you database name that you already created it on php myadmain 

$conn =mysqli_connect($dbServername,'root','',$dbName); //connecting the database to my php file

if($conn){
    echo 'Success';
}
 


if ($_POST['action'] == "b"){
	echo "<p align=center>backward</p> ";
    
	mysqli_query($conn,"INSERT INTO moves SET 'moves' = '-y'");
   
}

if ($_POST['action'] =="f"){
	echo "<p align=center>Forwards</p> ";
	mysqli_query($conn,"INSERT INTO moves (moves) VALUES ('+y');");
   
}
if ($_POST['action']=="l"){
	echo "<p align=center>Left</p> ";
	mysqli_query($conn,"INSERT INTO moves(moves) VALUES('-x');");
   
}
if ($_POST['action']=="s"){
	echo "<p align=center>Stop</p> ";
	mysqli_query($conn,"INSERT INTO moves(moves) VALUES('zero');");
   
}
if ($_POST['action']=="r"){
	echo "<p align=center>Right</p> ";
	mysqli_query($conn,"INSERT INTO moves(moves) VALUES('+x');");
   
}





?>
<!DOCTYPE HTML>

<html>
<head>
    <title>Move</title>
    <style>
        *{
 font-family:"Comic Sans MS", cursive, sans-serif;

        }
        input{
  background-color: #4CAF50;
  padding: 10px 30px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size:16px;
  cursor: pointer;
  border: 1px solid white;
  border-radius: 12px;
  margin-top: 5px;
  margin-bottom: 10px;
  margin-left: 10px;
  margin-right: 10px;
        }
        input: hover {
background-color: gray;

}
    </style>
    </head>

<body style= "background-color: Teal";>
<center>
    <br><br>
<form>
  <input type="button" value="Back" onclick="history.back()">
</form>
</center>
</body>



</html>

