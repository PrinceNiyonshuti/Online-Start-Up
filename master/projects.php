<div class="container-fluid">
    <div id="bank_slip_data" style="position:fixed;z-index:500;margin-top:-2%;"></div>
    <br>

    <div id="loader_general_admin"></div>

    <div class="row" id="loader_general_admin1">
        <div class="col-md-12" id='printMe'>
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Projects List Data</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                </div>
                <div class="table-data__tool-left">
                    <button class="au-btn-filter" onclick="printDiv('printMe')"><i class="zmdi zmdi-print"></i>Print
                        Report</button>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>StartUp</th>
                            <th>Project</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php

                    $sql5 = " SELECT * FROM startup_tbl,account WHERE startup_tbl.account_id=account.id ";
                    $result5 = $conn->query($sql5);

                    $a = 1;

                    while ($row5 = $result5->fetch_assoc()) {
                        $start_id = $row5['start_id'];
                        $start_name = $row5['start_name'];
                        $play_name = $row5['display_name'];
                        $start_descr = $row5['start_descr'];
                        $start_category = $row5['start_category'];
                        $start_doc = $row5['start_doc'];

                        $id1 = "Mine" . $a;

                    ?>
                    <tbody>
                        <tr class="tr-shadow">
                            <td style="display: none;" id="<?php echo $id1; ?>"><?php echo $start_id ?></td>
                            <td><?php echo $play_name ?></td>
                            <td><?php echo $start_name ?></td>
                            <td class="desc"><?php echo $start_category ?></td>
                            <td>
                                <span class="block-email"><?php echo substr($start_descr, 0, 130);  ?>...</span>
                            </td>
                            <td>
                                <a href="index.php?view_details&read_details&data=<?php echo $start_id; ?>">
                                    View More
                                </a>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                    </tbody>
                    <?php $a++;
                    }   ?>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
    <?php include "footer.php"; ?>
</div>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>