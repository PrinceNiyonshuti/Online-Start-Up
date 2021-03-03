<?php

if (isset($_GET['read_details'])) {

    $data = $_GET['data'];
?>

<div class="row" id="loader_general_admin2">
    <div class="col-md-12">
        <div class="table-responsive table-responsive-data">

            <?php

                $sql5 = " SELECT * FROM startup_tbl,account WHERE startup_tbl.account_id=account.id and startup_tbl.start_id='$data'  ";
                $result5 = $conn->query($sql5);

                while ($row5 = $result5->fetch_assoc()) {
                    $start_id = $row5['start_id'];
                    $start_name = $row5['start_name'];
                    $play_name = $row5['display_name'];
                    $start_descr = $row5['start_descr'];
                    $start_category = $row5['start_category'];
                    $start_doc = $row5['start_doc'];
                    $start_profile = $row5['start_profile'];
                }

                if (empty($start_profile)) {
                    $start_photo = "avatar-06.jpg";
                } else {
                    $start_photo = "$start_profile";
                }

                ?>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2"><b> <?php echo $start_name ?></b> Project</h3>
                        </div>
                        <div id="profile_complete_message">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">

                                    <img class="align-self-center mr-3"
                                        src="../account/start_icon/<?php echo $start_photo; ?>"
                                        alt="<?php echo $start_name ?>" id="blah" alt="Card image cap"
                                        style="height:330px;width:330px;">
                                </div>
                            </div>
                            <div class="col-lg-8">

                                <label for="x_card_code" class="control-label mb-1">Tittle</label>
                                <div class="input-group">
                                    <p class="form-control cc-cvc"><?php echo $start_name; ?></p>
                                </div>

                                <label for="x_card_code" class="control-label mb-1">Category</label>
                                <div class="input-group">
                                    <p class="form-control cc-cvc"><?php echo $start_category; ?></p>
                                </div>

                                <label for="x_card_code" class="control-label mb-1">Description</label>
                                <div class="input-group">
                                    <p class="form-control cc-cvc"><?php echo $start_descr; ?></p>
                                </div>

                                <label for="x_card_code" class="control-label mb-1">Supportive Doc</label>
                                <div class="input-group">
                                    <p class="form-control cc-cvc"><?php echo $start_doc; ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

}

?>