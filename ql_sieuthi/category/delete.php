<?php
    //ket noi CSDL
    include 'connect.php';

    //lay du lieu tren url
    // $id = 101;
    
    //cau query
    // $sql = "DELETE FROM name WHERE categories = $name";

    //check sql
    // var_dump($sql);

     //thuc hien truy van




// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->exec($sql);

?>