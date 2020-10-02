<?php
include('include/navigation.php');
?>
<style>
	.bg2{
		background-color: #f0f0f0;
		margin-top: -7px;
		
	}
		
	.c1{
	background-color: white;
	border-radius: 5px;
}
</style>

<div class="bg1">
	<h3 class="text-center r1">Donate the blood</h3>
</div>
<div class="bg2">
	<div class="container" style="width:800px; padding:20px 0px 20px 0px ">
	<form class=" border border-dark c1" style="padding: 20px; ">
		<h4 class="card-header text-center bg-danger">Register<br></h4>

		<div class="form-group">
			<label for="name" class="f1">Name:</label>
			<input type="text" name="name" class="form-control" placeholder="Enter full name" id="name" required>
		</div>
		<div class="form-group">
			<label for="email" class="f1">Email ID:</label>
			<input type="email" name="email" class="form-control" placeholder="Enter email ID" id="email" required>
		</div>
		<div class="form-group">
			<label for="contact_no" class="f1">Contact Number:</label>
			<input type="text" name="contact_no" class="form-control" placeholder="Enter contact no. " id="contact_no" required>
		</div>
		<div class="form-group">
			<label for="bloodgroup" class="f1">Blood Group:</label>
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
			<label for="gender" class="f1">Gender:</label>
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
        	<label for="age" class="f1"> Age:</label>
        	<input type="text" name="age" class="form-control" placeholder="Enter age" id="age" required>
        </div>
        <div class="form-group">
			<label for="area" class="f1">Area:</label>
			<select class="form-control" id="node" name="node" required>
				<option value="">--Select an area--</option>
				<option value="Panvel">Panvel</option>
				<option value="Kalamboli">Kalamboli</option>
				<option value="Kamothe">Kamothe</option>
				<option value="Vashi">Vashi</option>
				<option value="Kharghhar">Kharghhar</option>
				<option value="Nerul">Nerul</option>
				<option value="CBD">CBD</option>
				<option value="Khanda Colony">Khanda Colony</option>
				<option value="Dadar">Dadar</option>
				<option value="Chembur">Chembur</option>
				<option value="Dombivili">Dombivili</option>
				<option value="Kalyan">Kalyan</option>
			</select>	
		</div>
		<div class="form-group">
			<label for="password"  class="f1">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
		</div>
		<div class="form-group">
			<label for="c_password"  class="f1"> Confirm Password</label>
			<input type="password" name="c_password" class="form-control" placeholder="Confirm password" id="c_password" required>
		</div>
		<div class="form-inline">
			<input type="checkbox" name="term" value="true" required>
			<span style="margin-left: 10px; font-weight: bold;" > I agree to donate my blood.</span> 
		</div>
		<div class="form-group text-center">
			<button type="submit" name="submit" id="submit" class="btn btn-lg btn-danger" style="align-content: : center;">Submit</button>
		</div>
</form>
</div>
</div>
<?php
include('include/footer.php');
?>
</body>
</html>

<?php
include('db/connection.php');
?>