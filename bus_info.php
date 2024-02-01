<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

    <?php error_reporting(0); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
              <div id="search-bar-container" class="col-md-12" style="margin-top:10%;box-shadow:5px 5px 5px;">

                  <!-- Blog Search Well -->
                  <div id="bus_search_bar" class="container bus_search" >
                      <h4 style="color:#fff;"><b>Bus Search</b></h4>
                      <form class="bus_form" action="search.php" method="post">


                              <input style="box-shadow:5px 5px 5px;" id="form-item" name="source" type="text" class="form-control" placeholder="Source">
                              <input style="box-shadow:5px 5px 5px;" id="form-item" name="destination" type="text" class="form-control" placeholder="Destination">


                              <input style="box-shadow:5px 5px 5px;" id="form-item" type="date"  min=<?php echo date('Y-m-d');?> max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 29 days'));?> name="date" class="form-control" id="date" placeholder="dd/mm/yyyy" >

                              <button class="btn btn-primary" style="width:18%; height:36.5px;background-color:rgba(200, 0, 0, 1);box-shadow:5px 5px 5px grey;name="submit">Search</button>

                      </form>
                      <!-- /.input-group -->
                  </div>
                </div>


                <?php

                    if(isset($_GET['bus_id'])) {
                        $selected_bus = $_GET['bus_id'];
                    }

                    $query = "SELECT *  FROM  posts WHERE post_id = $selected_bus ";

                    $select_all_bus_query = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_all_bus_query)) {
                        $bus_title = $row['post_title'];
                        $bus_author = $row['post_author'];
                        $bus_date = $row['post_date'];
                        $bus_image = $row['post_image'];
                        $bus_content = $row['post_content'];
                        $bus_id = $row['post_id'];
                        $bus_via = $row['post_via'];
                        $times = $row['post_via_time'];
                        $bus_cat = $row['post_category_id'];
                        $available_seats = $row['available_seats'];
                        $max_seats = $row['max_seats'];
                        $available_seatsa = $max_seats - $available_seats;
                        $sum = $available_seats;
                        $seat_cost = $row['seat_cost'];
                      $bus_stations = explode(" ",$bus_via);
                      $bus_times = explode(" ",$times);
                        ?>

                        <!-- First Blog Post -->

                        <div class="col-lg-12" style="background-color: rgba(0, 0, 0, 0.20); color: #000; margin-bottom: 40px;box-shadow:5px 5px 5px;">
                          <div id="bus-container" class="container bus-container" >

                          <img style="float:left ; margin: 20px 20px 20px 0; border: 1px solid #000;box-shadow:5px 5px 5px grey;" class="img-responsive" width="640px;" height="520px;" src="images/<?php echo $bus_image; ?>" alt="">


                            <h2><b><a style="color:rgba(200, 0, 0, 1); padding-left: 10px;" href="bus_info.php?bus_id=<?php echo $bus_id; ?>"><?php echo $bus_title; ?></a></b></h2>
                              <div class="bus-text" style="font-size:20px;">
                            <p><span style="padding-top: 10px;"class="glyphicon glyphicon-time"></span> Bus on <?php echo $bus_date; ?></p>


                            <p>Ticket Cost :<b> <?php echo $seat_cost ?> </b></p>
                            <p> Max Seats : <?php echo $max_seats ?> </p>
                            <p> Available Seats : <?php echo $sum ?> </p>
                            <p><table class="table"style="width:30%;" >
                              <thead>
                                  <th><u>Station</u></th>
                                  <th><u>Time</u> </th>
                              </thead>
                              <tbody>
                                <?php

                                    for ($i=0; $i < sizeof($bus_stations); $i++) { ?>
                                        <tr>
                                          <td><?php echo $bus_stations[$i]; ?></td>
                                          <td><?php echo $bus_times[$i]; ?></td>
                                        </tr> <?php
                                    }

                                ?>
                                <br>
                              </tbody>
                            </table></p>

                            <!-- <p> Available Seats : <//?php echo $available_seats ?> </p> -->
                          </div>
                        </div>

                        </div>

                        <div class="col-lg-12" style="background-color: rgba(0, 0, 0, 0.20); color: #000; margin-bottom: 40px; padding:10px;box-shadow:5px 5px 5px;">
                        <h4><b>Bus Details : <?php echo $bus_content ?></b></h4>
                      </div>
                        <!--<div class="jumbotron jumb">
                            <h2><b>Seat Matrix:</b></h2>
                            <h5>Max:         <//?php echo $max_seats ?></h5>
                            <h5>Available:   <//?php echo $sum ?></h5>



                        </div> -->


                        <?php

                        if (isset($_SESSION['s_id'])) {
                            # code...

                        ?>

                        <div class="col-lg-12" style="background-color: rgba(0, 0, 0, 0.20); color: #000; margin-bottom: 40px; padding:10px;box-shadow:5px 5px 5px;">
                            <div class="container">
                                <h2>Enter Details:</h2>

                                <form action="" method="post" class="form-horizontal">

                                    <select name="passenger_count" style="margin-bottom: 15px;margin-top: 15px;">
                                        <option value="0">Ticket Count</option>
                                        <?php
                                            for ($i=1; $i <= $sum; $i++) { ?>
                                                <option value="<?php echo $i ?>"><?php echo $i ?></option> <?php
                                            }


                                        ?>
                                    </select>
                                    <button class="btn-xs btn-primary" style="margin-left: 5px;">GO</button>

                                </form>



                                <form action="bus_info.php?bus_id=<?php echo $selected_bus ?>&count=<?php echo $_POST['passenger_count'] ?>" method="post" class="form-horizontal">
                                    <div style="padding-top:10px"class="form-group">
                                        <label style="padding-left:123px;padding-top:4px;" class="control-label col-sm-2" for="email">Source:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email" placeholder="Source" name="source">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="padding-left:95px;padding-top:4px" class="control-label col-sm-2" for="email">Destination:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email" placeholder="Destination" name="destination">
                                        </div>
                                    </div>

                                <?php

                                if (isset($_POST['passenger_count'])) {
                                    $count = $_POST['passenger_count'];
                                    //echo "<h1>$count</h1>

                                    for ($i=0; $i < $count; $i++) {

                                        ?>
                                        <h6><?php echo "Passenger "; echo $i+1;?></h6>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Name:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" placeholder="Name" name="name<?php echo "$i" ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Age:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" placeholder="Age" name="age<?php echo "$i" ?>">
                                            </div>
                                        </div>
                                      <?php
                                    }
                                    ?>
                              <?php
                                }
                                  ?>




                              <button onclick="myBooked()" class="btn btn-primary" name="book" style="margin-left: 41%; margin-top: 15px;margin-bottom:10px;">Book Tickets</button>

                                </form>



                                <?php

                                if (isset($_POST['book'])) {
                                    //echo "<h1>hello</h1>";
                                    if (isset($_GET['count'])) {
                                        $count = $_GET['count'];
                                    }
                                    $source = $_POST['source'];
                                    $destination = $_POST['destination'];
                                    $cost = 0;
                                    $costa= $seat_cost * $count;


                                    for ($i=0; $i < sizeof($bus_stations); $i++) {

                                        if($bus_stations[$i]==$source) {
                                            //echo $bus_stations[$i];
                                            for ($j=$i; $j < sizeof($bus_stations); $j++) {
                                                //echo $bus_stations[$j];
                                                $k=$j+1;
                                                $begin = $bus_stations[$j];
                                                $inter = $bus_stations[$k];
                                                $query_new = "SELECT * FROM cost WHERE start='$begin' AND stopage='$inter' AND category=$bus_cat ";

                                                $get_cost = mysqli_query($connection,$query_new);
                                                while($row = mysqli_fetch_assoc($get_cost)) {
                                                      $station_cost = $row['cost'];
                                                      echo $station_cost;
                                                      $cost += $station_cost;
                                                   }


                                                   if($bus_stations[$k]==$destination)
                                                    break;
                                            }
                                            break;
                                        }
                                    }




                                    $arr = array();
                                    $arr1 = array();
                                    for ($i=0; $i < $count; $i++) {
                                        //echo "<h1>hello</h1>";
                                        $name_query = 'name'.$i ;
                                        $age_query = 'age'.$i ;
                                        //echo $what;
                                        array_push($arr,$_POST[$name_query]);
                                        array_push($arr1,$_POST[$age_query]);
                                    }
                                    for ($i=0; $i < $count; $i++) {

                                        $curr_name = $arr[$i];
                                        $curr_age = $arr1[$i];
                                        $user_id = $_SESSION['s_id'];

                                        $query = "INSERT INTO orders(bus_id, user_id, user_name, user_age, source, destination,date,cost, costa) VALUES($selected_bus, $user_id , '$curr_name', '$curr_age', '$source', '$destination', now(),$cost,$costa)";

                                        $query_seat_update = "UPDATE posts SET available_seats = $available_seats - $count WHERE post_id = $bus_id";

                                        //echo $arr[$i];
                                        //echo $_SESSION['s_id'];
                                        $update_seats_available = mysqli_query($connection,$query_seat_update);
                                        $booking_query = mysqli_query($connection,$query);
                                        if (!$booking_query) {
                                            die("Query Failed" . mysqli_error($connection));
                                        }
                                    }
                                    //header("Location: profile.php");
                                }

                                ?>
                            </div>
                        </div>
                        <?php } ?>

                        <hr>
                    <?php } ?>


                    <!-- Blog Comments -->

                <?php

                    if (isset($_POST['submit_query'])) {
                        $user_name = ucfirst($_SESSION['s_username']) ;
                        if($user_name == "") {
                            $user_name = "(unknown)";
                        }
                        $user_email = $_POST['user_email'];
                        $user_query = $_POST['user_query'];

                        $query = "INSERT INTO query(query_bus_id, query_user, query_email, query_date, query_content, query_replied) VALUES ('$selected_bus', '$user_name', '$user_email', now(), '$user_query', 'no')";

                        $query_insert = mysqli_query($connection, $query);
                        if(!$query_insert) {
                            die("Query Failed" . mysqli_error($connection));
                        }

                        $query = "UPDATE posts SET post_query_count = post_query_count + 1 WHERE post_id = $bus_id";
                        $increase_query_count = mysqli_query($connection,$query);
                    }

                ?>



                <!-- Comments Form -->
                <div class="col-lg-12" style="background-color: rgba(0, 0, 0, 0.20); color: #000; margin-bottom: 40px; padding:10px;box-shadow:5px 5px 5px;">

                    <h4>Leave a Comment:</h4>
                    <form action="bus_info.php?bus_id=<?php echo $selected_bus ?>" method="post" role="form">

                        <!-- <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" name="user_name"></textarea>
                        </div> -->

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input style="width:60%;"type="email" class="form-control" name="user_email"></textarea>
                        </div>

                        <div class="form-group">
                            <label> Query</label>
                            <textarea style="width:60%;"class="form-control" rows="3" name="user_query"></textarea>
                        </div>
                        <button type="submit" onclick="myComment()" class="btn btn-primary" name="submit_query">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <?php

                $query = "SELECT * FROM query WHERE query_bus_id = $bus_id";
                $get_query = mysqli_query($connection,$query);

                while ($row = mysqli_fetch_assoc($get_query)) {

                $query_user = $row['query_user'];
                $query_content = $row['query_content'];
                $query_date = $row['query_date'];

                ?>


                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> <?php echo $query_user; ?>
                            <small><?php echo $query_date; ?></small>
                        </h4>
                        <?php echo $query_content; ?>
                    </div>
                </div>

                <?php } ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>



<?php include "includes/footer.php"; ?>
