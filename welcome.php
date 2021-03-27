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
secure_pages();
if (isset($_POST['submit']))
   {
    setcookie("name",$_POST['name'], time() + (86400 * 30));
   }


?>
</head>
<body>
<?php head()?><br><br>
<p> welcome page is here </p>
<form method='POST'>
<table border='1'>
<tr>
<td>first and last name</td>
<td><input type='text' name='name' value=''></td>
</tr>
<tr >
<td colspan='3'><input type='submit' name='submit' value='enter first and last name'>
</td></tr>
</table>
</form>
<?php footer()?>
</body>
</html>

