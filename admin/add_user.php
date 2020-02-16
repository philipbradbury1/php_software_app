<?php  include('include/admin_header.php'); ?>

<?php

if(isset( $_POST['register-form-submit']) ){
    
    $first_name = $_POST['register-form-first-name'];
    $last_name = $_POST['register-form-last-name'];
    $email_address = $_POST['register-form-email'];
    $username = $_POST['register-form-username'];
    $password = $_POST['register-form-password'];


    if(!empty($first_name) && !empty($last_name) && !empty($email_address) && !empty($username) && !empty($password) ){


		$user = new User;


		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->email_address = $email_address;
		$user->username = $username;
		$user->password = $password;

		if($user->create()){
			echo "User Added";
			redirect('users.php');
		}else{
			echo 'errrrrror';
		}

    }
}


?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Add User</h1>
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
								<h3>Register for an Account</h3>

								<form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

									<div class="col_full">
										<label for="register-form-name">First Name:</label>
										<input type="text" id="register-form-name" name="register-form-first-name" value="" class="form-control" />
									</div>
									
									<div class="col_full">
										<label for="register-form-name">Last Name:</label>
										<input type="text" id="register-form-last-name" name="register-form-last-name" value="" class="form-control" />
									</div>

									<div class="col_full">
										<label for="register-form-email">Email Address:</label>
										<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
									</div>

									<div class="col_full">
										<label for="register-form-username">Choose a Username:</label>
										<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
									</div>

									<div class="col_full">
										<label for="register-form-password">Choose Password:</label>
										<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
									</div>

									<div class="col_full">
										<label for="register-form-repassword">Re-enter Password:</label>
										<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
									</div>

									<div class="col_full nobottommargin">
										<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
									</div>

								</form>
							</div>
						</div>
					</div>


            </div>

        </div>

    </section><!-- #content end -->



<?php  include('include/admin_footer.php'); ?>