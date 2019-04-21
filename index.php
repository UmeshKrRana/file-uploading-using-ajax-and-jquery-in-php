<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container shadow mt-5 mb-5">
		<h4 class="text-center pt-3 font-weight-bold">Apply Here </h4>
		<form id="contactFrm" method="post" enctype="multipart/form-data" class="p-3">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
				  <label>First Name <span class="text-danger"> *</span> </label>
					<div class="form-group">
						<input type="text" class="form-control" name="firstname" id="firstName" placeholder="First Name" required="">
						<span class="text-danger" id="error_firstname">Enter the first name</span>
					</div>

					<label>Email <span class="text-danger"> *</span> </label>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						<span class="text-danger" id="error_email">Enter the email </span>
					</div>

					<label>Gender <span class="text-danger"> *</span> </label>
					<div class="form-group">
						<select class="form-control" id="gender" name="gender"> 
							<option selected="" disabled=""> Select </option>
							<option value="male"> Male </option>
							<option value="female"> Female </option>
						</select>
					</div>

					<label>Date of Birth <span class="text-danger"> *</span> </label>
					<div class="form-group">
						<input type="date" id="dob" class="form-control" name="dob" placeholder="Date of Birth">
					</div>

					<label>Portfolio Website </label>
					<div class="form-group">
						<input type="url" id="website" class="form-control" name="website" placeholder="URL">
					</div>

					<label>Last company you worked for </label>
					<div class="form-group">
						<input type="text" id="companyName" class="form-control" name="companyName" placeholder="Company Name">
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto" style="padding-top: 21px;">
				  <label>Last Name <span class="text-danger"> *</span> </label>
					<div class="form-group">
						<input type="text" class="form-control" name="lasttname" id="lastName" placeholder="Last Name">
						<span class="text-danger" id="error_lastname"> Enter the last name </span>
					</div>

					<label>Mobile No. <span class="text-danger"> *</span> </label>
					<div class="form-group">
						<input type="phone" class="form-control" name="mobile" id="mobile" placeholder="Mobile No.">
						<span class="text-danger" id="error_mobile">Enter the mobile number</span>
					</div>

					<label>Position you are applying for </label>
					<div class="form-group">
						<input type="text" class="form-control" name="position" id="position" placeholder="Position" >
					</div>

					<label>Highest Qualification</label>
					<div class="form-group">
						<input type="text" class="form-control" name="qualification" id="qualification" placeholder="Highest Qualification">
					</div>

					<label>Upload Resume</label>
					<div class="form-group">
						<input type="file" class="form-control" name="file" id="file">
					</div>

					<label>Year of Experience</label>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<small>Year </small>
									<select class="form-control" name="expYear" id="expYear">
										<option selected="" disabled="">Year </option>
										<?php for ($i=0; $i <=12; $i++):?>
											<option> <?php echo $i; ?> </option>
										<?php endfor; ?>
									</select>
							</div>

							<div class="col-md-6">
								<small>Month </small>
									<select class="form-control" name="expMonth" id="expMonth">
										<option selected="" disabled="">Month </option>
										<?php for ($i=0; $i <=11; $i++):?>
											<option> <?php echo $i; ?> </option>
										<?php endfor; ?>								
									</select>
							</div>
						</div>
					</div>	
				</div>
			</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-sm-12">
						<label> Reference/Comments/Questions </label>
						<div class="form-group">
							<textarea class="form-control" name="reference" placeholder="Reference/Comments/Questions" id="reference"> </textarea>
						</div>								

					<div class="form-group text-center">
						<input type="submit" id="submitBtn" name="save" class="btn btn-success" value="Send Application">
					</div>

					<!-- result -->
					<div id="result"> </div>
				</div>
			</div>
		</form>
	</div>

<!-- script files -->
<script src="./assets/js/custom.js" type="text/javascript" charset="utf-8"></script>