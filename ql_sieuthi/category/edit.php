<?php
    //ket noi CSDL
    include 'db.php';

    //lay du lieu tren url
    // $id = 101;

    //lay du lieu
    // $name    = '';
    
    //cau query
    // $sql = "UPDATE categories set name='$name' where id=$id";

    //check sql
    //var_dump($sql);

     //thuc hien truy van
  

 

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->exec($sql);
?>