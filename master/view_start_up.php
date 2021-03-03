<?php

if (isset($_GET['read_details'])) {

    $data = $_GET['data'];

    $sql5 = " SELECT * FROM account WHERE id='$data'  ";
    $result5 = $conn->query($sql5);

    while ($row5 = $result5->fetch_assoc()) {
        $username_account = $row5['username'];
        $play_name = $row5['display_name'];
        $full_names = $row5['full_names'];
        $email = $row5['phone'];
        $tel = $row5['email'];
        $profile_pic = $row5['profile'];
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
                        <h3 class="text-center title-2"> Start Up Details</h3>
                    </div>
                    <div id="profile_complete_message">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <?php
                                    if (empty($profile_pic)) {
                                        $fileName = "avatar-06.jpg";
                                    } else {
                                        $fileName = "$profile_pic";
                                    }

                                    ?>
                                <img class="align-self-center  mr-3" style="height:250px;width:400p;"
                                    src="../account/start_up_profile_data/<?php echo $fileName ?>"
                                    alt="<?php echo $username_account ?>">
                            </div>
                        </div>
                        <div class="col-lg-8" style="padding-top:15px;">

                            <div class="input-group">
                                <p><strong>Userame</strong>: <?php echo $username_account ?></p>
                            </div>

                            <div class="input-group">
                                <p><strong>Display Name</strong>: <?php echo $play_name ?></p>
                            </div>

                            <div class="input-group">
                                <p><strong>Full Names</strong>: <?php echo $full_names ?></p>
                            </div>

                            <div class="input-group">
                                <p><strong>Email</strong>: <?php echo $email ?></p>
                            </div>

                            <div class="input-group">
                                <p><strong>Contact</strong>: <?php echo $tel ?></p>
                            </div>


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