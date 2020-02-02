<?php  include('include/admin_header.php'); ?>





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
                              echo   '<td>'. $user['user_id'] .'</td>';
                              echo   '<td>'. $user['user_first_name'] .'</td>';
                              echo   '<td>'. $user['user_last_name'] .'</td>';
                              echo   '<td>'. $user['user_username'] .'</td>';
                              echo   '<td><a href="add_user.php" class="button button-3d button-rounded button-blue">Edit</a></td>';
                              echo   '<td><a href="users.php?delete='.$user['user_id'].'" class="button button-3d button-rounded button-green">Delete</a></td>';
                              echo '</tr>';

                                
                            }

                            ?>


                     
                    
                        </tbody>
                    </table>

                </div>

            </div>

        </section><!-- #content end -->



   



<?php  include('include/admin_footer.php'); ?>