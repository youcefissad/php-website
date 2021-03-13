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


if (!isset($_SESSION['cups']))
      
      $_SESSION['cups']=0;

if (isset($_POST['submit']))
{
   if ($_POST['submit']=='buy one')
      $_SESSION['cups']++;
   else if ($_POST['submit']=='buy five')
      $_SESSION['cups']+=5;
   else if ($_POST['submit']=='buy twenty five')
      $_SESSION['cups']+=25;
   else if ($_POST['submit']=='remove one')
      $_SESSION['cups']-=1;
   else if ($_POST['submit']=='remove everything')
      $_SESSION['cups']=0;

}
?>
</head>
<body>
<?php  head()?><br><br>
<b> purchasing cups </b> 
<form method='POST'>
<input type='submit' name='submit' value='buy one'>
<input type='submit' name='submit' value='buy five'>
<input type='submit' name='submit' value='buy twenty five'>
<input type='submit' name='submit' value='remove one'>
<input type='submit' name='submit' value='remove everything'>
</form>
<p> you have bought <?php echo $_SESSION['cups'];?> cups for your birthday party. </p>
<p>  <?php echo print_cups( $_SESSION['cups']);?>  </p>
<?php footer()?>
</body>
</html>
