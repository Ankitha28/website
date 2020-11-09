<?php
include('include/usernav.php');
// include database //
include('db/connection.php');
// checks if user has logged in //
if($_SESSION['is_login']){
	$email = $_SESSION['email'];
}else{
	// if not directs to this location //
	header("location:signin.php");
}

// checks if user clicked delete button //
if(isset($_POST['delete'])) {

// checks if user has entered value in the password feild //
 if(isset($_POST['currentpass']) &&  !empty($_POST['currentpass'])){
    // get the value entered by user //
 	$pass =  $_POST['currentpass'];

 	$q = "select * from donarregistration where email = '$email' ";
 	$res = mysqli_query($con,$q);
 	$row = mysqli_fetch_object($res);
 	// verifies if entered password is in hash that matches with password in db //
    $passw =password_verify($pass, $row->password);

    // checks if password is equal or not //
    if($pass == $passw){
    	// if password is equal display message for confirmation //
    	$showMsg = '<div>
                  <div class="alert alert-danger alert-dismissible fade show msg mt-3" role="alert">
                     <strong>Are you sure that you want to delete your account?</strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     <form target="" method="post" class="py-2">
                   <input type="hidden" name="userId" value="'.$_SESSION['userId'].'">
                   <button type="submit" name="yes" id="yes" class="btn btn-lg btn-info mr-5">YES</button>

                   <button type="button" class="btn btn-lg btn-info" data-dismiss="alert">OOPS! NO</button>
                     </form>
                     </div>
            </div>';
        }else{
        	// if password is not equal then display this message //
        	$del = '<div class="alert alert-danger alert-dismissible fade show msg mt-3" role="alert">
                              <strong>Please enter valid password!!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
        }
 	

	}else{
		// if user submits form with empty value then display this message //
        $p = '<div class="alert alert-danger alert-dismissible fade show msg mt-3" role="alert">
                              <strong>Please enter your password.</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
	}
}
// if user clicks yes in confirmation message //
if(isset($_POST['userId'])){

  $id = $_POST['userId'];
   // delete the record//

  $sql = "DELETE FROM donarregistration WHERE id = '$id' ";

  if(mysqli_query($con,$sql)){
  	 // if successfull then direct to this location //

  	 header('location:logout.php');

  }else{
  	// if not able to delete account display this message //
  	 $delerror = '<div class="alert alert-danger alert-dismissible fade show msg mt-3" role="alert">
                              <strong>Account does not exist.</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
  }
}

?>

<!--header starts here-->
<h3 class=" text-center" style="color: #8B0000; background-color: #FF7F50;margin-left: 480px; width: 500px; margin-top: 150px;"><u>Delete Account</u></h3>
<!--header ends here-->
<?php if(isset($p)) echo $p ;?>
<?php if(isset($delerror)) echo $delerror; ?>
<?php if(isset($del)) echo $del; ?>
<!--form starts here-->
<form action="" method="post" class="f1 border border-dark mt-4" style="background-color: #DCDCDC;">

<div class="form-group">
 <label for="currentpass"  class="p1">Password:</label>
 <input type="password" name="currentpass" class="form-control" placeholder="Password">
 </div>

 <div class="form-group text-center">
<button type="submit" name="delete" id="delete" class="btn btn-lg btn-success" style="width: 180px; font-weight: bold;">Delete Account</button> 
</div>
</form>
<!--form ends here-->
<?php if(isset($showMsg)) echo $showMsg; ?>

</div>
<!-- bg image ends here-->
<script type="text/javascript">
  $(window).on('scroll',function(){
        if($(window).scrollTop()){
          $(' .my-navbar').addClass('blue');
        }else{
          $(' .my-navbar').removeClass('blue'); 
        }

  })
</script>
</body>
</html>