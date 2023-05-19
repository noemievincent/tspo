<?php
get_header();
$client = get_queried_object();

$worksites = tspo_get_worksites( $client->term_id);

?>
    <div class="grid-default mt-12 rl:mt-24">
        <div class="col-start-2 col-span-10 flex flex-col gap-8 rl:gap-12">
            <div class="flex flex-col gap-5">
                <a href="/references/?tab=clients" class="group flex items-center gap-2">
                    <svg class="arrow h-3 w-4 fill-orange rotate-180">
                        <use xlink:href="#arrow"></use>
                    </svg>
                    <span class="group-hover:translate-x-2 group-focus:translate-x-2 transition-transform">Retour aux clients</span>
                </a>
                <h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= $client->name ?></h1>
            </div>
            <div class="flex flex-col gap-8 rl:gap-16">
                <div class="grid grid-cols-10 gap-5">
                    <div class="col-span-full max-h-[120px] md:col-span-4 rl:max-h-[300px]">
                        <img src="<?= get_field( 'logo', $client )['url'] ?>"
                             alt="<?= get_field( 'logo', $client )['alt'] ?>"
                             class="h-full w-full object-contain">
                    </div>
                    <div class="col-span-full md:col-end-11 md:col-span-5 flex flex-col justify-between gap-12">
                        <div class="max-w-prose">
							<?= $client->description ?>
                        </div>
						<?php if ( get_field( 'link', $client ) ): ?>
                            <a href="<?= get_field( 'link', $client ) ?>" target="_blank"
                               class="bg-transparent border border-orange text-orange text-center inline-block max-md:w-full px-10 py-2.5 hover:bg-orange hover:text-white focus:bg-orange focus:text-white transition-colors w-fit">Visiter
                                leur site web</a>
						<?php endif; ?>
                    </div>
                </div>
                <hr class="border-t border-blue/30">
				<?php if ( $worksites->have_posts() ): ?>
                    <section aria-labelledby="worksites" class="flex flex-col gap-4">
                        <h2 id="worksites" class="text-2xl font-semibold"><?= $worksites->post_count ?>
                            chantier<?= $worksites->post_count > 1 ? 's' : '' ?>
                            réalisé<?= $worksites->post_count > 1 ? 's' : '' ?></h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 rl:grid-cols-3 xl:grid-cols-4 gap-5">
							<?php while ( $worksites->have_posts() ): $worksites->the_post(); ?>
								<?php tspo_include( 'worksite-card' ); ?>
							<?php endwhile;
							wp_reset_postdata(); ?>
                        </div>
                    </section>
				<?php endif; ?>
            </div>
        </div>
    </div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>