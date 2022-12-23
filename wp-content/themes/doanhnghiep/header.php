<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sâm tố nữ puecolazen là sản phẩm chức năng của công ty kohinoor. Cung cấp các dưỡng chất tốt cho da, là nhân tố tạo nên sự khác biệt ở phái nữ mà còn tác động toàn diện đến sức khỏe và sinh lý của người phụ nữ." />
    <meta name="keywords" content="sâm tố nữ, thực phẩm chức năng, phụ nữ làm đẹp, làm đẹp da">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
	<!-- js -->
	<script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Ads: 522974539 -->

</head>
<body <?php body_class() ?>>
	<div class="bg_opacity"></div>
	<?php if ( wp_is_mobile() ) { ?>
		<div id="menu_mobile_full">
			<nav class="mobile-menu">
				<p class="close_menu"><span><i class="fa fa-times" aria-hidden="true"></i></span></p>
				<?php 
				$args = array('theme_location' => 'menu_mobile');
				?>
				<?php wp_nav_menu($args);?>
			</nav>
		</div>
	<?php }?>
	<header class="header">
		<div class="top_header">
			<!-- display account top_header mobile -->
			
			<span class="icon_mobile_click"><img src="<?php echo BASE_URL; ?>/images/icon_mb_click.png"></span>
			<div class="container">
				<div class="logo_site">
					<?php 
					if(has_custom_logo()){
						the_custom_logo();
					}
					else { ?> 
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
				</div>

				<div class="cart_scheader">
					<div class="cart_hd">
						<figure><img src="<?php echo BASE_URL; ?>/images/cart_header.png"></figure>
					</div>
					<?php if( get_option('header_fb') || get_option('header_phone') || get_option('header_insta') ) { ?>
						<ul class="scheader">
							<li style="padding-right: 5px" s><a href="<?php echo get_option('header_fb');?>" target="_blank"><img src="<?php echo BASE_URL; ?>/images/fb_header.png" ></a></li>

							<li><a href="tel:<?php echo get_option('header_phone');?>"><img src="<?php echo BASE_URL; ?>/images/phone_header.png"></a></li>
						</ul>
					<?php }?>
				</div>
                <nav class="nav nav_primary">
                    <?php
                    $args = array('theme_location' => 'primary');
                    ?>
                    <?php wp_nav_menu($args); ?>
                </nav>
			</div>
		</div>
		
		<?php if(is_front_page()){ ?>
			<?php echo do_shortcode('[metaslider id="29"]'); ?>
		<?php }?>
	</header>