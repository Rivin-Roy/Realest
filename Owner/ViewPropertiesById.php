
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
            $qry = mysql_query("SELECT * FROM `property` WHERE `pid`='$id'");
            if (mysql_fetch_array($qry) > 0) {
                $qry = mysql_query("SELECT * FROM `property` WHERE `pid`='$id'");

                while ($row = mysql_fetch_array($qry)) {
                    $_SESSION["PID"] = $row["pid"];
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

                          

                            <div class="read">
                                <a class="btn mt-4" href="Viewbrokers.php">Send Details To Broker</a>
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