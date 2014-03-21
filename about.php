<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","About VIF",$buffer);
echo $buffer;
echo "<div id='main-content'>";
?>

<script>
    var $ = jQuery.noConflict();
    $(document).ready(function() {
    'use strict';
    $('.bxslider').bxSlider();

        $('#my-nav ul li').removeClass('active'); //Clear all active links on main nav
         $('.sub').hide(); //hide all submenus
        $('#btn-about').addClass('active'); // Now make ABOUT the active link
        $('#btn-about > .sub').show(); // Show the subnav
        $('#btn-about > .sub > ul >li').removeClass('active'); //Clear all subnav active links
       


    });
   
        //Values interaction

        $('#portfolio-grid').mixitup({
             targetSelector: '.portfolio-mix',
        });



</script>
<div id="about">
    <div class="about_bg">

    <div class= "container">   
         <div class="row">
                    <div class="col-md-12">
                            <h1 class="script">Learn more about us</h1>
                        </div>
                        <div class="row">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="about-slider">
                                    
                                        <ul class="bxslider">
                                            <li>
                                               <img src="images/about1.jpg" class="img-responsive img-backer"/>
                                            </li>
                                        </ul>
                              </div>  
                            </div>
                         </div>   
                    </div>
                </div>
   
            <div id="history">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <h3>Our History</h3>
                            <p>VIF International Education builds global education programs that prepare students for success in an interconnected world. For more than 25 years, educators have leveraged VIF’s professional development and curriculum, language acquisition and cultural exchange programs to generate engaging learning environments where students can excel in core curriculum as well as develop valuable 21st century skills.</p>
                            <p>A proud B Corp, VIF strives to support teachers, school leaders and districts in the endeavor of developing globally competent citizens through turnkey international education programs and resources. Students with cultural awareness, creative thinking and problem-solving skills will be lifelong learners equipped to thrive in an increasingly global marketplace. To this end, the VIF team remains focused on core values which guide both overarching strategy and day-to-day activities.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 hidden-xs">
                            <img class="img-responsive" src="images/backpack.png"/>
                        </div>
                    </div>

                    
                </div>
            </div>
            <div id="values">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 blue-border"></div>
                    </div>
                    <h3>Our Values</h3>
                    <!-- Values Interaction portion-->
                    <div>
                        <ul id="portfolio-grid" class="row portfolio-row">
                            <li class="portfolio-mix col-xs-6 col-md-4">
                                <!-- Values item -->
                                <figure class="portfolio-item" id="item1">
                                    <a href="#item1" class="folio">
                                    <img  src="images/values6.jpg" alt="">
                                    <div class="caption-bg"></div>
                                        <div class="meta">
                                            <h4>Global Perspective</h4>
                                       </div>
                                        <p class="portfolio-item-description">All the students deserve a comprehensive education that prepares them for success in our interconnected world. Global-ready students are formed by globally competent teachers, school and district leaders, and supportive communities.</p>
                                     </a>
                                </figure>
                            </li>
                            <li class="portfolio-mix col-xs-6 col-md-4">
                                <!-- Values item -->
                                <figure class="portfolio-item" id="item2">
                                    <a href="#item2" class="folio">
                                    <img  src="images/values5.jpg" alt="">
                                    <div class="caption-bg"></div>
                                    <div class="meta">
                                        <h4>Innovative Design</h4>
                                    </div>
                                    <p class="portfolio-item-description">International education programs should be turnkey for teachers, schools and districts, with technology solutions and support to enhance the experience of globalizing professional development, curriculum and language acquisition. </p>
                                    </a>
                                </figure>
                            </li>
                            <li class="portfolio-mix col-xs-6 col-md-4">
                                <!-- Values item -->
                                <figure class="portfolio-item" id="item3">
                                    <a href="#item3" class="folio">
                                    <img  src="images/values4.jpg" alt="">
                                    <div class="caption-bg"></div>
                                    <div class="meta">
                                        <h4>Scale</h4>
                                    </div>
                                    <p class="portfolio-item-description">Extending solutions to as many teachers, schools and districts as possible means developing an increasing pool of global-ready students who will become responsible, competent contributors to our world.</p>
                                    </a>
                                </figure>
                            </li>
                            <li class="portfolio-mix col-xs-6 col-md-4">
                                <!-- Values item -->
                                <figure class="portfolio-item" id="item4">
                                    <a href="#item4" class="folio">
                                    <img  src="images/values3.jpg" alt="">
                                    <div class="caption-bg"></div>
                                    <div class="meta">
                                        <h4>Collaboration</h4>
                                    </div>
                                    <p class="portfolio-item-description">We partner with teachers, schools and districts to create relevant, leading edge programs that can be easily implemented into the classroom and beyond. We are committed to working together to continually improve the learning experience.</p>
                                    </a>
                                </figure>
                            </li>
                            <li class="portfolio-mix col-xs-6 col-md-4">
                                <!-- Values item -->
                                <figure class="portfolio-item" id="item5">
                                    <a href="#item5" class="folio">
                                    <img  src="images/values2.jpg" alt="">
                                    <div class="caption-bg"></div>
                                    <div class="meta">
                                        <h4>Impact</h4>
                                    </div>
                                    <p class="portfolio-item-description">Widely adopted professional development, globally infused curriculum, language acquisition and cultural exchange programs improve the lives of students around the world, affecting scores of people, communities, economies and futures.</p>
                                    </a>
                                </figure>
                            </li>
                            <li class="portfolio-mix col-xs-6 col-md-4">
                                <!-- Values item -->
                                <figure class="portfolio-item" id="item6">
                                    <a href="#item6" class="folio">
                                    <img  src="images/values1.jpg" alt="">
                                    <div class="caption-bg"></div>
                                    <div class="meta">
                                        <h4>Learning</h4>
                                    </div>
                                    <p class="portfolio-item-description">We are an organization of lifelong learners who thrive on improving educational environments. Knowledge acquisition and enhancement through cultural awareness and global competency is what drives us to develop the best possible programs and resources.</p>
                                    </a>
                                </figure>
                            </li>
                        </ul>
                        <hr></hr>
                    </div>
                </div>
            </div>
            <div class="container">
             <h3>Meet the Team</h3>
         </div>
            <div class="team">
            <div id="team">
                
                    <div class="pattern2">
                        <div class="">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                               
                                <div id="team-slider" >
                                    
                                    
                                    <div class="container">
                                        <div class="">
                                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                                
                                                <div id="team-slider">
                                                    <ul class="bxslider">
                                                        <li>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 caption">
                                                                <img src="images/team-david.jpg" class="img-backer img-resonsive team" />
                                                            
                                                                    <p>
                                                                    Name: David Young<br>
                                                                    Position: CEO<br>
                                                                    Provenance: North Carolina, by way of London and Costa Rica</p>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                    <p>Favorite trip abroad: Lithuania</p>
                                                                    </p>
                                                                </div>
                                                         </li>
                                                         <li>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 caption">
                                                                <img src="images/team-david.jpg" class="img-backer img-resonsive team" />
                                                            
                                                                    <p>
                                                                    Name: David Young<br>
                                                                    Position: CEO<br>
                                                                    Provenance: North Carolina, by way of London and Costa Rica</p>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                    <p>Favorite trip abroad: Lithuania</p>
                                                                    </p>
                                                                </div>
                                                         </li>
                                                         <li>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 caption">
                                                                <img src="images/team-david.jpg" class="img-backer img-resonsive team" />
                                                            
                                                                    <p>
                                                                    Name: David Young<br>
                                                                    Position: CEO<br>
                                                                    Provenance: North Carolina, by way of London and Costa Rica</p>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                                    <p>Favorite trip abroad: Lithuania</p>
                                                                    </p>
                                                                </div>
                                                         </li>
                                                        
                                                    </ul>
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
            <div id="jobs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a name="jobs"><h6 class="anchor"></h6></a>
                            <div class="red-banner">
                                <span>
                                <h2>Jobs at VIF</h2>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <p>
                            VIF is an innovative organization committed to international education. Most of our staff positions are located in Chapel Hill, North Carolina. Our talented staff is diverse, engaged, creative and dedicated to the mission of making learning global and ensuring that every student is prepared to succeed in our interconnected world.</p>
                            <p>We offer a comprehensive compensation and benefits package which includes medical and dental insurance, disability insurance, life insurance, 401(k) and paid time off.</p>
                            <p>Visit our current career opportunities, or send us an email to introduce yourself and describe how your skills, experiences, interests and competencies could align with the mission of our organization.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/jobs.png" class="img-backer img-resonsive"/>
                        </div>
                    </div>
                </div>
            </div>
    </div> 


    <?php
    echo "</div>";
    include 'footer.php';
    ?>