<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD
csc155201F -->
<html>
<head>
<title>Log In Page</title>
<?php
require("library/functions.php");
session_start(); 
$conn = getConn();
if (isset ($_POST['submit']))
{ 
    if($_POST['submit']=='log in')
    {
     $row = lookupUsername($conn, getPost('username2021'));
           if ($row != 0 && password_verify($_POST['password2021'], $row['encrypted_password']) )
           {
             $_SESSION['user'] = getPost('username2021');
             $_SESSION['group'] = $row['usergroup'];
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
<a href='newUser.php'> Create new account</a>
</form>

</body>
</html>

