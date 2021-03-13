<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD
csc155201F -->
<html>
<head>
<title>log out page</title>
<?php 
// php library loading first
require("library/functions.php");
secure_pages();
unset($_SESSION['user']);
header ("refresh:5;url=site.php"); 

?>
</head>
<body>
<?php  head()?><br><br>
<h1> thank you for visiting our website!!! by </h1>

<?php footer()?>
</body>
</html>
