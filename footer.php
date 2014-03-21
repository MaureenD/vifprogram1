<!-- Footer -->
</div>
<footer id="footer" class="bs-docs-footer">
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-10 col-xs-10"><p class="desc">
            <span>VIF International Education</span> builds global education programs that prepare students for success in an interconnected world. For more than 25 years, educators have leveraged VIF’s professional development and curriculum, language acquisition and teacher exchange programs to generate engaging learning environments where students can excel in core curriculum as well as develop valuable critical and creative thinking skills.<br><br>
            all content © 2014 VIF International Education</p>
        </div>
        <div class="col-md-1  col-sm-2 col-xs-2 pull-right">
            <img class="img-responsive" src="images/footer/certified-b.png" />
        </div>
        <div class="clearfix col-md-1 col-sm-2 col-xs-2">
            <p><span><a href="index.php">Home</a></span><p>
        </div>
        <div class="col-md-2 col-xs-3">
            <p>
            <span><a href="about.php">About VIF</a></span>
            </p>
            <p>
            <a href="about.php#history">Our Story</a>
            </p>
            <p>
            <a href="about.php#team">VIF Staff</a>
            </p>
            <p>
            <a href="about.php#jobs">Jobs at VIF</a>
            </p>
        </div>
        <div class="col-md-2 col-xs-3">
            <p><span>
            <a href="blog.php">Press</a></span>
            </p>
            <p>
            <a href="blog.php#releases">News</a>
            </p>
            <p>
            <a href="blog.php">Blog</a>
            </p>
            <p>
            <a href="casestudies.php">Case Studies</a>
            </p>
        </div>
        <div class="col-md-3  col-xs-4">
            <p><span>Contact Us</span></p>
           
        
        <table class="table table-condensed icons">
            <tr>
                <td><img class="footer-icon img-responsive"  src="images/footer/facebook.png" />
                </td>
                <td><img class="footer-icon img-responsive"  src="images/footer/twitter.png" />
                </td>
                <td><img class="footer-icon img-responsive"  src="images/footer/youtube.png" />
                </td>
            </tr>
            <tr>
                <td><img class="footer-icon img-responsive"  src="images/footer/pinterest.png" />
                </td>
                <td><img class="footer-icon img-responsive"  src="images/footer/linkedin.png" />
                </td>
                <td><img class="footer-icon img-responsive"  src="images/footer/google.png" />
                </td>
            </tr>
        </table>
        
    </div>
 </div>   

</footer>
<!-- End of Footer -->
<!-- Scroll top -->
<div class="scrolltotop" title="Scroll to Top">
<i class="fa fa-chevron-up"></i>
</div>
<!-- End scroll top
<script type="text/javascript" src="js/app.js"></script>-->
<script>
$(document).ready(function(){

    var pgWidth = $('#main-content').outerWidth();
    $('#main-content').css('width',pgWidth);
   

    $('h1').fitText();


    //about page scrollspy
    var offsetHeight = 109;

    $('body').scrollspy({
    'target':'#about-nav',
    'offset': offsetHeight
        });

    $('body').scrollspy({
    'target':'#app-nav',
    'offset': offsetHeight
        });

    $('body').scrollspy({
    'target':'#press-nav',
    'offset': offsetHeight
        });

    $('.brain').popover();
    $('.exchange').popover();

    $('#portfolio-grid').mixitup({
    targetSelector: '.portfolio-mix',
        });
});

     

</script>
</body>
</html>