<?php //Template Name: Compétences
get_header();
$skills = tspo_get_skills();
?>
    <div class="skills grid-default mt-12 rl:mt-24">
        <div class="col-start-2 col-span-10 flex flex-col items-center gap-8 rl:gap-12">
            <h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
            <div class="max-rl:mt-10 grid grid-cols-10 gap-x-5 gap-y-14">
				<?php while ( $skills->have_posts() ): $skills->the_post(); ?>
                    <article aria-labelledby="<?= sanitize_title( get_the_title() ) ?>" class="col-span-full rl:col-span-5 relative">
                        <div class="flex items-center gap-3 w-fit bg-white absolute px-4 ml-4 -top-4 rl:ml-6 rl:-top-5 lg:ml-12">
                            <div class="h-12 rl:h-14">
                                <img src="<?= get_the_post_thumbnail_url() ?>" alt=""
                                     class="style-svg fill-orange h-full w-full object-contain">
                            </div>
                            <h2 id="<?= sanitize_title( get_the_title() ) ?>" class="text-xl rl:text-2xl font-bold uppercase tracking-wide">
								<?php if ( get_field( 'link' ) ): ?>
                                <a href="<?= get_field( 'link' ) ?>" target="_blank"
                                   class="group flex items-center gap-3 hover:text-orange focus:text-orange transition-all">
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
                        </div>
                        <div class="max-w-prose h-full bg-white border border-blue-darker/40 px-8 py-8 pt-12 rl:px-10 rl:py-8 rl:pt-14 lg:px-16 lg:py-12 lg:pt-14 lg:text-lg">
							<?= get_the_content() ?>
                        </div>
                    </article>
				<?php endwhile;
				wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>