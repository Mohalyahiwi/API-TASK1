<?php
header('Content-Type :  application/json');
$servername="LocalHost";
$username="remot";
$password="S-M12345";
$dbname="API-TASK-1";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);

}


$input= json_decode(file_get_contents('php://input'), true);
$command=$input['command'];
$sql= "INSERT INTO direction (command) VALUES ('$command')";

if($conn->query($sql) === TRUE){
echo json_encode(["status"=>"success"]);}
else{
    echo json_encode(["status"=> "error","message"=>$conn->error])

}

$conn->close();

?>