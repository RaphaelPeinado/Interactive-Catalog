<footer>
	<div class="midias-footer">
		<div class="container">
			<ul>
				<li><a href="https://www.instagram.com/swgbrasiloficial/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/instagram.png" loading = “lazy”></a></li>
				<li><a href="https://www.facebook.com/SWGBrasilOficial/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook.png" loading = “lazy”></a></li>
			</ul>
		</div><!-- /container -->
	</div><!-- /midias-footer -->
	<div class="banner-footer">
		<?php 
			query_posts("post_type=BannerInf");
			while (have_posts()) : the_post();                       
			$thumb = get_the_post_thumbnail_url();
			$titulo = get_the_title();
		?>
		<div class="banner-content">
			<figure>
				<img src="<?=$thumb?>" alt="<?=$titulo?>" loading = “lazy”>
			</figure>
		</div><!-- /banner-content -->
		<?php 
			endwhile;
			wp_reset_query();
		?>
	</div><!-- /banner-footer -->
	<div class="made">
		<a href="https://veci.com.br" target="_blank">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/made-V.png" alt="Veci" loading = “lazy” target="_blank">
		</a>
	</div><!-- /made -->
</footer>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	
</body>
</html>