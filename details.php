<?php
   
   $data = $_GET['data'];

   $sql5="SELECT * from startup_tbl where start_id='$data' ";
   $result5=$conn->query($sql5);


   while ($row5 = $result5->fetch_assoc()) {
      $start_id=$row5['start_id'];
      $account_id=$row5['account_id'];
      $start_name=$row5['start_name'];
      $start_descr=$row5['start_descr'];
      $start_cat =$row5['start_category'];
      $start_profile=$row5['start_profile'];
   }

   $sql1="SELECT * from account where id='$account_id' ";
   $result1=$conn->query($sql1);

   while ($row1 = $result1->fetch_assoc()) {
      $account_id=$row1['id'];
      $full_name=$row1['full_names'];
      $profile=$row1['profile'];
   }
?>

<?php
   //Starting Query...

   if(ISSET($_POST['new_appointment'])){

         $start_id = $_POST['start_id'];
         $inv_name = $_POST['inv_name'];
         $email = $_POST['email'];
         $tel = $_POST['tel'];
         $appt_time = $_POST['appt_time'];
         $appt_date = $_POST['appt_date'];
         $det = $_POST['det'];

      $sql=" INSERT INTO `appointment`(`inv_names`, `inv_email`, `inv_tel`, `startup_id`, `sched_date`, `details`) 
              VALUES ('$inv_name','$email','$tel','$start_id','$appt_date $appt_time','$det') ";

      if ($conn->query($sql)===TRUE){ 

          echo '<script language="javascript">
              alert("  Successfully Booked Appointment ");
              window.location.href = "index.php?detail&data='.$start_id.' ";
          </script>';
          
      }else{
          echo '<script language="javascript">
              alert(" Something Went Wrong ");
              window.location.href = "index.php?detail&data='.$start_id.' ";
          </script>';
      }

    }
   
        
?>


    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3><?php echo $start_name; ?></h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--/ bradcam_area  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="account/start_icon/<?php echo $start_profile ?>" style="height:500px;width:700px;" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>
                        <?php echo $start_name; ?> 
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $full_name; ?></a></li>
                        <li><a href="#"><i class="fa fa-list"></i> <?php echo $start_cat; ?> </a></li>
                     </ul>
                     <p class="excert">
                        <?php echo $start_descr; ?>
                     </p>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>

               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="account/start_up_profile_data/<?php echo $profile; ?>" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?php echo $full_name; ?></h4>
                        </a>
                        <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                           our dominion twon Second divided from</p>
                     </div>
                  </div>
               </div>

               <div class="comment-form">
                  <h4>Book Appointment</h4>
                  <form class="form-contact comment_form" action="index.php?detail" method="POST">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="det" id="det" cols="30" rows="9"
                                 placeholder="Give details "></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="start_id" id="start_id" type="hidden" value="<?php echo $start_id; ?>" >
                              <input class="form-control" name="inv_name" id="inv_name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>

                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="tel" id="tel" type="number" placeholder="Phone Number">
                           </div>
                        </div>

                        <div class="col-sm-3">
                           <div class="form-group">
                              <input class="form-control" name="appt_time" id="appt_time" type="time" placeholder="Email">
                           </div>
                        </div>

                        <div class="col-sm-3">
                           <div class="form-group">
                              <input class="form-control" name="appt_date" id="appt_date" type="date" >
                           </div>
                        </div>

                     </div>
                     <div class="form-group">
                        <button type="submit" name="new_appointment" class="button button-contactForm btn_1 boxed-btn">Book Appointment</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>

                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>Resaurant food</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Product</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Inspiration</p>
                              <p>(21)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Health Care</p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>

                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Startup</h3>

                     <?php

                       $sql5="SELECT * from startup_tbl LIMIT 4 ";
                       $result5=$conn->query($sql5);

                       while ($row5 = $result5->fetch_assoc()) {
                           $start_id=$row5['start_id'];

                     ?>

                     <div class="media post_item">
                        <img src="account/start_icon/<?php echo $row5['start_profile']; ?>" style="width: 80px; height: 80px;" alt="post">
                        <div class="media-body">
                           <a href="index.php?detail&data=<?php echo $row5['start_id']; ?>">
                              <h3> <?php echo $row5['start_name']; ?> </h3>
                           </a>
                           <p><?php echo $row5['created_date']; ?></p>
                        </div>
                     </div>

                     <?php
                        }
                     ?>

                  </aside>
                  
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

    