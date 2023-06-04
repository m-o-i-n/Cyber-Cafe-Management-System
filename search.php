<?php session_start(); ?>
<?php
require('connection.php');

$page = "search";

require_once("header.php");
?>

<main>
    <form name="search" method="post" style="padding-top: 20px">
        <div class="row">
            <div class="col-12">
                <div class="card-box">


                    <div class="form-group row">
                        <label class="col-4 col-form-label" for="example-email" style="padding-left: 50px"><strong>Search by Username or Entry ID</strong></label>
                        <div class="col-6">
                            <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
                        </div>
                    </div>

                    <div class="card-footer">
                        <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="search" id="submit">
                                <i class="fa fa-dot-circle-o"></i> Search
                            </button></p>

                    </div>
                </div>
    </form>
    <?php
    if (isset($_POST['search'])) {

        $sdata = $_POST['searchdata'];
    ?>
        <h4 align="center">Result against "<?php echo $sdata; ?>" keyword </h4>


        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <tr>
                        <th>S.NO</th>

                        <th>Entry ID</th>
                        <th>Full Name</th>
                        <th>Action</th>
                    </tr>
                    </tr>
                </thead>
                <?php
                $ret = mysqli_query($link, "select *from tblusers where EntryID like '%$sdata%' || UserName like  '%$sdata%' ");
                $num = mysqli_num_rows($ret);
                if ($num > 0) {
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($ret)) {
                ?>

                        <tr>
                            <td><?php echo $cnt; ?></td>
                            $cid=$row['ID'];
                            <td><?php echo $row['EntryID']; ?></td>
                            <td><?php echo $row['UserName']; ?></td>
                            <td><a href="userdetails.php?id='$cid'">View Details</a></td>
                        </tr>
                    <?php
                        $cnt = $cnt + 1;
                    }
                } else { ?>
                    <tr>
                        <td colspan="8"> No record found against this search</td>

                    </tr>

            <?php }
            } ?>
            </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>

</main>
<?php
require_once("footer.php");
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    })
</script>