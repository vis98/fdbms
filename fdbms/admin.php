
<!DOCTYPE html>
<html>
<head>
	<title>
		projkt
	</title>
	<meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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





img{vertical-align: middle;}
.slideshow-container {
  max-width: 100%;
  height: 600px;
  position: relative;
}
.slideshow-container>img {
 margin-top: 1px; 
 width:100%;
 height: 100%;
 position: absolute;
}
@media only screen and (max-width: 400px) {
.slideshow-container {
  max-width: 100%;
  height: 400px;
}
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: right;
  -webkit-animation-duration: 1.5s;
  animation-name: right;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */

.slideshow-container>.btn{
  position: absolute;
  width: 50px;
  height: 50px;
  border:none;
  border-radius: 9px;
  top:210px;
  opacity: 0.7;

}
.topp{
  width:70%;
  margin-left:15%;
}

.slides{
  display: none;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
   
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 10px 30px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}
@media screen and (max-width: 600px) {
  .li a ,.dropdown{
display:block; 
    width: 100%;
  }
}

</style>


</head>
	<body>

<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="aboutus.php">ABOUTUS</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">USER MANAGEMENT</a>
    <div class="dropdown-content">
      <a href="addst.php">ADD TEACHER</a>
      <a href="viewst.php">MEMBER REPORT</a>

    </div>
  </li>
    <li><a href="viewad.php">VIEW ALL FEEDBACK</a></li>
    <li><a href="logout.php">LOG OUT</a></li>


</ul>



</body>
</html>
