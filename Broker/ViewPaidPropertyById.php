
<?php
include '../Header.php';
?>

<section class="w3l-content-with-photo-1">
    <div class="ab-content-6-mian py-5">
        <div class="container py-lg-5">

            <?php
            session_start();
            include '../dbconnection.php';
            $id = $_GET['id'];
            $qry = mysql_query("SELECT DISTINCT p.*,b.*,a.`status`,a.`aid` FROM `assignedproperty` a,`buyer` b,`property` p,`login` l WHERE a.`brid`=l.`uid` AND a.`buid`=b.`uid` AND a.`pid`=p.`pid` AND a.`payment`='Payed' AND a.`aid`='$id'");
            if (mysql_fetch_array($qry) > 0) {
                $qry = mysql_query("SELECT DISTINCT p.*,b.*,a.`status`,a.`aid` FROM `assignedproperty` a,`buyer` b,`property` p,`login` l WHERE a.`brid`=l.`uid` AND a.`buid`=b.`uid` AND a.`pid`=p.`pid` AND a.`payment`='Payed' AND a.`aid`='$id'");

                while ($row = mysql_fetch_array($qry)) {
                    $_SESSION["AID"] = $row["aid"];
                    ?>

                    <div class="welcome-grids row">
                        <div class="col-lg-6 welcome-image">
                            <img src="../<?php echo $row['img'] ?>" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-4">
                            <div class="title-content text-left">
                                <h6 class="sub-title"><?php echo $row['cat'] ?></h6>
                                <h3 class="hny-title"><?php echo $row['pname'] ?></h3>
                            </div>
                            <p class="my-3"><?php echo $row['descripton'] ?></p>

                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                            <p>Location : <?php echo $row['paddress'] ?></p>
                            <p><?php echo $row['pdist'] ?></p>

                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                            <p>Rate : <?php echo $row['rate'] ?></p>
                            <p>Built-up Area : <?php echo $row['sqrft'] ?></p>
                            <p>Inclusions : <?php echo $row['bhk'] ?></p>



                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                            <div class="title-content text-center">
                                <h6 class="sub-title">Buyer Details</h6>

                            </div>
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                            <div class="title-content text-left">
                                <h6 class="sub-title"><?php echo $row['fname'] ?> &nbsp;<?php echo $row['lname'] ?></h6>
                                <p>Address : <?php echo $row['address'] ?></p>
                                <div class="row mt-lg-5 mt-4">
                                    <div class="col-lg-4 col-md-6 sub-quote mt-4">
                                        <div class="quote-sec-info">
                                            <div class="appyl-sub-icon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="appyl-sub-icon-info">
                                                <h5>Phone</h5>
                                                <p><a href="<?php echo $row['phone'] ?>"><?php echo $row['phone'] ?></a></p>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-6 sub-quote mt-4">
                                        <div class="quote-sec-info">
                                            <div class="appyl-sub-icon">
                                                <span class="fa fa-envelope-o"></span>
                                            </div>
                                            <div class="appyl-sub-icon-info">
                                                <h5>Email</h5>
                                                <p><a href="<?php echo $row['email'] ?>" class="mail"> <?php echo $row['email'] ?></a></p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                <div class="read">
                                    <a class="btn mt-4" href="../Action/SendToOwner.php?id=<?php echo $row['aid'] ?>">Send Details To Owner</a>
                                   
                                </div>
                            </div>




                        </div>


                    </div>


                    <?php
                }
            } else {
                ?>
            </div>
        </div>
        <img src="../noData.png" height="20%" width="20%" style=" margin-left: 500px; margin-right: auto;" />

        <?php
    }
    ?>


</div>
</div>
</section>

<?php
include '../Footer.php';
?>