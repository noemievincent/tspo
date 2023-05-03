<?php //Template Name: Équipe
get_header();
$roles = tspo_get_roles();
?>
	<div class="team grid-default mt-12 rl:mt-24">
		<div class="col-start-2 col-span-10 xl:col-start-3 xl:col-span-9 flex flex-col max-rg:items-center gap-8 rl:gap-12">
			<h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
			<div class="flex flex-col gap-8 rl:gap-12">
				<?php foreach ( $roles as $role ): $members = tspo_get_members( $role->term_id ); ?>
					<section aria-labelledby="<?= $role->slug ?>" class=" flex flex-col max-rg:items-center gap-4 rl:gap-6">
						<h2 id="<?= $role->slug ?>"
						    class="uppercase tracking-wide font-bold text-lg rl:text-2xl"><?= $role->name ?></h2>
						<div class="flex flex-wrap max-rg:justify-center gap-5 rl:gap-10 gap-y-5">
							<?php foreach ( $members as $member ): ?>
								<article aria-labelledby="<?= sanitize_title( $member->post_title ) ?>" class="flex flex-col items-center border border-blue-dark/20 sm:w-64">
									<div class="aspect-square">
										<img src="<?= get_the_post_thumbnail_url($member->ID) ?>" alt="" class="h-full w-full object-cover">
									</div>
									<div class="flex flex-col items-center justify-end py-4 px-2 text-center">
										<h3 id="<?= sanitize_title( $member->post_title ) ?>" class="text-xl font-semibold tracking-wide"><?= $member->post_title ?></h3>
										<p class="text-sm text-orange font-light tracking-wide"><?= get_field('role', $member) ?></p>
									</div>
								</article>
							<?php endforeach; ?>
						</div>
					</section>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>