<?php
  include 'connect.php';
  include 'cal.php';
//============chech value input ======================
     if (isset($_POST['fname'])||
          isset($_POST['lname'])||
          isset($_POST['address'])||
          isset($_POST['fdate'])||
          isset($_POST['ldate'])||
          isset($_POST['fname'])||
          isset($_POST['tel'])
        ) {
    // echo $code_id;
     $fn= $_POST['fname'];
     $ln= $_POST['lname'];
     $addr=$_POST['address'];
     $fd=$_POST['fdate'];
     $ld=$_POST['ldate'];
     $tel=$_POST['tel'];
     $ani_spe=$_POST['ani_spe'];
     if($fn != '' && $ln != ''  /*&& $addr != ''*/ && $fd != '' && $ld != '' && $tel != '')
     {
       $sql = "INSERT INTO person (id, fname, lname, address, fdate, ldate, type_animal, tel, status)
       VALUES ('$code_id', '$fn', '$ln', '$addr', '$fd', '$ld','$ani_spe', '$tel','1' )";

     }
     else
      {

        echo '<span style="color:red">*ยังกรอกข้อมูลไม่ครบ*</span>';
       $sql = "select * from person";
     }

     if ($conn->query($sql) === TRUE) {
          echo "<script> alert('saved successfully')</script>";
          header("Location: index.php");

     } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
     }
     }else {
       echo 'กรุณากรอกขอมูลให้ครบ';

     }$conn->close();

     $CallbackFilterIterator
 ?>
