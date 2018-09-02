<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<form method="POST">
<table>
<tr>

<td>User Type</td>
<td><select name="usertype">
<option value="-1">Select User Type</option>
<option value="admin">Admin</option>
<option value="driver">Driver</option>
<option value="passenger">Passenger</option>
</select></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="username"/></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pwd"/></td>
</tr>

<tr>
<td>&nbsp; </td>
<td><input type="submit" name="submit" value="Login"/> </td>
</tr>

</table>
</form>

</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	echo "Unable to establish connection" . mysql_error();
}

	$db=mysql_select_db("proj",$con);
	if(!$db)
	{
		echo "Database not found".mysql_error();
	}

	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$type=$_POST['usertype'];
		
	
	$query="select * from users where username='$username'
and password='$password' and usertype='$type' ";

	
	$result=mysql_query($query);
	
	while($row=mysql_fetch_array($result)){
		
		if($row['username']==$username && $row['password']==$password && $row['usertype']=='Admin')
		{ header("Location: admin1.php");
		}
	    elseif($row['username']==$username && $row['password']==$password && $row['usertype']=='Driver')
		{ header("Location: driver.php");
		}
		elseif($row['username']==$username && $row['password']==$password && $row['usertype']=='Passenger')
		{ header("Location: user.php");
		}
	}
	
	}
?>

