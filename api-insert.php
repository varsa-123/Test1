<?php 
header('Content-type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Authorization, X-Requested-With');


$data = json_decode(file_get_contents("php://input"), true);
 $id = $data['sid'];
$name= $data['sname'];
 $age = $data['sage'];
 $city = $data['scity'];


include "config.php";


$sql = "INSERT INTO student(id,student_name,age,city) VALUES ({$id}, '{$name}', {$age}, '{$city}')";



if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Student Record Inserted.', 'status' => true)); 
}else{
     echo json_encode(array('message' => 'Student Record Not Inserted.', 'status' => false));

}



?>