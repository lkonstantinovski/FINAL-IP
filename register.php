<html>
<head>
<title>User Registration</title>
</head>
<body> 
<form action="Register.php" method="post" >
<table border="0" >
<tr>
<td>Name:
</td>
</tr>
<tr>
<td>
<input type="text" name="fname"><br>
</td>
</tr>
<tr>
<td>Username:
</td>
</tr>
<tr>
<td>
<input type="text" name="Username"><br>
</td>
</tr>
<tr>
<td>Password
</td>
</tr>
<tr>
<td>
<input type="password" name="Pass"><br>
</td>
</tr>
<tr>
<td>City
</td>
</tr>
<tr>
<td>
<input type="text" name="City"><br>
</td>
</tr>
<tr>
<td>Type Of User
</td>
</tr>
<tr>
<td>
<input type="radio" name="TypeOfUser" value="free" checked> Free&nbsp;
  <input type="radio" name="TypeOfUser" value="basic"> Basic
  <input type="radio" name="TypeOfUser" value="premium"> Premium
</td>
</tr>
</table>
  <input type="submit" value="Submit">
</form>
<br> 


<?php
if (isset($_POST['fname'])){ 

$hostname='localhost';
$username='root';
$password='';
$database='test';

$fname;
$Username;
$Pass;
$City;
$TypeOfUser;

	if (isset($_POST['fname'])){		
		$fname = $_POST['fname'];		
	}
	if (isset($_POST['Username'])){		
		$Username = $_POST['Username'];		
	}
	if (isset($_POST['Pass'])){		
		$Pass = $_POST['Pass'];		
	}
	if (isset($_POST['City'])){		
		$City = $_POST['City'];		
	}	
	if (isset($_POST['TypeOfUser'])){		
		$TypeOfUser = $_POST['TypeOfUser'];		
	}
	

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
    $sql = "INSERT INTO reservation (Name, Username, Password, City, tUser) VALUES ('".$fname."','".$Username."','".$Pass."','".$City."','".$TypeOfUser."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
	mysqli_close($mysqli);
}
?>
</body>
 </html>