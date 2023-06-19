<?php //Template Name: Références
get_header();
$active_tab = $_GET['tab'] ?? '';

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$worksites = tspo_get_worksites( null, $paged, 12 );
$clients   = tspo_get_clients();

?>
    <div class="references grid-default mt-12 rl:mt-24">
        <div
                class="col-start-2 col-span-10 xl:col-start-3 xl:col-span-9 flex flex-col max-rg:items-center gap-8 rl:gap-12">
            <h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
            <div class="flex flex-col gap-8 rl:gap-12">
                <div class="tabs uppercase flex gap-6 text-lg rl:text-xl">
                    <a class="tab-item <?= $active_tab === 'clients' ? '' : 'active' ?>"
                       href="/references/?tab=chantiers">Chantiers</a>
                    <a class="tab-item <?= $active_tab === 'clients' ? 'active' : '' ?>"
                       href="/references/?tab=clients">Clients</a>
                </div>
				<?php if ( $active_tab === 'clients' ): ?>
                    <section aria-labelledby="clients">
                        <h2 id="clients" class="sr-only">Clients</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 rg:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
							<?php foreach ( $clients as $client ): ?>
                                <article aria-labelledby="<?= $client->slug ?>"
                                         class="relative min-h-[260px] border border-blue-darker/20 hover:border-blue-darker focus:border-blue-darker/70 transition-colors h-full p-2">
                                    <div class="flex flex-col gap-2 h-full">
                                        <div class="flex-grow">
                                            <img src="<?= get_field( 'logo', $client )['url'] ?>"
                                                 alt="<?= get_field( 'logo', $client )['alt'] ?>"
                                                 class="h-full w-full object-contain">
                                        </div>
                                        <div class="rl:text-lg flex flex-col items-center">
                                            <h3 id="<?= $client->slug ?>"
                                                class="font-bold rl:text-xl"><?= $client->name ?></h3>
                                            <p><?= $client->count ?> chantier<?= $client->count > 1 ? 's' : '' ?></p>
                                        </div>
                                    </div>
                                    <a href="<?= get_term_link( $client ) ?>"
                                       class="absolute inset-0 z-10 h-full w-full opacity-0">Voir le client</a>
                                </article>
							<?php endforeach; ?>
                        </div>
						<?php wp_reset_postdata(); ?>
                    </section>
				<?php else: ?>
                    <section aria-labelledby="worksites" class="flex flex-col gap-8">
                        <h2 id="worksites" class="sr-only">Chantiers</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 rl:grid-cols-3 xl:grid-cols-4 gap-5">
							<?php while ( $worksites->have_posts() ): $worksites->the_post(); ?>
								<?php tspo_include( 'worksite-card' ); ?>
							<?php endwhile;
							wp_reset_postdata(); ?>
                        </div>
                        <div class="pagination flex justify-center items-center gap-3 text-blue">
							<?= paginate_links( [
								'total'     => $worksites->max_num_pages,
								'current'   => max( 1, get_query_var( 'paged' ) ),
								'prev_text' => '<svg class="arrow h-3 w-4 fill-blue rotate-180 hover:fill-orange focus:fill-orange transition-colors">
                                                    <use xlink:href="#arrow"></use>
                                                </svg>',
								'next_text' => '<svg class="arrow h-3 w-4 fill-blue hover:fill-orange focus:fill-orange transition-colors">
                                                    <use xlink:href="#arrow"></use>
                                                </svg>',
							] ); ?>
                        </div>
						<?php wp_reset_postdata(); ?>
                    </section>
				<?php endif; ?>
            </div>
        </div>
    </div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>