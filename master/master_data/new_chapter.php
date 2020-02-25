<?php
include "../../config/connection.php";
?>
 

 
 <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view records</button>
                                
                                <div class="table-responsive table-responsive-data">

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Chapter</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="new_chapter_content();return false;"  method="post" novalidate="novalidate">
                                           
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                    <select  id="course" id="course" class="form-control">

                                                                   <option value="">Please Select Course Name </option>
                                                                       
                                                                       <?php
                                                                          $sql5="SELECT * from course";
                                                                            $result5=$conn->query($sql5);
                                                                            while ($row5 = $result5->fetch_assoc()) {
                                                                            $course=$row5['course_id'];
                                                                            $Course_name=$row5['c_name'];
                                                                       ?>

                                                                    <option value="<?php echo $course?>" ><?php echo $Course_name?></option> 
                                                                        <?php } ?>
                                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Chapter Tittle</label>
                                                <input id="chapter_tittle" name="chapter_tittle" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Chapter Description</label>
                                                <textarea name="chapter_descr" id="chapter_descr" rows="9" placeholder="Content..." class="form-control"></textarea>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Chapter Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Chapter Video</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-file fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save New Chapter</span>
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