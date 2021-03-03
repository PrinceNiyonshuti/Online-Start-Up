    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Get investment and
                                keep growing</h3>
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                <p style="color: #dadada; font-size: 18px;font-weight: 500;"> We know you have great
                                    plans for your startup and we want to help you make them a reality.<br>
                                    <span style="font-weight: bold;">We invest in your project.</span>
                                </p>
                                <a href="#" class="boxed-btn3">Why join Startup</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div class="info text-center">
                                <h4>Show yourself. Get funded!</h4>
                                <p>We provide online instant cash loans with quick</p>
                            </div>
                            <div class="submit_btn">
                                <br>
                                <a href="register.php" class="boxed-btn3" style="width:100%;">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Grow like the best ones.
                            <strong>Get quality funding.</strong></h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Get the funds you need to
                            carry out your business plans. We will help you grow your project!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                $sql5 = "SELECT * from startup_tbl LIMIT 6 ";
                $result5 = $conn->query($sql5);


                while ($row5 = $result5->fetch_assoc()) {
                    $start_id = $row5['start_id'];
                    $start_profile = $row5['start_profile'];

                ?>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <?php
                                if (empty($start_profile)) {
                                    $fileName = "avatar-06.jpg";
                                } else {
                                    $fileName = "$start_profile";
                                }

                                ?>
                            <img class="card-img rounded-0" style="height:350px;"
                                src="account/start_icon/<?php echo $fileName; ?>"
                                alt="<?php echo $row5['start_name']; ?>">
                            <a href="index.php?detail&data=<?php echo $row5['start_id']; ?>" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="index.php?detail&data=<?php echo $row5['start_id']; ?>">
                                <h2><?php echo substr($row5['start_name'], 0, 20); ?>...</h2>
                                <ul class="blog-info-link">
                                    <li><a href="index.php?detail&data=<?php echo $row5['start_id']; ?> "> Invest in
                                            <?php echo substr($row5['start_name'], 0, 30); ?>...</a></li>
                                </ul>
                            </a>
                            <p> <i class="fa fa-list"></i> <?php echo $row5['start_category']; ?> </p>
                            <hr>
                        </div>
                    </article>
                </div>
                <?php
                }
                ?>

                <div class="col-lg-12">
                    <center>
                        <p>These are the latest opportunities launched in Startupxplore. But there are many more!</p>
                        <a href="index.php?start_up" class="boxed-btn3">See all Start Up Projects launched</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end  -->

    <!-- benefite -->

    <div class="works_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">

                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">What do you get by
                            <strong>registering on Startupxplore?</strong></h3>
                        <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <span style="font-size: 45px;text-align: center;">
                            <i class="fa fa-eye"></i>
                        </span>
                        <h3>Visibilty</h3>
                        <p>Get potential investors and media to know you. They can find you by sector, location or
                            stage.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <span style="font-size: 40px;text-align: center;">
                            <i class="fa fa-file"></i>
                        </span>
                        <h3>Transparency</h3>
                        <p>Find out what happens in the entrepreneurial ecosystem. Our mission is to bring transparency
                            to the sector.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <span style="font-size: 45px;text-align: center;">
                            <i class="fa fa-wifi"></i>
                        </span>
                        <h3>Networking</h3>
                        <p>Find suppliers, accelerators and coworkings near you. Meet investors who will bring you their
                            vision.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about_area_start  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about_img wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="img/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about_info pl-68">
                        <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <h3>Gain visibility.</h3>
                            <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">Join the largest startup
                            community! 17,254 companies are already inside.</p>
                        <div class="about_list">
                            <ul>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                    <strong>Startups</strong>
                                </li>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                    <strong>Investor</strong>
                                </li>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                    <strong>Succesfully Startups</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                            <a class="boxed-btn3" href="apply.html">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end  -->



    <div class="accordion_area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="faq_ask pl-68">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <strong>Finance your company</strong> through Startupxplore.
                        </h3>
                        <p>In addition to being a great community, Startupxplore is premium investment platform where
                            high potential startups can start their round. The opportunities that Startupxplore
                            publishes (and where it spends) are operations where a professional investor with experience
                            and proven record of investment in startups has already confirmed his participation and
                            invests his money.</p>

                        <div class="button">
                            <div class="row">
                                <div class="icon col-md-3 col-sm-3 col-xs-3">
                                    <img src="/static/P76f3ehuMWDvtU9HOMt3WbtWAbqbvO4GD1ob1HguALh.png">
                                </div>

                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4>Better conditions</h4>

                                    <p>Access to venture capital size rounds, but with the terms and conditions of a
                                        round with business angels.</p>
                                </div>
                            </div>
                        </div>

                        <div class="button">
                            <div class="row">
                                <div class="icon col-md-3 col-sm-3 col-xs-3">
                                    <img src="/static/8QxPIouNSlS9ED26ry1EnLmoiMfxDgX3S37GWGwRYXF.png">
                                </div>

                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4>We walk the way with you</h4>

                                    <p>We help you explain your business and prepare the documentation for the investor.
                                        We work with you to make your business successful.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>