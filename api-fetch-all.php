<?php 

header('Content-type: application/json');
header('Acess-Control-Allow-Origin: *');
include "config.php";


$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if(mysqli_num_rows($result) > 0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

}else{
     echo json_encode(array('message' => 'No Record is there.', 'status' => false));

}

?>