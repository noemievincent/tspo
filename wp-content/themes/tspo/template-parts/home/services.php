<?php
$services = tspo_get_services();
?>
<?php if ( $services->have_posts() ): ?>
	<section aria-labelledby="services" class="services grid-default py-16 rl:py-24">
		<div class="col-start-2 col-span-10 rl:col-start-2 rl:col-span-11 flex flex-col gap-10">
			<h2 id="services"
			    class="text-blue-dark w-fit font-black tracking-wider text-3xl">Les techniques intégrées
				pour...</h2>
			<div class="services-container slider">
				<?php while ( $services->have_posts() ): $services->the_post(); ?>
					<article aria-labelledby="<?= sanitize_title(get_the_title()) ?>" class="group relative rl:h-[460px] rl:w-[780px]">
						<a href="#" class="absolute z-10 h-full w-full opacity-0">En savoir plus</a>
						<div class="relative h-full w-full p-6 rl:p-8 text-white bg-black/70 rl:bg-black/40 rl:group-hover:bg-black/80 rl:group-focus:bg-black/80 transition-colors">
							<div class="h-full flex flex-col gap-3 rl:gap-5">
								<h3 id="<?= sanitize_title(get_the_title()) ?>" class="font-extrabold tracking-wide text-2xl rl:text-4xl rl:group-hover:text-3xl transition-all"><?= strtolower(get_the_title()) ?></h3>
								<div class="h-full flex flex-col justify-between rl:opacity-0 rl:translate-y-4 rl:group-hover:opacity-100 rl:group-focus:opacity-100 rl:group-hover:translate-y-0 rl:group-focus:translate-y-0 transition-all">
									<div class="text-lg leading-8 max-w-prose"><?= get_the_excerpt() ?></div>
									<svg class="arrow h-4 w-6 rl:h-6 rl:w-8 fill-white self-end">
										<use xlink:href="#arrow"></use>
									</svg>
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
