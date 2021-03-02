   <?php
   //Starting Query...

    if(ISSET($_POST['new_proj'])){

        $account_id = $_POST['account_id'];
        $tittle = $_POST['tittle'];
        $cat = $_POST['cat'];
        $descr = $_POST['descr'];


        $profile=$_FILES['profile'];
        $file_name = $_FILES['profile']['name'];
        $ext = strtolower(substr(strrchr($file_name, '.'), 1));
        $file_location = $_FILES['profile']['tmp_name'];
        $start_icon = $tittle . '.' . $ext;


        $doc=$_FILES['doc'];
        $file_name_doc = $_FILES['doc']['name'];
        $ext = strtolower(substr(strrchr($file_name_doc, '.'), 1));
        $file_location_doc = $_FILES['doc']['tmp_name'];
        $start_doc = $tittle . '.' . $ext;
        
        if(move_uploaded_file($file_location, "start_icon/" . $start_icon) && move_uploaded_file($file_location_doc, "start_icon/" . $start_doc)  ){

            $sql=" INSERT INTO `startup_tbl`(`start_name`, `start_descr`, `start_category`, `start_profile`, `start_doc`, `account_id`) 
                    VALUES ('$tittle','$descr','$cat','$start_icon','$start_doc','$account_id') ";

            if ($conn->query($sql)===TRUE) 

                echo '<script language="javascript">
                    alert(" New Startup Successfully Created ");
                    window.location.href = "index.php?new";
                </script>';
                
            }else{
                echo '<script language="javascript">
                    alert(" Something Went Wrong ");
                    window.location.href = "index.php?new";
                </script>';
            }
    }
        
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

                                                            <img class="align-self-center  mr-3" src="start_up_profile_data/avatar-06.jpg" alt="<?php echo $username ?>" id="blah" alt="Card image cap" width="300px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                        </div>
                                                        <input id="account_id" name="account_id" type="text" class="form-control cc-cvc" value="<?php echo $account_id ?>" style="display: none;" >
                                                    </div>
                                                    <div class="col-lg-8">

                                                        <label for="x_card_code" class="control-label mb-1">Tittle</label>
                                                        <div class="input-group">
                                                            <input id="tittle" name="tittle" type="text" class="form-control cc-cvc" data-val="true">
                                                        </div>

                                                        <label for="x_card_code" class="control-label mb-1">Category</label>
                                                        <div class="input-group">
                                                            <input id="cat" name="cat" type="text" class="form-control cc-cvc" v data-val="true">
                                                        </div>

                                                        <label for="x_card_code" class="control-label mb-1">Description</label>
                                                        <div class="input-group">
                                                            <textarea  id="descr" name="descr" rows="5" class="form-control " ></textarea>
                                                        </div>

                                                        <label for="x_card_code" class="control-label mb-1">Supportive Doc</label>
                                                        <div class="input-group">
                                                            <input id="doc" name="doc" type="file" class="form-control cc-cvc"  data-val="true">
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                <div>
                                                    <button id="payment-button" type="submit" name="new_proj" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-user fa-lg"></i>&nbsp;
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
        <script>

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(200)
                            .height(230);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
                
        </script>