<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>รับฝากสัตว์เลี้ยง</title>
    <link rel="stylesheet" type="text/css" href="buty.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php include 'connect.php' ?>
    <?php include 'cal.php';?>
    <!-- <script>
    function check_date() {
      var d1 = document.getElementById('date1').value;
      var d2 = document.getElementById('date2').value;
      if (d1 != '' && d2 != '') {
        document.getElementById('p').innerHTML = d1;
        document.getElementById('p1').innerHTML = d2;
      }

      if(d1 == ''){

        document.getElementById('date1').style.borderColor = "red";
        document.getElementById('date1').focus();

      }
      else if ( d2 == '') {
        document.getElementById('date2').focus();
        document.getElementById('date2').style.borderColor = "red";
      }else {
        document.getElementById('date1').style.borderColor = "";
        document.getElementById('date2').style.borderColor = "";
      }

      // ปี เดือน วัน
    }
    </script> -->
  </head>
  <body>
    <div class="container">
</div>
<div class="col-sm-3">
</div>
</div>
        <div id="main" class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="col-sm-3">
                  </div>
                  <ul class="pagination">
                    <li><a href="login.php">Admin</a></li>
                    <li class="active"><a href="index.php">รับฝาก</a></li>
                  </ul>
             <div class="link_con">
               <h2>ข้อมูลการฝาก</h2>



               <form  method="post" >

                  <?php
                // echo  $id = $_POST['id'];
                // echo $fn= $_POST['fname'];
                // echo $ln= $_POST['lname'];
                // echo  $addr=$_POST['address'];
                // echo  $fd=$_POST['fdate'];
                // echo  $ld=$_POST['ldate'];
                // echo  $tel=$_POST['tel'];
                // echo $ani_spe=$_POST['ani_spe'];
                //  ?>
                 <span   name="code" onkeyup="coderun();">
                   <strong id='code'></strong>หมายเลขการฝาก</span>
                   <input type="text" name="id" disabled value="<?= $code_id ?>" >
                   <br><br><?php   include 'check.php';?>
                  <span  id="data_animal" class="input-group-addon">สัตว์ชนิด</span>
                  <?php while($row = $r->fetch_assoc()){
                   ?>
                   <span >
                      <input type="radio" checked name="ani_spe" value="<?=$row['val'];?>">
                     <strong><?=$row['species']; ?> </strong></span>

                  <?php } ?>
                <p class="">
                  <div class="input-group">
                      <span id="data_animal" class="input-group-addon">ข้อมูลผู้ฝากสัตว์</span>
                  </div>
                  <input id="" name="fname" type="text" class="form-control" placeholder="ชื่อ"value="gnamrq">
                  <input id="" name="lname" type="text" class="form-control" placeholder="นามสกุล"value="jnane">
                  <input id="" name="tel" type="text" class="form-control" placeholder="เบอร์ติดต่อ"value="0987665">
                  <textarea id="tx" name="address" rows="3" class="form-control" placeholder="ที่อยู่"></textarea>
                </p>
                <label>ฝากตั้งแต่วันที่</label>
                <input type="date" name="fdate" id="date1"value="2017-01-02"  >
                <label>ถึงวันที่</label>
                <input type="date" name="ldate" id="date2" value="2017-01-07" ><br>
                <button  id="test" class="btn btn-success" onclick="check_date();">ตกลง</button>


              </div>
                </div>
              </div>
        </div>
        <p id='p'></p>
        <p id='p1'></p>

    </form>
  </body>
</html>
