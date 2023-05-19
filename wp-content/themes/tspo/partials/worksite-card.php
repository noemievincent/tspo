<article aria-labelledby="<?= sanitize_title( get_the_title() ) ?>"
         class="group overflow-hidden relative border border-blue-darker/20">
	<div>
		<img src="<?= get_the_post_thumbnail_url() ?>" alt=""
		     class="h-full w-full object-cover">
	</div>
	<div class="absolute w-full h-full inset-0 bg-black/40 flex flex-col justify-end">
		<div class="rl:text-white group-hover:rl:text-blue-darker group-focus:rl:text-blue-darker transition-colors relative">
			<div class="p-3 lg:p-6 lg:text-lg flex flex-col rl:gap-1 relative z-10">
				<h3 id="<?= sanitize_title( get_the_title() ) ?>"
				    class="text-lg lg:text-xl font-bold uppercase tracking-wide"><?= get_the_title() ?></h3>
				<p><?= get_field( 'location' ) ?></p>
			</div>
			<div class="p-3 lg:p-6 flex justify-end items-end absolute h-full w-full bg-white/90 top-0 rl:translate-y-full group-hover:rl:translate-y-0 transition-transform">
				<svg class="arrow h-3 w-4 rl:h-4 rl:w-5 fill-orange">
					<use xlink:href="#arrow"></use>
				</svg>
			</div>
		</div>
	</div>
	<a href="<?= get_the_permalink() ?>"
	   class="absolute inset-0 z-20 h-full w-full opacity-0">Voir le chantier</a>
</article>