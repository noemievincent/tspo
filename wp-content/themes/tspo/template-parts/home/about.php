<?php
$img         = get_field( 'about_picture' );
$about_title = get_field( 'about_title' );
$desc        = get_field( 'about_description' );
$button      = get_field( 'about_button' );

$values_title = get_field( 'values_title' );
$values_items = get_field( 'values_items' );
?>
<div class="flex flex-col">
    <section aria-labelledby="about" class="about grid-default items-center">
        <div class="col-start-2 col-span-10 rl:col-start-2 rl:col-span-4 flex flex-col gap-12 justify-between my-16 rl:my-24">
            <div class="flex flex-col gap-4">
                <h2 id="about"
                    class="text-blue-dark w-fit font-black tracking-wider text-2xl rg:text-3xl"><?= $about_title ?></h2>
                <div class="wysiwyg">
					<?= $desc ?>
                </div>
            </div>
            <a href="<?= $button['url'] ?>"
               class="max-md:self-center text-lg bg-orange border border-orange text-white text-center inline-block max-sm:w-full w-fit px-10 py-2.5 hover:bg-transparent hover:text-orange focus:bg-transparent focus:text-orange transition-colors"><?= $button['title'] ?></a>
        </div>
        <div class="max-rl:hidden rl:col-end-13 rl:col-span-6 self-stretch">
            <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" class="w-full h-full object-cover">
        </div>
    </section>
	<?php if ( have_rows( 'values_items' ) ): ?>
        <section aria-labelledby="values" class="values bg-blue-light py-20 rg:py-28 grid-default items-center">
            <div class="col-start-2 col-span-10 flex flex-col gap-12 rg:gap-20">
                <h2 id="values"
                    class="text-center text-blue-dark font-black tracking-wider text-2xl rg:text-3xl"><?= $values_title ?></h2>
                <ul class="flex gap-10 justify-center flex-wrap items-start rg:justify-around rg:gap-4">
					<?php foreach ( $values_items as $item ): ?>
                        <li class="flex items-center flex-col-reverse gap-6 rg:gap-8">
                            <p class="font-bold text-lg text-center"><?= $item['item_title'] ?></p>
                            <div class="h-12 w-12 rg:h-16 rg:w-16 lg:h-20 lg:w-20">
                                <img src="<?= $item['item_icon']['url'] ?>" alt="" class="style-svg h-full w-full fill-orange">
                            </div>
                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
        </section>
	<?php endif; ?>
</div>
