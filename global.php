<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Global Gateway System",$buffer);
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
            $('#btnGlobal').addClass('active');
         </script>

    
    <div id="global">
        <div class="global_bg">
        <div class="container">
             <div class="row">
                <div class="col-md-12">
                     <h1 class="script">The Global Gateway System</h1>
                </div>
            </div>
        
            <div class="row">
               <div class="col-md-8 col-sm-12 col-xs-12">
                                              
                        <div id="global-slider">
                            <ul class="bxslider">
                                <li>
                                    <img class="img-backer img-responsive" src="images/gateway.png" />
                                </li>
                                <li>
                                    <img class="img-backer img-responsive" src="images/gateway.png" />
                                </li>
                                <li>
                                    <img class="img-backer img-responsive" src="images/gateway.png" />
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                <div class="clear  col-md-4 col-sm-12 col-xs-12">
                    <img class="img-responsive pad40" src="images/gateway-icon.png" />
                    <p><em>The Global Gateway system offers a simple integrated platform for K-12 educator professional development, lesson plans and classroom resources, digital badging for achievements and participation in an incredible collaborative community of global educators. Teachers anywhere in the world can learn to effectively integrate global content into their core instruction.</em></p>
                     <img class="sidebar" src="images/sidebar-line.png" />
                    <a href="#global_contact" class="btn btn-contact btn-lg">
    <span class="arrow">}</span>CONTACT US
 </a>

                </div>
                
            </div>
            <div class="gateway">
                <div class="row">
                    <div class="col-md-7">
                        <h3>what the data shows</h3>
                        <p>Our end of the year data from 2013 shows that teachers, principals and administrators are using Global Gateway’s seamless technology integration, pedagogical approach and global content to support global competence in the classroom.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="percent">85%</div>
                        <p>of teachers report daily use of productive technologies for student-created project-based work.</p>
                        <div class="percent">93%</div>
                        <p>of teachers agree that studens are excited when working on global projects</p>
                        <div class="percent">100%</div>
                        <p>of principals and administrators reported that Global Gateway supports collaborative instructional planning.</p>
                    </div>
                    <div class="col-md-4 program">
                        <div class="percent">77%</div>
                        <p>of teacher-created lesson plans demonstrate integration of global content into curriculum.</p>
                        <div class="percent">94%</div>
                        <p>of teachers agree that students are on-task and focused while working on global projects.</p>
                        <div class="percent">86%</div>
                        <p>of principals and administrators report that Global Gateway supports transitions to national and state standards.</p>
                    </div>
               </div> 
               <div class="row">
                    <div class="col-md-12">
                        <div class="red-banner">
                            <span>
                            <h2>a smarter way to do pd</h2>
                            </span>
                        </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="img-responsive img-backer" src="images/global-pd.png"/>
                        <h3>professional development</h3>
                        <p>Global Gateway PD is convenient and flexible, allowing teachers to incorporate it into their busy schedules. And our system provides easy to understand, comprehensive progress reports to district leaders every month to show that teachers are developing expertise in Common Core standards, technology and global content.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="img-responsive img-backer" src="images/global-lessonplan.png"/>
                        <h3>lesson plans and tools</h3>
                        <p>Global Gateway uses project-based inquiry as a framework to help teachers master Common Core instruction through use of our exemplar lessons and building their own. The robust digital resource library enables teachers to access resources as they need them — lesson plans, activities and worksheets are searchable by grade level, subject and standards alignment.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="img-responsive img-backer" src="images/global-badges.png"/>
                        <h3>badging</h3>
                        <p>As teachers earn badges to represent their accomplishments, they work towards Global-Ready designation which signifies their ability to integrate global instruction and problem-based learning into the classroom. Schools and districts also earn Global-Ready designations by developing and implementing global education plans that address student achievement and teacher professional development.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="img-responsive img-backer" src="images/global-community.png"/>
                        <h3>community of practice</h3>
                        <p>Global Gateway’s collaborative learning environment connects teachers and administrators to other school communities. Districts receive their own private spaces where educators can distribute announcements, exchange resources and share best practices. Teachers can share lessons and best practices with educators around the world.</p>
                    </div>
                </div>
            </div>
            
        </div>
            <div class="pad40">
                <div class="global-quote">

                    <div class="col-md-12 pattern2">
                       
                        <span class="lg-quote">“</span>
                        <div class="center-text script">At system and school level [we see] more embracing of global education. More parents are asking about this for their children because kids <span class="red">love</span> learning about the world around them. It is nice to see it becoming adopted.</div>
                        <div class="caption">— Kensington Elementary School Principal Rachel Clarke</div>
                        <span class="lg-quote">”</span>
                   
                    </div>
                </div>
            </div>

           <div class="container"> 
            <div class="row">
                <div class="col-md-12">
                    <div>
            <a name="global_contact"><h6 class="anchor"></h6></a>
                <div class="red-banner-long hidden-sm hidden-xs">
                        <span>
                        <h2>get started with global gateway</h2>
                        </span>
                    </div>
                    <div class="red-banner hidden-lg hidden-md">
                        <span>
                        <h2>get started with global gateway</h2>
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
                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="10"></textarea>
                        <br />
                        <button class="btn btn-vif pull-left" type="submit">Submit</button>
                    </form>
                </div>
                 <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/global-contact.png" class="img-res-ponsive img-backer app-img" />
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