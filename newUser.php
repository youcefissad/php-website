<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Youcef ISSAD
csc155201F -->
<html>
<head>
<title>New User Page</title>
<?php
require("library/functions.php");

$formerror = "&nbsp;";
$conn = getConn();

if (isset($_POST['submit']))
{
    if ($_POST['submit'] == 'Create new user')
    {
    if (empty($_POST['username2021']))
        {
            $formerror = 'Username is required';
        }
        else if (empty($_POST['password2021']))
        {
            $formerror = 'Password is required';
        }
        else if ( $_POST['password2021'] != $_POST['password2021CONF'])
        {
            $formerror = 'The passwords do not match';
        }
        else if ( lookupUsername($conn, $_POST['username2021']) != 0 )
        {
            $formerror = 'Username already exists';
        }
    

    else 
    {
        $stmt = $conn->prepare("INSERT INTO users (username, encrypted_password, email, usergroup) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $encrypted_password, $email, $usergroup);
        
        $username = getPost('username2021');
        $encrypted_password = password_hash($_POST['password2021'], PASSWORD_DEFAULT);
        $email = getPost('email2021');
        $usergroup = getPost('usergroup2021');
        
        $stmt->execute();
        header("Location: site.php");
    }
        

    }
    else
    {
    header("Location: welcome.php");
    }
}

?>
</head>
<body>

<table align='center'> 
<form method='POST'>

<tr>
<td align='center'>New username: <input type='text' name='username2021' value='<?php echo getPost("username2021"); ?>'></td>
</tr>
<tr>
<td align='center'>New password: <input type='password' name='password2021' value='<?php echo getPost("password2021"); ?>'></td>
</tr>
<tr>
<td align='center'>Confirm password: <input type='password' name='password2021CONF' value='<?php echo getPost("password2021CONF");?>'></td>
</tr>
<tr>
<td align='center'>Email: <input type='text' name='email2021' value='<?php echo getPost("email2021");?>'></td>
</tr>
<tr>
<td align='center'>User group: <select name='usergroup2021'>
<option>user</option>
<option>admin</option>
</select>
</td>
</tr>
<tr>
<td><?php echo $formerror;?></td>
</tr>
<tr>
<td align='center'><input type='submit' name='submit' value='Create new user'>
    <input type='submit' name='submit' value='Cancel'></td>
</tr>
</form>
</table>

</body>
</html>

