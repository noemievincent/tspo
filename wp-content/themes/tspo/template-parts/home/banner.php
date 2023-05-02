<?php
$img   = get_field( 'banner_picture' );
$title = get_field( 'banner_title', false, false );
$desc  = get_field( 'banner_description' );
$link  = get_field( 'banner_link' );
?>
<section aria-labelledby="banner" class="banner h-screen w-full relative">
	<div class="h-full w-full opacity-70">
		<img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>"
		     class="w-full h-full object-cover">
	</div>
	<div class="absolute top-0 z-10 w-full h-full bg-blue-darker/70 py-24">
		<div class="h-full text-white grid-default items-center">
			<div class="col-start-2 col-span-10 flex flex-col gap-16 rg:col-start-2 rg:col-span-8 rg:gap-20 lg:col-start-2 lg:col-span-6 lg:gap-28">
				<div class="flex flex-col gap-6 rg:gap-8 lg:gap-10">
					<h2 id="banner" class="w-fit font-black tracking-wide text-3xl md:text-4xl rg:text-5xl lg:text-6xl"><?= $title ?></h2>
					<div class="font-light text-lg leading-relaxed md:text-xl md:leading-relaxed rg:text-2xl rg:leading-relaxed lg:text-3xl lg:leading-normal"><?= $desc ?></div>
				</div>
				<a href="<?= $link['url'] ?>"
				   class="w-fit tracking-wide text-xl flex items-center gap-2 hover:gap-5 focus:gap-5 transition-all">
					<?= $link['title'] ?>
					<svg class="arrow h-4 w-8 fill-orange">
						<use xlink:href="#arrow"></use>
					</svg>
				</a>
			</div>
			<div class="absolute bottom-0 right-0 w-fit p-6 rg:p-8 lg:p-10">
				<a href="#content"
					class="text-white fill-orange text-center flex items-center flex-col gap-4 justify-end rg:text-lg rg:leading-6 rg:items-end rg:flex-row rg:gap-4 rg:text-end">
					<p class="tracking-wider font-light"><strong class="font-semibold">Faites défiler la
							page</strong> <br> pour en
						savoir
						plus</p>
					<svg class="scroll-down-desktop h-10 w-10 animate-bounce-banner max-rg:hidden">
						<use xlink:href="#scroll-down-desktop"></use>
					</svg>
					<svg class="scroll-down-mobile h-6 w-6 animate-bounce-banner rg:hidden">
						<use xlink:href="#scroll-down-mobile"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</section>
