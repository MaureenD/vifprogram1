<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Contact Us",$buffer);
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
            $('#btnContact').addClass('active');
         </script>

    
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-1">
                    <h1 class="script">Contact Us</h1>
                </div>
                <div class="clear program col-md-3">
                    <p></p>
                    <button type="button" class="btn btn-vif btn-lg">
                    <span class="fa fa-envelope fa-lg"></span>contact us
                    </button>
                </div>
             
            </div>
  
        </div>
    </div>

    <?php

    echo "</div>";
    include 'footer.php';
    ?>