<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

    <div class="container-fuild">



    <!-- ======= Hero Section ======= -->
    <section id="hero" class="align-items-center">
      <div class="container position-relative text-center text-lg-start">
        <div class="row">
          <div class="col-lg-12">
            <h1> <span>BusIT.com</span>-Online Bus Ticket Booking</h1>

            <div id="search-bar-container" class="col-md-12" style="box-shadow:5px 5px 5px;">

                <!-- Blog Search Well -->
                <div id="bus_search_bar" class="container bus_search" >
                    <h4 style="color:#fff;"><b>Bus Search</b></h4>
                    <form class="bus_form" action="search.php" method="post">


                            <input style="box-shadow:5px 5px 5px;" id="form-item" name="source" type="text" class="form-control" placeholder="Source">
                            <input id="form-item" name="destination" type="text" class="form-control" placeholder="Destination">


                            <input id="form-item" type="date"  min=<?php echo date('Y-m-d');?> max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 29 days'));?> name="date" class="form-control" id="date" placeholder="dd/mm/yyyy" >

                            <button class="btn btn-primary" style="width:18%; height:36.5px;background-color:rgba(200, 0, 0, 1);"name="submit">Search</button>

                    </form>
                    <!-- /.input-group -->
                </div>
              </div>

              <
          <?php

              if (!isset($_SESSION['s_username'])) {
                  ?>  <div id="Loginbar" class="col-md-4" style="margin-left:35%;margin-top:-21%; background:transparent;">
                      <div class="well" style="padding-top:45px;padding-bottom:45px;border:1px solid #000;">
                          <h2 style="margin-top:10px;padding-bottom: 10px;color:#000">Login</h2>
                          <form action="includes/login.php" method="post">


                                  <input name="username" type="text" class="form-control" placeholder="Username">
                                  <input name="password" type="password" class="form-control" placeholder="Password" style="margin-top: 10px;">

                                  <button class="btn btn-primary" name="login" style="margin-left: 10px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Login</button>

                          </form>
                          <!-- /.input-group -->
                      </div>
                    </div>

          <?php } ?>
          </div>


        </div>


      </div>
    </section><!-- End Hero -->






            






<?php include "includes/footer.php"; ?>
