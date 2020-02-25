<?php
$search_data=$_POST['valueToSearch'];

?>
<div class="container-fluid">
    <div id="bank_slip_data" style="position:fixed;z-index:500;margin-top:-2%;"></div>
        <br>
                        
        <div id="loader_general_admin"></div>

        <div class="row" id="loader_general_admin1">
            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Search Data Results </h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Username</th>
                                                <th>Course</th>
                                                <th>PaymentID</th>
                                            </tr>
                                        </thead>
                                            <?php

                                                $sql5="SELECT student.student_id,student.username,student.course,course.c_name,student.Payment_id,payment.payment_id 
                                                    FROM student,payment,course
                                                    where student.`Payment_id` = payment.`payment_id` and  
                                                          student.`course` = course.`course_id` 
                                                          AND CONCAT(student.student_id,student.username, student.Payment_id) LIKE '%".$search_data."%'";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $StID=$row5['student_id'];
                                                $user=$row5['username'];
                                                $course=$row5['c_name'];
                                                $payment=$row5['Payment_id'];

                                                $id1="Mine".$a;

                                                ?>  
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td style="display: none;" id="<?php echo $id1; ?>"><?php echo $StID ?></td>
                                                <td><?php echo $user ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $course ?></span>
                                                </td>
                                                <td class="desc"><?php echo $payment ?></td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        </tbody>
                                        <?php $a++; }   ?>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>                                                               
        </div>
        <?php include "footer.php"; ?>
</div>