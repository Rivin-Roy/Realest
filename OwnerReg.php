
<?php
include './Header.php';
?>

<!-- //w3l-header -->
<!-- /contact-form -->

<!-- //contact-form -->
<!-- /contact-form -->
<section class="w3l-contact-main">
    <div class="contact-infhny py-5">
        <div class="container py-lg-5">
            <div class="grid contact-grids row">

                <div class="col-lg-6 contacts12-main">
                    <form method="POST" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="fname" placeholder="Firt name" class="contact-input" />
                            <input type="text" name="lname" placeholder="Last name" class="contact-input" />
                            <input type="text" name="dist" placeholder="District" class="contact-input" />
                            <input type="text" name="city" placeholder="City" class="contact-input" />
                            <input type="email" name="email" placeholder="Your email" class="contact-input" />
                            <input type="text" name="houseno" placeholder="House Number" class="contact-input" />
                            <input type="number" name="phone" placeholder="Phone number" class="contact-input" />
                            <input type="password" name="psw" placeholder="Create Your Password" class="contact-input" />
                        </div>
                        <div>
                            <textarea name="address" placeholder="Type your address here" required=""></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn submit" name="submit">Register</button>
                        </div>
                    </form>
                    
                    
                     <?php
            include './dbconnection.php';
            if (isset($_POST['submit'])) {
           
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $address = $_POST['address'];
                $houno = $_POST['houseno'];
                $city = $_POST['city'];
                $dist = $_POST['dist'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $psw = $_POST['psw'];
                $sel = mysql_query("SELECT COUNT(*) AS COUNT FROM `owner` WHERE `phone`='$phone' OR `email`='$email'");
                $fetch = mysql_fetch_array($sel);
                if ($fetch['COUNT'] > 0) {
                    echo '<script>alert("Already Registered")</script>';
                } else {
                    $qry = "INSERT INTO `owner`(`fname`,`lname`,`address`,`houno`,`city`,`dist`,`phone`,`email`)values('$fname','$lname','$address','$houno','$city','$dist','$phone','$email')";

                    $exe = mysql_query($qry);
                    if ($qry) {
                        $qry2 = mysql_query("INSERT INTO `login`(`uid`,`uname`,`psw`,`type`)VALUES((SELECT MAX(`uid`)FROM `owner`),'$email','$psw','owner')");
                        echo '<script>alert("Registration Succesfull")</script>';
                    } else {
                        echo '<script>alert("Failed to Register")</script>';
                    }
                }
            }
            ?>
                    
                    
                    
                </div>

            </div>
        </div>
</section>
<!-- //contact-form -->

<!-- footer-66 -->

<?php
include './Footer.php';
?>