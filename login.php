<?php include 'header.php';?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Login</strong>
                </div>
                <div class="panel-body">
                    <!-- form starts -->
                        <form action = "login.php" method = "post" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                                Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Sign in</button>
                                    <button type="reset" class="btn btn-default btn-sm">
                                    Reset</button>
                            </div>
                        </div>
                        </form>
                    <!-- form ends -->    
                </div>
                <div class="panel-footer">
                    Not Registered? <a href="form.php">Register here</a></div>
            </div>
        </div>
    </div>
</div>


<?php
session_start();
require_once'login-details.php';
$connect=new mysqli($hn,$un,$pw,$db);

if($connect->connect_error)
  die($connect->connect_error);


if( isset($_POST['email']) &&
    isset($_POST['password']))
{
    
    $email    = get_post($connect, 'email');
    $password     = get_post($connect, 'password');


  $query  = "SELECT * FROM admin WHERE email = '" .  $email . "' AND `password` = '" . $password . "'" ;
  $result = $connect->query($query);
  $row = $result->fetch_array(MYSQLI_NUM);

  if($row != null && sizeof($row) > 0) {
    $email_exist = "true";
    $_SESSION['email']=$email; 
    $_SESSION['f_name']=$row[2];
    $_SESSION['l_name']=$row[3]; 
    if($row[0] == "admin") {
      header('Location: admin_page.php');
      $email_exits="false";
    } 
    else {
      header('Location: guest_page.php');
      $email_exits="false";
    }
  } else {
    echo "User not found.";
  }

  die();

}
    $result->close();
    $connect->close();
    function get_post($connect, $var)  {
    return $connect->real_escape_string($_POST[$var]); }

?>
      
<?php include 'footer.php';?>