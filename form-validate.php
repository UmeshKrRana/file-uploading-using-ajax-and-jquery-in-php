<?php error_reporting(E_ALL);

include_once './db-config/connection.php';

		 $db     		 	=       new DBController();
		 $conn     		 	=   	$db->connect();

			
		 $firstname      	=  		mysqli_real_escape_string($conn, $_REQUEST['firstname']);
		 $lastname      	=  		mysqli_real_escape_string($conn, $_REQUEST['lasttname']);
		 $email          	=  		mysqli_real_escape_string($conn, $_REQUEST['email']);
		 $mobile         	=  		mysqli_real_escape_string($conn, $_REQUEST['mobile']);
		 $gender         	=  		mysqli_real_escape_string($conn, $_REQUEST['gender']);
		 $position       	=  		mysqli_real_escape_string($conn, $_REQUEST['position']);
		 $dob           	=  		mysqli_real_escape_string($conn, $_REQUEST['dob']);
		 $qual           	=  		mysqli_real_escape_string($conn, $_REQUEST['qualification']);
		 $website        	=  		mysqli_real_escape_string($conn, $_REQUEST['website']);		
		 $company        	=  		mysqli_real_escape_string($conn, $_REQUEST['companyName']);
		 $exp           	=  		$_REQUEST['expYear'] . " year ". $_REQUEST['expMonth'] ." month ";
		        	
		 $reference      	=  		$_REQUEST['reference'];

		 $fileName       	=       mysqli_real_escape_string($conn, $_FILES['file']['name']);
		 $fileSize       	=       $_FILES['file']['size'];
		 $tmp_name       	=       $_FILES['file']['tmp_name'];
	
		 $target_dir 		= 		"./uploads/";

		 $fileName      	=       $_FILES['file']['name'];

		 $target_file 		= 		$target_dir . basename($fileName); //uploads/file.type

		 $extension 	 	= 		pathinfo($target_file,PATHINFO_EXTENSION); 

		 $imageFileType 	= 		strtolower($extension);

		 if($firstname == "" && $lastname == "") {
		 	 				
		 }

		 else {
			 if(!empty($fileName)) {
			 	if((strcmp($imageFileType,"txt")==0) || (strcmp($imageFileType,"docx") == 0) || (strcmp($imageFileType,"pdf") == 0)) {
			    	move_uploaded_file($tmp_name, $target_file);

			    	$sql            =    "INSERT INTO contact_form (first_name, last_name, email, mobile, gender, position, dob, qualification, website, resume, company, experience, reference) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$mobile."', '".$gender."', '".$position."', '".$dob."', '".$qual."', '".$website."', '".$fileName."', '".$company."', '".$exp."', '".$reference."')";
						$result         =    mysqli_query($conn, $sql);
						if($result) {
							echo "<div class='alert alert-success'>
								<strong>Success! </strong> Thank you. Your form has been submitted successfully.
							</div>";
						}
						else {
							echo "<div class='alert alert-danger'>
		 						<strong>Alert! </strong> Failed to submit your form due to server error.
		 						</div>";
							 }
			 		}
			 		else {
			 			echo "<div class='alert alert-danger'>
								<strong>Alert! </strong> Uploaded file is not valid.
							</div>";
			 		}
			}

			else {
				$sql            =    "INSERT INTO contact_form (first_name, last_name, email, mobile, gender, position, dob, qualification, website, company_name, experience, reference) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$mobile."', '".$gender."', '".$position."', '".$dob."', '".$qual."', '".$website."', '".$company."', '".$exp."', '".$reference."')";
					$result         =    mysqli_query($conn, $sql);
					if($result) {
						echo "<div class='alert alert-success'>
							<strong>Success! </strong> Thank you. Your form has been submitted successfully.
						</div>";
					}
					else {
						echo "<div class='alert alert-danger'>
									<strong>Alert! </strong> Failed to submit your form due to server error.
		 						</div>";
		 				}
				}
		 }