<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD
csc155201F -->
<html>
<head>
<title>purchase item 3</title>
<?php
require("library/functions.php");
secure_pages();


if (!isset($_SESSION['knives']))
      
      $_SESSION['knives']=0;

if (isset($_POST['submit']))
{
   if ($_POST['submit']=='buy one')
      $_SESSION['knives']++;
   else if ($_POST['submit']=='buy five')
      $_SESSION['knives']+=5;
   else if ($_POST['submit']=='buy twenty five')
      $_SESSION['knives']+=25;
   else if ($_POST['submit']=='remove one')
      $_SESSION['knives']-=1;
   else if ($_POST['submit']=='remove everything')
      $_SESSION['knives']=0;

}
?>
</head>
<body>
<?php  head()?><br><br>
<b> purchasing knives </b> 
<form method='POST'>
<input type='submit' name='submit' value='buy one'>
<input type='submit' name='submit' value='buy five'>
<input type='submit' name='submit' value='buy twenty five'>
<input type='submit' name='submit' value='remove one'>
<input type='submit' name='submit' value='remove everything'>
</form>
<p> you have bought <?php echo $_SESSION['knives'];?> knives for your birthday party. </p>
<p>  <?php echo print_knives( $_SESSION['knives']);?>  </p>
<?php footer()?>
</body>
</html>
