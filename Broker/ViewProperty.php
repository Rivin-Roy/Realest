
<?php
include '../Header.php';
?>

<section class="w3l-team-main">
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h6 class="sub-title">Properties</h6>

            </div>
            <div class="row team-row">


                <?php
                session_start();
                include '../dbconnection.php';
                $uid=$_SESSION['USERID'];
                $qry = mysql_query("SELECT DISTINCT p.*,o.*,a.`status`,a.`aid` FROM `assignedproperty` a,`owner` o,`property` p,`broker` b,`login` l WHERE a.`pid`=p.`pid` AND p.`uid`=o.`uid` AND a.`oid`=o.`uid` AND a.`brid`=l.`uid` AND a.`status`='Pending' AND l.`uid`='$uid'");
                if (mysql_fetch_array($qry) > 0) {
                    $qry = mysql_query("SELECT DISTINCT p.*,o.*,a.`status`,a.`aid` FROM `assignedproperty` a,`owner` o,`property` p,`broker` b,`login` l WHERE a.`pid`=p.`pid` AND p.`uid`=o.`uid` AND a.`oid`=o.`uid` AND a.`brid`=l.`uid` AND a.`status`='Pending' AND l.`uid`='$uid'");

                    while ($row = mysql_fetch_array($qry)) {
                        ?>

                        <div class="col-lg-3 col-sm-6 team-wrap">
                            <div class="team-info text-left">
                                <div class="column position-relative">
                                    <a href="#url"><img src="../<?php echo $row['img'] ?>" alt=""
                                                        class="img-fluid team-image" /></a>
                                </div>
                                <div class="column">
                                    <h3 class="name-pos"><a href="ViewPropertyById.php?id=<?php echo $row['aid'] ?>"><?php echo $row['pname'] ?></a></h3>
                                    <p><?php echo $row['bhk'] ?></p>
                                    <p><?php echo $row['rate'] ?></p>
                                    
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