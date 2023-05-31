<?php
$services = tspo_get_services();
?>
<?php if ( $services->have_posts() ): ?>
	<section aria-labelledby="services" class="services grid-default py-16 rl:py-24">
		<div class="col-start-2 col-span-10 flex flex-col gap-10">
			<h2 id="services"
			    class="text-blue-dark w-fit font-black tracking-wider text-2xl rg:text-3xl">Les techniques intégrées
				pour...</h2>
			<div class="services-container slide grid grid-cols-1 rg:grid-cols-2 gap-5">
				<?php while ( $services->have_posts() ): $services->the_post(); ?>
					<article aria-labelledby="<?= sanitize_title(get_the_title()) ?>" class="group relative rg:min-h-[300px] lg:min-h-[400px]">
						<div class="relative h-full w-full p-6 rl:p-8 text-white bg-black/70 rl:bg-black/40 rl:group-hover:bg-black/80 rl:group-focus:bg-black/80 transition-colors">
							<div class="h-full flex flex-col gap-3 rl:gap-5">
								<h3 id="<?= sanitize_title(get_the_title()) ?>" class="font-extrabold tracking-wide text-xl md:text-2xl rl:text-3xl rl:group-hover:text-2xl lg:text-4xl lg:group-hover:text-3xl transition-all"><?= strtolower(get_the_title()) ?></h3>
								<div class="h-full flex flex-col max-rg:gap-6 justify-between rl:opacity-0 rl:translate-y-4 rl:group-hover:opacity-100 rl:group-focus:opacity-100 rl:group-hover:translate-y-0 rl:group-focus:translate-y-0 transition-all">
									<div class="md:text-lg md:leading-8 max-w-prose"><?= get_the_excerpt() ?></div>
								</div>
							</div>
						</div>
						<div class="absolute h-full w-full inset-0 -z-10">
							<img src="<?= get_the_post_thumbnail_url($post->ID) ?>"
							     alt=""
							     class="h-full w-full object-cover group-hover:scale-11 group-focus:scale-110 transition-transform">
						</div>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; wp_reset_postdata(); ?>
