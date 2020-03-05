<?php
    //Get values pass from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//connect to the server and select database
	$conn = mysqli_connect("localhost","root","","login");
	$sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password' ";

	
	//query the database for the user
	$result = mysqli_query($conn, $sql)
				or die("Failed to query the database".mysqli_error());

	$row = mysqli_fetch_array($result);

	if ($row['username'] == $username && $row['password'] == $password)
	{
		echo "Login Success!!!";
	} 
	else {
		echo "Failed to login";
    }
    
/*
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
  { 
  	while ($row = mysqli_fetch_assoc($result))
  	{
  	  $id = $row["ID"];	
      $username = $row["username"];
	  
	  session_start();
	  $_SESSION['ID']=$id;
	  $_SESSION['username']=$username;
	  
	  
    }

   }
else
{
	echo "Invalid username or password";
}
*/

?>
