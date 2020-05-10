<?php
$email=$_POST['email'];
$mobno=$_POST['mobno'];


$conn=new mysqli('localhost','root','','whorvisited');

if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt- $conn->prepare("insert into registration(email,mobno)value(?,?)");
    $stmt->bind_param("si",$email,$mobno);

    $stmt->execute();
    echo "registration successful...";
    $stmt->close();
    $conn->close();

}
?>