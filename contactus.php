<?php
require "config.php";
?>
<DOCTYPE html!>
<html>

<head>

<meta name ="viewport " content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <header>
        <div><img class = "logo" src = "images/LOGO MEDIZONE.png" alt = "This is a logo" height = "100px" width = "100px"></div>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li>
              <a href="#">Places</a>
              <ul class="submenu">
                <li><a href="#">Medical Center</a></li>
                <li><a href="#">Hospitals</a></li>
              </ul>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
        </nav>
        <div class="login-signup">
          <button class="login">Login</button>
          <button class="signup">Sign up</button>
        </div>
      </header>
    <div class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Welcome to MediZone! We value your feedback, inquiries, and concerns. Please feel free to reach out to us using the contact information provided below. We are here to assist you and ensure that your experience on our platform is as seamless as possible.</p>
        </div>

        <div class="container">
            <div class="contactInfo">

                <div class="box">
                    <div class="icon"></div>

                    <div class="text">
                        <h3>Phone</h3>
                        <p>801-200-1919</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>160/2,<br> Bauddhaloka Mawatha,<br>03 Colombo,<br>Colombo.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>medizonesup@gmail.com</p>
                    </div>
                </div>

            </div>
            <div class="contact-form">
  
              <form action="updateprocess.php" method="post" autocomplete="off">
                  <h3 class="title">Contact us</h3>
                  <div class="input-container">
                      <input type="text" name="name" class="input" />
                      <label for="">Username</label>
                      <span>Username</span>
                  </div>
                  <div class="input-container">
                      <input type="email" name="email" class="input" />
                      <label for="">Email</label>
                      <span>Email</span>
                  </div>
                  <div class="input-container">
                      <input type="tel" name="phone" class="input" />
                      <label for="">Phone</label>
                      <span>Phone</span>
                  </div>
                  <div class="input-container textarea">
                      <textarea name="message" class="input"></textarea>
                      <label for="">Message</label>
                      <span>Message</span>
                  </div>
                  <input type="submit" name="submit" value="Send" class="btn" />
              </form>
          </div>
        </div>
    </div>

    <?php

            //if(isset($_SESSION['user_name'])){

                //$email = $_SESSION['user_name'];
                                
                $sql = "SELECT * FROM Contact WHERE email = 'abc@gmail.com' ";
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                    
                    
                
                    while($result2 = $result-> fetch_assoc())
                    {
                        Echo '<table style="border:5px ridge black; width:100% ">
                        
                        <tr>
                        <td>Custermer Name</td>
                        <td>'.$result2["name"].'</td>
                        </tr>
                        <tr>
                        <td>Email</td>
                        <td>'.$result2["email"].'</td>
                        </tr>
                        </tr>
                        <tr>
                        <td>Phone Number</td>
                        <td>'.$result2["phone"].'</td>
                        </tr>
                        </tr>
                        <tr>
                        <td>Message</td>
                        <td>'.$result2["message"].'</td>
                        </table><br>';
                    }
                    
                    echo '<a href="deleteContact.php" class="btn_type1">Delete</a>';
            
                }else {
                    echo "0 results";
                }

                $conn->close();
            //}
            ?>
    
    <footer>
        <div class="social-media">
          <a href="#" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
          <a href="#" target="_blank"><img src="images/instagram.png" alt="Instagram"></a>
          <a href="#" target="_blank"><img src="images/twitter.png" alt="Twitter"></a>
        </div>
        <br>
        <div class="footer-links">
          <a href="#">Contact Us</a>
          <a href="#">Terms and Conditions</a>
          <a href="#">Privacy Policy</a>
          <a href="#">FAQs</a>
        </div>
        <br>
        <div class="footer-bottom">
          <p>Copyright &copy; 2023 Designed by<span> M_L_B_15.2_07</span></p>
        </div>
      </footer>

      <script src="js.js"></script>
</body>
</html>