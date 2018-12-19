
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" rel="stylesheet">
    <title></title>
    <style>
    body{
        background: grey;
    }
        #qt{
            border-collapse: collapse;
            width: 100%;
     
        }
        th,tr,td{
            font-family: 'Bai Jamjuree', sans-serif;
        }
        th{
            background: #3d3f42;
            color:white;
        }
        a:link {
    color: #173866;
}
.topp{
    background: white;
    width: 70%;
    margin-left: 15%;
}
/* visited link */
a:visited {
    color: #173866;
}

/* mouse over link */
a:hover {
    color: #173866;
}

/* selected link */
a:active {
    color: #173866;
}
#d{
  color: red; 
}

 </style>
</head>
<body>
    <div class="topp">
    <?php 
    include "header.php";
    ?>

<?php
    require_once "pdo.php";
    session_start();
        if(isset($_SESSION['error'])){
            echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
            unset($_SESSION['error']);

        }
         if(isset($_SESSION['success'])){
            echo('<p style="color: green;">'.htmlentities($_SESSION['success'])."</p>\n");
            unset($_SESSION['success']);

        }
         

    echo('<table border="1" width="80%" id="qt">');
        $stmt = $pdo->query("SELECT id,Sname,TName,v1 ,v2,v3,v4,v5 FROM response");
        if($stmt->rowCount()==0){
            echo '<p>No Rows Found</p>';
        }
        echo"<tr><th>";
        echo"student";
        echo"</th><th>";
        echo"Teacher";
        echo('</th><th colspan="6">');
        echo"response";
        echo"</th>";
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            echo "<tr><td>";
            echo(htmlentities($row['Sname']));
            echo("</td><td>");
            echo(htmlentities($row['TName']));
            echo("</td><td>");
            echo(htmlentities($row['v1']));
            echo("</td><td>");
            echo(htmlentities($row['v2']));
            echo("</td><td>");
            echo(htmlentities($row['v3']));
            echo("</td><td>");
            echo(htmlentities($row['v4']));
            echo("</td><td>");
            echo(htmlentities($row['v5']));
            echo("</td><td>");

            echo('<a href="editt.php?id='.$row['id'].'">Edit</a> / ');
            echo('<a id="d"href="delete.php?id='.$row['id'].'">Delete</a>');
            echo("</td></tr>\n");
        }
        
        
    echo('</table>');
    echo'<a href="home.php">back</a>';
?>
</div>
</body>
</html>
