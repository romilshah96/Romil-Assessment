<?php
$servername ="localhost";
$username ="root";
$password ="";
$database_name ="d1";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
	
}

if(isset($_POST['save']))
{
	$FullName = $_POST['FullName'];
	$Username = $_POST['Username'];
	$Email    = $_POST['Email'];
	$Address = $_POST['Address'];
	$Gender   = $_POST['Gender'];
	$Contact  = $_POST['Contact'];
	$Age      = $_POST['Age'];
	
    $sql_query ="INSERT INTO entry_details(FullName,Username,Email,Address,Gender,Contact,Age)

    Values('$FullName','$Username','$Email','$Address','$Gender','$Contact','$Age')";

    if(mysqli_query($conn,$sql_query))
    {
	echo "New Deatails Entry inserted sucessfully !";

    }

    else
    {
	echo"Error:". $sql . "" .mysqli_error($conn);   
    }
    mysqli_close($conn);

}
?>