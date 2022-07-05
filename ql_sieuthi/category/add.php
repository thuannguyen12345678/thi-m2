<?php
 include 'connect.php';

// Controller
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
   
    $name = $_POST["name"];
    $sql = "INSERT INTO categories (name) VALUES ('$name');";
    // echo $sql;
    // die();

    $spl = "SELECT * FROM books";
    // $conn->exec($sql);
    
    header('location:index.php');
}
?>



<!DOCTYPE html>
<html>

<body>

    <h1>Thêm danh mục</h1>

    <form method="post" action="">
        <label for="fname">Tên hàng</label>
        <input type="text" id="fname" name="name"><br><br>
        loại hàng:
        <input type="text" id="fname" name="name"><br><br>
        giá:
        <input type="text" id="fname" name="name"><br><br>
        số lượng: 
        <input type="text" id="fname" name="name"><br><br>
        mô tả:
        <input type="text" id="fname" name="name"><br><br>
        
        <input type="submit" value="Nhập mặt hàng">
        <input type="submit" value="thoát">
   
    </form>


</body>

</html>