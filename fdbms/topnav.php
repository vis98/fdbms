
<!DOCTYPE html>
<html>
<head>
	<title>
		projkt
	</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
  * {
    box-sizing: border-box;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
/* Style the navbar */
#navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  top:0;
  z-index: 500;

}

/* Navbar links */
#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

/* Page content */

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}

a:hover{
  background: red;
}


@media screen and (max-width: 700px) {
  .navbar {
    width: 100%;
  }
  .navbar a{
    float: none;
    display: block;
    width:100%;
  }
}
</style>

</head>
<body>
  <div id="navbar">
  <a href="home.php">HOME</a>
  <a href="aboutus.php">ABOUTUS</a>
  <a href="contact.php">CONTACT</a>
  <a href="login.php">LOGIN</a>

</div>
</body>
</html>

