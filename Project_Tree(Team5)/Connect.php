<?php
$con=mysqli_connect('localhost', 'root', '', 'test');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $query="INSERT INTO query(name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')";
    $run=mysqli_query($con, $query);
}

// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];

// //Database connection

// $conn = mysqli_connect('localhost', 'root', '', 'test');
// echo "Connection was successful";
// if($conn->connect_error){
//     die('Connection Failed : '.$conn->connect_error);
// }
// else{
//     $stmt = $conn->prepare("insert into query(name, email, phone, message)
//     values(?, ?, ?, ?)");
//     $stmt->bind_param("ssis", $name, $email, $phone, $message);
//     $stmt->execute();
//     echo "Query Submitted Successfully";
//     $stmt->close();
//     $stmt->close();
// }

?>