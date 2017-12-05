<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=medium-dpi" />

	<?php
	
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
	
		echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
		
	} 
	
	?>

	<title><?php wp_title(''); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
		(function(d) {
		var config = {
		  kitId: 'qxr3nzr',
		  scriptTimeout: 3000,
		  async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	
	<div class="header-top hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="img img-responsive" src="<?php the_field('logo', 'option'); ?>" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form role="search" id="sites-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		 <label class="sr-only" for="search-text">Search...</label>
		 <input type="text" class="search-field" id="search-text" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
		 <button type="submit" id="ss-icon"><i class="fa fa-search"></i></button>
	</form>