<!DOCTYPE html>
<html>

  <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Admin</title>
    <?php
    // Create connection
$conn = new mysqli('localhost','root', '', 'collector');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM person";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row

     ?>

  </head>
  <body>
			<div class="container">
				<h1>Management Admin</h1>
        <button type="button" name="button"class="btn btn-danger" onclick="window.location.assign('index.php')">Log Out</button>

				<table class="table table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>ชื่อ</th>
							  <th>นามสุกล</th>
							  <th>เบอร์ติดต่อ</th>
                <th>สัตว์ที่ฝาก</th>
							</tr>
						  </thead>
						  <tbody>
                <?php
                  $a =1 ;
                while($row = $result->fetch_assoc()) {
                  $del_id = $row['id'];
                  $del = "DELETE FROM person WHERE id = '$del_id' ";
                    echo '<tr>';
                    echo '<th>'.$a++.'</th>';
                    echo '<td>'.$row["fname"].'</td>';
                    echo '<td>'.$row["lname"].'</td>';
                    echo '<td>'.$row["tel"].'</td>';
                    echo '<td>'.$row["type_animal"].'</td>';

                    echo '<td>
                      <form method="post">
        						     <input type="text"  hidden name="que" id="tex_show" value="'.$row["id"].'">
                         <input type="submit" name="" class="btn btn-warning" value="รับคืนแล้ว">
        						  </form>
                      </td>';

              }//white
              if(!empty($_POST['que'])){
                 $conn->query($del);
                 header("Location: show.php");

               }
            }//if
                   ?>
                 </tr>
						  </tbody>

				</table>
			</div>
      <script>

      var c =  ducument.getElementById('tex_show');
      if (!isset(c)) {
        ducument.getElementById('tex_show').value;
      }
      </script>
  </body>
</html>
