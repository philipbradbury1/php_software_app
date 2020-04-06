<?php  include('include/admin_header.php'); ?>

<?php

if(!$session->is_signed_in()) {

    redirect("../index.php");
  }

?>

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Admin</h1>
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

					<h1>User added </h1>

				</div>

			</div>

		</section><!-- #content end -->





<?php  include('include/admin_footer.php'); ?>