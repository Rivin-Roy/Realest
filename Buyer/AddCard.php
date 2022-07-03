
<?php
session_start();
include '../Header.php';
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
                            <input type="text" name="card" placeholder="Enter your card number" class="contact-input" pattern="[0-9]{13,16}" maxlength="16"/>

                        </div>

                        <div class="text-right">
                            <button class="btn submit" name="submit">Add</button>
                        </div>
                    </form>


                    <?php
                    include '../dbconnection.php';
                    if (isset($_POST['submit'])) {
                        $uid = $_SESSION['USERID'];
                        $card = $_POST['card'];

                        $sel = mysql_query("SELECT COUNT(*) AS COUNT FROM `creditcard` WHERE `uid`='$uid'");
                        $fetch = mysql_fetch_array($sel);
                        if ($fetch['COUNT'] > 0) {
                            echo '<script>alert("Already Added")</script>';
                        } else {
                            $qry = "INSERT INTO `creditcard`(`cnumber`,`uid`)VALUES('$card','$uid')";

                            $exe = mysql_query($qry);
                            if ($qry) {

                                echo '<script>alert("Added Succesfull")</script>';
                            } else {
                                echo '<script>alert("Failed to Add")</script>';
                            }
                        }
                    }
                    ?>





                </div>

            </div>
        </div>
</section>

<section class="w3l-team-main">
    <div class="team py-5">
        <div class="container py-lg-5">

            <div class="row team-row">

                <!-- end team member -->


                <!-- end team member -->


                <!-- end team member -->
                <!-- end team member -->

                <?php
                $uid = $_SESSION['USERID'];
                $qry = mysql_query("SELECT * FROM `creditcard` WHERE `uid`='$uid'");

                if (mysql_fetch_array($qry) > 0) {
                    ?>
                    <table id = "customers">
                        <tr>
                            <th>Card Number</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        $qry = mysql_query("SELECT * FROM `creditcard` WHERE `uid`='$uid'");

                        while ($row = mysql_fetch_array($qry)) {
                            ?>


                            <tr>
                                <td><?php echo $row['cnumber'] ?></td>

                                <td></a>&nbsp;  <a href="../Action/RemoveCard.php?id=<?php echo $row['cardid'] ?>" class="ser1"><span class="fa fa-check"></span>Remove</a></td>


                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                } else {
                    ?>

                    <img src="../noData.png" width="30%" height="30%" style=" margin-left: auto; margin-right: auto;">

                    <?php
                }
                ?>

            </div>
        </div>
</section>
<!-- //contact-form -->

<!-- footer-66 -->

<?php
include '../Footer.php';
?>