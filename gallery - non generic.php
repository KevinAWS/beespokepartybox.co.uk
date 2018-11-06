<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Gallery - Beespoke Party Box</title>

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
							    <li><a href="party-boxes.html">WHAT’S IN A PARTY BOX?</a></li>
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


		<!-- PAGE TITLE START -->
	<div class="page-title">
		<h2>Gallery</h2>
	</div>
	<!-- PAGE TITLE END -->
	
	
	<?php/*
	define('WP_USE_THEMES', false);
	require('../wp/wp-blog-header.php');
	// require('http://www.beespokepartybox.co.uk/wp/wp-blog-header.php');			

	
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
        // the_title();?>
		
							<?php
        // the_attachment_link($post->ID, false);
		// $img= wp_get_attachment_image_src($attachmentID, $imageSizeName); 
		$size = array("1280","960");
		$img = wp_get_attachment_image_src($post->ID, $size); 
		// echo $img[0];
		// echo $img[1];
							
        // the_excerpt();
    }
}*/

?>
	
	
	<?php /*
	
define('WP_USE_THEMES', false);
require('../wp/wp-blog-header.php');
global $post;
$args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' => 'any', 'post_parent' => null, 'order'=> 'ASC', 'orderby' => 'title' ); 
$attachments = get_posts( $args );
if ( $attachments ) {
	foreach ( $attachments as $post ) {
		setup_postdata( $post );
		the_title();
		the_attachment_link( $post->ID, false );
		the_excerpt();
	}
	wp_reset_postdata();
}*/
?>
	
