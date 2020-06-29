
<!DOCTYPE html>
<html>
<head>
    <title>  Robot Controll Panel</title>
<style>

* {
  background-color: Teal;
  font-family:"Comic Sans MS", cursive, sans-serif;

}

h1 {

  color: black;
  font-size: 55px;
  text-align: center;
}

p {
  color: white;
  font-family: verdana;
  font-size: 25px;
  text-align: left;

}

.action {
  background-color: #4CAF50;
  padding: 30px 45px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  position:absloute;
  left:50%;
  cursor: pointer;
  border: 1px solid white;
  border-radius: 12px;

 }
*: hover {
background-color: gray;

}
.btn-group .action {
 text-align: center;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10px;
  margin-right: 10px;

}



</style>
</head>
<body>

<form action="index.php"  method="POST" >

<h1 style="text-align:center;">Robot Controll Panel</h1>
    <br><br>
    


<p >These is controll panel acts as a remote contoll for the robot movments.</p>
      <br><br>
    <hr>
<div class="btn-group"  style="text-align:center;">
<button type="submit" name ="action" value="f" style="background-color: #4CAF50;">Forwards</button>
</div>

<div class="btn-group"  style="text-align:center;">
<button type="submit" name ="action" value="l" style="background-color: #4CAF50;">Left</button>
<button type="submit"  name ="action" value="s" style="background-color:red;">STOP</button>
<button type="submit" name="action" value="r" style="background-color: #4CAF50;">Right</button>
</div>

<div class="btn-group"  style="text-align:center;">

<button type="submit" name="action" value="b" style="background-color: #4CAF50;">Backwards</button>
</div>
    <hr>
</form>
</body>
</html>
