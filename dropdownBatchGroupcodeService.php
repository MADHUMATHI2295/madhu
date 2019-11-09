<?php

//include '../commonService/sqlConnection.php';
include '../../../lccrm/lccrmService/commonService/sqlConnection.php';
$role=$_SESSION['role'];
$Center=$_SESSION['selCenter'];
if( $role=='CM'|| $role =="BH")   
$sql = "SELECT BatchGroupCode from batchgroup where CenterName = '$Center' and Active='Y'";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // need to populate the entire page using the date and busnumber
   
    $str =  " ";
    while($row = $result->fetch_assoc()) {
      $str .=  "<option value='" . $row['BatchGroupCode'] . "'>" . $row['BatchGroupCode'] . "</option>\n";
    }
    echo $str;
    
} else {
    echo "nothing"; //no row 
}
$conn->close();
?>
