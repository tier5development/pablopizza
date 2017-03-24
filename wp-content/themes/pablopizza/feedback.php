<?php 
/*
*Template Name:Feedback Page
*/
 ?>
 <?php include 'about_header.php'; ?>
 <div class="bodypart feedback">        
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-sm-offset-1">
                    <div class="banner-graphics">
                        <img src="<?php echo get_template_directory_uri();?>/images/header-graphics.png" alt="img">
                    </div>
                    <div class="feedback-page">
                    <h2>FEEDBACK</h2>
                    <div class="content">
                        <h3>WE VALUE YOUR OPiNiON!</h3>
                        <p>This is a way for you to let us know how we are doing. What did you think of us? We love to hear the positives, but we also want to know how we can improve, so share your experience. We will do our best to reply within 48 hours. Thanks for taking the time! </p>
                        <p><span>NOTE:</span> All fields are required.</p>
                        <?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]');?>
                       <!-- <form>
                            <div class="row form-group">
                                <label class="col-md-3 col-sm-3">NAME:</label>
                                <input type="text" name="fullname" value="Robin Williams" class="col-md-9 col-sm-9">
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 col-sm-3">EMAiL:</label>
                                <input type="email" name="email" class="col-md-9 col-sm-9">
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 col-sm-3">FEEDBACK:</label>
                                <textarea class="col-md-9 col-sm-9" rows="8"></textarea> 
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 col-sm-3"></label>
                                <input type="submit" class="col-md-9 col-sm-9" name="submit-btn" value="send us your feedback">
                            </div>
                        </form>-->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-sm-offset-1">
                                <h2>THE MENU</h2>
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/appe.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/thepizza.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/salads.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/kids.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/view-full-menu.jpg" alt="img"></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include 'about_footer.php'; ?>