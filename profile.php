<?php
include('include/usernav.php');
//include db//
include('db/connection.php');
// checks if user has logged in //
if($_SESSION['is_login']){
  $email = $_SESSION['email'];
}else{
  // if not directs to this location //
  header("location:signin.php");
}



//display user data //
$id = $_SESSION['userId'];
$sql = "SELECT name ,email, contact_no  FROM donarregistration WHERE id = '$id' ";

            $result = mysqli_query($con,$sql);

            if(mysqli_num_rows($result)>0){
              while ($record = mysqli_fetch_assoc($result)){
                $name = $record['name'];
                $email = $record['email'];
                $contactno = $record['contact_no'];
              }

            }

            

/*confirmation message to update date*/
if(isset($_POST['save'])){
       $showMsg = '<div>
                  <div class="alert alert-danger alert-dismissible fade show msg mt-3" role="alert">
                     <strong>Are you sure that you want to update your record?</strong>
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
}
/* to update current date*/ 
if(isset($_POST['userId'])){
  $id = $_POST['userId'];
   
    $currentDate = date_create();
    $currentDate = date_format($currentDate,'Y-m-d');

  $sql = "UPDATE donarregistration SET save_life_date = '$currentDate' WHERE id = '$id' ";

  $res = mysqli_query($con,$sql);

  if($res){
      $_SESSION['save_life_date'] = $currentDate;
       header('location:profile.php');
  }else{
        echo '<div class="alert alert-danger alert-dismissible fade show msg" role="alert">
                              <strong>Something went wrong!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
  }
}


?>
<!-- form starts here -->
<form class="f1 border border-dark bg-light" style="margin-top: 150px;">
   <div class="form-group">
      <label for="name" class="p1">Name:</label>
      <input type="text" name="name" class="form-control" placeholder="Enter full name" id="name" required value="<?php echo $name ; ?>" title="only upper and lower case and space" readonly>
    </div>
    <div class="form-group">
      <label for="email" class="p1">Email ID:</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email ID" id="email" required value="<?php echo $email ; ?>" readonly>
    </div> 
    <div class="form-group">
      <label for="contact_no" class="p1">Contact Number:</label>
      <input type="text" name="contact_no" class="form-control" placeholder="Enter contact no. " id="contact_no" required value= "<?php echo $contactno; ?>" title="10 numeric characters only" readonly>
    </div>
</form>
<!-- form ends here-->

<?php         /* checks whether the donars time of 3 months is over or not*/     
$saveDate = $_SESSION['save_life_date'];
if($saveDate == '0'){
	 echo ' <p class = "text-center pt-3 text-primary" style="font-family:Georgia; font-weight:bold; font-sixe:14px;">Have you donated blood? If yes click the below button</p>
          <form target="" method="post" class="text-center mt-2">
	        <button type="submit" name="save" id="save" class="btn btn-lg btn-success">Saved Life</button>
           </form>';
}else{
       $start = date_create("$saveDate");
       $end = date_create();
       $diff = date_diff($start , $end);
      
       $diffMonth = $diff->m;

       if($diffMonth >= 3){

       	echo '<p class = "text-center pt-3 text-primary" style="font-family:Georgia; font-weight:bold; font-sixe:14px;">Have you donated blood? If yes click the below button</p>
            <form target="" method="post" class="text-center mt-2">
	         <button type="submit" name="save" id="save" class="btn btn-lg btn-success">Saved Life</button>
           </form>';

       }else{

       	echo '<div class="alert alert-success text-center msg mt-4" role="alert">
	     <span><strong>Congratulations!!</strong></span>
	     <span><i> You saved a life and now you can donate after three months. We are thankful to you.</i></span>
         </div>';
       }
}
?>
<?php if(isset($showMsg)) echo $showMsg; ?>
</div>
<!--bg image ends-->
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