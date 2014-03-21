<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Our Values",$buffer);
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
            $('#btnValues').addClass('active');

            $('#portfolio-grid').mixitup({
                        targetSelector: '.portfolio-mix',
                        });
         </script>
       <div id="values">
            <div class="container">
                <h3>Our Values</h3>
                <!-- Values Interaction portion-->
                <div class="clearfix">
                    <ul id="portfolio-grid" class="row portfolio-row">
                        <li class="portfolio-mix col-xs-6 col-md-4">
                            <!-- Work item -->
                            <figure class="portfolio-item" id="item1">
                                <a href="#item1" class="folio">
                                <img  src="images/values6.jpg" alt="">
                                <div class="caption-bg"></div>
                                <div class="meta">
                                    <h4>Global Perspective</h4>
                                </div>
                                <p class="portfolio-item-description">Lorem ipsum maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                                </a>
                            </figure>
                        </li>
                        <li class="portfolio-mix col-xs-6 col-md-4">
                            <!-- Work item -->
                            <figure class="portfolio-item" id="item2">
                                <a href="#item2" class="folio">
                                <img  src="images/values5.jpg" alt="">
                                <div class="caption-bg"></div>
                                <div class="meta">
                                    <h4>Innovative Design</h4>
                                </div>
                                <p class="portfolio-item-description">Lorem ipsum maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                                </a>
                            </figure>
                        </li>
                        <li class="portfolio-mix col-xs-6 col-md-4">
                            <!-- Work item -->
                            <figure class="portfolio-item" id="item3">
                                <a href="#item3" class="folio">
                                <img  src="images/values4.jpg" alt="">
                                <div class="caption-bg"></div>
                                <div class="meta">
                                    <h4>Scale</h4>
                                </div>
                                <p class="portfolio-item-description">Lorem ipsum maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                                </a>
                            </figure>
                        </li>
                        <li class="portfolio-mix col-xs-6 col-md-4">
                            <!-- Work item -->
                            <figure class="portfolio-item" id="item4">
                                <a href="#item4" class="folio">
                                <img  src="images/values3.jpg" alt="">
                                <div class="caption-bg"></div>
                                <div class="meta">
                                    <h4>Collaboration</h4>
                                </div>
                                <p class="portfolio-item-description">Lorem ipsum maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                                </a>
                            </figure>
                        </li>
                        <li class="portfolio-mix col-xs-6 col-md-4">
                            <!-- Work item -->
                            <figure class="portfolio-item" id="item5">
                                <a href="#item5" class="folio">
                                <img  src="images/values2.jpg" alt="">
                                <div class="caption-bg"></div>
                                <div class="meta">
                                    <h4>Impact</h4>
                                </div>
                                <p class="portfolio-item-description">Lorem ipsum maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                                </a>
                            </figure>
                        </li>
                        <li class="portfolio-mix col-xs-6 col-md-4">
                            <!-- Work item -->
                            <figure class="portfolio-item" id="item6">
                                <a href="#item6" class="folio">
                                <img  src="images/values1.jpg" alt="">
                                <div class="caption-bg"></div>
                                <div class="meta">
                                    <h4>Learning</h4>
                                </div>
                                <p class="portfolio-item-description">Lorem ipsum maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                                </a>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
<?php

    echo "</div>";
    include 'footer.php';
?>        