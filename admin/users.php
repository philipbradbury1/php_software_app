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
            <h1>Users</h1>
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

                <a href="add_user.php" class="button button-3d button-rounded button-green">Add User</a>

                </div>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php

                            $users = User::find_all();


                            foreach($users as $user){

                              echo '<tr>';
                              echo   '<td>'. $user->id .'</td>';
                              echo   '<td>'. $user->first_name .'</td>';
                              echo   '<td>'. $user->last_name .'</td>';
                              echo   '<td>'. $user->username .'</td>';
                              echo   '<td><a href="edit_user.php?edit='.$user->id .'" class="button button-3d button-rounded button-blue">Edit</a></td>';
                              echo   '<td><a href="users.php?delete='.$user->id .'" class="button button-3d button-rounded button-green">Delete</a></td>';
                              echo '</tr>';

                                
                            }

                            ?>


                            <?php

                                if(isset($_GET['delete'])){

                                    $user_id = $_GET['delete'];

                                    $user = User::find_by_id($user_id);

                                    if($user->delete()){ redirect("users.php"); }
                                }
                                
                            ?>
                    
                        </tbody>
                    </table>

                </div>

            </div>

        </section><!-- #content end -->



   



<?php  include('include/admin_footer.php'); ?>