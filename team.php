<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Team",$buffer);
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
            $('#btn-about').addClass('active');
            $('#btn-about > .sub').show();
            $('#btn-about > .sub > ul >li').removeClass('active');
            $('#btnTeam').addClass('active');

            
         </script>
       <div id="team">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Meet the team</h3>
                    </div>
                 </div>
            </div>
           <!-- team grid -->
            <div>
                <ul id="og-grid" class="og-grid">
                    <li>
                        <a href="#" data-largesrc="images/team/david_young.jpg" data-title="David Young" data-description="Chief Executive Officer">
                        <img src="images/team/thumbs/david_young.jpg" alt="david young"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/mark_otter.jpg" data-title="Mark Otter" data-description="Product and Technology">
                        <img src="images/team/thumbs/mark_otter.jpg" alt="mark otter"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/vicky_kim.jpg" data-title="Vicky Kim" data-description="Program Management">
                        <img src="images/team/thumbs/vicky_kim.jpg" alt="vicky kim"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/tom_lee.jpg" data-title="Tom Lee" data-description="Legal and Government Affairs">
                        <img src="images/team/thumbs/tom_lee.jpg" alt="tom lee"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/felix_muriithi.jpg" data-title="Felix Muriithi" data-description="Controller">
                        <img src="images/team/thumbs/felix_muriithi.jpg" alt="felix muriithi"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/tim_poe.jpg" data-title="Tim Poe" data-description="Information Technology">
                        <img src="images/team/thumbs/tim_poe.jpg" alt="tim poe"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/anamaria_knight.jpg" data-title="Anamaria Knight" data-description="Curriculum and Instructional Design">
                        <img src="images/team/thumbs/anamaria_knight.jpg" alt="anamaria knight"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/maria_carazo.jpg" data-title="Maria Carazo" data-description="Teacher Selection">
                        <img src="images/team/thumbs/maria_carazo.jpg" alt="maria carazo"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/laura_tobal.jpg" data-title="Laura Tobal" data-description="Teacher Resources">
                        <img src="images/team/thumbs/laura_tobal.jpg" alt="Laura Tobal"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/peggy_thompson.jpg" data-title="Peggy Thompson" data-description="Global Schools Network">
                        <img src="images/team/thumbs/peggy_thompson.jpg" alt="Peggy Thompson"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/christy_thomas.jpg" data-title="Christy Thomas" data-description="Directory of Sales">
                        <img src="images/team/thumbs/christy_thomas.jpg" alt="Christy Thomas"/>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-largesrc="images/team/nathan_tomasini.jpg" data-title="Nathan Tomasini" data-description="District and School Partnerships">
                        <img src="images/team/thumbs/nathan_tomasini.jpg" alt="Nathan Tomasini"/>
                        </a>
                    </li>
                </ul>
            </div>
         </div>
 <?php

    echo "</div>";
    include 'footer.php';
?>