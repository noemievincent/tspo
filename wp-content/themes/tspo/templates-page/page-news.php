<?php //Template Name: Actualités
get_header(); ?>
	<div class="news grid-default mt-12 rl:mt-24">
		<div
			class="col-start-2 col-span-10 rl:col-start-3 rl:col-span-8 lg:col-start-4 lg:col-span-6 xl:col-start-5 xl:col-span-4 flex flex-col items-center gap-12 rl:gap-16">
            <div class="flex flex-col items-center gap-8 rl:gap-12">
                <h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
                <div class="news-wrapper">
		            <?= do_shortcode( '[custom-facebook-feed feed=1]' ) ?>
                </div>
            </div>
            <a href="<?= get_field('facebook', 'option') ?>" target="_blank" class="btn btn-primary text-lg">Visitez notre page Facebook</a>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>