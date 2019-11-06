<?php



if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$find_us=$_POST['find-us'];
$message=$_POST['message'];


$to2 = "dabba.wala18@gmail.com";
$subject2 = "You have a Comment";
$body2 = "\r\n\r\nName : $name\r\nEmail Address:$email\r\nComment:$message";
$from2 = "From: $email";

$y=mail($to2,$subject2,$body2,$from2);
if($y==true){
	header("location:index.html");
}else{
	echo "Error";
}

}else{
	echo "Error";
}

?>

