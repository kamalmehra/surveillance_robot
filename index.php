<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="runcss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:black">
<h1 style="color:red ; text-align:center;">BOT MOVER 2.0</h1>
<br>
<br>
<div class="container-fluid" align="center">
 <div class="row" >
    <div  style= "display:inline; " ><button onclick="myFunction1()" style= "margin-right:150px;background-color:green"class ="x1"type="button" class="btn btn-success" style="">Start</button>
    

    <div style= "display:inline;"><button onclick="myFunction2()" class ="x1" type="button"  class="btn btn-danger" style="background-color:red">Stop</button></div>
  </div>
  <div>
  <br>
  <br>
  <br>
<div>
     <div class="container-fluid" align="center" > 
   <div class="row" >
    <div style= "display:inline;"><button class ="x" type="button" onclick="myFunction3()" class="btn btn-success" style="background-color:green">Sharp L</button></div>
    <div style= "display:inline;"><button class ="x" type="button" onclick="myFunction4()" class="btn btn-success" style="background-color:orange">Forward</button></div>
    <div style= "display:inline;"><button class ="x" type="button" onclick="myFunction5()" class="btn btn-success" style="background-color:green">Sharp R</button></div>
  </div>
</div>


 <div class="container-fluid" align="center" > 
   <div class="row" >
    <div style= "display:inline;"><button class ="x" type="button" onclick="myFunction6()" class="btn btn-danger" style="background-color:red">Left</button></div>
    <div style= "display:inline;"><button class ="x" type="button" onclick="myFunction7()" class="btn btn-success" style="background-color:blue">Backward</button></div>
    <div style= "display:inline;"><button class ="x" type="button" onclick="myFunction8()" class="btn btn-danger" style="background-color:red">Right</button></div>
  </div>
</div>
<script>
function myFunction1() {window.open('start.php', "_self")
}
function myFunction2() {window.open('stop.php', "_self")
}
function myFunction3() {window.open('sharpleft.php', "_self")
}
function myFunction4() {window.open('forward.php', "_self")
}
function myFunction5() {window.open('sharpright.php', "_self")
}
function myFunction6() {window.open('left.php', "_self")
}
function myFunction7() {window.open('backward.php', "_self")
}
function myFunction8() {window.open('right.php', "_self")
}
</script>
</body>
</html>

