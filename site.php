<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD
csc155201F -->
<html>
<head>
<title>Log In Page</title>
<?php
require("library/functions.php"); 
 
function getPost($name)  
{

 if (isset($_POST[$name]) ) 
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}



if (isset ($_POST['submit']))
{ 
    if($_POST['submit']=='log in')
    {
         if ($_POST['username2021']=='youcef' && $_POST['password2021']=='0000')
           {
             header("Location:welcome.php");
           }
    
          else 
           {
           echo '<b>invalid username and/or password, try again</b>';
           }
     }
   else if($_POST['submit']=='forgot password')
    { 
    echo "try <b>youcef</b> and <b>0000</b> ";
    }
   else if($_POST['submit']=='create new account')
    {
    echo "no need to create another account, just try <b>youcef</b> and <b>0000</b> ";
    }


}
else 
{
}

?>
</head>
<body>
<?php  head()?><br><br>
<form method='POST'>
username:<input type='text' name='username2021' value='<?php echo getPost("username2021");?>'> <br>
password:<input type='password' name='password2021' value='<?php echo getPost("password2021");?>'> <br>
<input type='submit' name='submit' value='log in'>
<input type='submit' name='submit' value='forgot password'>
<input type='submit' name='submit' value='create new account'>

</form>
<?php footer()?>
</body>
</html>

