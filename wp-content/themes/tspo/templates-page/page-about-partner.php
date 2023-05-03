<?php //Template Name: Partenaires
get_header(); ?>
	<div class="partner grid-default mt-12 rl:mt-24">
		<div
			class="col-start-2 col-span-10 xl:col-start-3 xl:col-span-9 flex flex-col max-rg:items-center gap-8 rl:gap-12">
			<h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
			<div class="flex flex-col gap-8 rl:gap-12">
			</div>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>