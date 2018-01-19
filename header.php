<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); wp_title(); ?></title>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<link rel = "alternate" type = "aplication/rss+xml" title = "RSS 2.0" href = "<?php bloginfo('rss2_url'); ?>" />
		<link rel = "alternate" type = "text/xml" title = "RSS .92" href = "<?php bloginfo('rss_url'); ?>" />
		<link rel = "alternate" type = "application/atom+xml" title = "Atom 0.3" href = "<?php bloginfo('atom_url'); ?>" />
		<script src="<?php bloginfo('template_url');?>/js/jquery-1.7.2.min.js" type="text/javascript" language="javascript"></script>
		<script src="<?php bloginfo('template_url');?>/js/fn.js" type="text/javascript" language="javascript"></script>
		<?php wp_head(); ?>
	</head>
	<body>


<!-- RotaBan.ru Ad Code -->
<script type="text/javascript">
(function(){
    var rb = document.createElement('script');
        d = new Date();
    d.setHours(0);
    d.setMinutes(0);
    d.setSeconds(0);
    d.setMilliseconds(0);
    rb.type = 'text/javascript';
    rb.async = true;
    rb.src = '//s1.rotaban.ru/rotaban.js?v=' + d.getTime();
    (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(rb);
})();
</script>
<!-- END RotaBan.ru Ad Code -->

		<div class = "header_wrapper">
			<div class = "menu_bg">
				<div class = "header">
					<div class = "logo">
						<a href = "http://hard-athlete.ru"></a>
					</div>
					<div class = "menu">
						<?php wp_nav_menu(array('theme_location'  => 'header_menu', 'items_wrap' => '<ul>%3$s</ul>', 'container' => false)); ?>
					</div>
				</div>
			</div>
		</div>