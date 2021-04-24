<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD
csc155201F -->
<html>
<head>
<title>Shopping Carte</title>
<?php
require("library/functions.php");
secure_pages();



?>
</head>

<body>
<?php  head()?><br><br>
<h1> checkout </h1> 


<p>  <?php echo print_cups( $_SESSION['cups']);?>  </p>
<p> Total Cups = <?php echo $_SESSION['cups'];?> </p>

<p>  <?php echo print_forks( $_SESSION['forks']);?>  </p>
<p> Total Forks= <?php echo $_SESSION['forks'];?> </p>

<p>  <?php echo print_knives( $_SESSION['knives']);?>  </p>
<p> Total Knives= <?php echo $_SESSION['knives'];?> </p>

<p>  <?php echo print_spoons( $_SESSION['spoons']);?>  </p>
<p> Total Spoons= <?php echo $_SESSION['spoons'];?> </p>
<?php footer()?>
</body>
</html>
