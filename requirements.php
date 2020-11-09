<?php
include('include/navigation.php');
?>
<div class="bg1 pb-3" >
	<h2 class="text-center r1 ">Eligibility Requirements</h2>
	<p class="para1">Any healthy adult can donate blood.</p>
</div>
<div style="background-color: black;">
<div class="container c2 pt-3 pb-3">
	<div class="box1 ">
		<div class="imgb">
			<img src="images/age.jpg">
		</div>
		<div class="content">
			<h2>Age</h2>
            <p>The age of donor should be between 18-65.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/weight.jpg">
		</div>
		<div class="content">
			<h2>Weight</h2>
            <p>The donor should not be less than 45kg.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/bp.jpg" height="250">
		</div>
		<div class="content">
			<h2>Blood Pressure</h2>
            <p>The bp of donor should be within normal limits.</p>
		</div>
	</div>


	<div class="box1">
		<div class="imgb">
			<img src="images/drugs.png" height="250">
		</div>
		<div class="content">
			<h2>Drugs</h2>
            <p>You can not donate blood if you are on drugs.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/cough.jpg" height="250">
		</div>
		<div class="content">
			<h2>Other problems</h2>
            <p>You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/dental.jpg" height="250">
		</div>
		<div class="content">
			<h2>Dentist</h2>
            <p>If you have visited the dentist for a minor procedure you must wait 24 hours before donating; for major work wait a month.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/tattoo.jpg">
		</div>
		<div class="content">
			<h2>Tattoo</h2>
            <p>If you have recently had a tattoo or body piercing you cannot donate for 6 months from the date of the procedure.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/hb.jpg">
		</div>
		<div class="content">
			<h2>Hemoglobin</h2>
            <p>Females must have a minimum hemoglobin level of 12.5g/dL and males must have a minimum level of 13.0g/dL.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/pulse.jpg" height="250">
		</div>
		<div class="content">
			<h2>Pulse</h2>
            <p>Pulse rate and temperature should be normal.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/hiv.jpg">
		</div>
		<div class="content">
			<h2>Cancer</h2>
            <p>You should not have any sort of cancer problems.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/pregnancy.jpg" height="250">
		</div>
		<div class="content">
			<h2>Pregnancy</h2>
            <p>Are recommended to wait for 9 months after the pregnancy ends or 3 months after the baby is mostly weaned from breastfeeding.</p>
		</div>
	</div>

	<div class="box1">
		<div class="imgb">
			<img src="images/heart.png">
		</div>
		<div class="content">
			<h2>Heart</h2>
            <p>Should not have any kind of heart diseases.</p>
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