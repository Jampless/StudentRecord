<?php
 $localhost = "localhost";
 $username= "root";
 $password= "";
 $database="studrec";
 $connection = mysqli_connect ($localhost , $username , $password , $database ) or die ("My SQL Error");

 $name=$_POST['Name'];
 $dep=$_POST['dep'];
 $mail=$_POST['mail'];
 $pass=$_POST['Pass'];

 
 $query = "INSERT INTO register (Fullname,Department,Email,Password)VALUES ('$name','$dep','$mail','$pass')";

$result = mysqli_query($connection, $query);
if($result){
    echo "Successfully Register!";
}
else{
    die('Error: '.mysqli_error($connection));
}
mysqli_close($connection);

?>

<a href = index.php> LOGIN </a>