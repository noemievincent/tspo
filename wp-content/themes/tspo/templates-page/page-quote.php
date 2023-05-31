<?php //Template Name: Devis
get_header(); ?>
	<div class="quote grid-default my-12 rl:my-24 gap-y-6 rl:gap-y-8">
		<h1 class="col-start-2 col-span-10 text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl">Contactez-nous</h1>
		<div
			class="col-start-1 col-span-12 rl:col-start-2 rl:col-span-11 flex flex-col max-rg:items-center gap-8 rl:gap-12">
			<div class="grid grid-cols-12 rl:grid-cols-11 gap-x-5 gap-y-12">
				<div class="col-start-2 col-span-10 rl:col-span-5 flex flex-col gap-4">
					<div class="flex gap-5 uppercase text-xl">
						<a href="/contact" class=" hover:text-orange focus:text-orange transition-colors">Demande</a>
						<a href="/devis" class="underline hover:text-orange focus:text-orange transition-colors">Devis</a>
					</div>
					<section class="form quote-form">
						<h2 id="quote-form" class="sr-only">Demande de devis</h2>
						<?= do_shortcode( '[contact-form-7 id="291" title="Demande de devis"]' ) ?>
					</section>
				</div>
				<?php get_template_part( 'template-parts/infos-section' ) ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>