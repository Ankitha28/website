<?php
include('include/navigation.php');
?>

<div class="bg1" style="padding-bottom: 30px;">
 <h2 class="text-center r1">Search Donar</h2>	
 <div class="container p-3 bg-info border border-dark" style="border-radius: 5px;">
 <form action="" method="GET">
 	<div class=" form-row">
        <div class="form-group col-md-4">
			<label for="city" class="p2">Enter City:</label>
			<input type="city" name="city" class="form-control" placeholder="---City---" id="city" required>
		</div>
	    	   
        <div class="form-group col-md-4">
			<label for="area" class="p2">Enter Area:</label>
			<input type="area" name="area" class="form-control" placeholder="---Area---" id="area" required>
		</div>
	    
	  
		<div class="form-group col-md-4">
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
	 </div>
	 <div class="form-group text-center">
	 	<button type="search" id="search" name="search" class="btn btn-lg btn-secondary">Search</button>
	 </div>
 	</form>
  </div>
 </div>

 <div class="container-fluid" style="background-color: #f0f0f0;">
 	<div class="container py-5">
	<div class="row">
     <?php

     include('db/connection.php');


      if ( (isset($_GET['city']) && !empty($_GET['city']) ) && (isset($_GET['area']) && !empty($_GET['area']) ) && (isset($_GET['bloodgroup']) && !empty($_GET['bloodgroup']) ) ) {
              $city = $_GET['city'];
              $area = $_GET['area'];
              $bloodgroup = $_GET['bloodgroup'];

            $sql = "SELECT * FROM donarregistration WHERE city='$city' AND area='$area' AND bloodgroup='$bloodgroup' ";

            $result = mysqli_query($con,$sql);

            if(mysqli_num_rows($result)>0){
            	while ($record = mysqli_fetch_assoc($result)) {
                       if($record['save_life_date'] == '0'){ 
      
                       	 echo ' 
                       	             <div class="col-md-3">
                                  <div class="card border-dark mb-4" style="width:250px; height:400px; background-color:#B0C4DE">
                                   <img src="images/donar.jpg"  class="rounded mx-auto d-block mt-3" alt="save_life">
                                    <div class="card-body">
                                    <span><b>Name:</b> '.$record['name'].'</span><br>
                                    <span><b>Blood group:</b> '.$record['bloodgroup'].'</span><br>
                                    <span><b>Gender:</b> '.$record['gender'].'</span><br>
                                    <span><b>Age:</b> '.$record['age'].'</span><br>
                                    <span><b>City:</b> '.$record['city'].'</span><br>
                                    <span><b>Area:</b> '.$record['area'].'</span><br>
                                    <span><b>Weight:</b> '.$record['weight'].'</span><br>
                                    <span><b>Contact No.:</b> '.$record['contact_no'].'</span>
                                    
                                    </div>
                                  </div>
                                 </div>
		                                     '; 
              
                            }else{

                                 $date = $record['save_life_date'];

                                        $start = date_create("$date");
                                        $end = date_create();
                                        $diff = date_diff($start , $end);
      
                                         $diffMonth = $diff->m;

                                         if($diffMonth >= 3){
                                          echo ' 
                                     <div class="col-md-3">
                                     <div class="card border-dark mb-4" style="width:250px; height:400px; background-color:#B0C4DE">
                                     <img src="images/donar.jpg"  class="rounded mx-auto d-block mt-3" alt="save_life">
                                      <div class="card-body">
                                     <span><b>Name:</b> '.$record['name'].'</span><br>
                                     <span><b>Blood group:</b> '.$record['bloodgroup'].'</span><br>
                                     <span><b>Gender:</b> '.$record['gender'].'</span><br>
                                     <span><b>Age:</b> '.$record['age'].'</span><br>
                                     <span><b>City:</b> '.$record['city'].'</span><br>
                                     <span><b>Area:</b> '.$record['area'].'</span><br>
                                     <span><b>Weight:</b> '.$record['weight'].'</span><br>
                                     <span><b>Contact No.:</b> '.$record['contact_no'].'</span>
                                    
                                       </div>
                                      </div>
                                    </div>
                                         ';

                                         }else{
                                            echo '
                                      <div class="col-md-3">
                                      <div class="card border-dark mb-4" style="width:250px; height:410px; background-color:#B0C4DE">
                                      <img src="images/donar.jpg"  class="rounded mx-auto d-block mt-3" alt="save_life">
                                       <div class="card-body">
                                       <span><b>Name:</b> '.$record['name'].'</span><br>
                                       <span><b>Blood group:</b> '.$record['bloodgroup'].'</span><br>
                                       <span><b>Gender:</b> '.$record['gender'].'</span><br>
                                      <span><b>Age:</b> '.$record['age'].'</span><br>
                                      <span><b>City:</b> '.$record['city'].'</span><br>
                                      <span><b>Area:</b> '.$record['area'].'</span><br>
                                      <h4 class="text-center"><i>Donated</i></h4>
                                      </div>
                                      </div>
                                      </div>';
 
                                         }
                                  }
            		   
            	}

            }else{
            	   echo  '<div class="alert alert-dark alert-dismissible fade show" role="alert">
                              <strong>Data not found!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';

            }



      	
      }else{

              echo  '<div class="alert alert-dark alert-dismissible fade show" role="alert">
                              <strong>Data not found!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';



      }

?>
</div>
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
include('include/footer.php');
?>

</body>
</html>