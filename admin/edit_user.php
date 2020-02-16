<?php  include('include/admin_header.php'); ?>



<?php
if(!$session->is_signed_in()) {

redirect("../index.php");
}
?>


<?php

if( isset($_GET['edit'] ) ){

    $user_id =  $_GET['edit'];
    
    $user = User::find_by_id($user_id);

    if(!$user){ die("Error: " . $database->connection); }

}else{
    redirect('user.php');
}





if(isset($_POST['edit-form-submit'])){

    $first_name = $_POST['edit-form-first-name'];
    $last_name = $_POST['edit-form-last-name'];
    $email = $_POST['edit-form-email'];
    $username = $_POST['edit-form-username'];


    $user->first_name =  $first_name;
    $user->last_name =  $last_name;
    $user->username =  $username;
    $user->email =  $email;


    if($user->update()){
       echo '<h1>updated</h1>';
    }else{
        echo '<h1>npt updated</h1>';
    }


}



?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Edit User</h1>
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

                <div class="tab-content clearfix" id="tab-edit">
					<div class="card nobottommargin">
						<div class="card-body" style="padding: 40px;">
							<h3>Edit User</h3>

							<form id="edit-form" name="edit-form" class="nobottommargin" action="#" method="post">

								<div class="col_full">
									<label for="edit-form-name">First Name:</label>
									<input type="text" id="edit-form-name" name="edit-form-first-name" value="<?php echo $user->first_name; ?>" class="form-control" />
								</div>
								
								<div class="col_full">
									<label for="edit-form-name">Last Name:</label>
									<input type="text" id="edit-form-last-name" name="edit-form-last-name" value="<?php echo $user->last_name; ?>" class="form-control" />
								</div>

								<div class="col_full">
									<label for="edit-form-email">Email Address:</label>
									<input type="text" id="edit-form-email" name="edit-form-email" value="<?php echo $user->email; ?>" class="form-control" />
								</div>

								<div class="col_full">
									<label for="edit-form-username">Choose a Username:</label>
									<input type="text" id="edit-form-username" name="edit-form-username" value="<?php echo $user->username; ?>" class="form-control" />
								</div>

								<div class="col_full">
									<label for="edit-form-password">Choose Password:</label>
									<input type="password" id="edit-form-password" name="edit-form-password" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="edit-form-repassword">Re-enter Password:</label>
									<input type="password" id="edit-form-repassword" name="edit-form-repassword" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="edit-form-submit" name="edit-form-submit" value="edit">Update</button>
								</div>

							</form>
						</div>
					</div>
				</div>

        </div>

    </div>

</section>



<?php  include('include/admin_footer.php'); ?>