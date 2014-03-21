<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Case Studies",$buffer);
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
            $('#btnCase').addClass('active');
         </script>

    <div id="casestudies">
        <div class="case_bg">
            <div class="container">
                <div class="row">
                     <div class="row">
                <div class="col-md-12">
                     <h1 class="script">Case Study: Carolina Forest</h1>
                </div>
            </div>
                    <div class="col-md-8 ">
                      
                        
                        <img class="img-backer" src="images/case/carolinaforest.jpg" />
                        
                        <p class="caption">Students here are awesome because of you, you and oh yes our great toolkits</p>
                    </div>
                    <div class="clear  col-md-4">
                        <img class="sidebar" src="images/sidebar-line.png" />
                        <h5>Carolina Forest International Elementary School</h5>
                        <p>VIF Passport (K-5), Cultural Exchange (k-5) and Splash (K) school</p>
                        <em>Number of students served:</em>
                        <span>995</span>
                        <em>Location:</em>
                        <span>Jacksonville, North Carolina</span>
                        <em>District:</em>
                        <span>Onslow County</span>
                        <div>
                            <h4 class="script">We think you'll like these too.</h4>
                            <div class="col-md-4">
                                <img src="images/case/thumb1.png" class="thumbnail" />
                            </div>
                            <div class="col-md-4">
                                <img src="images/case/thumb2.png" class="thumbnail" />
                            </div>
                            <div class="col-md-4">
                                <img src="images/case/thumb3.png" class="thumbnail" />
                            </div>
                            <br/>
                            <img class="sidebar" src="images/sidebar-line.png" />
                            <a href="#casestudies_contact" class="btn btn-contact btn-lg">
                            <span class="arrow">}</span>CONTACT US
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 ">
                        <p class="intro">
                        “One hundred percent of our students are now exposed to global content in their everyday learning and the growth we have seen among students has just been dynamic. Our community’s raised expectations and the exposure students have to a global curriculum has resulted in improved performance at every grade level.” —Helen Gross, Principal
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Carolina Forest’s commitment to international education is demonstrated through a holistic approach in which Cultural Exchange teachers — representing England, South Africa, Australia, Canada, Jamaica and the Philippines — complement the school’s offerings. At each grade level, international teachers collaborate with their colleagues to integrate global aspects with common core and essential standards so that standard curriculums are taught through a global lens. In addition, all Carolina Forest teachers have access to VIF’s professional development tools which support effective integration of global content into core instruction.
                        </p>
                    </div>
                    <div class="col-md-4">
                        
                        <img  class="img-backer" src="images/case/michelle.png" />
                        
                        <p class="caption">Michelle is a rock star!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h2>Building Global Citizenry</h2>
                        <p>
                        The Carolina Forest community also builds global citizenry through international partnerships with schools in other countries and through the use of technological tools to bring the world closer to students. Carolina Forest’s partnership with a school in San Pedro, Belize provides students from both schools with opportunities to communicate as pen pals and to visit and learn with one another through Skype. The partnership also allows teachers from the two schools to collaborate on joint lesson plans for their classes.</p>
                        <p>
                        At Carolina Forest, being a global school means preparing teachers and students to competently and successfully engage in local, national and international contexts. Educators and parents of students at Carolina Forest believe that their commitment to global learning raises expectations of students and that, as a result, students consistently meet the standards set for them through their interactions with globally-focused content. Teachers and administrators feel they are fostering students who are better thinkers and communicators. And the school’s families, 50-60 percent of which are military families, are extremely supportive of a curriculum that is preparing students for success in an interconnected world.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="red-banner">
                                <span>
                                <h2>Other Resources</h2>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="images/pdf-icon.png" />
                        <p class="caption">May 2012 UNC Study Data</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="images/link-icon.png" />
                        <p class="caption">October 29, 2013 Fayetteville Observer</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="images/link-icon.png" />
                        <p class="caption">Gray’s Creek global school web site</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="images/video-icon.png" />
                        <p class="caption">What does a global school look like?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div ><a name="casestudies_contact"><h6 class="anchor"></h6></a>
                            <div class="red-banner">
                                <span >
                                <h2>Contact us</h2>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="10"></textarea>
                            <br />
                            <button class="btn btn-vif pull-left" type="submit">Submit</button>
                        </form>
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