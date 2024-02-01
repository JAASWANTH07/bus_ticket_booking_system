        <!-- Footer -->
    <!-- </div>  -->
        <footer id="myFooter" >
        <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                  <h3 style="font-size: 30px;padding: 2px 0 10px 0;
                  font-weight: 300;font-family: 'Poppins', sans-serif;">BusIT.com</h3>
                  <p>
                    17th Street, Mysore <br>
                    MY- 571122, Karnataka, India.<br><br>
                    <strong>Phone:</strong> +91 88 22 334455<br>
                    <strong>Email:</strong> BusIT@example.com<br>
                  </p>

                </div>
              </div>

                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="registration.php">Sign up</a></li>
                        <li><a href="#">Log in</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="social-networks">
             <class="twitter"><i class="fa fa-twitter" style=" color: #00aced;"></i>
             <class="facebook"><i class="fa fa-facebook" style="color: #2b55ff;"></i>
             <class="google"><i class="fa fa-google-plus" style="color: red;"></i>
             <class="instagram"><i class="fa fa-instagram" style="color: rgba(255, 0, 96, 1);"></i>
             <class="linkedin"><i class="fa fa-linkedin" style="color: #0077b5;"></i>
        </div>
        <div class="footer-copyright">
          <p>  &copy; Copyright <a href="#" style="color:#fff;"><strong><span>BusIT.com</span></strong></a>. All Rights Reserved </p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
    function changePayment(){
      var link = document.getElementById("paymentradio");
        link.style.visited;

    }

    function myBooked() {

      if (window.confirm('Your Booking was Successfull, Click Okay to Make Payment'))
      {
        window.open('payment.php', '_blank');
      }

    }
    function myComment() {
      alert("Your Reviews were Successfully Submitted");
    }
    function myReg() {
      alert("Your Successfully Registered");
    }

    function myPayment() {
      alert("Your Payment was Successfull");
    }

    </script>


    <!-- jQuery -->
     <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
     <!-- <script src="js/bootstrap.min.js"></script>  -->

</body>

</html>
