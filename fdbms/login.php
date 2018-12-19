<?php
  session_start();
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["cancel"])){
        header('Location: logout.php'); 
        exit;
      }
 
    if (empty($_POST["name"]) || empty($_POST["pswd"])) {
      $_SESSION['error'] = "Username and Password are required";
      header("Location: login.php");
      return;
      
      }
      if($_POST["pswd"]!="php123"&&$_POST["name"]=="vishal"){

              error_log("Login fail ".$_POST['email']);

              $_SESSION['error'] = "Incorrect Password";
              header("Location: login.php");
              return;
        }
         
        if($_POST["pswd"]=="php123"&&$_POST["name"]=="vishal")  
          {

               
                $_SESSION['name'] = "vishal";

                header("Location: home.php");
                return;
          }

          if($_POST["pswd"]=="php1232"&&$_POST["name"]=="admin"){

              $_SESSION['name'] = "admin";
              header("Location: home.php");
              return;
          }

        
    
    
      
    }
    
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
   font-family: 'Source Sans Pro',sans-serif;
    background: #99a3a2;
}




.topp{
  width: 70%;
  margin-left:15%;
}

@media screen and (max-width: 900px) {
 
  .topp{
    width: 100%;
  }
}
.container {
    border-radius: 3px;
    background-color: #edf0f4;


    padding: 20px;
    height:600px;
    
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=text],  input[type=Password]{
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 16px 25px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
}
input[type=Reset]{
   background-color: #4CAF50;
    color: white;
    padding: 16px 25px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
    float: right;
    margin-right: 40%;
}


@media screen and (max-width: 500px) {
  input[type=submit],input[type=Reset] {
     padding: 8px 10px;
    }
    #cancelbtn{
  float: none;
  margin-right: 0%;
}
  }
  
</style>

</head>
	<body>
    <div class="topp">

<?php include("header.php");?>
<?php include("topnav.php");?>


<div class="container">
  <?php
  if ( isset($_SESSION['error']) ) {
          echo('<p style="color: red;">'.htmlentities($_SESSION["error"])."</p>\n");
          unset($_SESSION['error']);
      }

?>
  <form action="login.php" method="post" >
    
    
    <div class="row">
       <div class="col-25">
        <p id="ee"></p>
        <label for="r">Name</label>
            </div>

      <div class="col-75">
        <input type="text" id="r" name="name" >
      </div>
  </div>
    <div class="row">
      <div class="col-25">
        <label for="pwd">Password</label>
      </div>
      <div class="col-75">
        <input type="Password" id="pwd" name="pswd">
      </div>
    </div>
    <br>
        <input  type="submit" name="Submitbtn" value="submit"/>
         <input type="submit" name="cancel" value="Cancel">

      
      
  
  </form>
</div>


</div>


</body>
</html>
