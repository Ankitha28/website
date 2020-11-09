<?php
include('include/navigation.php');
?>

<div class="bg1">
	<h2 class=" text-center r1">Donar List</h3>
</div>
<div class="bg2">
<div class="container">
	<div class="row">
		<?php
           include('db/connection.php');

            $sql = "SELECT * FROM donarregistration";

            $result = mysqli_query($con,$sql);

            if(mysqli_num_rows($result)>0){
            	while ($record = mysqli_fetch_assoc($result)) {
                       if($record['save_life_date'] == '0'){
      
                       	 echo ' 
                       	        <div class="col-md-3">
			                            <div class="card border-dark mb-4" style="width:250px; height:380px; background-color:#B0C4DE">
				                           <img src="images/donar.jpg"  class="rounded mx-auto d-block mt-3" alt="save_life">
				                            <div class="card-body">
					                          <span><b>Name:</b> '.$record['name'].'</span><br>
                                    <span><b>Blood group:</b> '.$record['bloodgroup'].'</span><br>
                                    <span><b>Gender:</b> '.$record['gender'].'</span><br>
					                          <span><b>Age:</b> '.$record['age'].'</span><br>
                                    <span><b>City:</b> '.$record['city'].'</span>
                                    
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
                                              <div class="card border-dark mb-4" style="width:250px; height:380px; background-color:#B0C4DE">
                                                <img src="images/donar.jpg"  class="rounded mx-auto d-block mt-3" alt="save_life">
                                                 <div class="card-body">
                                                   <span><b>Name:</b> '.$record['name'].'</span><br>
                                                   <span><b>Blood group:</b> '.$record['bloodgroup'].'</span><br>
                                                   <span><b>Gender:</b> '.$record['gender'].'</span><br>
                                                   <span><b>Age:</b> '.$record['age'].'</span><br>
                                                   <span><b>City:</b> '.$record['city'].'</span>
                                    
                                                    </div>
                                                    </div>
                                                  </div>
                                                          '; 

                                         }else{
                                          echo '
                                          <div class="col-md-3">
                                          <div class="card border-dark mb-4" style="width:250px; height:380px; background-color:#B0C4DE">
                                           <img src="images/donar.jpg"  class="rounded mx-auto d-block mt-3" alt="save_life">
                                           <div class="card-body">
                                            <span><b>Name:</b> '.$record['name'].'</span><br>
                                            <span><b>Blood group:</b> '.$record['bloodgroup'].'</span><br>
                                            <span><b>Gender:</b> '.$record['gender'].'</span><br>
                                            <span><b>Age:</b> '.$record['age'].'</span><br>
                                            <span><b>City:</b> '.$record['city'].'</span><br>
                                             <h4 class="text-center"><i>Donated</i></h4>
                                            </div>
                                            </div>
                                            </div>
                                                    ';

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