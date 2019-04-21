$(document).ready(function() {
				$("#error_firstname").hide(); 
				$("#error_lastname").hide();
				$("#error_mobile").hide();
				$("#error_email").hide();


				$("#submitBtn").click(function(event) {
					 event.preventDefault();
					  
					  var firstname     =   $("#firstName").val();
					  var lastname      =   $("#lastName").val();
					  var mobile        =   $("#mobile").val();
					  var email         =   $("#email").val();
					  var gender        =   $("#gender").val();

					  if ($("#firstName").val() == ""){ 
				  			$("#error_firstname").show('slow'); 
					  }

					  if ($("#lastName").val() == "") {
					  		$("#error_lastname").show('slow');
					  }

					  if($("#mobile").val() == "" ) {
					  		$("#error_mobile").show('slow');
					  }
					  if($("#email").val() == "") {
					  		$("#error_email").show('slow');
					  }


				    var form = $('#contactFrm')[0];

				   	var data = new FormData(form);
					jQuery.ajax({
						type: "POST",
				        enctype: 'multipart/form-data',
				        url: 'form-validate.php',
				        data: data,
				        processData: false,  // Important!
				        contentType: false,
				        cache: false,
				        timeout: 600000,
            			success: function (res) {
            				$("#result").html(res);
            				
            			},
            			error: function (e) {
			                $("#result").text(e.responseText);
			                console.log("ERROR : ", e);
			                $("#btnSubmit").prop("disabled", false);
			            }
					});

				});
		   });