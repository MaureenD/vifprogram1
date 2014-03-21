<?php
if($_GET['type']!='ajax'){
    include 'header.php';
    echo "<div id='main-content'>";
}
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
            $('#btnPress').addClass('active');
         </script>

    
    <div id="releases">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-1">
                    <h1 class="script">Press Releases</h1>
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
if($_GET['type']!='ajax'){
    echo "</div>";
    include 'footer.php';
}?>