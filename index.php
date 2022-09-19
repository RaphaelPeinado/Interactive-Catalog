<?php get_header(); ?>
<main>
	<section class="banner">
		<?php 
			query_posts("post_type=BannerSup");
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
	</section><!-- /banner -->
	<section class="collection black-bg" id="destaque">
		<div class="container">
			<div class="collec-name">
				<h2>Destaque</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Destaque");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Destaque");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection black-bg-->
	<section class="collection" id="archive-series">
		<div class="container">
			<div class="collec-name">
				<h2>Archive Series</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Archive Series");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Archive Series");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection-->
	<section class="collection black-bg" id="marine-star">
		<div class="container">
			<div class="collec-name">
				<h2>Marine Star</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Marine Star");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Marine Star");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection black-bg-->
	<section class="collection" id="classic">
		<div class="container">
			<div class="collec-name">
				<h2>Classic</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Classic");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Classic");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection-->
	<section class="collection black-bg" id="classic-feminino">
		<div class="container">
			<div class="collec-name">
				<h2>Classic Feminino</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Classic Feminino");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Classic Feminino");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection black-bg-->
	<section class="collection" id="crystal">
		<div class="container">
			<div class="collec-name">
				<h2>Crystal</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Crystal");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Crystal");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection-->
	<section class="collection black-bg" id="curv">
		<div class="container">
			<div class="collec-name">
				<h2>Curv</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Curv");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Curv");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection black-bg-->
	<section class="collection" id="futuro">
		<div class="container">
			<div class="collec-name">
				<h2>Futuro</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Futuro");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Futuro");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection-->
	<section class="collection black-bg" id="maquina">
		<div class="container">
			<div class="collec-name">
				<h2>Maquina</h2>
			</div><!-- /collec-name -->
			<div class="item-wrap">
				<?php 
					query_posts("category_name=Maquina");
					while (have_posts()) : the_post();                       
					$thumb = get_the_post_thumbnail_url();
					$conteudo = get_the_content();
					$titulo = get_the_title();
					$nome = get_post_meta(get_the_ID(), 'nome', true);
				?>
				<div class="item-content">
					<div class="item-img">
						<figure>
							<img src="<?=$thumb?>" alt="<?=$nome?> - <?=$titulo?>" loading = “lazy”>
						</figure>
						<div class="bt-action">
							<button class="bt-gallery bt-destaque" value="<?=$titulo?>">Ver Mais</button>
							<button class="bt-select" value="<?=$titulo?>">Selecionar</button>
						</div><!-- /bt-action -->
					</div><!-- /item-img -->
					<h3><?=$titulo?></h3>
					<h4><?=$nome?></h4>
					<p><?=$conteudo?></p>
				</div><!-- /item-content -->
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div><!-- /item-wrap -->
			<div class="gallery">
				<div class="gallery-position">
					<?php 
						query_posts("category_name=Maquina");
						while (have_posts()) : the_post();                       
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$titulo = get_the_title();
						$front = get_post_meta(get_the_ID(), 'front', true);
						$back = get_post_meta(get_the_ID(), 'back', true);
						$perfil = get_post_meta(get_the_ID(), 'perfil', true);
						$info = get_post_meta(get_the_ID(), 'info', true);
					?>
					<div class="gallery-content <?=$titulo?>">
						<div class="align-wrap">
							<div class="gallery-align">
								<button class="bt-close-gal">X</button>
								<div class="slider-for">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-for -->
								<div class="slider-nav">
									<img src="<?=$front?>" loading = “lazy”>
									<img src="<?=$back?>" loading = “lazy”>
									<img src="<?=$perfil?>" loading = “lazy”>
								</div><!-- /slider-nav -->
							</div><!-- /gallery-align -->
							<div class="info-align">
								<img src="<?=$info?>" loading = “lazy”>
							</div><!-- /info-align -->
						</div><!-- /align-wrap -->
					</div><!-- /gallery-content -->
					<?php 
						endwhile;
						wp_reset_query();
					?>
				</div><!-- /gallery-position -->
			</div><!-- /gallery -->
		</div><!-- /container -->
	</section><!-- /collection black-bg-->
	<div class="cart-wrap">
		<div class="selected-relogios">
			
		</div><!-- /selected-relogios -->
		<button type="submit" name="submit" class="bt-enviar">Enviar</button>	
	</div><!-- /cart-wrap -->
</main>
<?php get_footer(); ?>