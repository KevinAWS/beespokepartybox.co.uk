<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Party Boxes - Beespoke Party Box</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	
	<!-- Revolution slider -->
	<link href="assets/revolution/css/settings.css" rel="stylesheet" type="text/css">
	<link href="assets/revolution/css/layers.css" rel="stylesheet" type="text/css">
	<link href="assets/revolution/css/navigation.css" rel="stylesheet" type="text/css">


	<!-- stylesheet -->
	<link rel="stylesheet" href="css/main.css">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->	  
</head>
	
<body>
	
    <!-- HEADER START -->
	<header id="header" class="header res-padd-lr90">
		<div class="logo m-tb50">
			<a href="index.html" class="">
				<img src="images/logo-beespoke.png" alt="Beespoke Party Box">
			</a>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<div class="social-icons">
						<a href="https://www.facebook.com/BeespokePartyBox" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						    <span class="sr-only">Toggle navigation</span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						  </button>
						 <a class="navbar-brand" href="index.html">Menu</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							    <li><a href="index.html">HOME</a></li>
							    <li class="active"><a href="party-boxes.html">WHAT’S IN A PARTY BOX?</a></li>
                                <li><a href="about-me.html">ABOUT ME</a></li>
							    <li><a href="faqs.html">FAQs</a></li>
							    <li><a href="contact.html">CONTACT US</a></li>
								<li><a href="shop.html">SHOP</a></li>	
								<li><a href="../wp">BLOG</a></li>								
						    </ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
				<div class="col-md-2  col-sm-12">
					<form id="search-form" action="#" method="post">
		                <div id="input"><input type="text" name="search-terms" id="search-terms" placeholder="Enter search terms..."></div>
		            	<div id="label"><label for="search-terms" id="search-label"></label></div>
		            </form>
				</div>
			</div>
		</div>
	</header>
	<!-- HEADER END -->
	
<?php
require('../wp/wp-blog-header.php');
?>	

<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
<?php the_date(); echo "<br />"; ?>
<?php the_title(); ?>    
<?php the_excerpt(); ?> 
<?php
endforeach;
?>
	
	<?php 
				echo '1.';
				if ( have_posts() ) : while ( have_posts() ) : the_post();    

                    $args = array(
                        'post_type' => 'attachment',
                        'numberposts' => -1,
                        'post_status' => null,
                        'post_parent' => $post->ID
                        );

                    $attachments = get_posts( $args );
                    if ( $attachments ) {
                        foreach ( $attachments as $attachment ) {
                            echo '<li>';
                            echo wp_get_attachment_image( $attachment->ID, 'full' );
                            echo '<p>';
                            echo apply_filters( 'the_title', $attachment->post_title );
                            echo '</p></li>';
                        }
                    }

            endwhile; endif; 
				echo '2.';
				?>
	
	<?php

$args = array(
    'post_type' => 'attachment',
    'numberposts' => -1,
    'post_status' => null,
    'post_parent' => null, // any parent
    ); 
$attachments = get_posts($args);
if ($attachments) {
    foreach ($attachments as $post) {
        setup_postdata($post);
        the_title();
        the_attachment_link($post->ID, false);
        the_excerpt();
    }
}

?>
	
	<a href="../wp">Blog</a>
	
	<!-- FOOTER START -->
	<footer id="footer" class="footer-section p-tb10050">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="widget widget_contact">
						<h2 class="widget-title">CONTACT</h2>
						<ul class="list-unstyled">
							<li>
								<div class="media-body">
									Tel: 07703 809953
								</div>
							</li>
							<li>
								<div class="media-body">
									<a href="mailto:jennymacdonald@beespokepartybox.com"  target="_top">
									Email: jennymacdonald@beespokepartybox.com
									</a>
								</div>
							</li>
                            <li>
								<div class="media-body">
									<a href="http://www.facebook.com/beespokepartybox"  target="_blank">
									Facebook: facebook.com/beespokepartybox
									</a>
								</div>
							</li>
							<li>
								<div class="media-body">
									<a href="http://www.pinterest.co.uk"  target="_blank">
									Pinterest
									</a>
								</div>
							</li>
							<li>
								<div class="media-body">
									<a href="https://www.instagram.com/beespokepartybox/" target="_blank">
									Instagram
									</a>
								</div>
							</li>
                            <li>
								<div class="media-body">
									&copy; 2017 Beespoke Party Box
								</div>
							</li>
						</ul>
					</div> <!-- /.widget_contact -->
				</div>

                <div class="col-md-6">
					<div class="widget widget_recent_entries">		
				    <img src="images/logo-beespoke-footer.png" alt="" class="img-responsive"/> </div> 
					<!-- /.widget_recent_entries -->
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->
	
	<div class="bottom-footer">
    	<div class="col-md-12"> 
        	<ul class="footer-nav">
            	<li> <a href="WebsiteprivacypolicyGDPRcompliant Beespoke Party Box.pdf"> Privacy Policy </a> </li>
                <li> <a href="Do I use cookies.pdf"> Cookies </a> </li>                                
            </ul>
        </div>
    </div>

	<!-- js files -->
	<script src="js/jquery-3.0.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	
	<!-- REVOLUTION JS FILES -->
	<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/revolution/js/jquery.themepunch.revolution.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>


	<!-- custom js -->
	<script src="js/custom.js"></script>
	
</body>
</html>