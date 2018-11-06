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
							
				$menu = array();
				$menu_string = "";
				$df = array();
			
				$grid_item_cat = array();
				$img_src = array();
				$img_count = 0;
				$img_category = array();
				$categories = 0;
				
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
				
					foreach ($attachments as $post) {
					setup_postdata($post);	
								
					$size = array("1280","960");
					$img = wp_get_attachment_image_src($post->ID, $size); 
					
						
					// echo "filename = $img[0]" . "\n<br />";
						
					if(!$img[3]) {
						$pos = strpos($img[0], "gal");
						// echo "pos = $pos" . "\n<br />";
						if ($pos !== false) {
						
							$pos1 = strpos($img[0], "£");																							
							$pos2 = strpos($img[0], "£", $pos1+1);
							
							$galNumber = substr($img[0],$pos+3,$pos1-$pos-3);
							// echo " galNumber = $galNumber" . "\n<br />";	
							
							// echo " pos1 = $pos1" . "\n<br />";
							// echo " pos2 = $pos2" . "\n<br />";
							if ($pos !== false) {
								$menu_string = substr($img[0],$pos1+2,$pos2-$pos1-2);								
								
								$pos5 = strpos($menu_string,"LETS");
								
								if($pos5 !== false){
									$menu_string = substr($menu_string,0,$pos5+3) . "'" . substr($menu_string,$pos5+3);
								}
												
								$pos4 = strpos($menu_string,"-AND-");
								
								if($pos4 !== false){
									$menu_string = substr($menu_string,0,$pos4) . " & " . substr($menu_string,$pos4+4);
								}
								
								$pos3 = strpos($menu_string,"-");
								
								while($pos3 !== false){
									$menu_string = substr($menu_string,0,$pos3) . " " . substr($menu_string,$pos3+1);
									$pos3 = strpos($menu_string,"-");
								}
								
								// echo "menu_string = $menu_string" . "\n<br />";
								if(is_null($menu[$menu_string])){
									$menu[$menu_string] = 0;
									// $categories = $categories + 1;
									$categories = $galNumber;
									$img_category[$menu_string] = $categories;
									$grid_item_cat[$img_count] = "<div class=\"grid-item cat-$categories\">";
									$df[$categories] = "<button data-filter=\".cat-$categories\" >$menu_string</button>";
								}
								else {
									$grid_item_cat[$img_count] = "<div class=\"grid-item cat-$img_category[$menu_string]\">";
								}
								$menu[$menu_string] = $menu[$menu_string] + 1;
								// echo "menu[$menu_string] = $menu[$menu_string]" . "\n<br />";								
								$img_src[$img_count] = "<img src=\"" . $img[0] . "\" alt=\"gallery\">";
								$img_category[$img_count] = $menu[$menu_string];
								$img_count = $img_count + 1;
								// echo "img_count = $img_count" . "\n<br />";
							}
						}						
					}
					wp_reset_postdata();											
					
			}
					
		}			
			
		?>	
			

			<div class="isotope-filters">
				<button data-filter="" class="active">All</button> 
				
				
				<?php 
				for($i=1;$i<=sizeof($df);$i++){
					echo $df[$i];
				}									
								
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