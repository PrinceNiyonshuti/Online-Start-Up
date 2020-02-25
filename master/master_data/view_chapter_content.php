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

}

?>
 
 <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view Chapters</button>
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                            

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">Read Chapter Content</div>
                                    <div class="card-body">
                                        <div class="card">
                                            <img class="card-img-top" src="../assets/images/icon/f.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h2 class="card-title mb-3"><?php echo $tittle; ?></h2>
                                                <p class="card-text"><?php echo $descr; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>