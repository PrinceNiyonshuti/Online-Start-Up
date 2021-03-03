<?php
if (isset($_POST['send_notification'])) {

    $start_name_data = $_POST['start_name'];

    echo '<script language="javascript">
        alert(" ' . $start_name_data . ' Notified ");
        window.location.href = "index.php?meet_request";
    </script>';
}


if (isset($_GET['read_details'])) {

    $data = $_GET['data'];

    $sql5 = " SELECT * FROM appointment,startup_tbl WHERE appointment.startup_id=startup_tbl.start_id and appointment.appt_id='$data'  ";
    $result5 = $conn->query($sql5);

    while ($row5 = $result5->fetch_assoc()) {
        $appt_id = $row5['appt_id'];
        $inv_names = $row5['inv_names'];
        $inv_email = $row5['inv_email'];
        $inv_tel = $row5['inv_tel'];
        $sched_date = $row5['sched_date'];
        $details = $row5['details'];
        $start_name = $row5['start_name'];
        $start_id = $row5['start_id'];
    }

    $sql1 = " SELECT * FROM startup_tbl,account WHERE startup_tbl.account_id=account.id AND startup_tbl.start_id='$start_id'  ";
    $result1 = $conn->query($sql1);

    while ($row1 = $result1->fetch_assoc()) {
        $start_up_name = $row1['display_name'];
        $start_up_username = $row1['username'];
    }
?>

<style type="text/css">
.input-group p {
    padding: 5px;
    font-size: 17px;
}
</style>

<div class="container-fluid">

    <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
    <div class="row" id="loader_agenda_data">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2"> Meet Request </h3>
                    </div>
                    <div id="profile_complete_message">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="input-group">
                                    <p><strong>From</strong>: <?php echo $inv_names ?></p>
                                </div>

                                <div class="input-group">
                                    <p><strong>E-mail</strong>: <?php echo $inv_email ?></p>
                                </div>

                                <div class="input-group">
                                    <p><strong>Contact</strong>: <?php echo $inv_tel ?></p>
                                </div>

                                <div class="input-group">
                                    <p><strong>Request Date</strong>: <?php echo $sched_date ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 " style="text-align: right;">
                            <div class="form-group">

                                <div class="input-group">
                                    <p><strong>Start Up </strong>
                                        <?php echo $start_up_name ?></p>
                                </div>

                                <div class="input-group">
                                    <p><strong>Project</strong>: <?php echo $start_name ?></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12" style="padding-top:15px;">

                            <div class="input-group">
                                <p><strong>Message Content</strong>
                                    <br> <?php echo $details ?>
                                </p>
                            </div>

                            <br>
                            <form action="" method="post">
                                <div>
                                    <input id="start_name" name="start_name" type="text" class="form-control cc-cvc"
                                        value="<?php echo $start_up_name; ?>" style="display: none;">
                                    <button id="payment-button" type="submit" class="btn btn-info "
                                        name="send_notification">
                                        <i class="fa fa-bell fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Send Notification</span>
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
        ?>