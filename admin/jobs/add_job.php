<?php  include('../include/admin_header.php'); ?>

<?php

if(isset($_POST['add-job-form-submit'])){

	$first_name = $_POST['add-job-form-first-name'];
    $last_name = $_POST['add-job-form-last-name'];
	$email_address = $_POST['add-job-form-email'];
	$first_line = $_POST['add-job-form-first-line-address'];
	$second_line = $_POST['add-job-form-second-line-address'];
	$city = $_POST['add-job-form-city'];
	$postcode = $_POST['add-job-form-postcode'];
	$phone = $_POST['add-job-form-phone'];

	/*
	$reg = $_POST['add-job-form-reg'];
	$make = $_POST['add-job-form-make'];
	$model = $_POST['add-job-form-model'];
	$style = $_POST['add-job-form-style'];
	$color = $_POST['add-job-form-color'];
	$mileage = $_POST['add-job-form-mileage'];

	$book_in  = $_POST['add-job-form-bookin'];
	$completion = $_POST['add-job-form-expected-completion'];
	$damage = $_POST['add-job-form-damage'];
	*/

	$customer = new Customer;

	$customer->first_name = $first_name;
	$customer->last_name = $last_name;
	$customer->email = $email_address;
	$customer->first_line_address = $first_line;
	$customer->second_line_address = $second_line;
	$customer->city = $city;
	$customer->postcode = $postcode;
	$customer->phone = $phone;

	if($customer->create()){
		echo "customer Added";
			redirect('jobs.php');
	}else{
		echo 'error';
	}



}

?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Add Job</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div>

    </section><!-- #page-title end -->




    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

            <div class="tab-content clearfix" id="tab-register">
						<div class="card nobottommargin">
							<div class="card-body" style="padding: 40px;">
								<h3>Set up a new job</h3>
							

								<form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

									<h4>Add Owner Details</h4>

									<div class="row mb-5">	

										<div class="col-4 mb-1">
											<label for="add-job-form-name">First Name:</label>
											<input type="text" id="add-job-form-name" name="add-job-form-first-name" value="" class="form-control" />
										</div>
										
										<div class="col-4 mb-1">
											<label for="add-job-form-name">Last Name:</label>
											<input type="text" id="add-job-last-name" name="add-job-form-last-name" value="" class="form-control" />
										</div>

										<div class="col-6 mb-1">
											<label for="add-job-form-first-line-address">First Line of Address:</label>
											<input type="text" id="add-job-form-first-line-address" name="add-job-form-first-line-address" value="" class="form-control" />
										</div>

										<div class="col-6 mb-1">
											<label for="add-job-form-second-line-address">Second Line of Address:</label>
											<input type="text" id="add-job-form-second-line-address" name="add-job-form-second-line-address" value="" class="form-control" />
										</div>

										<div class="col-6 mb-1">
											<label for="add-job-form-city">City/Town:</label>
											<input type="text" id="add-job-form-city" name="add-job-form-city" value="" class="form-control" />
										</div>

										<div class="col-6 mb-1">
											<label for="add-job-form-postcode">Post Code:</label>
											<input type="text" id="add-job-form-postcode" name="add-job-form-postcode" value="" class="form-control" />
										</div>

										<div class="col-6 mb-1">
											<label for="add-job-form-email">Email Address:</label>
											<input type="email" id="add-job-form-email" name="add-job-form-email" value="" class="form-control" />
										</div>

										<div class="col-6 mb-1">
											<label for="add-job-form-phone">Phone Number:</label>
											<input type="number" id="add-job-form-phone" name="add-job-form-phone" value="" class="form-control" />
										</div>

									</div>

									<h4>Add Vehicle Details</h4>

									<div class="row mb-5">

										<div class="col-4 mb-1">
											<label for="add-job-form-reg">Reg:</label>
											<input type="text" id="add-job-form-reg" name="add-job-form-reg" value="" class="form-control" />
										</div>

										<div class="col-4 mb-1">
											<label for="add-job-form-make">Make:</label>
											<input type="text" id="add-job-form-make" name="add-job-form-make" value="" class="form-control" />
										</div>

										<div class="col-4 mb-1">
											<label for="add-job-form-model">Model:</label>
											<input type="text" id="add-job-form-model" name="add-job-form-model" value="" class="form-control" />
										</div>

										<div class="col-4 mb-1">
											<label for="add-job-form-style">Style:</label>
											<input type="text" id="add-job-form-style" name="add-job-form-style" value="" class="form-control" />
										</div>

										<div class="col-4 mb-1">
											<label for="add-job-form-color">Color:</label>
											<input type="text" id="add-job-form-color" name="add-job-form-color" value="" class="form-control" />
										</div>

										<div class="col-4 mb-1">
											<label for="add-job-form-mileage">Mileage:</label>
											<input type="text" id="add-job-form-mileage" name="add-job-form-mileage" value="" class="form-control" />
										</div>

									</div>

									<h4>Add Job Details</h4>

									<div class="row mb-5">

										<div class="col-4 mb-1">
											<label for="add-job-form-bookin">Book In Date:</label>
											<input type="text" id="add-job-form-bookin" name="add-job-form-bookin" value="" class="form-control" />
										</div>

										<div class="col-4 mb-1">
											<label for="add-job-form-expected-completion">Expected Completion Date:</label>
											<input type="text" id="add-job-form-expected-completion" name="add-job-form-expected-completion" value="" class="form-control" />
										</div>

										<div class="col-4 mb-1">
											<label for="add-job-form-damage">Damage:</label>
											<input type="text" id="add-job-form-damage" name="add-job-form-damage" value="" class="form-control" />
										</div>

									
									</div>

									<div class="row">

										<div class="col_full nobottommargin">
											<button class="button button-3d button-black nomargin" id="add-job-form-submit" name="add-job-form-submit" value="register">Add Job</button>
										</div>

									</div>
									
								</form>
							</div>
						</div>
					</div>


            </div>

        </div>

    </section><!-- #content end -->



<?php  include('../include/admin_footer.php'); ?>