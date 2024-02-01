<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hello! Admin
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
                        </h1>
                        <br><br>
                        <h2 style="padding-left:200px;padding-bottom: 25px; font-weight:bold; color: #DA0037; font-family: 'Sans-serif', Popins;">REPORT:</h2>
                        <br>
                        <?php

                        $curr_date = date('Y-m-d');
                        $query = "SELECT *  FROM  posts";
                        $bus_count_total = mysqli_query($connection,$query);
                        $total_buses_provided = mysqli_num_rows($bus_count_total);

                        $query = "SELECT *  FROM  posts WHERE post_date > '$curr_date'";
                        $bus_count = mysqli_query($connection,$query);
                        $total_buses = mysqli_num_rows($bus_count);

                        $query = "SELECT * FROM users WHERE user_role='admin'";
                        $get_admin = mysqli_query($connection,$query);
                        $total_admin = mysqli_num_rows($get_admin);

                        $query = "SELECT * FROM query";
                        $get_query = mysqli_query($connection,$query);
                        $total_queries = mysqli_num_rows($get_query);

                        $query = "SELECT * FROM users";
                        $get_users = mysqli_query($connection,$query);
                        $total_users = mysqli_num_rows($get_users);

                        $query = "SELECT * FROM orders";
                        $get_orders = mysqli_query($connection,$query);
                        $total_orders = mysqli_num_rows($get_orders);
                        ?>



                        <table class="table table-striped" style="width: 50%; border: 5px solid #444444;
                         margin-left:220px;">
                          <tbody>
                            <tr>
                              <td><b>Total Users:</b> </td>
                              <td><b> <?php echo $total_users; ?> </b></td>
                            </tr>
                            <tr>
                              <td><b>Total Buses Provided:</b> </td>
                              <td><b> <?php echo $total_buses_provided; ?> </b></td>
                            </tr>
                            <tr>
                              <td><b>Total Upcoming Buses:</b> </td>
                              <td><b> <?php echo $total_buses; ?> </b></td>
                            </tr>
                            <tr>
                              <td><b>Total Admins: </b></td>
                              <td><b> <?php echo $total_admin; ?> </b></td>
                            </tr>
                            <tr>
                              <td><b>Total Queries: </b></td>
                              <td><b> <?php echo $total_queries; ?> </b></td>
                            </tr>
                            <tr>
                              <td><b>Total Booking: </b></td>
                              <td><b> <?php echo $total_orders; ?></b></td>
                            </tr>
                          </tbody>
                        </table>

                    </div>
                </div>


            </div>


        </div>
<?php include"includes/admin_footer.php"; ?>
