<?php
include('include/navigation.php');
?>
<div class="container pt-3 mb-3">
	<img src="images/proc.jpg" alt="blood image" class="center">
	<div class="box">
		<h1 class="head">Donation  Process</h1>
	</div>
</div>
<!--background starts-->
<div style="background-color: #DCDCDC;">
<ul>
<li class="pt-3 ml-3 u1 ">Where can I donate blood?</li>
</ul>
<!--container starts -->
<div class="container">
<!-- container row starts -->	
<div class="row pt-3">
	<!--first column-->
    <div class="col-md-6">
      <div class="row no-gutters border rounded border-dark bg-white overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="text-info"><i>Blood Banks</i></h3>
          
          <p class="card-text pt-2 text-danger"> - Any one can walk-in any time around at their convenience to donate blood in a blood bank.</p>
          </blockquote>
        </div>

        <div class="col-auto d-none d-lg-block p-2">
          <img src="images/proc.jpg" alt="blood bank" class="img">
        </div>
      </div>
    </div>
<!--first column ends-->

<!--second column starts-->
    <div class="col-md-6">
    <!--in second column again a sub-row starts-->
      <div class="row no-gutters border rounded border-dark bg-white overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       <!--in it starts a 1st sub-column-->
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="text-info"><i>Donation Camps</i></h3>
          
          <p class="card-text pt-2 text-danger">- Donation camps can be organized by organizers like institutions on pre-fixed dates.</p>
        
        </div>
        <!-- 1st sub-column ends-->
        <!--2nd sub-column starts-->
        <div class="col-auto d-none d-lg-block p-2">
          <img src="images/proc.jpg" alt="blood bank" class="img">
        </div>
        <!--2nd sub-column ends-->
      </div>
      <!-- sub-row ends-->
    </div>
    <!-- second column ends-->
  </div>
  <!--container row ends-->
</div>
<!--conatiner ends-->
</div>
<!--background ends-->

<div class="pb-5" style="background-color:rgba(0,0,0,0.5);">
  <ul>
    <li class="pt-3 ml-3 u1">What should I do after reaching blood banks or donation camps?</li>
  </ul>
  <div class="container">
    <div class="row mt-4 box2">
      <div class="col ">
        <h3 class=" pt-3" style="color:#000080;"><i> 1) Register</i></h3>
        <p data-aos="fade-up" class="card-text para">Donor fills the registration form with required details and gives consent for donation.</p>
        </div>
      <div class="col">
        <img src="images/signup.png"  alt="blood bank" class="img1">
      </div>s
    </div>

    <div class="row  mt-4 box2">
      <div class="col">
        <img src="images/signup.png" alt="blood bank" class="img1">
      </div>
      <div class="col ">
        <h3 class="pt-3" style="color:#000080;"><i> 2) Medical Checkup</i></h3>
        <p data-aos="fade-up" class="card-text para"> Donor's medical history is asked. Persons haemoglobin, pulse rate ,pressure is checked. </p>
        </div>
      </div>

    <div class="row mt-4  box2">
      <div class="col ">
        <h3 class="pt-3" style="color:#000080;"><i> 3) Blood Donation.</i></h3>
        <p data-aos="fade-up" class="card-text para"> A unit of 350ml of blood is drawn from the donor. A new sterile needle is used to draw blood and is destriyed after the use.</p>
        </div>
      <div class="col">
        <img src="images/signup.png" alt="blood bank" class="img1">
      </div>
    </div>

    <div class="row mt-4  box2">
      <div class="col">
        <img src="images/signup.png" alt="blood bank" class="img1">
      </div>
      <div class="col ">
       <h3 class="pt-3" style="color:#000080;"><i> 4) Refreshments</i></h3>
       <p data-aos="fade-up" class="card-text para">Snacks and drinks are provided as refreshments.</p>
       </div>
    </div>
</div>
</div>

<div class="bg1 pb-4">
  <ul>
    <li class="pt-3 ml-3 u1">Precautions to be taken after blood donation.</li>
    <section class="u2" >
    <li data-aos="fade-right" >Drink plenty of fluids like water,juices,soups for the next day or two.</li>

    <li data-aos="fade-right" data-aos-delay="100">Avoid doing strenuous physical activity or heavy liftin to prevent further complications.</li>

    <li data-aos="fade-right" data-aos-delay="200">If you feel dizzy, lie down with your feet up until the feeling passes.</li>

    <li data-aos="fade-right" data-aos-delay="300">Keep the bandage on your arm and dry for five hours.</li>
 
    <li data-aos="fade-right" data-aos-delay="100">If you have bleeding after removing the bandage, put pressure on the site and raise your arm until the bleeding stops.</li>

    <li data-aos="fade-right" data-aos-delay="200">If bleeding or bruising occurs under the skin, apply a cold pack to the area periodically during the first 24 hours.</li>

    <li data-aos="fade-right" data-aos-delay="300">If your arm is sore, take a pain reliever such as acetaminophen (Tylenol, others). Avoid taking aspirin or ibuprofen (Advil, Motrin IB, others) for the first 24 to 48 hours after donation.</li>
</ul>
    <p class="para1">- If the condition does not improve or for any reason something doesn't feel right, call the Blood Bank.</p>
</section>
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
    duration:2000,
  });
</script>

</body>
</html>
