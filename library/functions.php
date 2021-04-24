
<?php
function head ()
  {
if (isset($_COOKIE["name"]))
{
    $name=$_COOKIE["name"];
}
else 
{
    $name="no name set";
}
  echo $name;
  echo "<center>";
  echo "<h3>Youcef Issad 155201F</h3>";
  echo "<img src='http://www.csit.parkland.edu/~yissad1/images/1.png'>";
  echo "  ";
  echo "<img src='http://www.csit.parkland.edu/~yissad1/CSC/csc155201F/15-PHPsite/php-website/phpimages/image1.png'>";
  }
 
function footer()
{
echo "<center><strong>";
echo "<a href='site.php'> log in page </a>";
echo "   |  ";
echo "<a href='logout.php'> log out page </a>";
echo "   |  ";
echo "<a href='welcome.php'> welcome page </a>";
echo "   |  ";
echo "<a href='purchaseItem1.php'> purchase cups </a>";
echo "   |  ";
echo "<a href='purchaseItem2.php'> purchase forks </a>";
echo "   |  ";
echo "<a href='purchaseItem3.php'> purchase knives  </a>";
echo "   |  ";
echo "<a href='purchaseItem4.php'> purchase spoons </a>";
echo "   |  ";
echo "<a href='shoppingCarte.php'> shopping carte page </a><br>";
echo "<img src='http://www.csit.parkland.edu/~yissad1/CSC/csc155201F/15-PHPsite/php-website/phpimages/image2.png'>";

if ($_SESSION['group'] == 'admin')
    {
    echo  "<center><strong>";
    echo " &nbsp; | &nbsp; ";
    echo "<a href='displayUsers.php'>Display Users</a>";
    echo " &nbsp; | &nbsp; ";
    echo "<a href='displayOrders.php'>Display Orders</a>";
    echo " &nbsp; | &nbsp; ";
    }

}

function secure_pages($group='user')
{
session_start();

       if ( !isset( $_SESSION['user'] ) )
      
           {
           header("Location: site.php");
           }
}

function getPost($name)
{

 if (isset($_POST[$name]) )
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}

function print_cups($times)
{
  for ($i=0;$i<$times;$i++)
  {
  echo "<img src='phpimages/cup.jpg' alt='fork' width='40' height='40'>";
  }
}

function print_forks($times)
{
  for ($i=0;$i<$times;$i++)
  {
   echo "<img src='phpimages/fork.jpg' alt='fork' width='40' height='40'>";
  }
}

function print_knives($times)
{
  for ($i=0;$i<$times;$i++)
  {
  echo "<img src='phpimages/knife.jpg' alt='fork' width='40' height='40'>";
  }
}

function print_spoons($times)
{
  for ($i=0;$i<$times;$i++)
  {
  echo "<img src='phpimages/spoon.jpg' alt='fork' width='40' height='40'>";
  }
}

function getConn()
{
    $user = "yissad1";  
    $conn = mysqli_connect("localhost",$user,$user,$user);
    if (mysqli_connect_errno()) 
    {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
    }
    return $conn;
}

function lookupUsername($conn, $username)
{    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 0)
    {     
        return 0;
    }
    else if ($num_rows > 1) 
    {
        header("Location: logout.php");
    }
    else
    {
        return $result->fetch_assoc();
    }
}

?>