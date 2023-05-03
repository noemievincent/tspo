<?php //Template Name: Partenaires
get_header();
$partners = tspo_get_partners();
?>
	<div class="partner grid-default mt-12 rl:mt-24">
		<div
			class="col-start-2 col-span-10 xl:col-start-3 xl:col-span-9 flex flex-col max-rg:items-center gap-8 rl:gap-12">
			<h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
			<div
				class="w-full grid grid-cols-1 md:grid-cols-2 rg:grid-cols-3 rl:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6 gap-12 gap-y-8 rl:gap-5 rl:gap-y-14">
				<?php while ( $partners->have_posts() ): $partners->the_post(); ?>
					<article aria-labelledby="<?= sanitize_title( get_the_title() ) ?>"
					         class="group relative flex flex-col-reverse items-center gap-3">
						<h2 id="<?= sanitize_title( get_the_title() ) ?>"
						    class="text-xl <?= get_field( 'link' ) ? 'group-hover:text-orange group-focus:text-orange transition-colors' : '' ?>"><?= get_the_title() ?></h2>
						<div class="w-56 h-full flex items-center justify-center">
							<div class="h-auto w-full">
								<img src="<?= get_the_post_thumbnail_url() ?>" alt=""
								     class="h-full w-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 group-focus:grayscale-0 group-focus:opacity-100 transition-all">
							</div>
						</div>
						<?php if ( get_field( 'link' ) ): ?>
							<a href="<?= get_field( 'link' ) ?>" target="_blank"
							   class="absolute top-0 z-10 h-full w-full opacity-0">Se rendre sur le site
								de <?= get_the_title() ?></a>
						<?php endif; ?>
					</article>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>