<?php
get_header(); ?>
    <div class="conditions grid-default my-20 rl:my-24">
        <div
                class="col-start-2 col-span-10 xl:col-start-3 xl:col-span-9 flex flex-col max-rg:items-center gap-8 rl:gap-12">
            <h1 class="text-blue-dark w-fit font-black text-3xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
            <div class="flex flex-col gap-8 rl:gap-12 text-xl">
				<?php the_content() ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>