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
                                    <div class="card-header">New Course</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="new_course();return false;"  method="post" novalidate="novalidate">
                                           

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Course Name</label>
                                                <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Course Amount</label>
                                                <input id="amount" name="amount" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-danger btn-block">
                                                    <i class="fa fa-plus-square fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save New Course Data</span>
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