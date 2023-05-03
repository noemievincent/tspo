<?php //Template Name: Offres d'emploi
get_header();
$jobs = tspo_get_jobs();
?>
	<div class="certifications grid-default mt-12 rl:mt-24">
		<div
			class="col-start-2 col-span-10 xl:col-start-3 xl:col-span-9 flex flex-col max-rg:items-center gap-8 rl:gap-12">
			<h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
			<div class="grid grid-cols-1 rg:grid-cols-2 lg:grid-cols-3 gap-5">
				<?php while ( $jobs->have_posts() ): $jobs->the_post(); ?>
					<?php
					$salary = get_field( 'salary' );
					$type   = get_field( 'type' );
					?>
					<article aria-labelledby="<?= sanitize_title( get_the_title() ) ?>"
					         class="relative flex flex-col gap-2 md:gap-4 md:justify-between bg-white border border-blue-dark/40 p-5">
						<div class="flex flex-col gap-3 rg:gap-1">
							<h2 id="<?= sanitize_title( get_the_title() ) ?>"
							    class="text-xl font-bold tracking-wide"><?= get_the_title() ?></h2>
							<div class="max-w-prose"><?= get_the_content() ?></div>
						</div>
						<div class="max-md:h-full flex max-md:flex-col gap-4 flex-wrap md:gap-2 justify-between md:items-center">
							<ul class="font-light max-md:list-disc max-md:list-inside marker:text-sm marker:text-orange/60 flex md:items-center md:gap-2 max-md:flex-col md:divide-x md:divide-blue-dark/40">
								<?php if ( $salary ): ?>
									<li class=""><?= $salary ?></li>
								<?php endif; ?>
								<?php if ( $type ): ?>
									<li class="md:pl-2"><?= $type ?></li>
								<?php endif; ?>
							</ul>
							<a href="/postuler" class="group w-fit flex items-center gap-2 text-orange">
								<span class="group-hover:-translate-x-2 group-focus:-translate-x-2 transition-transform">Postuler</span>
								<svg class="arrow h-3 w-4 fill-orange">
									<use xlink:href="#arrow"></use>
								</svg>
							</a>
						</div>
					</article>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>