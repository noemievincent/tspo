<?php
get_header();
?>
    <div class="mt-12 rl:mt-24">
        <div class="flex flex-col gap-8 rl:gap-12">
            <div class="grid-default">
                <div class="col-start-2 col-span-10 flex flex-col gap-5">
                    <a href="/references/?tab=chantiers" class="group flex items-center gap-2">
                        <svg class="arrow h-3 w-4 fill-orange rotate-180">
                            <use xlink:href="#arrow"></use>
                        </svg>
                        <span class="group-hover:translate-x-2 group-focus:translate-x-2 transition-transform">Retour aux chantiers</span>
                    </a>
                    <div class="flex flex-col gap-6">
                        <h1 class="text-blue-dark w-fit font-black tracking-wider text-4xl"><?= the_title(); ?></h1>
                        <ul class="flex max-md:flex-col gap-2 max-md:divide-y md:gap-6 md:divide-x divide-blue/50">
                            <li class="">
                                <a href="<?= get_term_link( get_field( 'client' ) ) ?>"
                                   class="hover:text-orange focus:text-orange transition-colors"><?= get_field( 'client' )->name ?></a>
                            </li>
                            <li class="max-md:pt-2 md:pl-6"><?= get_field( 'location' ) ?></li>
                            <li class="max-md:pt-2 md:pl-6"><?= get_field( 'year' ) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-16">
                <div class="grid-default">
                    <div class="col-start-2 col-span-10 grid grid-cols-10 gap-5">
                        <div class="col-span-full rl:col-span-6 lg:col-span-5 max-w-prose leading-7 flex flex-col gap-2.5 rg:gap-4">
							<?php the_content() ?>
                        </div>
                        <div class="col-span-full rl:col-end-11 rl:col-span-4 lg:col-end-11 lg:col-span-5 rl:max-h-[500px]">
                            <img src="<?= get_the_post_thumbnail_url() ?>"
                                 alt=""
                                 class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
				<?php if ( get_field( 'gallery' ) ): ?>
                    <section aria-labelledby="gallery" class="gallery bg-blue-light py-16 rl:py-28 rl:px-16 grid-default">
                        <div class="col-start-2 col-span-10 text-center flex flex-col items-center gap-6 rg:gap-10">
                            <h2 id="gallery" class="sr-only">En images</h2>
                            <div class="grid md:grid-cols-2 rl:grid-cols-3 gap-5">
								<?php foreach ( get_field( 'gallery' ) as $i => $img ): ?>
                                    <div class="img img-<?= $i + 1 ?>">
                                        <div class="h-full w-full aspect-[4/3]">
                                            <a href="<?= $img['url'] ?>" data-fancybox="gallery"
                                               data-caption="<?= $img['caption'] ?>">
                                                <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>"
                                                     class="h-full w-full object-cover">
                                            </a>
                                        </div>
                                    </div>
								<?php endforeach; ?>
                            </div>
                        </div>
                    </section>
				<?php endif; ?>
                <div class="grid-default">
                    <div class="col-start-2 col-span-10 grid grid-cols-2 gap-4">
						<?php tspo_previous_post_link( 'worksites' ); ?>
						<?php tspo_next_post_link( 'worksites' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>