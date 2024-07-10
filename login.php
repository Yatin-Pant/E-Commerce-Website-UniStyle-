<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="unistyle";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if($_SERVER["REQUEST_METHOD"] == "POST")
{	
	 $Name = $_POST["name"];
	 $Password = $_POST["password"];
	 $E_Mail = $_POST["E_Mail"];
	 $Phone = $_POST["phone"];
	 //$phone = $_POST['phone'];

	 $sql_query = "INSERT INTO `user`(`Username`, `Password`, `E_Mail`, `Phone-No.`) 
	 VALUES ('$Name','$Password','$E_Mail','$Phone')";

	 if(mysqli_query($conn, $sql_query))
	 {
		header("location:login.html");
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
