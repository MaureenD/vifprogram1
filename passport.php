<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Passport Global Schools",$buffer);
echo $buffer;
echo "<div id='main-content'>";
?>
        <script>
            var $ = jQuery.noConflict();
            $(document).ready(function() {
                    'use strict';             
             $('.bxslider').bxSlider();
                       });   
            $('#my-nav ul li').removeClass('active');          
            $('#btn-programs').addClass('active');
            $('#btn-programs > .sub').show();
            $('#btn-programs > .sub > ul >li').removeClass('active');
            $('#btnPassport').addClass('active');

         </script>

    <div id="passport">
        <div class="passport_bg">
            <div class="container">
                 <div class="row">
                <div class="col-md-12">
                     <h1 class="script">Passport Global Schools</h1>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      
                        <div id="passport-slider">
                            <ul class="bxslider">
                                <li>
                                    <img class="img-backer img-responsive" src="images/passport.png" />
                                </li>
                                <li>
                                   <img class="img-backer img-responsive" src="images/passport.png" />
                                </li>
                                <li>
                                   <img class="img-backer img-responsive" src="images/passport.png" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear  col-md-4 col-sm-12 col-xs-12">
                        <img class="pad20 img-responsive" src="images/passport-icon.png" />
                        <p><em>Based on the foundational components and benefits of the Global Gateway system, Passport builds teacher and leadership capacity in global education to promote rigorous, enthusiastic student learning. Passport schools are distinguished by school-wide efforts and commitment to project-based inquiry and student-led learning through globally minded leadership and staff, and sustained, meaningful global exchange to foster authentic learning.</em></p>
                         <img class="sidebar" src="images/sidebar-line.png" />
                        <a href="#passport_contact" class="btn btn-contact btn-lg">
                            <span class="arrow">}</span>CONTACT US
                         </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 schoolbus">
                        <div class="col-md-6">
                        <h2>Passport Global School Model</h2>
                        <p>A Passport Global School model positions a school leader to implement the <a href="#">Global Leader Toolkit</a> and <a href="global.php">Global Gateway</a> to build and grow a Global School.</p>
                        <ul class="plus">
                        <li>Whole-school access to Global Gateway</li>
                        <li>Principal coaching virtual sessions</li>
                        <li>Dedicated program manager support</li>
                        <li>Monthly reports on staff usage and participation</li>
                        <li>Access to principal community and toolkit</li>
                    </ul>

                        <div class="script">optional add-ons</div>
                        <span>On-site orientation</span><br>
                        <span>On-site evaluation visits</span><br>
                       </div>
                    </div>
                </div>
            </div>
         
                <div class="passport-quote">

                    <div class="col-md-12 pattern2">
                       
                        <span class="lg-quote">“</span>
                        <div class="center-text script">Our overall goal is to provide students with an outstanding education. This is the way of the future. Teaching students to have a global perspective is going to prepare them to be more successful.</div>
                        <div class="caption">— Edgecombe County Public Schools Superintendent John Farrelly, quoted in the Daily Southerner</div>
                        <span class="lg-quote">”</span>
                   
                    </div>
                </div>
           
                <div class="container">
                <div class="row">
                    <div class="col-md-4 promo">
                        <div class="pad40"> 
                            <h2>Case Study <span class="long-arrow">,</span></h2>
                            <img  src="images/passport-case.jpg" class="thumbnail">
                           
                            <p><a href="#">Learn how</a> Carolina Forest International Elementary builds global citizenry through international partnerships, exchange teachers and more »</p>
                        </div>
                    </div>
                    <div class="col-md-4 promo">
                        <div class="pad40">
                             <h2>Video <span class="long-arrow">,</span></h2>
                            <img  src="images/passport-video.jpg" class="thumbnail">
                           
                            <p>See <a href="#">global learning in action</a> at Gray’s Creek Elementary School »</p>
                        </div>
                    </div>
                    <div class="col-md-4 promo">
                        <div class="pad40">
                             <h2>Try it yourself <span class="long-arrow">,</span></h2>
                            <img  src="images/passport-try.jpg" class="thumbnail">
                           
                            <p><a href="#">Visit</a> the VIF learning center to get a glimpse into our robust PD and curriculum library »</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 blue-border"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="red-banner">
                            <span>
                            <h2>Student Achievement</h2>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-7">
                        <p>Global education expands students’ awareness of the world and prepares them for success in an increasingly interconnected global marketplace. Learn more about how Passport can make learning global in your school or district:</p>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/pdf-icon.png" />
                        <p class="caption">Global Passport Schools - An overview</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/pdf-icon.png" />
                        <p class="caption">VIF's Project-Based Inquiry approach</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/pdf-icon.png" />
                        <p class="caption">A global leader roadmap example</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="red-banner">
                            <span>
                            <h2>Get started with passport</h2>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-9">
                        <form method="post" class="form" role="form">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="address" name="address" placeholder="Address" type="text" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="city" name="city" placeholder="City, State, Zip" type="text" required />
                            </div>
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="10">
                            </textarea>
                            <br />
                            <button class="btn btn-vif pull-left" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-3">
                        <img src="images/passport-contact.jpg" class="img-responsive img-backer"  />
                    </div>

                </div>
                <div class="row">
                    <div class="bottom-pad" class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php

    echo "</div>";
    include 'footer.php';
?>