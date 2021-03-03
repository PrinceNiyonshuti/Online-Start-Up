<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Top Projects </h2>
            <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                <div class="au-card-inner">
                    <div class="table-responsive">
                        <table class="table table-top-countries">
                            <tbody>
                                <?php

                                $sql5 = "SELECT * from startup_tbl where account_id='$account_id' LIMIT 5 ";
                                $result5 = $conn->query($sql5);


                                while ($row5 = $result5->fetch_assoc()) {
                                    $start_id = $row5['start_id'];

                                ?>
                                <tr>
                                    <td><b><?php echo $row5['start_name']; ?></b></td>
                                    <td><?php echo $row5['start_category']; ?></td>
                                    <td class="text-right">
                                        <a href="index.php?new&read_details&data=<?php echo $row5['start_id']; ?>"
                                            style="color:white;">
                                            View Details
                                        </a>

                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../master/footer.php"; ?>

</div>