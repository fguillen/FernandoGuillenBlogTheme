	<div id="sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>
<li>
<br />
<a href="http://www.abredatos.es"><img src="http://www.abredatos.es/wp-content/uploads/2010/04/150x75-B.png" alt="" title="150x75 B" width="151" height="75" class="" /></a>
</li>
<!--li>
<h5>Conferencia Rails</h5>
<a href="http://www.conferenciarails.org">
<img border="0" src="http://www.conferenciarails.org/wp-content/uploads/2008/11/asistente200x120.png"/>
</a></li-->

<!--li>
<h5>Apoyo a la Wikipedia</h5><br />
<a href="http://wikimediafoundation.org/wiki/Donate/es"><img border="0" alt="Wikipedia Affiliate Button" src="http://upload.wikimedia.org/wikipedia/foundation/a/a8/2008_fundraiser_square_button-es.png" /></a></li-->


			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Autor</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>

			<!--?php wp_list_pages('title_li=<h5>Pages</h5>' ); ?-->

			<li><h5>Archives</h5>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h5>Categories</h5>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h5>Meta</h5>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>

<!-- phixter visits -->
<br />
<br />
<a href="http://phixtervisits.fernandoguillen.info/">
<img border="0" src="http://phixtervisits.fernandoguillen.info/signal/42fb11" height="64px" width="149px" />
</a>



	</div>

