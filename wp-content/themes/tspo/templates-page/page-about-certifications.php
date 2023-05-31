<?php //Template Name: Certifications
get_header();
$certifications = tspo_get_certifications();
?>
	<div class="certifications grid-default mt-12 rl:mt-24">
		<div
			class="col-start-2 col-span-10 rl:col-start-3 rl:col-span-8 lg:col-start-4 lg:col-span-6 flex flex-col max-rg:items-center gap-8 rl:gap-12">
			<h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
			<div class="flex flex-col gap-8 rl:gap-12">
				<?php while ( $certifications->have_posts() ): $certifications->the_post(); ?>
					<article aria-labelledby="<?= sanitize_title( get_the_title() ) ?>"
					         class="relative flex flex-col gap-2">
						<h2 id="<?= sanitize_title( get_the_title() ) ?>" class="text-xl font-semibold">
							<?php if ( get_field( 'link' ) ): ?>
							<a href="<?= get_field( 'link' ) ?>" target="_blank"
							   class="group w-fit flex items-center gap-3 hover:text-orange focus:text-orange transition-all">
								<?php endif; ?>
								<span><?= get_the_title() ?></span>
								<?php if ( get_field( 'link' ) ): ?>
								<svg
									class="external-link fill-blue-dark/70 group-hover:fill-orange w-4 h-5 transition-colors">
									<use xlink:href="#external-link"></use>
								</svg>
							</a>
						<?php endif; ?>
						</h2>
						<div class="flex gap-3 max-rg:flex-col rg:gap-5 rg:items-center">
							<?php if ( has_post_thumbnail() ): ?>
								<div class="h-28 rg:max-w-[240px]">
									<img src="<?= get_the_post_thumbnail_url() ?>" alt=""
									     class="h-full rg:w-full object-cover md:object-contain">
								</div>
							<?php endif; ?>
							<div class="max-w-prose">
								<?= get_the_content() ?>
							</div>
						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>