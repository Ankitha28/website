<?php
include('include/navigation.php');
?>

<div class="bg1 p-3">
	<h1 class=" text-center head1">Types of <span style="color: #800000;"> Blood Donation</span></h1>
	<hr>
	<p class="text-center para2">Giving the "right" type of blood donation - based on your blood type and patient needs - helps ensure the best use of your valuable contribution.Below are the ways through which you can donate blood.</p>
</div>

<div>
	<div class="container">
		<div class="row pt-5">
			<div class="col-md-5 col1" data-aos="flip-right">
				<img src="images/wb.jpg" alt="whole blood" width="440" height="350" class="pt-3 pb-3 rounded-circle">
				<h3 class="head2">Whole Blood</h3>
				<p class="para2">- “Whole blood” is simply the blood that flows through your veins. Whole blood is the most flexible type of donation. It contains red cells, white cells, and platelets, suspended in plasma.It can be transfused in its original form.</p>
				<ul class="u3">
					<li><b>Used</b> :  Whole blood is frequently given to trauma patients and people undergoing surgery.</li>
					<li><b>Time</b> : About 1 hour.</li>
					<li><b>Donation Frequency </b>: Every 56 days.</li>
				</ul>
			</div>
			<div class="col-md-5  offset-md-2 col1" data-aos="flip-left">
				<img src="images/rbc.png" alt="red blood cells" width="440" height="350" class="pt-3 pb-3 rounded-circle">
				<h3 class="head2">Red Blood Cells</h3>
				<p class="para2">- (RBCs) donation is when only red cells are collected.This type of donation uses an automated process that separates your red blood cells from the other blood components, and then safely and comfortably returns your plasma and platelets to you.</p>
				<ul class="u3">
					<li><b>Used</b> :  Given to trauma patients, newborns and anyone suffering blood loss.</li>
					<li><b>Time</b> : About 1.5 hours.</li>
					<li><b>Donation Frequency</b> : Every 112 days, up to 3 times/year.</li>
				</ul>
			</div>
         </div>
         <div class="row mt-5 pb-3">
			<div class="col-md-5 col1" data-aos="flip-right">
				<img src="images/platelets.jpg" alt="platelets" width="440" height="350" class="pt-3 pb-3 rounded-circle">
				<h3 class="head2">Plateletes</h3>
				<p class="para2">- Platelets are tiny cells in your blood that form clots and stop bleeding.In a platelet donation, an apheresis machine collects your platelets along with some plasma, returning your red cells and most of the plasma back to you.</p>
				<ul class="u3">
					<li><b>Used</b> : Platelets are a vital element for cancer treatments ,organ transplant procedures, and for surgical procedures.</li>
					<li><b>Time</b> : About 2 hour.</li>
					<li><b>Donation Frequency </b>: Every 7 days.</li>
				</ul>
			</div>
			<div class="col-md-5  offset-md-2 col1" data-aos="flip-left">
				<img src="images/plasma.jpg" alt="plasma image" width="440" height="350" class="pt-3 pb-3 rounded-circle">
				<h3 class="head2">Plasma</h3>
				<p class="para2">- Plasma is the liquid portion of your blood in which red blood cells, white blood cells, and platelets float in.Plasma contains a large number of proteins and substances which are often important ingredients in medical procedures.</p>
				<ul class="u3">
					<li><b>Used</b> : Used to help burn victims and also to stop bleeding .</li>
					<li><b>Time</b> : About 1.5 hour.</li>
					<li><b>Donation Frequency </b>: Every 28 days.</li>
				</ul>
			</div>
         </div>
	</div>
</div>

<?php
include('include/footer.php');
?>

<script type="text/javascript">
  $(window).on('scroll',function(){
        if($(window).scrollTop()){
          $(' .mybar').addClass('black');
        }else{
          $(' .mybar').removeClass('black'); 
        }

  })
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
  	offset:300,
    duration:2000,
  });
</script>

</body>
</html>
