<section aria-labelledby="news" class="news grid-default pt-16 rl:pt-24">
	<div class="col-start-2 col-span-10 flex flex-col gap-10">
		<h2 id="news"
		    class="text-blue-dark w-fit font-black tracking-wider text-3xl">Actualités à la une</h2>
		<div class="flex flex-col items-center gap-8">
			<div class="grid grid-cols-1 md:grid-cols-2 rl:grid-cols-3 xl:grid-cols-4 gap-5">
				<?php for ( $i = 1; $i <= 3; $i ++ ): ?>
				<?php
				$likes = rand(0, 100);
				$comments = rand(0, 50);
					?>
					<div class="group relative bg-white border border-blue-dark/40">
						<div class="flex flex-col gap-4 p-4 rl:p-6">
							<div class="flex items-center gap-4 rl:gap-6">
								<div class="h-16 w-16 rl:h-20 rl:w-20">
									<img src="<?= get_template_directory_uri() ?>/assets/img/profile.jpg" alt=""
									     class="h-full w-full object-cover rounded-full">
								</div>
								<div>
									<p class="text-lg rl:text-2xl font-semibold">TSPO SPRL</p>
									<time class="font-light" datetime="2023-04-29">le mercredi 29 avril 2023</time>
								</div>
							</div>
							<div class="line-clamp-3">
								<p>Pariatur officia dolore amet eiusmod deserunt culpa ex enim consequat est Lorem ex
									enim pariatur duis. Magna minim officia duis deserunt quis minim do veniam
									exercitation pariatur. Dolor velit non sit duis sit commodo Lorem fugiat magna minim
									ut sit eu.</p>
							</div>
						</div>
						<div class="mt-auto h-64 rl:h-80">
							<img src="<?= get_template_directory_uri() ?>/assets/img/news-<?= $i ?>.jpg" alt=""
							     class="h-full w-full object-cover">
						</div>
						<div class="flex justify-between items-center p-4 rl:p-6">
							<div class="flex items-center gap-3">
								<div class="flex items-center">
									<svg class="thumbs h-4 w-8 fill-blue-dark">
										<use xlink:href="#thumbs"></use>
									</svg>
									<p>
										<span><?= $likes ?></span>
										<span class="sr-only">j'aimes</span>
									</p>
								</div>
								<div class="flex items-center">
									<svg class="comment h-4 w-8 fill-blue-dark">
										<use xlink:href="#comment"></use>
									</svg>
									<p>
										<span><?= $comments ?></span>
										<span class="sr-only">commentaires</span>
									</p>
								</div>
							</div>
							<svg class="arrow h-4 w-8 fill-orange group-hover:translate-x-2 transition-transform">
								<use xlink:href="#arrow"></use>
							</svg>
						</div>
						<a href="#news-<?= $i ?>" class="absolute top-0 z-10 h-full w-full opacity-0">
							Voir le post Facebook
						</a>
					</div>
				<?php endfor; ?>
			</div>
			<a href="#"
			   class="text-lg bg-orange border border-orange text-white text-center inline-block max-md:w-full px-10 py-2.5 hover:bg-transparent hover:text-orange focus:bg-transparent focus:text-orange transition-colors">Visiter
				notre page Facebook</a>
		</div>
	</div>
</section>