<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Splash Language Immersion",$buffer);
echo $buffer;
echo "<div id='main-content'>";
?>
        <script>
            var $ = jQuery.noConflict();
            $(document).ready(function() {
                    'use strict';             
             $('.bxslider').bxSlider();
                       });   
             $('.sub').hide();
             $('#my-nav ul li').removeClass('active');          
            $('#btn-programs').addClass('active');
            $('#btn-programs > .sub').show();
            $('#btn-programs > .sub > ul >li').removeClass('active');
            $('#btnSplash').addClass('active');
         </script>
    
    <div id="splash">
        <div class="splash_bg">
            <div class="container">
                 <div class="row">
                <div class="col-md-12">
                     <h1 class="script">Splash Language Immersion</h1>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                          
                        <div id="splash-slider">
                            <ul class="bxslider">
                                <li>
                                    <img class="img-backer img-responsive" src="images/splash.png" />
                                </li>
                                <li>
                                    <img class="img-backer img-responsive" src="images/splash.png" />
                                </li>
                                <li>
                                     <img class="img-backer img-responsive" src="images/splash.png" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear  col-md-4 col-sm-12 col-xs-12">
                        <img class="img-responsive pad20" src="images/splash/splash-header.png" />
                        <p><em>Built on more than 20 years of dual language experience, Splash provides a comprehensive, turnkey framework for schools and districts to develop and maintain consistent, high-quality K-8 world language programs. VIF supports language immersion teachers with tools to promote academic achievement through enrichment rather than remediation, which enables students to excel in their core studies while becoming bilingual and culturally aware.</em></p>
                         <img class="sidebar" src="images/sidebar-line.png" />
                        <a href="#splash_contact" class="btn btn-contact btn-lg">
                            <span class="arrow">}</span>CONTACT US
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h2>The bilingual Brain</h2>
                        <p>Splash language immersion programs provide a unique and powerful opportunity to strengthen children’s highest cognitive brain potentials through deliberate literacy development in two languages and authentic exposure to rich language experiences.</p>
                    </div>
                </div>
                <!-- brain row -->
                <div class="row">
                    <div class="col-md-6">
                        <span class="lg-quote">“</span>
                        <div class="center-text script">When we're talking about a global economy, how better to prepare our kids than with the language to be able to communicate with other folks around the world?</div>
                        <div class="caption">— Rockingham County, N.C.
                        <br>School District Superintendent Rodney Shotwell</div>
                        <span class="lg-quote">”</span>
                    </div>
                    <div class="brain col-md-6 pull-right">
                        <div id="brain-instructions">Click the gears to read more about the key brain functions where research shows that bilingual people have improved function.</div>
                        <button type="button" class="brain btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-title="Proven academic performance" data-content="Immersion students perform as well or better than non-immersion students on dtandardized tests in English." style="position: relative;
                        background: transparent;
                        border: none;
                        outline: none;
                        right: -213px;
                        top: -42px;
                        height: 3em;
                        width: 3em;
                        border-radius: 50px;"></button>
                        <button type="button" class="brain btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-title="Second Language Skills" data-content="More than in any other type of language learning model, immersion students achieve high proficiency in immersion language." style="
                        position: relative;
                        background: transparent;
                        border: none;
                        outline: none;
                        right: -244px;
                        top: 69px;
                        height: 4em;
                        width: 4em;
                        border-radius: 50px;">
                        </botton>
                        <button type="button" class="brain btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Enhanced Gognitive Skills" data-content="Immersion students typically develop greater cognitive flexibility, demonstrating increased focus and attendion skills, better memory and decision making, and superior problem solving skills as well as an enhanced understanding of their primary language." style="position: relative;
                        background: transparent;
                        border: transparent;
                        outline: none;
                        top: 130px;
                        right: -104px;
                        height: 5em;
                        width: 5em;
                        border-radius: 50px;">
                        </botton>
                    </div>
                </div>
                <!-- //end brain row -->
                <div class="row">
                    <div class="col-md-12 blue-border"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6 promo">
                        <h3>Case Study
                        <span class="long-arrow">,</span>
                        </h3>
                        <img  src="images/splash/case-study.png">
                        <p>
                        <a href="#">Learn how</a>dual language immersion has impacted student achievement at XYZ school »</p>
                    </div>
                    <div class="col-md-4 col-xs-6  promo">
                        <h3>Video
                        <span class="long-arrow">,</span>
                        </h3>
                        <img  src="images/splash/video.png">
                        <p>
                        <a href="#">Get a glimpse</a>into a Splash language immersion classroom at E.E. Miller Elementary »</p>
                    </div>
                    <div class="col-md-4 col-xs-6  promo">
                        <h3>See for yourself
                        <span class="long-arrow">,</span>
                        </h3>
                        <img  src="images/splash/see-for-yourself.png">
                        <p>Visit the VIF
                        <a href="#">learning center</a>to browse our robust PD and curriculum library »</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 blue-border"></div>
                 </div>
                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="red-banner">
                                <span>
                                <h2>Dual language works</h2>
                                </span>
                            </div>
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>Dual language immersion provides an attractive option for any school seeking to increase enrollment, close the achievement gap, reach underachieving subgroups and develop global-ready young leaders. Students participating in its Splash language immersion programs surpass their peers in reading, math and science, and they are outpacing N.C. state averages. </p>
                        <p>
                        Learn more about how Splash can work for your school or district:</p>
                    </div>
                    <div class="col-md-4"><img class="img-responsive" src="images/splash/chinese-symbol.png"/></div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/pdf-icon.png" />
                        <p class="caption">May 2012 UNC Study Data</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="images/link-icon.png" />
                        <p class="caption">October 29, 2013 Fayetteville Observer</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/link-icon.png" />
                        <p class="caption">Gray’s Creek global school web site</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/video-icon.png" />
                        <p class="caption">What does a global school look like?</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/link-icon.png" />
                        <p class="caption">Gray’s Creek global school web site</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="images/video-icon.png" />
                        <p class="caption">What does a global school look like?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <a name="splash_contact"><h6 class="anchor"></h6></a>
                            <div class="red-banner">
                                <span>
                                <h2>get started with splash</h2>
                                </span>
                            </div>
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
                        
                        <img class="img-backer" src="images/splash/splash-contact.jpg" width="450" height="450" />
                        
                    </div>
                </div>
                <div class="row">
                    <div class="bottom-pad" class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php

    echo "</div>";
    include 'footer.php';
?>