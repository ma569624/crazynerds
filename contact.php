<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <?php include 'header2.php' ?>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area about-us-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title text-light">Contact us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="item text-light"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-light">/ Contact us </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->











    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.8907400881203!2d-74.00424698459483!3d40.72042167933095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a3607d191%3A0x2077da115b794fbf!2s58%20Howard%20St%20%2314%2C%20New%20York%2C%20NY%2010013%2C%20USA!5e0!3m2!1sen!2sin!4v1663310857433!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">

                                <h3 class="heading " style="padding-bottom: 20px;">Get In Touch </h3>

                                <form action="mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="name" id="name" type="text" placeholder="Name *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="email" id="email" type="email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="phone" id="phone" type="text" placeholder="Phone Number*" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="subject" id="subject" type="text" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="message" id="message" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <a class="ht-btn ht-btn-md" id="submit" type="submit">Send message</a>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--===========  feature-icon-wrapper  Start =============-->
            <div class="feature-icon-wrapper section-space--ptb_100 border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-list__three">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="grid-item animate">
                                            <div class="ht-box-icon style-03">
                                                <div class="icon-box-wrap">
                                                    <div class="content-header">
                                                        <div class="icon">
                                                            <i class="fal fa-map"></i>
                                                        </div>
                                                        <h5 class="heading">
                                                            Location
                                                        </h5>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">58 Howard St, New York, NY 10013, USA.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="grid-item animate">
                                            <div class="ht-box-icon style-03">
                                                <div class="icon-box-wrap">
                                                    <div class="content-header">
                                                        <div class="icon">
                                                            <i class="fal fa-phone fa-rotate-90"></i>
                                                        </div>
                                                        <h5 class="heading">
                                                            Telephone
                                                        </h5>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">+1 (800) 815-3739</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="grid-item animate">
                                            <div class="ht-box-icon style-03">
                                                <div class="icon-box-wrap">
                                                    <div class="content-header">
                                                        <div class="icon">
                                                            <i class="fal fa-envelope"></i>
                                                        </div>
                                                        <h5 class="heading">
                                                            Mail Address
                                                        </h5>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">Info@crazynerds247.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-icon-wrapper  End =============-->





        </div>



        <?php include 'footer.php' ?>
    </div>

    <?php include 'script.php' ?>

</body>

</html>