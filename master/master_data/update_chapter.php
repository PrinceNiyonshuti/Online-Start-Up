<?php
include "../../config/connection.php";
?>
 
<?php
$chap_id=$_POST['chap_id'];

$sql="SELECT * from content where content_id='$chap_id'";
$result=$conn->query($sql);

$a=1;

while ($row = $result->fetch_assoc()) {
    $tittle=$row['content_tittle'];
    $descr=$row['content_descr'];

  $id1="Mine".$a;
  $id2="Mine1".$a;

}

?>
 
                        <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view records</button>
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                            

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">Update <strong><?php echo $tittle; ?> Chapter</strong></div>
                                    <div class="card-body">
                                        <form  action="#/" onsubmit="update_chapter_data();return false;" method="post" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input id="chap_id" name="chap_id"  value="<?php echo $chap_id; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Chapter Tittle</label>
                                                <input id="chapter_tittle" name="chapter_tittle" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $tittle; ?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Chapter Description</label>
                                                <textarea name="chapter_descr" id="chapter_descr" rows="10" class="form-control"><?php echo $descr; ?></textarea>
                                            </div>

                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-file fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update Chapter Data</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>