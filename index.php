<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Home",$buffer);
echo $buffer;
echo "<div id='main-content'>";
?>

       <script>
            var $ = jQuery.noConflict();
            $(document).ready(function() {
                    'use strict';             
           //  $('.bxslider-home').bxSlider({pager:false});
                       });  
             $('.sub').hide();
            $('#my-nav ul li').removeClass('active');           
            $('#btn-home').addClass('active');
            //temporarily disable the slider. Remove this line to activate
           // $('.bx-controls-directional').hide();

         </script>

<div class="container" id="home">
     <div class="row">
            <div class="col-md-12">
                  <h1 class="script">VIF International Education</h1>
                   
            </div>  
        </div>
 </div>       
            <!--   uncomment the below section when the slider is ready -->

                <!-- <div id="home-row">       
                       <div class="col-md-10 col-md-offset-1">
                            <div id="home-slider" >
                                <ul class="bxslider-home">
                                    <li>
                                       <a href="app-requirements.php">
                                        <div class="slider-text">
                                            <h2>We partner with districts and schools to prepare global-ready teachers and students. </h2> 
                                            <span>learn more <i class="fa fa-angle-right"></i></span>
                                        </div>
                                        <div class="continent"> 
                                            <img src="images/samerica-home.png" width="522" height="777"/>
                                        </div>
                                        <div class="kids">
                                            <p>Are you a teacher?<br> Apply to teach in the U.S.A. <i class="fa fa-angle-right"></i>
                                            </p>
                                            <img src="images/kids-home.jpg" class="img-backer tilt"/>
                                        </div>
                                       </a>
                                    </li>
                                    <li>
                                        &nbsp;
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>-->
            <div id="home-row" class="hidden-xs" style="height:500px;">            
            <a href="app-requirements.php">
                <div class="col-md-3 slider-text">
                    <h2>We partner with districts and schools to prepare global-ready teachers and students. </h2> 
                    <span>learn more <i class="fa fa-angle-right"></i></span>
                </div>
                <div class="col-md-9 continent"> 
                    <img src="images/samerica-home.png" width="522" height="777"/>
                </div>
                <div class="kids">
                    <p>Are you a teacher?<br> Apply to teach in the U.S.A. <i class="fa fa-angle-right"></i>
                    </p>
                    <img src="images/kids-home.jpg" class="img-backer tilt"/>
                </div>
            </a>
            </div>
            <!-- For small mobile screens -->
            <div id="home-row" class="hidden-lg hidden-md hidden-sm">            
            <a href="app-requirements.php">
                    <img src="images/mobile-home.jpg" class="img-responsive"/>
            </a>
            </div>

            <div class="container">

          <div class="row center-block">   
                <h2 class="script center">Our programs support global learning for all.</h2>
                 <div class="col-md-12 blue-border"></div>
                
                <div class="col-md-4 col-sm-6 col-xs-12 "><a href="passport.php"><img src="images/passport.jpg" class="thumbnail img-responsive" /></a>
                    <p>A school-wide model to cultivate global education through project-based inquiry and student-led learning. <a href="passport.php">Learn more »</a></p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a href="splash.php"><img src="images/splash.jpg" class="thumbnail img-responsive" /></a>
                    <p>Spanish and Mandarin dual language immersion led by highly qualified native language speakers.  <a href="splash.php">Learn more »</a></p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a href="exchange.php"><img src="images/exchange.jpg" class="thumbnail img-responsive" /></a>
                    <p>Authentic cultural learning delivered by the best international teachers, hand-selected from around the world. <a href="exchange.php">Learn more »</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="global.php"><img src="images/global-gateway.jpg" class="thumbnail img-responsive" /></a>
                    <p>An integrated system for teacher professional development, curricular resources and a social learning community for global educators. <a href="global.php">Learn more »</a></p>
                </div>
                 <div class="col-md-12 blue-border"></div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="red-banner">
                            <span>
                            <h2>Ready to go Global?</h2>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-8 col-sm-6 col-xs-12">
                  
                        <form method="post" class="form" action="index.php">
                          

                             <div class="form-group">
                                <input class="form-control" name="name" placeholder="First and Last Name" type="text" required>
                            </div>      
                            <div class="form-group">
                                 <select class="form-control" name="i_am">
                                    <option selected>I am a...</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="administrator">Administrator</option>
                                    <option value="parent">Parent</option>
                                    <option value="other">Other</option>
                                  </select>
                            </div>
                                    
                            <div class="form-group">
                                <input  class="form-control" name="email" type="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                                    
                            <input id="submit" class="btn btn-vif pull-left" name="submit" type="submit" value="Submit">
        
                        
                        </form>

                    </div>
                     <div class="col-md-4 col-sm-6 hidden-xs">
                        <img src="images/home-contact.jpg" class="img-backer img-responsive" style="max-width:350px;"/>
                    </div>
                </div>
                 <div class="row">
                <div class="bottom-pad" class="col-md-12">
                </div>
            </div>
   
            </div>



<?php
    echo "</div>";
    include 'footer.php';
?>