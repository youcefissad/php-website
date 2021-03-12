<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD 
csc155201F -->
<html>
<head>
<title>welcome page</title>
<?php
 
// php library loading first
require("library/functions.php");
session_start();
if (!isset( $_SESSION['user']))
{
    header("Location: login.php");
}

 
?>
</head>
<body>
<?php head()?><br><br>
<p> welcome page is here </p>
<?php footer()?>
<?php echo $_SESSION['user'];?>
</body>
</html>

