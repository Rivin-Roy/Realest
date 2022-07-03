
<?php
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
                    <form method="POST" class="signin-form" enctype="multipart/form-data">
                        <div class="custom-select1" style="margin-bottom: 20px">
                            <select name="cat">
                                <?php
                                include '../dbconnection.php';
                                $qry1 = "select * from category";
                                $res1 = mysql_query($qry1);
                                while ($row1 = mysql_fetch_array($res1)) {
                                    echo "<option value='" . $row1['category'] . "'>" . $row1['category'] . "</option>";
                                }
                                ?>
                            </select>

                        </div>
                        <div class="input-grids">
                            <input type="text" name="pname" placeholder="Property" class="contact-input" />
                            <input type="text" name="des" placeholder="Property details" class="contact-input" />
                            <input type="text" name="dist" placeholder="District" class="contact-input" />
                            <input type="text" name="rate" placeholder="Rate" class="contact-input" />
                            <input type="text" name="area" placeholder="Built-up Area" class="contact-input" />
                            <input type="text" name="inc" placeholder="Inclusions" class="contact-input" />
                            <div class="file-upload-wrapper" data-text="Select your file!">
                                <input name="file" type="file" class="file-upload-field" value="">
                            </div>
                        </div>
                        <div>
                            <textarea name="address" placeholder="Type address here" required=""></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn submit" name="submit">Add</button>
                        </div>
                    </form>


                    <?php
                    session_start();
                    include '../dbconnection.php';
                    if (isset($_POST['submit'])) {
                        $uid = $_SESSION['USERID'];
                        $pname = $_POST['pname'];
                        $des = $_POST['des'];
                        $address = $_POST['address'];
                        $cat = $_POST['cat'];
                        $rate = $_POST['rate'];
                        $dist = $_POST['dist'];
                        $area = $_POST['area'];
                        $inc = $_POST['inc'];

                        $folder = '../images/';
                        $file = $folder . basename($_FILES['file']['name']);
                        move_uploaded_file($_FILES['file']['tmp_name'], $file);
                        $folder = 'images/';
                        $file = $folder . basename($_FILES['file']['name']);

                        $qry = "INSERT INTO `property`(uid,`cat`,`pname`,`descripton`,`paddress`,`pdist`,`rate`,`sqrft`,`bhk`,`img`)values('$uid','$cat','$pname','$des','$address','$dist','$rate','$area','$inc','$file')";

                        $exe = mysql_query($qry);
                        if ($qry) {

                            echo '<script>alert("Added Succesfull")</script>';
                        } else {
                            echo '<script>alert("Failed to Add")</script>';
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
include '../Footer.php';
?>