<?php
include('include/navigation.php');
?>

<div class="bg1">
	<h2 class="text-center r1">Donate the blood</h3>
</div>
<div class="bg2">
	<form action="" method="POST" class="f2 border border-dark bg-light">
       
       <h4 class="card-header text-center bg-info c1">Register<br></h4>

       <div class="form-group">
			<label for="name" class="p2">Name:</label>
			<input type="text" name="name" class="form-control" placeholder="Enter full name" id="name" required pattern="[A-Za-z/\s]+" title="only upper and lower case and space">
		</div>
		<div class="form-group">
			<label for="email" class="p2">Email ID:</label>
			<input type="email" name="email" class="form-control" placeholder="Enter email ID" id="email" required>
		</div>
		<div class="form-group">
			<label for="contact_no" class="p2">Contact Number:</label>
			<input type="text" name="contact_no" class="form-control" placeholder="Enter contact no. " id="contact_no" required pattern="^\d{10}$" title="10 numeric characters only">
		</div>
		<div class="form-group">
			<label for="bloodgroup" class="p2">Blood Group:</label>
			<select class="form-control" id="bloodgroup" name="bloodgroup" required>
				<option value="">--Select a blood group--</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
			</select>	
		</div>
		<div class="form-group">
			<label for="gender" class="p2">Gender:</label>
			<label>
				<input type="radio" name="gender" id="gender" value="male" style="margin-left: 20px;" required>Male
			</label>
			<label>
			 <input type="radio" name="gender" id="gender" value="female" style="margin-left: 20px;" required>Female	
			<label>
				<input type="radio" name="gender" id="gender" value="transgender" style="margin-left: 20px;" required>Transgender
			</label>
		</div>
        <div class="form-group">
        	<label for="age" class="p2"> Age:</label>
        	<input type="text" name="age" class="form-control" placeholder="Enter age" id="age" required>
        </div>
        <div class="form-group">
			<label for="city" class="p2">Enter City:</label>
			<input type="city" name="city" class="form-control" placeholder="---City---" id="city" required>
		</div>
        <div class="form-group">
			<label for="area" class="p2">Enter Area:</label>
			<input type="area" name="area" class="form-control" placeholder="---Area---" id="area" required>
		</div>
        <div class="form-group">
			<label for="weight" class="p2">Enter Weight:</label>
			<input type="weight" name="weight" class="form-control" placeholder="---Weight---" id="weight" required>
		</div>
		<div class="form-group">
			<label for="password"  class="p2">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
		</div>
		<div class="form-group">
			<label for="cpassword"  class="p2"> Confirm Password</label>
			<input type="password" name="cpassword" class="form-control" placeholder="Confirm password" id="cpassword" required>
		</div>
		<div class="form-inline">
			<input type="checkbox" name="term" value="true" required>
			<span style="margin-left: 10px; font-weight: bold;" > I agree to donate my blood.</span> 
		</div>
		<div class="form-group text-center">
			<button type="submit" name="submit" id="submit" class="btn btn-lg btn-info" style="width: 180px; font-weight: bold;">Submit</button>
		</div>
</form>
</div>

<script type="text/javascript">
  $(window).on('scroll',function(){
        if($(window).scrollTop()){
          $(' .mybar').addClass('black');
        }else{
          $(' .mybar').removeClass('black'); 
        }

  })
</script>

<?php

include('db/connection.php');

   if(isset($_POST['submit'])){

      $name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $contactno = mysqli_real_escape_string($con, $_POST['contact_no']);
      $bloodgroup = mysqli_real_escape_string($con, $_POST['bloodgroup']);
      $gender = mysqli_real_escape_string($con,$_POST['gender']);
      $age = mysqli_real_escape_string($con,$_POST['age']);
      $city = mysqli_real_escape_string($con, $_POST['city']);
      $area = mysqli_real_escape_string($con,$_POST['area']);
      $weight = mysqli_real_escape_string($con,$_POST['weight']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
      
      $pass = password_hash($password, PASSWORD_DEFAULT);
      $cpass = password_hash($cpassword, PASSWORD_DEFAULT);

      $emailquery = "select * from donarregistration where email='$email' ";
      $query = mysqli_query($con,$emailquery);
       /*checks email exists or not */
      $emailcount = mysqli_num_rows($query);

      if($emailcount>0){
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Email already exists</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';

      }else{
      	   /*confirms password is equal or not to confirm password*/
      	   if($password === $cpassword){
              
              $insertquery = "insert into donarregistration(name, email, contact_no, bloodgroup, gender, age, area, save_life_date, password, city, weight, cpassword) values('$name','$email','$contactno','$bloodgroup','$gender','$age','$area','0','$pass','$city','$weight','$cpass')";

                $res = mysqli_query($con,$insertquery);

                if($res){ 
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Data inserted successfully</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
                }else{
                	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Data not inserted!!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
                }

      	   }else{
      	   	  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Password does not match!!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
      	   }
      }



   }
?>


<?php
include('include/footer.php');
?>
</body>
</html>