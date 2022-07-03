<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

    <head>
        <title>Realest attend to all your needs — from property | Home
        </title>
        <meta charset="utf-8">
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <!--//webfonts-->


    </head>
    <body> 


        <!-----start-main---->
        <div class="login-form">
            <h1>Sign In</h1>
            <h2><a href="../index.php">Create Account/Home Page</a></h2>
            <form method="POST">
                <li>
                    <input type="text" class="text" name="uname" placeholder="User Name"/><a href="#" class=" icon user"></a>
                </li>
                <li>
                    <input type="password" name="psw" placeholder="Password"/><a href="#" class=" icon lock"></a>
                </li>

                <div class ="forgot">
                    <h3><a href="#"></a></h3>
                    <input type="submit" name="submit" onclick="myFunction()" value="Sign In" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>
                </div>
            </form>

            <!--            Action
            -->
            <?php
            session_start();
            include '../dbconnection.php';
            if (isset($_POST['submit'])) {
                $uname = $_POST['uname'];
                $psw = $_POST['psw'];
                $qry = "SELECT * FROM `login` WHERE `uname`='$uname' AND `psw`='$psw' AND `status`='Approved'";
                $check = mysql_query($qry);
                if (mysql_num_rows($check) == 0) {
                    echo "<script>alert('Invalid Username or password');</script>";
                     echo "<script>window.location='Login.php'</script>";
                } else {
                    $row = mysql_fetch_assoc($check);
                    $_SESSION["USERID"] = $row["uid"];
                    if ($row["type"] == "admin") {
                        echo "<script>alert('Log in Successful');</script>";
                        echo "<script>window.location='../Admin/AdminHome.php'</script>";
                    } elseif ($row["type"] == "broker") {
                        echo "<script>alert('Log in Successful');</script>";
                        echo "<script>window.location='../Broker/BrokerHome.php'</script>";
                    } elseif ($row["type"] == "buyer") {
                        echo "<script>alert('Log in Successful');</script>";
                        echo "<script>window.location='../Buyer/BuyerHome.php'</script>";
                    } elseif ($row["type"] == "owner") {
                        echo "<script>alert('Log in Successful');</script>";
                        echo "<script>window.location='../Owner/OwnerHome.php'</script>";
                    } else {
                        echo "<script>alert('Please check Your User name and Password');</script>";
                         echo "<script>window.location='Login.php'</script>";
                    }
                }
            }
            ?>
            <a href=""

            <!--            Action
            -->
            <a href=""
    </div>
    <!--//End-login-form-->
    <div class="ad728x90" style="text-align:center">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- w3layouts_demo_728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-9153409599391170"
             data-ad-slot="8639520288"></ins>
        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>


    <!-----start-copyright---->
    <div class="copy-right">
        <p>Template by <a href="http://www.lcckochi.com/" target="_blank">LCC</a></p>
    </div>
    <!-----//end-copyright---->

</body>
</html>