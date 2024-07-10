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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email=$_POST["email"];
    $pass=$_POST["password"];
    $sql = "SELECT * FROM user WHERE E_Mail='$email' AND password='$pass'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo $sql;
    // print_r($row);die;
    $count = $result->num_rows;
    if($count>=1){
        header("location:index.html");
    }
    else{
        header("location:login.html");
    }
}
?>
