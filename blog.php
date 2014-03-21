<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Blog",$buffer);
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
    $('.sub').hide();
    $('#btn-press').addClass('active');
    $('#btn-press > .sub').show();
    $('#btn-press > .sub > ul >li').removeClass('active');
    $('#btnBlog').addClass('active');
    </script>
    
    <div id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="script">Recent stories, news and ideas</h1>
                    <img src="images/bilingual-brain.jpg" class="img-backer"/><br>
                    <p class="caption">Dual language students consistently outperform monolingual peers on tests, regardless of demographics. Click the <a href="splash.php">infographic</a> to learn more about how the bilingual brain works, and how VIF's  <a href="splash.php">Splash Language Immersion</a> program supports bilingual development.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span class="share"><img src="images/icons/share.png" height="12" width="78"/><img src="images/icons/twitter.png" height="18" width="18"/><img src="images/icons/facebook.png" height="18" width="18"/><img src="images/icons/google.png" height="18" width="18"/><img src="images/icons/linkedin.png" height="18" width="18"/><img src="images/icons/pinterest.png" height="18" width="18"/></span>
                </div>
                <div class="col-md-9">
                    <span class="share"><img src="images/icons/tagged.png" height="12" width="112"/></span>
                    <span class="tags">curriculum, global education, language immersion, Splash, student achievement</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 xline">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>aasa presents national distinguished service awards</h3>
                    <p>Dr. Richard L. Thompson, longtime Senior Education Adviser at VIF and current Interim Executive Director at NCCAT (North Carolina Center for the Advancement of Teaching) was honored, along with two other educators, by the American Association of School Administrators (AASA), Friday, February 14, with a Distinguished Service Award. A ceremony to recognize these individuals was held at AASA’s Conference on Education in Nashville, Tennessee. <span class="more">read more</span>
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="images/aasa-service.jpg" class="img-backer"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span class="share"><img src="images/icons/share.png" height="12" width="78"/><img src="images/icons/twitter.png" height="18" width="18"/><img src="images/icons/facebook.png" height="18" width="18"/><img src="images/icons/google.png" height="18" width="18"/><img src="images/icons/linkedin.png" height="18" width="18"/><img src="images/icons/pinterest.png" height="18" width="18"/></span>
                </div>
                <div class="col-md-9">
                    <span class="share"><img src="images/icons/tagged.png" height="12" width="112"/></span>
                    <span class="tags">award, celebration, global education, VIF news</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 xline">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 rt-border">
                    <img src="images/celebrate.jpg" class="img-backer-hh"/>
                    <h3>Thank you for B-ing the change: B Corp global movement</h3>
                    <p>B Corps like us meet what Inc. magazine calls "the highest standard in socially responsible business." We are leading a global movement to redefine success in business so one day all companies compete to be the best in the world at being the best for the world. <span class="more">read more</span>
                    </p>
                    <span class="share"><img src="images/icons/share.png" height="12" width="78"/><img src="images/icons/twitter.png" height="18" width="18"/><img src="images/icons/facebook.png" height="18" width="18"/><img src="images/icons/google.png" height="18" width="18"/><img src="images/icons/linkedin.png" height="18" width="18"/><img src="images/icons/pinterest.png" height="18" width="18"/></span>
                </div>
                <div class="col-md-6">
                    <img src="images/cultural-exchange-teacher.jpg" class="img-backer-hh"/>
                    <h3>Cultural exchange teacher spotlight: francisco zapata</h3>
                    <p>Teaching with VIF has been a life-changing experience. I know I have become a better teacher; one that has learned to consider individual  needs when it comes to planning lessons; one that has learned to consider other factors before making any kind of diagnosis or request when it comes to the learning process. </p>
                    <span class="share"><img src="images/icons/share.png" height="12" width="78"/><img src="images/icons/twitter.png" height="18" width="18"/><img src="images/icons/facebook.png" height="18" width="18"/><img src="images/icons/google.png" height="18" width="18"/><img src="images/icons/linkedin.png" height="18" width="18"/><img src="images/icons/pinterest.png" height="18" width="18"/></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 xline">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a name="releases"><h6 class="anchor"></h6></a>
                    <div class="red-banner">
                        <span>
                        <h2>Press Releases</h2>
                        </span>
                    </div>
                </div>
            </div>
        
        
            <div class="row">
                  <div class="col-md-2 col-sm-2 col-xs-3">
                        <img class="release" src="images/releases1.png"/>
                    </div>
                   
                    <div class="col-md-9 col-sm-9 col-xs-8">
                      <div class="container-fluid">
                                <div class="row-fluid">
                                    <p class="centering caption">
                                        VIF Releases Innovative Digital Badging System for Global Educators
                                        Badging and Global Project-based Inquiry Reinvigorate K-12 Teacher Professional development
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                
               
            
              <div class="row">  
                
                        <div class="col-md-2 col-sm-2 col-xs-3">
                            <img class="release" src="images/releases2.png"/>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-8">
                            <div class="container-fluid">
                                <div class="row-fluid">
                                    <p class="centering caption">
                                        Global-Ready Designation for Teachers, Schools and Districts
                                        VIF’s Global Schools Network endorses educators who demonstrate a commitment to global education.
                                    </p>
                                </div>
                            </div>
                        </div>
               </div> 
               <div class="row"> 
                    <div class="col-md-2 col-sm-2 col-xs-3">
                        <img class="release" src="images/releases3.png"/>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-8">
                        <div class="container-fluid">
                                <div class="row-fluid">
                                    <p class="centering caption">
                                    Latest VIF classroom activity toolkit helps K-12 teachers integrate global content through the excitement of the 2014 Winter Olympic Games.
                                    <span class="more">read more...</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                 </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                    <a name="contact"><h6 class="anchor"></h6></a>
                        <div class="red-banner">
                            <span>
                            <h2>Get in touch with VIF</h2>
                            </span>
                        </div>

                </div>
            </div>
            
        </div>
    </div>

    <script>
     //vertically center the press release text based on the height of the images 
        $(document).ready(function() {
            var imgHeight = $('.release').outerHeight();
            $('.container-fluid').css('height',imgHeight);
        });

        // for the window resize
        $(window).resize(function() {
            var imgHeight = $('.release').outerHeight();
            $('.container-fluid').css('height',imgHeight);
        });

   
    

    </script>
    <?php
echo "</div>";
include 'footer.php';
?>