<?php
	define('WP_USE_THEMES', false);
					require('../wp/wp-blog-header.php');
					// require('http://www.beespokepartybox.co.uk/wp/wp-blog-header.php');	
	?>

	<!-- GALLERY START -->
	<div id="gallery" class="editable-gallery" data-thumbnail-width="350"
    data-thumbnail-height="240"
    data-thumbnail-resize="trim" 
    data-links="false"
    class="m-tb80">
		<div class="container">
			
			<?php					
			
				$pirate_count = 0;
				$princess_count = 0;
				$dinosaur_count = 0;
				$pastel_count = 0;
				$unicorn_count = 0;
				$peter_count = 0;
				$bunting_count = 0;
			
				$grid_item_cat = array();
				$img_src = array();
				$img_count = 0;
			// $div_close = "</div>";

				$args = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => null, // any parent
					'order'=> 'ASC', 
					'orderby' => 'title'
					); 
				$attachments = get_posts($args);
				if ($attachments) {
					// $grid_item_cat = "<div class=\"grid-item\">";
					// $div_close = "</div>";							
				
					foreach ($attachments as $post) {
					setup_postdata($post);	
								
					$size = array("1280","960");
					$img = wp_get_attachment_image_src($post->ID, $size); 
					
					if(!$img[3]) {
						$pos = strpos($img[0], "gal");
						if ($pos !== false) {
						
							$pos = strpos($img[0], "pirate");
							if ($pos !== false) {	
								$pirate_count = $pirate_count + 1;
								$grid_item_cat[$img_count] = "<div class=\"grid-item cat-1\">";
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_count = $img_count + 1;
							}
							$pos = strpos($img[0], "princess");
							if ($pos !== false) {	
								$princess_count = $princess_count + 1;
								$grid_item_cat[$img_count] = "<div class=\"grid-item cat-2\">";
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_count = $img_count + 1;
							}
							$pos = strpos($img[0], "dinosaur");
							if ($pos !== false) {	
								$dinosaur_count = $dinosaur_count + 1;
								$grid_item_cat[$img_count] = "<div class=\"grid-item cat-4\">";
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_count = $img_count + 1;
							}
							$pos = strpos($img[0], "pastel");
							if ($pos !== false) {	
								$pastel_count = $pastel_count + 1;
								$grid_item_cat[$img_count] = "<div class=\"grid-item cat-5\">";
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_count = $img_count + 1;
							}
							$pos = strpos($img[0], "unicorn");
							if ($pos !== false) {	
								$unicorn_count = $unicorn_count + 1;
								$grid_item_cat[$img_count] = "<div class=\"grid-item cat-6\">";
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_count = $img_count + 1;
								// echo $img_src[$img_count];
							}
							$pos = strpos($img[0], "peter");
							if ($pos !== false) {	
								$peter_count = $peter_count + 1;
								$grid_item_cat[$img_count] = "<div class=\"grid-item cat-7\">";
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_count = $img_count + 1;
							}
							$pos = strpos($img[0], "bunting");
							if ($pos !== false) {	
								$bunting_count = $bunting_count + 1;
								$grid_item_cat[$img_count] = "<div class=\"grid-item cat-8\">";
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_count = $img_count + 1;
							}

							// echo $grid_item_cat[$img_count];
							// $img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
							// echo $img_src[$img_count];					
							// echo $div_close;	
							// echo $img_count;
						}
					}
				wp_reset_postdata();
											
					// echo $grid_item_cat_1;
					// echo $img_src;
					// echo $div_close;

						
				
			}
					
		}

		?>	
			

			<div class="isotope-filters">
				<button data-filter="" class="active">All</button> 
				
				
				<?php
				$df1 = "<button data-filter=\".cat-1\" >PIRATE </button>";
				$df2 = "<button data-filter=\".cat-2\">PRINCESS</button>"; 
                $df4 = "<button data-filter=\".cat-4\">DINOSAUR</button>"; 
                $df5 = "<button data-filter=\".cat-5\">PASTEL</button>"; 
                $df6 = "<button data-filter=\".cat-6\">RAINBOWS &amp; UNICORN</button>"; 
				$df7 = "<button data-filter=\".cat-7\">PETER RABBIT</button>"; 
                $df8 = "<button data-filter=\".cat-8\">PERSONALISED BUNTING</button>"; 				
				
				if($pirate_count > 0)
					echo $df1;
				
				if($princess_count > 0)
					echo $df2;
				
				if($dinosaur_count > 0)
					echo $df4;
				
				if($pastel_count > 0)
					echo $df5;
				
				if($unicorn_count > 0)
					echo $df6;					
				
				if($peter_count > 0)
					echo $df7;
				
				if($bunting_count > 0)
					echo $df8;				
				
				?>
			</div> <!-- /.portfolioFilter --> 
			


			<div class="isotope m-b50">
				<?php					
				$div_close = "</div>";
				$arrlength = count($grid_item_cat);				
				for($i=0;$i<$arrlength;$i++) {
					echo $grid_item_cat[$i];
					echo $img_src[$i];					
					echo $div_close;					
				}
					

				/* $args = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => null, // any parent
					'order'=> 'ASC', 
					'orderby' => 'title'
					); 
				$attachments = get_posts($args);
				if ($attachments) {
					$grid_item_cat = "<div class=\"grid-item\">";
					$div_close = "</div>";							
				
					foreach ($attachments as $post) {
					setup_postdata($post);	
								
					$size = array("1280","960");
					$img = wp_get_attachment_image_src($post->ID, $size); 
					
					if(!$img[3]) {
						
					$pos = strpos($img[0], "pirate");
					if ($pos !== false) {	
						$grid_item_cat = "<div class=\"grid-item cat-1\">";
					}
					$pos = strpos($img[0], "princess");
					if ($pos !== false) {	
						$grid_item_cat = "<div class=\"grid-item cat-2\">";
					}
					$pos = strpos($img[0], "dinosaur");
					if ($pos !== false) {	
						$grid_item_cat = "<div class=\"grid-item cat-4\">";
					}
					$pos = strpos($img[0], "pastel");
					if ($pos !== false) {	
						$grid_item_cat = "<div class=\"grid-item cat-5\">";
					}
					$pos = strpos($img[0], "unicorn");
					if ($pos !== false) {	
						$grid_item_cat = "<div class=\"grid-item cat-6\">";
					}
					$pos = strpos($img[0], "peter");
					if ($pos !== false) {	
						$grid_item_cat = "<div class=\"grid-item cat-7\">";
					}
					$pos = strpos($img[0], "bunting");
					if ($pos !== false) {	
						$grid_item_cat = "<div class=\"grid-item cat-8\">";
					}
						
					echo $grid_item_cat;
					$img_src = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
					echo $img_src;					
					echo $div_close; 									
					}
				wp_reset_postdata();
											
					// echo $grid_item_cat_1;
					// echo $img_src;
					// echo $div_close;

				
			}
		} */

		?>
				
				
				
				
				
				
				
                
                
                
			</div>


		</div>
	</div>
	<!-- GALLERY END -->


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