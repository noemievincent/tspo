<?php
get_header(); ?>
	<div class="grid-default mt-24">
		<div class="col-start-2 col-span-10">
			<h1 class="text-blue-dark w-fit font-black tracking-wider text-4xl"><?= the_title(); ?></h1>
			<div>
			</div>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>