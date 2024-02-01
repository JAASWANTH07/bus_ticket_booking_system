<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <!-- Blog Entries Column -->
            <div class="col-md-12">
              <div id="search-bar-container" class="col-md-12" style="margin-top:10%; box-shadow:5px 5px 5px;">

                  <!-- Blog Search Well -->
                  <div id="bus_search_bar" class="container bus_search" >
                      <h4 style="color:#fff;"><b>Bus Search</b></h4>
                      <form class="bus_form" action="search.php" method="post">


                              <input style="box-shadow:5px 5px 5px;" id="form-item" name="source" type="text" class="form-control" placeholder="Source">
                              <input style="box-shadow:5px 5px 5px;" id="form-item" name="destination" type="text" class="form-control" placeholder="Destination">


                              <input style="box-shadow:5px 5px 5px;" id="form-item" type="date"  min=<?php echo date('Y-m-d');?> max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 29 days'));?> name="date" class="form-control" id="date" placeholder="dd/mm/yyyy" >

                              <button class="btn btn-primary" style="width:18%; height:36.5px;box-shadow:5px 5px 5px grey;background-color:rgba(200, 0, 0, 1);"name="submit">Search</button>

                      </form>
                      <!-- /.input-group -->
                  </div>
                </div>


                <?php

                    if (isset($_GET['category'])) {
                        $cat_type = $_GET['category'];
                    }

                    $query = "SELECT *  FROM  posts WHERE post_category_id=$cat_type";
                    $select_all_bus = mysqli_query($connection,$query);

                    
                    while($row = mysqli_fetch_assoc($select_all_bus)) {
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        $post_id = $row['post_id'];
                        $seat_cost = $row['seat_cost'];
                        $post_time = $row['post_via_time'];
                        $max_seats = $row['max_seats'];
                        $available_seats = $row['available_seats'];
                        $available_seatsa = $max_seats - $available_seats;
                        $sum = $max_seats + $available_seatsa;


                        ?>


                        <!-- First Blog Post -->
                        <div class="col-lg-12" style="background-color: rgba(0, 0, 0, 0.20); color: #000; margin-bottom: 40px; box-shadow: 5px 5px 5px;">
                          <div id="bus-container" class="container bus-container" >

                            <a href="bus_info.php?bus_id=<?php echo $post_id; ?>"><img style="float:left ; margin: 20px 20px 20px 0; border: 1px solid #000;box-shadow:5px 5px 5px grey;" class="img-responsive" width="580px;" height="520px;" src="images/<?php echo $post_image; ?>" alt=""></a>


                            <h2><b><a style="color:rgba(200, 0, 0, 1); padding-left: 10px;" href="bus_info.php?bus_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></b></h2>
                              <div class="bus-text" style="font-size:20px;">
                            <p><span style="padding-top: 10px;"class="glyphicon glyphicon-time"></span> Bus on <?php echo $post_date; ?></p>

                            <p> Time : <?php echo $post_time ?></p>
                            <p>Ticket Cost :<b> <?php echo $seat_cost ?> </b></p>
                            <p> Max Seats : <?php echo $max_seats ?> </p>
                            <p> Available Seats : <?php echo $sum ?> </p>
                          </div>
                            <a class="btn btn-primary" style="background-color:rgba(200, 0, 0, 1); margin-top: 15px;" href="bus_info.php?bus_id=<?php echo $post_id; ?>">See Details <span class="glyphicon glyphicon-chevron-right"></span></a>
                          </div>

                        </div>


                        <hr>
                    <?php } ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php"; ?>
