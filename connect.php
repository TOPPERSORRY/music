<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$department = $_POST['department'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$conn = new mysqli('localhost','id18395958_ritviik','Ansma@123Ansma@123','id18395958_test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name, email, date, department, phone, message)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssis",$name,$email,$date,$department,$phone,$message); 
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>