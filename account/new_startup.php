   <?php
    //Starting insert Query...

    if (isset($_POST['new_proj'])) {

        $account_id = $_POST['account_id'];
        $tittle = $_POST['tittle'];
        $cat = $_POST['cat'];
        $descr = $_POST['descr'];


        $profile = $_FILES['profile'];
        $file_name = $_FILES['profile']['name'];
        $ext = strtolower(substr(strrchr($file_name, '.'), 1));
        $file_location = $_FILES['profile']['tmp_name'];
        $start_icon = $tittle . '.' . $ext;


        $doc = $_FILES['doc'];
        $file_name_doc = $_FILES['doc']['name'];
        $ext = strtolower(substr(strrchr($file_name_doc, '.'), 1));
        $file_location_doc = $_FILES['doc']['tmp_name'];
        $start_doc = $tittle . '.' . $ext;

        if (move_uploaded_file($file_location, "start_icon/" . $start_icon) && move_uploaded_file($file_location_doc, "start_icon/" . $start_doc)) {

            $sql = " INSERT INTO `startup_tbl`(`start_name`, `start_descr`, `start_category`, `start_profile`, `start_doc`, `account_id`) 
                    VALUES ('$tittle','$descr','$cat','$start_icon','$start_doc','$account_id') ";

            if ($conn->query($sql) === TRUE)

                echo '<script language="javascript">
                    alert(" New Startup Successfully Created ");
                    window.location.href = "index.php?new";
                </script>';
        } else {
            echo '<script language="javascript">
                    alert(" Something Went Wrong ");
                    window.location.href = "index.php?new";
                </script>';
        }
    }

    //Starting update Query...

    if (isset($_POST['update_proj'])) {

        $start_id = $_POST['start_id'];
        $tittle = $_POST['tittle'];
        $cat = $_POST['cat'];
        $descr = $_POST['descr'];


        $profile = $_FILES['profile'];
        $file_name = $_FILES['profile']['name'];
        $ext = strtolower(substr(strrchr($file_name, '.'), 1));
        $file_location = $_FILES['profile']['tmp_name'];
        $start_icon = $tittle . '.' . $ext;


        $doc = $_FILES['doc'];
        $file_name_doc = $_FILES['doc']['name'];
        $ext = strtolower(substr(strrchr($file_name_doc, '.'), 1));
        $file_location_doc = $_FILES['doc']['tmp_name'];
        $start_doc = $tittle . '.' . $ext;

        if (move_uploaded_file($file_location, "start_icon/" . $start_icon) && move_uploaded_file($file_location_doc, "start_icon/" . $start_doc)) {

            $sql = " UPDATE `startup_tbl` SET `start_name`='$tittle',`start_descr`='$descr',`start_category`='$cat',`start_profile`='$start_icon',`start_doc`='$start_doc' WHERE start_id='$start_id' ";

            if ($conn->query($sql) === TRUE)

                echo '<script language="javascript">
                    alert(" ' . $start_name . ' Startup Successfully Updated ");
                    window.location.href = "index.php?new&view_details";
                </script>';
        } else {
            echo '<script language="javascript">
                    alert(" Something Went Wrong ");
                    window.location.href = "index.php?new&view_details";
                </script>';
        }
    }

    ?>



   <?php

    if (isset($_GET['view_details'])) {

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
                               <h3 class="text-center title-2"><b> Update <?php echo $start_name ?></b> Project</h3>
                           </div>
                           <div id="profile_complete_message">
                           </div>
                           <hr>
                           <form id="form_validation" method="POST" action="" enctype="multipart/form-data">

                               <div class="row">
                                   <div class="col-lg-4">
                                       <div class="form-group">

                                           <img class="align-self-center  mr-3"
                                               src="start_icon/<?php echo $start_photo; ?>"
                                               alt="<?php echo $start_name ?>" id="blah" alt="Card image cap"
                                               style="height:330px" />
                                           <br><br>
                                           <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                       </div>
                                       <input id="account_id" name="start_id" type="text" class="form-control cc-cvc"
                                           value="<?php echo $start_id; ?>" style="display: none;">
                                   </div>
                                   <div class="col-lg-8">

                                       <label for="x_card_code" class="control-label mb-1">Tittle</label>
                                       <div class="input-group">
                                           <input id="tittle" name="tittle" value="<?php echo $start_name; ?>"
                                               type="text" class="form-control cc-cvc" data-val="true">
                                       </div>

                                       <label for="x_card_code" class="control-label mb-1">Category</label>
                                       <div class="input-group">
                                           <input id="cat" name="cat" value="<?php echo $start_category; ?>" type="text"
                                               class="form-control cc-cvc" v data-val="true">
                                       </div>

                                       <label for="x_card_code" class="control-label mb-1">Description</label>
                                       <div class="input-group">
                                           <textarea id="descr" name="descr" rows="5" class="form-control ">
                                                    <?php echo $start_descr; ?>
                                                </textarea>
                                       </div>

                                       <label for="x_card_code" class="control-label mb-1">Supportive Doc</label>
                                       <div class="input-group">
                                           <input id="doc" name="doc" type="file" class="form-control cc-cvc"
                                               data-val="true">
                                       </div>

                                   </div>
                               </div>
                               <br>
                               <div>
                                   <button id="payment-button" type="submit" name="update_proj"
                                       class="btn btn-lg btn-info btn-block">
                                       <i class="fa fa-file fa-lg"></i>&nbsp;
                                       <span id="payment-button-amount">Update </span>
                                       <span id="payment-button-sending" style="display:none;">Sending…</span>
                                   </button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </div>

   <?php


    } elseif (isset($_GET['read_details'])) {

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

                                       <img class="align-self-center mr-3" src="start_icon/<?php echo $start_photo; ?>"
                                           alt="<?php echo $start_name ?>" id="blah" alt="Card image cap"
                                           style="height:330px;">
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
                           <br>
                           <div>
                               <a href="index.php?new&view_details&data=<?php echo $start_id; ?>"
                                   class="btn btn-md btn-info btn-block">
                                   Update Details
                               </a>
                           </div>
                           </form>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </div>

   <?php

    } else {

    ?>

   <div class="row" id="loader_general_admin2">
       <div class="col-md-12">
           <div class="table-responsive table-responsive-data">

               <div class="col-lg-12">
                   <div class="card">
                       <div class="card-body">
                           <div class="card-title">
                               <h3 class="text-center title-2"><b><?php echo $play_name ?></b> New Project</h3>
                           </div>
                           <div id="profile_complete_message">
                           </div>
                           <hr>
                           <form id="form_validation" method="POST" action="" enctype="multipart/form-data">

                               <div class="row">
                                   <div class="col-lg-4">
                                       <div class="form-group">

                                           <img class="align-self-center  mr-3"
                                               src="start_up_profile_data/avatar-06.jpg" alt="<?php echo $username ?>"
                                               id="blah" alt="Card image cap" width="300px" height="230px">
                                           <br><br>
                                           <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                       </div>
                                       <input id="account_id" name="account_id" type="text" class="form-control cc-cvc"
                                           value="<?php echo $account_id ?>" style="display: none;">
                                   </div>
                                   <div class="col-lg-8">

                                       <label for="x_card_code" class="control-label mb-1">Tittle</label>
                                       <div class="input-group">
                                           <input id="tittle" name="tittle" type="text" class="form-control cc-cvc"
                                               data-val="true">
                                       </div>

                                       <label for="x_card_code" class="control-label mb-1">Category</label>
                                       <div class="input-group">
                                           <input id="cat" name="cat" type="text" class="form-control cc-cvc" v
                                               data-val="true">
                                       </div>

                                       <label for="x_card_code" class="control-label mb-1">Description</label>
                                       <div class="input-group">
                                           <textarea id="descr" name="descr" rows="5" class="form-control "></textarea>
                                       </div>

                                       <label for="x_card_code" class="control-label mb-1">Supportive Doc</label>
                                       <div class="input-group">
                                           <input id="doc" name="doc" type="file" class="form-control cc-cvc"
                                               data-val="true">
                                       </div>

                                   </div>
                               </div>
                               <br>
                               <div>
                                   <button id="payment-button" type="submit" name="new_proj"
                                       class="btn btn-lg btn-info btn-block">
                                       <i class="fa fa-file fa-lg"></i>&nbsp;
                                       <span id="payment-button-amount">Save</span>
                                       <span id="payment-button-sending" style="display:none;">Sending…</span>
                                   </button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </div>

   <?php
    }

    ?>

   <script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(300)
                .height(330);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
   </script>