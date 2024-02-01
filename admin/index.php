<?php include"includes/admin_header.php"; ?>

    <div id="wrapper" >

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper" style="background-color: #182c39;" >


            <div class="container-fluid" >

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color:#fff;">
                            Welcome! Admin,
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
                        </h1>
                    </div>
                </div>
              

            </div>

        </div>


<?php include"includes/admin_footer.php"; ?>
