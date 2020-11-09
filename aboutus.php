<?php
include('include/navigation.php');
?>

<div>
	<div class="container">
		<div class="row mt-3 mb-3">
			<div class="col">
				<h1 class="pt-5" style="font-weight: bold; font-family: Times New Roman; color: #8FBC8F;">Forever Free</h1>
                <p class="pt-2" style="font-size: 24px; font-family: arail; color: #6495ED;"><i>You don't have to pay anything, every <span style="color:#DC143C;"> Blood Donor</span> is a <span style="color:#DC143C;">Lifesaver !</span></i></p>
			</div>
			<div class="col p-2" >
				<img src="images/forever.jpg" width="360" height="250" class="rounded">
			</div>
		</div>
	</div>
</div>

<div style="background-color: #B0C4DE;">
	<div class="container pt-2 pb-4 ">
        <h1 class="text-center" style="font-family: Times New Roman;"> About Us </h1>
        <hr>
		<div class="row border border-dark rounded p-2 ">
            <div class="col ">
            	<h3 class="p-2"  style="font-family: sans-serif;"><u>Who are we?</u></h3>
				<p style="font-family: Georgia; font-style: 22px; color: #191970;">We Lifeline an NGO live with a vision of saving lives by acting as a bridge between the donor and the reciever. This organisation came into existence on 2nd August 2018.It is an initiative by a group of young people helping  for the betterment of the society.</p>
				<p style="font-family: Georgia; font-style: 22px; color: #191970;" >We had a humble beginning and was able to achieve a good record .We ensure every drop of blood that is donated are contributed towards the right cause of saving lives. With your support we hope to further expand and help out blood banks across the country and make them blood sufficient.</p>
		    </div>
			<div class="col">
				<h3 class="p-2"  style="font-family: sans-serif;"><u>Highlights</u></h3>
				<div class="pt-4" style="font-family: Georgia; font-style: 22px; color: #DC143C;">
				  <p> <i class="fas fa-check"></i>  Ensuring continuous, sufficient blood supply to blood banks through blood donation camps and weekly donations.</p>
					<p> <i class="fas fa-check"></i>  Establishing a network so as to increase and expand our movement.</p>
					<p> <i class="fas fa-check"></i>  Organizing sessions so that people knoe more about donation.</p>
				</div>
				</div>
		</div>
	</div>
</div>

<img src="images/service.jpg" alt="image" style="width: 1350px; height: 500px;" >
<div class="container position-relative" style="bottom: 180px;" >
<div class="position-absolute" style="bottom: 200px; margin-left: 40%;"> 
<h1 style=" font-weight: bold; font-family: Times New Roman; color: rgba(0,0,0,0.7); ">Our Services</h1>
</div>
<div class="card-columns position-absolute" >
	  	<div class="card" style="background: rgba(255, 0, 0, 0.5);">
	    <div style="text-align: center;background-color: rgba(255,255,255,0.4);padding: 10px;">
	  	<i class="fas fa-map-marker-alt fa-3x"></i>
        </div>
             <div class="card-body">
               <h3 class="card-title text-white" style="font-family: arial;"><u>Locate Donor</u></h3>
               <p class="card-text" style="font-size: 20px;font-family: Georgia;">Connecting over a network and locating different donors from different places.</p>
             </div>
      </div>

      <div class="card" style=" background: rgba(255, 0, 0, 0.5);" >
        <div style="text-align: center;background-color: rgba(255,255,255,0.4);padding: 10px;">
	  	<i class="fas fa-search fa-3x"></i>
        </div>
             <div class="card-body">
               <h3 class="card-title text-white" style="font-family: arial;"><u>Search Blood</u>s</h3>
               <p class="card-text" style="font-size: 20px;font-family: Georgia;">Find blood donors near your location and request for the needed blood type.</p>
               </div>
      </div>

      <div class="card" style="background: rgba(255, 0, 0, 0.5);" >
       <div style="text-align: center;background-color: rgba(255,255,255,0.4);padding: 10px;">
	  	<i class="far fa-hospital fa-3x"></i>
        </div>
             <div class="card-body">
               <h3 class="card-title text-white" style="font-family: arial;"><u>Organize Camps</u></h3>
               <p class="card-text" style="font-size: 20px;font-family: Georgia;">We collaborate with colleges, organisations,to organize blood donation camps .</p>
              </div>
      </div>
 </div>
</div>

<div style="margin-top: 65px; ">
	<h1 class="text-center p-4"><u>Let Us Strive</u></h1>
	<div class="container pb-3">
		<div class="row">
			<div class="col border border-dark rounded p-3 shadow">
              <h3 class="text-info"> Our Goal</h3>
			  <p style="font-family: arail; font-size: 20px;">To raise awareness that individuals can save lives of others by donating blood.</p>
				
			</div>
			<div class="col offset-1 border border-dark rounded p-3 shadow">
				<h3 class="text-info">Our Vission</h3>
                 <p style="font-family: arail; font-size: 20px;">To become a source so as to provide blood sufficiently all over the country and let help sustain lives.</p>
             </div>
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