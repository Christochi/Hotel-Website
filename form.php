<?php include 'header.php';?>


<div class="container" style = "width: 1500px;" >
    <div class="row" >
        <div class="col-md-4 col-md-offset-4" >
            <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Registration Form</strong>
                </div>
                <div class="panel-body">
                    <!-- form starts -->
                        <form  action = "form.php" method = "post" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Firstname</label>
                            <div class="col-sm-9">
                                <input name = "firstname" type="text" class="form-control" id="inputEmail3" placeholder="First name" required="">
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Surname</label>
                            <div class="col-sm-9">
                                <input name = "surname" type="text" class="form-control" id="inputEmail3" placeholder="Surname" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Email</label>
                            <div class="col-sm-9">
                                <input name = "email" type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input name = "phone" type="text" class="form-control" id="inputEmail3" placeholder="Phone number" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <input name = "job" type="text" class="form-control" id="inputEmail3" placeholder="Job Title" required="">
                            </div>
                        </div>
                        
                        
                       
                        
                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Date of Birth</label>
            <div class="row">
            <div class="col-xs-4">
               <select name = "dateofbirth" class="form-control col-sm-3" name="expiry-month" id="expiry-month">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>

              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-3" name="expiry-month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4 col-sm-4">
              <br><select class="form-control" name="expiry-year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>

<div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Nationality</label>
                            <div class="col-sm-9">
                                <input name = "nationality" type="text" class="form-control" id="inputEmail3" placeholder="Nationality" required="">
                            </div>
</div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Country of Birth</label>
                            <div class="col-sm-9">
                                <input name = "countryofbirth" type="text" class="form-control" id="inputEmail3" placeholder="Country of Birth" required="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                                Password</label>
                            <div class="col-sm-9">
                                <input name = "password" type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Register</button>
                                    <button type="reset" class="btn btn-default btn-sm">
                                    Reset</button>
                            </div>
                        </div>
                        </form>
                    <!-- form ends -->    
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once'login-details.php';
$connect=new mysqli($hn,$un,$pw,$db);

if($connect->connect_error)die($connect->connect_error);


if( isset($_POST['firstname']) &&
    isset($_POST['surname']) &&
    isset($_POST['phone']) &&
    isset($_POST['email']) &&
    isset($_POST['nationality']) &&
    isset($_POST['countryofbirth']) &&
    isset($_POST['job']) &&
    isset($_POST['dateofbirth']) &&
    isset($_POST['password']))
    {
    $firstname   = get_post($connect, 'firstname');
    $surname   = get_post($connect, 'surname');
    $email    = get_post($connect, 'email');
    $phone     = get_post($connect, 'phone');
    $nationality     = get_post($connect, 'nationality');
    $country     = get_post($connect, 'countryofbirth');
    $job     = get_post($connect, 'job');
    $dateofbirth     = get_post($connect, 'dateofbirth');
    $password     = get_post($connect, 'password');
}

    

$query  = "SELECT * FROM guests";
 $result = $connect->query($query);
 if (!$result) die ("Database access failed: " . $connect->error);

 $rows = $result->num_rows;

 $email_exist ="false";

 for ($j = 0 ; $j < $rows ; ++$j)
 {
   $result->data_seek($j);
   $row = $result->fetch_array(MYSQLI_NUM);
   if($row[3]==$email){
  $email_exist="true"; }
}

if($email_exist=="false"){

    $query = "insert into guests(firstname, surname, email, phonenumber, jobtitle, dob, nationality, countryofbirth, password  )values('$firstname','$surname','$email','$phone', '$job', '$dateofbirth','$nationality', '$country', '$password')";
    $result = $connect->query($query);


    if (!$result) echo "INSERT failed: $query<br>" .
      $connect->error . "<br><br>";
else if(result)
   echo "Insertion Successful";}
else{
echo "Enter a different email !! This email has been registered !!";

$email_exits="false";
}

//}

$result->close();
$connect->close();
function get_post($connect, $var)  {
   return $connect->real_escape_string($_POST[$var]); }


?>

<?php include 'footer.php';?>