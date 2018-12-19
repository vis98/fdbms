<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		projkt
	</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<style type="text/css">
  * {
    box-sizing: border-box;
    font-family: 'Source Sans Pro';
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #99a3a2;
}


.content {
    padding: 10px;
    max-width:100%;
    position: relative;
    background:white;
    margin:auto;
    font-family: 'Noto Serif KR', sans-serif;
    font-size: 20px;
    height: 600px;
}

.topp{
  width:70%;
  margin-left:15%;
}


@media screen and (max-width: 900px) {
  .header p{
    text-align: center;
    width: 100%;
    font-size: 30px;
  }
}
@media screen and (max-width: 900px) {
  .content img{
    
    width:50%;
    height: auto;
  }
  .content{
    height: 700px;
  }
  .content p,h2{
    
    font-size: 18px;
  }
}
.con1{
  width: 30%;
  background: pink;
  float: right;
  margin: 0 auto;
}
.con2{

  width: 50%;
  background: red;
}
#pa{
  font-size: 20px;
}
.content h2{
  margin: 0 auto;
}
#e3{
  float: right;
}
</style>

</head>
	<body>
    <div class="topp">

<?php include("header.php");
if(isset($_SESSION['name'])&&$_SESSION['name']=="Vishal"){
  include 'student.php';
}
elseif(isset($_SESSION['name'])&&$_SESSION['name']=="admin"){
    include 'admin.php';

  }
  else{
    include'topnav.php';
  }
?>


<div class="content">
<h2>ABOUT STUDENT FEEDBACK  SYSTEM</h2>
<hr style="border-color:solid black;" >
<img src="VoiceLogo.png"  id="e3">
<p>Feedback occurs when outputs of a system are routed back as inputs as part of a chain of cause and effect that forms a circuit.The system can then said to be feed back into itself.The notion of cause and effect has to be handed carefully when applied to feedback system.
</p>
<p>Simple casual reasoning about a feedback system is difficult because the  first  system influences the second and second system influences the first,leading to a circular argument .This makes the reasoning based upon a cause  and effect tricky, and it is neccsary to analayze the system a whole.
  </p>
</div>

</div>
</body>

</html>
