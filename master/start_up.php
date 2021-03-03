<div class="container-fluid">
    <div id="bank_slip_data" style="position:fixed;z-index:500;margin-top:-2%;"></div>
    <br>

    <div id="loader_general_admin"></div>

    <div class="row" id="loader_general_admin1">
        <div class="col-md-12" id='printMe'>
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Start Up Profiles </h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>projects</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php

                    $sql5 = " SELECT * FROM account ";
                    $result5 = $conn->query($sql5);

                    $a = 1;

                    while ($row5 = $result5->fetch_assoc()) {
                        $account_id = $row5['id'];
                        $display_name = $row5['display_name'];
                        $full_names = $row5['full_names'];
                        $phone = $row5['phone'];
                        $email = $row5['email'];
                        $start_profile = $row5['profile'];

                        $id1 = "Mine" . $a;

                    ?>
                    <tbody>
                        <tr class="tr-shadow">
                            <td style="display: none;" id="<?php echo $id1; ?>"><?php echo $account_id ?></td>
                            <td>
                                <?php
                                    if (empty($start_profile)) {
                                        $fileName = "avatar-06.jpg";
                                    } else {
                                        $fileName = "$start_profile";
                                    }

                                    ?>
                                <img class="align-self-center mr-3" style="height:100px;width:120px;"
                                    src="../account/start_up_profile_data/<?php echo $fileName ?>"
                                    alt="<?php echo $display_name ?>">
                            </td>
                            <td class="desc"><?php echo $display_name ?></td>
                            <td><?php echo $full_names ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $phone ?></td>
                            <td class="desc">4</td>
                            <td>
                                <a href="index.php?view_start_up&read_details&data=<?php echo $account_id; ?>">
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