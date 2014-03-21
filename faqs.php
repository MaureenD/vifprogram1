<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","FAQs",$buffer);
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
            $('#btnFaqs').addClass('active');   
            //temporarily disable the sliders. Remove this line to activate
           // $('.bx-controls-directional').hide();
           
           
               
                 $('.bs-docs-sidenav').affix({
                  offset: {
                    bottom: function(){ return $('.bs-docs-footer').outerHeight(true) }
                  }
                });
           
                $('.bs-docs-sidenav li').click(function() {
                     $("li.active").removeClass("active");
                      $(this).each(function(){
                        $(this).addClass('active');


                    });
                });

         </script>
         <style>
            
         </style>

<section id="header" class="bs-docs-container">
    <div id="faqs">
        <div class="app_bg">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 ">&nbsp;</div>
                </div>
                <div clas="row">
                    <div class="col-md-9">
                         <h1 class="script">Your questions about teaching with us, answered</h1>
                        <div >
                            <h2 id="application">Application <span class="BrandonPrinted-Extras">,</span></h2>
                            <p class="faq">Can I apply through postal mail? I have limited Internet access.</p>
                            <p>VIF accepts online applications only. Email is our official means of communication, so all applicants must have regular internet access and an email account.  Start your application.</p>

                            <p class="faq">Do I have to pay a fee to teach with VIF?</p>
                            <p>VIF does not charge fees to applicants at any time. There are, however, some costs associated with the application process which may include:
                            </p>
                            <ul class="faq-list">
                                <li>Ordering degree transcripts from your college or university.</li>
                                <li>Applying for a police background check.</li>
                                <li>U.S. visa fees.</li>
                                <li>Employment Authorization application for J-2 dependents who wish to work in the U.S.</li>
                                <li>U.S. teaching licensing fees.</li>
                            </ul>
                            <p class="faq">I have taught previously but not during the past two years. Should I apply?</p>
                            <p>U.S. school districts are most likely to hire teachers with current or recent teaching experience and training. If you have not been teaching full time but have been involved in K-12 education in some other way (part-time teaching, tutoring, etc.), we will review your application to fully evaluate your candidacy.
                            </p>
                            <p class="faq">I previously submitted an application. How do I reapply?</p>
                            <p>If your application was submitted more than one year ago, you must submit a new application. Contact us via email to check on the status of applications and documents submitted within the past year.
                            </p>
                            <p class="faq">I previously taught in the VIF program. How do I reapply?</p>
                            <p>We are always pleased to hear from former teachers who are interested in returning to the program. Because VIF participation requirements and regulations surrounding U.S. teaching licensure may have changed since your first tour with the program, you must reapply so that we can determine your eligibility at this time.  Start your application.</p>

                            <p class="faq">What is the VIF application process?</p>
                            <p>Applying to VIF is a long and competitive process. The application process takes several months to complete. Teachers who are accepted into the program often wait one or two years before they move to the U.S.
                            </p>
                            <h3>Step 1: Review eligibility requirements</h3>
                            <p>VIF currently offers two programs for international teachers — the VIF Teacher Program and the VIF Dual Language Teacher Residency Program. All teachers must meet VIF's eligibility requirements to make sure that VIF is a match for you (see above).
                            </p>
                            <h3>Step 2: Register or apply online</h3>
                            <p>Teachers interested in these programs must first submit an online registration form where we'll ask you a few questions about your experience, your country of residence and the subjects you teach. Based on the information that you provide, you may be asked to submit the online application. 
                            </p>
                            <p>VIF receives many inquiries from teachers, but we only have a limited number of positions that we can offer each year. When we are ready to consider applications from teachers in your country and subject area, we will invite you via email to submit the application. If invited to apply, we strongly suggest that you complete the application as soon as possible.</p>

                            <h3>Step 3: Complete telephone interview</h3>
                            <p>If your application is accepted, we will invite you to participate in a telephone interview to discuss your application and evaluate your compatibility with our program requirements. We will inform you of the outcome of your telephone interview in an email within one week.</p>

                            <h3>Step 4: Submit required documents</h3>
                            <p>After your successful telephone interview, VIF will then instruct you to prepare a series of documents to accompany your application. These documents, which include reference forms, official transcripts, a current criminal background check and several other items, will help us further determine your eligibility for the program.
                            </p>
                            <p>Providing a complete application package as soon as possible improves the likelihood of obtaining a U.S. position for the next school year. You will be asked to submit these documents at a personal interview.
                            </p>
                            <h3>Step 5: Complete in-person interview</h3>
                            <p>VIF hosts interviews in a variety of cities worldwide in order to meet with program applicants. This interview is an opportunity for you to meet with a VIF representative and share more information about why you would be a successful VIF teacher or trainee. We will inform you of the outcome of your personal interview in an email.</p>

                            <h3>Step 6: Notification of program eligibility</h3>
                            <p>After a successful personal interview and submission of all your documents, VIF will review your complete application package to ensure that you meet all VIF requirements and are eligible for any necessary U.S. teaching license and visa. If all criteria are met, VIF will begin looking for positions for you in our participating schools.</p>

                            <h3>Step 7: Consider U.S. teaching positions</h3>
                            <p>VIF will share your information with U.S. school districts that are interested in hiring international teachers. Your VIF Admissions Specialist will notify you if a school is interested in hiring you or speaking with you by phone about a teaching position.
                            </p>
                            <h3>Step 8: Accept offer!</h3>
                            <p>Some U.S. schools begin to extend offers to teachers as early as March or April, but the majority of schools tend to hire most of their new teachers and trainees between May and August. Despite the fact that most schools begin the academic year at the end of August, remember that some schools continue to fill positions as late as September, based on student enrollment and school budgets.</p>
                            <h2 id="driving">Driving</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et vulputate arcu. Morbi ligula lorem, facilisis vitae nunc quis, luctus vehicula nisi. Pellentesque odio elit, hendrerit id hendrerit ac, volutpat ut sem. Pellentesque tempus dictum erat, a varius tellus consequat ut. Aenean rhoncus ultrices urna id auctor. Cras vulputate velit eu augue gravida commodo in non dolor. Pellentesque id tristique leo. Aenean gravida velit id lacinia sollicitudin. Praesent varius sit amet eros sit amet tincidunt. Aenean volutpat dignissim neque, id consequat arcu iaculis ac.</p>
                            <h2 id="bringing_family">Bringing Family</h2>
                            <p>Nam velit turpis, porta ut risus a, blandit tristique nulla. Maecenas vitae egestas neque, vitae elementum nibh. Phasellus semper dui neque, sit amet rutrum augue posuere quis. Praesent ullamcorper lacinia fermentum. Ut nec felis bibendum, suscipit diam vitae, congue lorem. Etiam eleifend ipsum eu nibh vestibulum, sit amet blandit magna aliquet. Praesent vehicula posuere urna ac bibendum.</p>
                            <h2 id="length_of_stay">Length of Stay</h2>
                            <p>Sed tristique mauris vel arcu placerat, vulputate consectetur purus semper. Proin semper velit nec nunc volutpat, id sollicitudin sem varius. Nulla mattis, purus a egestas condimentum, tortor nulla fermentum dui, ac venenatis neque tortor ac diam. Sed sed justo vulputate, dignissim dui consequat, scelerisque nisl. In imperdiet neque viverra arcu suscipit vehicula. Praesent vel neque eu mauris semper posuere id at sapien. Morbi varius sapien quis est consequat, ac sollicitudin sapien consequat.</p>
                            <h2 id="professional_development">Professional Development</h2>
                            <p>Nullam imperdiet velit odio, vitae consectetur sem ornare nec. Suspendisse leo odio, ultrices non volutpat sed, tempus sit amet felis. Morbi odio eros, ornare ut orci nec, eleifend mattis enim. Vestibulum at accumsan diam, sit amet rutrum est. Fusce mollis, sapien non imperdiet viverra, ante tortor porttitor tellus, vitae semper magna odio in erat. Vivamus vitae tristique risus. Duis consectetur purus at elit scelerisque, vel rhoncus velit vehicula. Morbi consectetur massa at felis consectetur pharetra. Nullam eget ornare felis. Proin tortor metus, luctus ut sapien sed, elementum dictum libero. Integer sit amet lacinia ipsum. Nullam tristique porttitor dui in commodo.</p>
                            <h2 id="requirements">Requirements</h2>
                            <p>Nullam imperdiet velit odio, vitae consectetur sem ornare nec. Suspendisse leo odio, ultrices non volutpat sed, tempus sit amet felis. Morbi odio eros, ornare ut orci nec, eleifend mattis enim. Vestibulum at accumsan diam, sit amet rutrum est. Fusce mollis, sapien non imperdiet viverra, ante tortor porttitor tellus, vitae semper magna odio in erat. Vivamus vitae tristique risus. Duis consectetur purus at elit scelerisque, vel rhoncus velit vehicula. Morbi consectetur massa at felis consectetur pharetra. Nullam eget ornare felis. Proin tortor metus, luctus ut sapien sed, elementum dictum libero. Integer sit amet lacinia ipsum. Nullam tristique porttitor dui in commodo.</p>
                            <h2 id="teaching_position">Teaching Position</h2>
                            <p>Nullam imperdiet velit odio, vitae consectetur sem ornare nec. Suspendisse leo odio, ultrices non volutpat sed, tempus sit amet felis. Morbi odio eros, ornare ut orci nec, eleifend mattis enim. Vestibulum at accumsan diam, sit amet rutrum est. Fusce mollis, sapien non imperdiet viverra, ante tortor porttitor tellus, vitae semper magna odio in erat. Vivamus vitae tristique risus. Duis consectetur purus at elit scelerisque, vel rhoncus velit vehicula. Morbi consectetur massa at felis consectetur pharetra. Nullam eget ornare felis. Proin tortor metus, luctus ut sapien sed, elementum dictum libero. Integer sit amet lacinia ipsum. Nullam tristique porttitor dui in commodo.</p>
                            <h2 id="visa">Visa</h2>
                            <p>Nullam imperdiet velit odio, vitae consectetur sem ornare nec. Suspendisse leo odio, ultrices non volutpat sed, tempus sit amet felis. Morbi odio eros, ornare ut orci nec, eleifend mattis enim. Vestibulum at accumsan diam, sit amet rutrum est. Fusce mollis, sapien non imperdiet viverra, ante tortor porttitor tellus, vitae semper magna odio in erat. Vivamus vitae tristique risus. Duis consectetur purus at elit scelerisque, vel rhoncus velit vehicula. Morbi consectetur massa at felis consectetur pharetra. Nullam eget ornare felis. Proin tortor metus, luctus ut sapien sed, elementum dictum libero. Integer sit amet lacinia ipsum. Nullam tristique porttitor dui in commodo.</p>
                            <h2 id="salary_finance_benefits">Salary, Finance and Benefits</h2>
                            <p>Nullam imperdiet velit odio, vitae consectetur sem ornare nec. Suspendisse leo odio, ultrices non volutpat sed, tempus sit amet felis. Morbi odio eros, ornare ut orci nec, eleifend mattis enim. Vestibulum at accumsan diam, sit amet rutrum est. Fusce mollis, sapien non imperdiet viverra, ante tortor porttitor tellus, vitae semper magna odio in erat. Vivamus vitae tristique risus. Duis consectetur purus at elit scelerisque, vel rhoncus velit vehicula. Morbi consectetur massa at felis consectetur pharetra. Nullam eget ornare felis. Proin tortor metus, luctus ut sapien sed, elementum dictum libero. Integer sit amet lacinia ipsum. Nullam tristique porttitor dui in commodo.</p>
                            <h2 id="dual_language_teacher_residency_program">Dual Language Teacher Residency Program</h2>
                            <p>Nullam imperdiet velit odio, vitae consectetur sem ornare nec. Suspendisse leo odio, ultrices non volutpat sed, tempus sit amet felis. Morbi odio eros, ornare ut orci nec, eleifend mattis enim. Vestibulum at accumsan diam, sit amet rutrum est. Fusce mollis, sapien non imperdiet viverra, ante tortor porttitor tellus, vitae semper magna odio in erat. Vivamus vitae tristique risus. Duis consectetur purus at elit scelerisque, vel rhoncus velit vehicula. Morbi consectetur massa at felis consectetur pharetra. Nullam eget ornare felis. Proin tortor metus, luctus ut sapien sed, elementum dictum libero. Integer sit amet lacinia ipsum. Nullam tristique porttitor dui in commodo.</p>
                        </div>
                    </div>
                        <div id="nav_div" class="col-md-3" >
                            <div class="nav bs-docs-sidebar" role="complementary">
                                <ul class="nav bs-docs-sidenav affix" > 
                                    <li class="active"><a href="#application">Application</a></li>
                                    <li><a href="#driving">Driving</a></li>
                                    <li><a href="#bringing_family">Bringing Family</a></li>
                                    <li><a href="#length_of_stay">Length of Stay</a></li>
                                    <li><a href="#professional_development">Professional Development</a></li>
                                    <li><a href="#requirements">Requirements</a></li>
                                    <li><a href="#teaching_position">Teaching Position</a></li>
                                    <li><a href="#visa">Visa</a></li>
                                    <li><a href="#salary_finance_benefits">Salary, Finance and Benefits</a></li>
                                    <li><a href="#dual_language_teacher_residency_program">Dual Language Teacher Residency Program</a></li>
                                    <a href="app-requirements.php#teach_contact" class="btn btn-contact btn-lg">
                                        <span class="arrow">}</span>CONTACT US
                                    </a>
                                </ul>
                            </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</section>

<script>

//scrollspy for FAQ page  

// figure out a nice offset from the top of the page
                        var scrollTopOffset = $('.navbar-fixed-top').outerHeight() + 20;
                        // catch clicks on sidebar navigation links and handle them
                        $('.bs-docs-sidenav li a').on('click', function(evt){
                            // stop the default browser behaviour for the click 
                            // on the sidebar navigation link
                            evt.preventDefault();
                            // get a handle on the target element of the clicked link
                            var $target = $($(this).attr('href'));
                            // manually scroll the window vertically to the correct
                            // offset to nicely display the target element at the top
                            $(window).scrollTop($target.offset().top-(scrollTopOffset));
                        }); 


                var offsetHeightFaq=250;

                $('body').scrollspy({
                    'target':'.bs-docs-sidebar',
                    'offset': offsetHeightFaq
                });


          
                
                  


//end of scrollspy for FAQ
</script>


<?php

    echo "</div>";
    include 'footer.php';

?>