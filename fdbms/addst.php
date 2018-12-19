<?php
  session_start();
  require_once "pdo.php";

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  if (isset($_POST['Submitbtn'])){
   
 
    if (empty($_POST["name"]) || empty($_POST["dept"])||empty($_POST["ema"])) {
      $_SESSION['error'] = "all fields are required";
      header("Location: addst.php");
      return;
      
      }
     
    		try{
		    	if(!empty($_POST['name'])&&!empty($_POST['dept'])){
		    		$stmt = $pdo->prepare('INSERT INTO teachers
					(name ,dept,email) VALUES ( :sn,:tn,:v1)');

					$stmt->execute(array(

					':sn' => $_POST['name'],

			    	':tn' => $_POST['dept'],

					':v1' => $_POST['ema']
					)

               
					); 
					$_SESSION['success']="your response is submitted";
					header("Location :addst.php");
					exit;
		    	}
		    }
		    catch(Exception $e){
		  		$_SESSION['error']="Already present";
		  		header("Location:addst.php");
		  		return;

		    }	
    
    
      
    }
    
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background: grey;
			margin-top:1px;
		}
		
.topp{
  width: 70%;
  margin-left:15%;
  background: white;
  border-radius: 3px;
  height: 590px;
}

@media screen and (max-width: 900px) {
 
  .topp{
    width: 100%;
  }
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    margin-left: 10px;
}

input[type=text],  input[type=email]{
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-left: 10px;
}

input[type=submit],input[type=Reset]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 23px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
    margin-left: 10px;
}
h2{
	margin-left: 40%;
}


	</style>
</head>
<body>
		<div class="topp">
		 	<?php include "header.php";
		 	include"admin.php";?>
		 	<h2> Register</h2>
		 	<?php
  				if ( isset($_SESSION['error']) ) {
          			echo('<p style="color: red;">'.htmlentities($_SESSION["error"])."</p>\n");
          			unset($_SESSION['error']);
      			}
      			if ( isset($_SESSION['success']) ) {
          			echo('<p style="color: green;">'.htmlentities($_SESSION["success"])."</p>\n");
          			unset($_SESSION['success']);
      			}


			?>
		 	<form action="addst.php" method="post" >
    
    
    			<div class="row">
       				<div class="col-25">
        				<p id="Te"></p>
        				<label for="r">Name</label>
        			</div>
      				<div class="col-75">
        				<input type="text" id="r" name="name" >
      				</div>
    			</div>
    			<div class="row">
      				<div class="col-25">
        				<label for="de">Department</label>
      				</div>
      				<div class="col-75">
        				<input type="text" id="de" name="dept">
      				</div>
    			</div>
    			<div class="row">
      				<div class="col-25">
        				<label for="em">Email Id</label>
      				</div>
      				<div class="col-75">
        				<input type="email" id="em" name="ema">
      				</div>
    			</div>
    			<br>
        		<input  type="submit" name="Submitbtn" value="submit"/>
         		<input type="Reset" name="cancel" value="Reset">
			</form>
		</div>
</body>
</html>