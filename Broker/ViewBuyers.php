
<?php
include '../Header.php';
?>
<section class="w3l-team-main">
    <div class="team py-5">
        <div class="container py-lg-5">

            <div class="row team-row">

                <!-- end team member -->


                <!-- end team member -->


                <!-- end team member -->
                <!-- end team member -->



                <?php
                session_start();
                include '../dbconnection.php';

                $qry = mysql_query("SELECT l.`lid`,b.* FROM `buyer` b,`login` l WHERE b.`uid`=l.`uid` AND l.`status`='Approved' AND l.`type`='buyer'");

                if (mysql_fetch_array($qry) > 0) {
                    ?>
                    <table id = "customers">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>House No</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Pin</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        $qry = mysql_query("SELECT l.`lid`,b.* FROM `buyer` b,`login` l WHERE b.`uid`=l.`uid` AND l.`status`='Approved' AND l.`type`='buyer'");

                        while ($row = mysql_fetch_array($qry)) {
                            ?>


                            <tr>
                                <td><?php echo $row['fname'] ?>&nbsp;<?php echo $row['lname'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['houno'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['dist'] ?></td>
                                <td><?php echo $row['pin'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['email'] ?></td><i class="fa-solid fa-circle-trash"></i>
                            <td></a>&nbsp;  <a href="../Action/SendToBuyer.php?id=<?php echo $row['uid'] ?>" class="ser1"><span class="fa fa-check"></span>Send</a></td>


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

<section class="w3l-team-main">
    <div class="team py-5">
        <div class="container py-lg-5">

            <div class="row team-row">

                

            </div>
        </div>
</section>




<?php
include '../Footer.php';
?>


