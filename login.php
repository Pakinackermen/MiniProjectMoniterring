<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="buty.css">
  <style media="screen">
    #p_check_login{
      color: red;
      font-size: 30px;
    }
  </style>
</head>
<body>
  <div class="col-sm-3">
  </div>
    <div id="main" class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="col-sm-3">
            </div>
              <ul class="pagination">
                <li class="active"><a href="login.php">Admin</a></li>
                <li ><a href="index.php">รับฝาก</a></li>
              </ul>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                $login_user = 'admin';
                $login_pass = '1234'; $an =0;
                if (empty($_POST['user']) && empty($_POST['pass'])) {
                }else {
                          $logn =  $_POST['user'];
                          $pass = $_POST['pass'];
                  if ($logn == $login_user && $pass == $login_pass) {
                        header("Location: ./show.php");
                  }else {
                    echo '<p id="p_check_login">รหัสผ่านผิด</p>';
                  }
                }
               ?>
              <form class="" method="post">

                <span <i class="glyphicon glyphicon-user"></i>
                  <input type="text" name="user"  placeholder="Username" id='login'>
                </span><br>
                <span <i class="glyphicon glyphicon-lock"></i>
                  <input type="text" name="pass"  placeholder="Password" id='login'>
                </span><br>
                <input type="submit" value="Login"  style="margin-top:10px;" class="btn btn-primary"/>
              </form>

    </body>
    </html>
