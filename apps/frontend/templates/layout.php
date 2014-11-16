<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="cs"> 
    <head>
        <meta http-equiv="content-language" content="cs" /> 
        <meta name="author" content="Jan Damek" /> 
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts(); ?>
        <script type="text/javascript">
            $(function() {
                $('#menu > ul').dropotron({
                    mode: 'fade',
                    globalOffsetY: 11,
                    offsetY: -15
                });
            });
        </script>       
        <?php if (NavigationHelper::getSetting()->getGaCode()) : ?>
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', '<?php echo NavigationHelper::getSetting()->getGaCode(); ?>']);
                _gaq.push(['_trackPageview']);
                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>
        <?php endif; ?>
    </head>
    <body>
        <?php
        use_helper('Navigation');
        ?>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><?php echo link_to(NavigationHelper::getSetting()->getSitename(), '@homepage'); ?>
                </div>
                <div id="slogan">
                    <h2><?php echo NavigationHelper::getSetting()->getSlogan(); ?></h2>
                </div>
                <?php include_component('homepage', 'lang');?>
            </div>
            <?php
            include_component('homepage', 'menu');

            include_component('homepage', 'slider');
            ?>	
            <div id="page">
                <div id="content">            
                    <?php echo $sf_content ?>
                    <!--			<div class="box" id="content-box1">
                                                    <h3>Mauris justo</h3>
                                                    <ul class="section-list">
                                                            <li class="first">
                                                                    <img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" />
                                                                    <span>Condimentum et porttitor tristique nec aliquet magnis pretium quam nibh.</span>
                                                            </li>
                                                            <li>
                                                                    <img class="pic alignleft" src="images/pic02.jpg" width="70" height="70" alt="" />
                                                                    <span>Posuere elementum sapien justo tortor nulla fringilla suspendisse nascetur.</span>
                                                            </li>
                                                            <li class="last">
                                                                    <img class="pic alignleft" src="images/pic03.jpg" width="70" height="70" alt="" />
                                                                    <span>Ipsum quis vestibulum feugiat congue nunc laoreet volutpat lorem ipsum sociis.</span>
                                                            </li>
                                                    </ul>
                                            </div>
                                            <div class="box" id="content-box2">
                                                    <h3>Magnis hendrerit erat</h3>
                                                    <p>
                                                            Neque neque ornare penatibus tristique fusce turpis. Purus sagittis euismod at ornare suscipit tempus.
                                                    </p>
                                                    <ul class="list">
                                                            <li class="first"><a href="#">Ipsum phasellus ullamcorper</a></li>
                                                            <li><a href="#">Mollis mattis tempus amet</a></li>
                                                            <li><a href="#">Ipsum aliquet dignissim vitae</a></li>
                                                            <li><a href="#">Orci metus curae sed mollis</a></li>
                                                            <li class="last"><a href="#">Tristique amet venenatis</a></li>
                                                    </ul>
                                            </div>-->
                    <br class="clearfix" />
                </div>
                <!--		<div id="sidebar">
                                        <div class="box">
                                                <h3>Cursus magnis</h3>
                                                <ul class="list">
                                                        <li class="first"><a href="#">Adipiscing tincidunt</a></li>
                                                        <li><a href="#">Euismod elit sollicitudin</a></li>
                                                        <li><a href="#">Dolor magnis et lacinia</a></li>
                                                        <li><a href="#">Mauris ornare aenean</a></li>
                                                        <li class="last"><a href="#">Ante semper fringilla</a></li>
                                                </ul>
                                        </div>
                                        <div class="box">
                                                <h3>Morbi at varius</h3>
                                                <div class="date-list">
                                                        <ul class="list date-list">
                                                                <li class="first"><span class="date">2/08</span> <a href="#">Quam sed tempus</a></li>
                                                                <li><span class="date">2/05</span> <a href="#">Lorem et vestibulum</a></li>
                                                                <li><span class="date">2/01</span> <a href="#">Risus aenean tellus</a></li>
                                                                <li class="last"><span class="date">1/31</span> <a href="#">Tristique et primis</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>-->
                <br class="clearfix" />
            </div>
            <div id="page-bottom">
                <?php
                include_component('homepage', 'footer');
                ?>
                <!--                <div id="page-bottom-sidebar">
                                    <h3>Sed interdum</h3>
                                    <ul class="list">
                                        <li class="first"><a href="#">Suspendisse ultricies</a></li>
                                        <li><a href="#">Tortor mollis enim</a></li>
                                        <li class="last"><a href="#">Lorem enim tempor</a></li>
                                    </ul>
                                </div>-->
                <br class="clearfix" />
            </div>
        </div>
        <div id="footer">
            <?php echo NavigationHelper::getSetting()->getFooterText(); ?>
        </div>                    
    </body>
</html>
