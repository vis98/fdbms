<?php
  session_start();
  require_once "pdo.php";

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
 
    if (empty($_POST["fname"]) || empty($_POST["em"])  ||  empty($_POST["Rno"]) || empty($_POST["subje"])) {
      $_SESSION['error'] = "All fields are required";
      header("Location: contact.php");
      return;
      
      }
      if(!empty($_POST["fname"]) && !empty($_POST["em"]) && !empty($_POST["Rno"]) && !empty($_POST["subje"])){

             if(is_numeric($_POST["Rno"])){
                $stmt = $pdo->prepare('INSERT INTO contact

                (Name,Email,RollNo,Subject) VALUES ( :nm, :ema, :rno,:su)');

                $stmt->execute(array(

                ':nm' => $_POST['fname'],

                ':ema' => $_POST['em'],

                ':rno' => $_POST['Rno'],
                ':su' => $_POST['subje'])

               
            ); 
             }
             else{
              $_SESSION['error'] = "roll no must be integer";
              header("Location: contact.php");
              return;
             }
              
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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="jquery-3.3.1.min.js"></script>
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




.topp{
  width:70%;
  margin-left:15%;
}


@media screen and (max-width: 900px) {
  
}
input[type=text], input[type=email], textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    border-radius: 5px;

}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: white;
    padding: 10px;
}



/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.row{
  background-color:white;
  width:100%;
  padding: 8px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
    .column {
        width: 50%;
        margin-top: 2px;
        margin-bottom:2px;

    }
    .row{
      width:100%;
    }
    input[type=submit] {
     padding: 8px 10px; 
    }
    input[type=text], input[type=email], textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
label{
  font-size:15px;
}
}

@media only screen and (max-width: 500px) {
    .topp{
      width: 70%;

    }
    h2{
      font-size: 15px;
    }
}
</style>

</head>
	<body>
    <div class="topp">

<?php include("header.php"); ?>
<?php include("topnav.php");?>


<div class="container">
  
  <div style="text-align:center">
    <h2>Contact Us</h2>
        <?php
    if(isset($_SESSION['error'])){
        echo('<span style="color: red;">'.htmlentities($_SESSION['error']).'</span>');
        unset($_SESSION['error']);
      }
    ?>
  </div>

  <div class="row">



      <form action="contact.php" method="post">
        <div class="row">
       <div class="col-25">
        <label for="fname">Name</label>
      
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
     <div class="row">
       <div class="col-25">
        <label for="email">Email Id</label>
      </div>
      <div class="col-75">
        <input type="email" id="em" name="em" placeholder="Your  email..">
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="Rno">RollNo</label>
      </div>
      <div class="col-75">
        <input type="text" id="roll" name="Rno">
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subje" placeholder="Write something.." style="height:170px"></textarea>
      </div>
    </div>
        <input type="submit" value="submit" >
        <input type="submit" name="cancel" value="Cancel">

      </form>

</div>


</div>

</body>

</html>
