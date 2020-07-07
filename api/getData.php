<?php
include '../dbconfig.php';
$output=array();
$conn="SELECT * FROM list";
$result = $mysqli -> query($conn);
if(mysqli_num_rows($result)>0){
  while($row=$result -> fetch_assoc()){
    $output[]=$row;
  }

echo json_encode($output);
}
?>


