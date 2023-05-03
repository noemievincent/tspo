<?php //Template Name: Postuler
get_header(); ?>
	<div class="certifications grid-default mt-12 rl:mt-24">
		<div
			class="col-start-2 col-span-10 rg:col-start-3 rg:col-span-8 rl:col-start-4 rl:col-span-6 xl:col-start-5 xl:col-span-4 flex flex-col items-center gap-8 rl:gap-12">
			<h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
			<div class="form apply-form">
				<?= do_shortcode('[contact-form-7 id="284" title="Postuler"]') ?>
			</div>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>