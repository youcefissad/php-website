<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD
csc155201F -->
<html>
<head>
<title>purchase item 1</title>
<?php
require("library/functions.php");
secure_pages();


if (!isset($_SESSION['spoons']))
      
      $_SESSION['spoons']=0;

if (isset($_POST['submit']))
{
   if ($_POST['submit']=='buy one')
      $_SESSION['spoons']++;
   else if ($_POST['submit']=='buy five')
      $_SESSION['spoons']+=5;
   else if ($_POST['submit']=='buy twenty five')
      $_SESSION['spoons']+=25;
   else if ($_POST['submit']=='remove one')
      $_SESSION['spoons']-=1;
   else if ($_POST['submit']=='remove everything')
      $_SESSION['spoons']=0;

}
?>
</head>
<body>
<?php  head()?><br><br>
<b> purchasing spoons </b> 
<form method='POST'>
<input type='submit' name='submit' value='buy one'>
<input type='submit' name='submit' value='buy five'>
<input type='submit' name='submit' value='buy twenty five'>
<input type='submit' name='submit' value='remove one'>
<input type='submit' name='submit' value='remove everything'>
</form>
<p> you have bought <?php echo $_SESSION['spoons'];?> spoons for your birthday party. </p>
<p>  <?php echo print_spoons( $_SESSION['spoons']);?>  </p>
<?php footer()?>
</body>
</html>
