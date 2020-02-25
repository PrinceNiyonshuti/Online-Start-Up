                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Courses List</h3>
                                <div class="table-data__tool">
                                    
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small" id="add_new_chapter" >
                                            <i class="zmdi zmdi-plus"></i>New Course Data</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>Course Title</th>
                                                <th>Course Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql5="SELECT * from content";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $chap_id=$row5['content_id'];
                                                $tittle=$row5['content_tittle'];
                                                $descr=$row5['content_descr'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>"><?php echo $chap_id ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="../img/bg-masthead.jpg" alt="" />
                                                </td>
                                                <td><?php echo $tittle ?></td>
                                                <td><?php echo $descr ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Chapter" onclick="view_chapter('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit Chapter" onclick="update_chapter('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete Chapter" onclick="delete_chapter_data('<?php echo $id1 ?>');" >
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        
                                                        
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                        <?php $a++; }  ?>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <?php include "footer.php"; ?>
                    </div>