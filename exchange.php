<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Cultural Exchange Program",$buffer);
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
            $('#btnExchange').addClass('active');

         </script>

    <div id="exchange">
        <div class="exchange_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <h1 class="script">Cultural Exchange Schools</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                       
                   
                    <div id="exchange-slider">
                        <ul class="bxslider">
                            <li>
                                <img class="img-backer  img-responsive" src="images/exchange.png" />
                            </li>
                            <li>
                                <img class="img-backer  img-responsive" src="images/exchange.png" />
                            </li>
                            <li>
                                <img class="img-backer  img-responsive" src="images/exchange.png" />
                            </li>
                        </ul>
                    </div>
                </div>
               <div class="clear  col-md-4 col-sm-12 col-xs-12">
                     <img class="img-responsive pad20" src="images/exchange-icon.png" />
                    <p>exchange provides comprehensive, 'turnkey' support services to districts who want to bring the benefits of dual language programs to their communities. Join the 17 districts and 31 elementary schools that are implementing VIF's exchange immersion program to give their students remarkable opportunities to succes and compete.</p>
                     <img class="sidebar" src="images/sidebar-line.png" />
                    <a href="#exchange_contact" class="btn btn-contact btn-lg">
                        <span class="arrow">}</span>CONTACT US
                     </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>how an international teacher makes your school awesome</h2>
                </div>
            </div>
             <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <span class="lg-quote">“</span>
                        <div class="center-text script">We always find the students to take greater pride and be more thankful for their culture through understanding those outside of the U.S. Students become empowered by and grateful for the opportunities and resources that they may otherwise take for granted through the lens of cultural awareness and global understanding.</div>
                        <div class="caption">— Kensington Elementary School Principal Rachel Clarke, 2013 GEA interview</div>
                        <span class="lg-quote">”</span>
                    </div>
                    <div class="col-md-5 col-sm-5 hidden-xs">
                        <img src="images/exchange-globe.png" class="img-responsive"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 blue-border"></div>
                </div>
               
            
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="pad40"> 
                                <h2>Our Process <span class="long-arrow">,</span></h2>
                                <img  src="images/exchange-process.jpg" class="thumbnail">
                               
                                <p><a href="#">Learn how</a> VIF partners with state departments of education to recruit and retain the best international teachers »</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="pad40">
                                 <h2>Video <span class="long-arrow">,</span></h2>
                                <img  src="images/exchange-video.jpg" class="thumbnail">
                               
                                <p><a href="#">Get a glimpse</a> into the impact a VIF teacher brings to a U.S. school — for students, peers and communities »</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="pad40">
                                 <h2>Real Results <span class="long-arrow">,</span></h2>
                                <img  src="images/exchange-results.jpg" class="thumbnail">
                               
                                <p>An <a href="#">exhaustive statewide study</a>  proved VIF International Education teachers’ elementary students are top-achieving students »</p>
                            </div>
                        </div>
                     </div>
                <div class="row">
                    <div class="col-md-12 blue-border"></div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <a name="exchange_contact"><h6 class="anchor"></h6></a>
                   <div class="red-banner-long hidden-sm hidden-xs">
                        <span>
                        <h2>contact us to enrich students' learning</h2>
                        </span>
                    </div>
                    <div class="red-banner hidden-lg hidden-md">
                        <span>
                        <h2>contact us to enrich students' learning</h2>
                        </span>
                    </div>
                </div>
            </div>
       
            <div class="row">
                 <div class="col-md-8 col-sm-6 col-xs-12">
                    <form method="post" class="form" role="form">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required  />
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
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="app-requirements.php"><img src="images/exchange-contact.png" class="img-responsive img-backer app-img" /></a>
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
</div>
 <?php

    echo "</div>";
    include 'footer.php';
?>