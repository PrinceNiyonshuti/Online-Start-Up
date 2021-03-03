<div class="container-fluid">
    <div id="bank_slip_data" style="position:fixed;z-index:500;margin-top:-2%;"></div>
    <br>

    <div id="loader_general_admin"></div>

    <div class="row" id="loader_general_admin1">
        <div class="col-md-12" id='printMe'>
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Meet Request </h3>
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
                            <th>Project Name</th>
                            <th>From</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date-Time</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php

                    $sql5 = " SELECT * FROM appointment,startup_tbl WHERE appointment.startup_id=startup_tbl.start_id ";
                    $result5 = $conn->query($sql5);

                    $a = 1;

                    while ($row5 = $result5->fetch_assoc()) {
                        $appt_id = $row5['appt_id'];
                        $inv_names = $row5['inv_names'];
                        $inv_email = $row5['inv_email'];
                        $inv_tel = $row5['inv_tel'];
                        $sched_date = $row5['sched_date'];
                        $details = $row5['details'];
                        $start_name = $row5['start_name'];

                        $id1 = "Mine" . $a;

                    ?>
                    <tbody>
                        <tr class="tr-shadow">
                            <td style="display: none;" id="<?php echo $id1; ?>"><?php echo $appt_id ?></td>
                            <td class="desc"><?php echo $start_name ?></td>
                            <td><?php echo $inv_names ?></td>
                            <td><?php echo $inv_email ?></td>
                            <td><?php echo $inv_tel ?></td>
                            <td class="desc"><?php echo $sched_date ?></td>
                            <td>
                                <span class="block-email"><?php echo substr($details, 0, 100);  ?>...</span>
                            </td>
                            <td>
                                <a href="index.php?read_request&read_details&data=<?php echo $appt_id; ?>">
                                    Read More
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