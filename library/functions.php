
<?php
function head ()
  {
  echo "<center>";
  echo "<h3>Youcef Issad 155201F</h3>";
  echo "<img src='http://www.csit.parkland.edu/~yissad1/images/1.png'>";
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
echo "<a href='shoppingCarte.php'> shopping carte page </a>";
}

function secure_pages()
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
  echo "C";
  }
}

function print_forks($times)
{
  for ($i=0;$i<$times;$i++)
  {
  echo "F";
  }
}

function print_knives($times)
{
  for ($i=0;$i<$times;$i++)
  {
  echo "K";
  }
}

function print_spoons($times)
{
  for ($i=0;$i<$times;$i++)
  {
  echo "S";
  }
}

?>