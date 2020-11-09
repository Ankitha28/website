<?php
session_start();
 ?>

<?php
include('include/navigation.php');
?>


<div class="bg1">
	<h2 class="text-center r1">Sign-In</h2>
</div>
<div class="bg2">
	<div class="container py-3">
		<form action="" method="POST" class=" f2 border border-dark bg-info" >
			<div class="form-group">
			<label for="email" class="p2">Email ID:</label>
			<input type="email" name="email" class="form-control" placeholder="Enter email ID" id="email" required>
		</div>
		<div class="form-group">
			<label for="password"  class="p2">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
		</div>
		<div class="form-group text-center">
			<button type="submit" name="submit" id="submit" class="btn btn-lg btn-dark" style="font-weight: bold;">Sign-In</button>
		</div>
		</form>
	
		<?php
        include('db/connection.php');

           if(isset($_POST['submit'])){

	         $email = $_POST['email'];
	         $password = $_POST['password'];

              /* checks email exists in db or not*/
	         $email_search = "select * from donarregistration where email = '$email' ";
	         $query = mysqli_query($con,$email_search);

	         $email_count = mysqli_num_rows($query);

	         if($email_count==1){
		        while ($res=mysqli_fetch_assoc($query)) {

                   $_SESSION['userId']= $res['id'];
			       $_SESSION['name']= $res['name'];
                   $_SESSION['save_life_date'] = $res['save_life_date'];
                   

			       
		           if (password_verify($password, $res['password'])) {

		           	       $_SESSION['is_login'] = true;
		           	       $_SESSION['email'] = $email;


		   	            header('location:dashboard.php'); 
                                  
		            }else{
		   	              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Password Incorrect!!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
		               }
		        }
	        }else{
		          echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Invalid Email!!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
	            }
}
?>
		
</div>
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
include ('include/footer.php');
?>
</body>
</html>

