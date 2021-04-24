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

function insertNewRecord($conn)
{
   // prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_orders (username, date, cups, forks, spoon, knives) VALUES (?,?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $date, $cups, $forks, $spoons, $knives);
    
    // set parameters and execute
    $username = getPost('username2021');
    $date = $_POST['date'];
    $cups = $_SESSION['cups'];
    $forks = $_SESSION['forks'];
    $spoons = $_SESSION['spoons'];
    $knives = $_SESSION['knives'];

    $stmt->execute(); 
}


// Create connection object
$user = "yissad1";  
$conn = mysqli_connect("localhost",$user,$user,$user);



if (isset($_POST['submit']))
{
    if (($_POST['submit'] == "buy one")||($_POST['submit'] == "buy five")||($_POST['submit'] == "buy twenty five"))
    {
    if (!empty( $_POST['name'] )) 
    {
        insertNewRecord($conn);
    }
    }
}



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
