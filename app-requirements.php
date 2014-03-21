<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Application Requirements",$buffer);
echo $buffer;
echo "<div id='main-content'>";
?>
       <script>
            var $ = jQuery.noConflict();
            $(document).ready(function() {
                    'use strict';             
             $('.bxslider-home').bxSlider({pager:false});
                       });  
             $('.sub').hide();
            $('#my-nav ul li').removeClass('active');           
            $('#btn-app').addClass('active');
             $('#btn-app > .sub').show();
            //temporarily disable the sliders. Remove this line to activate
           // $('.bx-controls-directional').hide();

         </script>
         <style>
            
         </style>

<section id="header">
    <div id="teach">
        <div class="app_bg">
            <div class="container">
                <div class="row app-row">
                    <div class="col-md-12">
                        <h1 class="script">Picture yourself teaching in the United States</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 ">
                        
                        <img class="img-responsive img-backer" src="images/app/teach.jpg"/>
                        <p class="caption text-right">North Carolina offers mountains t coast, and everything in betweeen</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        
                        <p>Our Cultural Exchange, Splash and Passport Schools have full-time positions designed for outstanding international teachers who want to gain first-hand knowledge of the U.S. while helping to prepare students to be thoughtful global citizens. We’re currently seeking teachers for positions in dual language (Spanish-English or Mandarin-English), elementary education, world languages and English as a second language (ESL).</p>
                            <div class="row">
                                        <img class="sidebar" src="images/sidebar-line.png">
                                        <div class="v-center">
                                            <h4 class="script">Learn more from our webinar</h4>
                                            <div class="col-md-6">
                                                <img class="img-respnsive thumbnail" src="images/app/thumb1.jpg"/>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="caption">next live webinar: March 23, 2014</p>
                                            </div>
                                        </div>
                                        <img class="sidebar" src="images/sidebar-line.png"><br>
                            </div>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h2>Requirements</h2>
                        <ul class="plus">
                            <li>Teaching or university degree in education</li>
                            <li>Fluency in English</li>
                            <li>Teaching experience</li>
                            <li>Valid driver's license</li>
                            <li>Minimum two-year commitment</li>
                            <li>Native fluency in target language (Spanish or Mandarin) for <a href="index.php#splash">Splash schools</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h2>Why VIF?</h2>
                        <ul class="plus">
                            <li>Full-tim position</li>
                            <li>A competitive salary, vacation and holidays</li>
                            <li>Travel and orientation to the U.S.A.</li>
                            <li>International credential evaluation and licensure</li>
                            <li>Visa sponsorship for you and your family</li>
                            <li>Health and Life insurance</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive img-backer" src="images/app/awesome.jpg"/>
                        <p class="caption text-right">awesome teachers wanted!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pad40">
                        <button class="btn btn-vif pull-left" type="submit">start your application now</button>
                    </div>
                </div>
            </div>
        
                <div class="pattern2">
                    <span class="lg-quote">“</span>
                    <div class="center-text script">Being in this program has changed my life. I am a better teacher and I have more tools in my backpack.</div>
                    <div class="caption">— María Oroña Queijo from Uruguay, third grade teacher at Marvin B. Smith Elementary School in Burlington, N.C.</div>
                    <span class="lg-quote">”</span>
                    
                </div>
           
        <div id="schools"></div>
            <div class="container">
                <div class="row">
                    <div><br><br><br><br>
                       <a name="schools"><h6 class="anchor"></h6></a>
                        <div class="red-banner">
                            <span>
                            <h2>Our Schools</h2>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 pad40">
                        <img src="images/app/schools.jpg" class="img-responsive img-backer"/>
                    </div>
                    <div class="col-md-8">
                        <h2>Cultural Exchange Schools</h2>
                        <p>Cultural Exchange Schools create bridges of mutual understanding and educational growth for U.S. school communities.</p>
                        <h2>splash schools</h2>
                        <p>Splash Schools promote academic achievement through enrichment, enabling students to excel in their core studies while becoming bilingual and culturally aware.</p>
                        <h2>passport schools</h2>
                        <p>Passport Schools foster authentic global learning through school-wide initiatives to promote project-based inquiry and student-led learning.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>VIF provides support and ongoing training to aid Cultural Exchange teachers in their transition into North Carolina and Virginia schools and communities. All international teachers at Cultural Exchange, Splash and Passport Schools also join an online community of educators in the VIF learning center, where they have access to Global Gateway professional development and a robust library of curricular tools and classroom resources.</p>
                        <div id="process">
                            <h6 class="anchor"></h6>
                            <div class="red-banner">
                                <span>
                                <h2>Application Process</h2>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="pad40">
                                <p>Applying to VIF is a long and competitive process. The application process takes several months to complete. Teachers who are accepted into the program often wait one or two years before they move to the U.S.</p>
                                <h3>Step 1: Review eligibility requirements</h3>
                                <p>VIF currently offers two programs for international teachers — the VIF Teacher Program and the VIF Dual Language Teacher Residency Program. All teachers must meet VIF's eligibility requirements to make sure that VIF is a match for you (see above).
                                </p>
                                <h3>Step 2: Register or apply online</h3>
                                <p>Teachers interested in these programs must first submit an online registration form where we'll ask you a few questions about your experience, your country of residence and the subjects you teach. Based on the information that you provide, you may be asked to submit the online application. </p>
                                <p>VIF receives many inquiries from teachers, but we only have a limited number of positions that we can offer each year. When we are ready to consider applications from teachers in your country and subject area, we will invite you via email to submit the application. If invited to apply, we strongly suggest that you complete the application as soon as possible.</p>
                                <h3>Step 3: Complete telephone interview</h3>
                                <p>If your application is accepted, we will invite you to participate in a telephone interview to discuss your application and evaluate your compatibility with our program requirements. We will inform you of the outcome of your telephone interview in an email within one week.</p>
                                <h3>Step 4: Submit required documents</h3>
                                <p>After your successful telephone interview, VIF will then instruct you to prepare a series of documents to accompany your application. These documents, which include reference forms, official transcripts, a current criminal background check and several other items, will help us further determine your eligibility for the program.</p>
                                <p>Providing a complete application package as soon as possible improves the likelihood of obtaining a U.S. position for the next school year. You will be asked to submit these documents at a personal interview.</p>
                                <h3>Step 5: Complete in-person interview</h3>
                                <p>VIF hosts interviews in a variety of cities worldwide in order to meet with program applicants. This interview is an opportunity for you to meet with a VIF representative and share more information about why you would be a successful VIF teacher or trainee. We will inform you of the outcome of your personal interview in an email.</p>
                                <h3>Step 6: Notification of program eligibility</h3>
                                <p>After a successful personal interview and submission of all your documents, VIF will review your complete application package to ensure that you meet all VIF requirements and are eligible for any necessary U.S. teaching license and visa. If all criteria are met, VIF will begin looking for positions for you in our participating schools.</p>
                                <h3>Step 7: Consider U.S. teaching positions</h3>
                                <p>VIF will share your information with U.S. school districts that are interested in hiring international teachers. Your VIF Admissions Specialist will notify you if a school is interested in hiring you or speaking with you by phone about a teaching position.</p>
                                <h3>Step 8: Accept offer!</h3>
                                <p>Some U.S. schools begin to extend offers to teachers as early as March or April, but the majority of schools tend to hire most of their new teachers and trainees between May and August. Despite the fact that most schools begin the academic year at the end of August, remember that some schools continue to fill positions as late as September, based on student enrollment and school budgets.</p>
                                 <a href="#" class="btn btn-vif btn-lg">start your application now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img width="298" src="images/app/globe-suitcases.png"/> 
                        <h2 id="faqs" class="anchor">Frequently Asked Questions</h2>
                        <div class="faq-block"><p class="faq">Can I apply through postal mail? I have limited Internet access.</p>
                            <p>VIF accepts online applications only. Email is our official means of communication, so all applicants must have regular internet access and an email account. </p>
                            <p class="faq">Do I have to pay a fee to teach with VIF?</p>
                            <p>VIF does not charge fees to applicants at any time.</p>
                            <p class="faq">I previously submitted an application. How do I reapply?</p>
                            <p>If your application was submitted more than one year ago, you must submit a new application. Contact us via email to check on the status of applications and documents submitted within the past year.</p>
                            <p class="faq">I previously taught in the VIF program. How do I reapply?</p>
                            <p>We are always pleased to hear from former teachers who are interested in returning to the program. Because VIF participation requirements and regulations surrounding U.S. teaching licensure may have changed since your first tour with the program, you must reapply so that we can determine your eligibility at this time. Start your application.</p>
                            
                        </div>
                        <a id="teach_contact"><h6 class="anchor"></h6></a>
                        <h4><a href="faqs.php">read more FAQs</a> or
                        contact us:</h4>
                        <form method="post" class="form" role="form">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                                </div>
                                
                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                <br />
                                <div class="row">
                                    <div class="form-group">
                                        <button class="btn btn-vif pull-right" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>

        


<?php
    echo "</div>";
    include 'footer.php';
?>