<?php  include('../include/admin_header.php'); ?>

<?php


if(!$session->is_signed_in()) {

    redirect("../../index.php");
  }

?>

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Jobs</h1>
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

					<div>
						<a href="add_job.php" class="button button-3d button-rounded button-green">Add Jobs</a>
					</div>

					<table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Reg</th>
                            <th>Make</th>
                            <th>Modal</th>
                            <th>Work Start Date</th>
                            <th>Due to Complete</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php
          

                            $jobs = Job::find_all_jobs();

                            foreach($jobs as $job){

                                echo '<tr>';
                                echo   '<td>'. $job->id .'</td>';
                                echo   '<td>'. $job->first_name .' ' . $job->last_name .'</td>';
                                echo   '<td>'. $job->vehicle_reg .'</td>';
                                echo   '<td>'. $job->vehicle_make .'</td>';
                                echo   '<td>'. $job->vehicle_model .'</td>';
                                echo   '<td>'. $job->book_in .' </td>';
                                echo   '<td>'. $job->completion .' </td>';
                                echo   '<td>'. $job->vehicle_model .' </td>';
                                echo '</tr>';
                              }

                        /*

                            ?>


                            <?php

                                if(isset($_GET['delete'])){

                                    $user_id = $_GET['delete'];

                                    $user = User::find_by_id($user_id);

                          
                                   if($user->delete()){ redirect("users.php"); }
                                }
                        */
                            ?>
                    
                        </tbody>
                    </table>


				</div>

			</div>

		</section><!-- #content end -->


<?php  include('../include/admin_footer.php'); ?>