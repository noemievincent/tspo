<?php //Template Name: À propos
get_header(); ?>
    <div class="about mt-12 rl:mt-24">
        <div class="flex flex-col gap-8 rl:gap-12">
            <div class="flex flex-col gap-16 rl:gap-28">
                <div class="grid-default">
                    <div class="col-start-2 col-span-10 grid grid-cols-10 gap-5">
                        <div class="flex flex-col gap-8 col-span-full rl:col-span-5 2xl:col-start-2 2xl:col-span-5">
                            <h1 class="text-blue-dark w-fit font-black text-4xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
                            <div class="max-w-prose flex flex-col gap-4 text-lg">
								<?php the_content() ?>
                            </div>
                        </div>
                        <div class="max-rl:hidden rl:col-end-11 rl:col-span-4 lg:col-end-11 lg:col-span-4 2xl:col-end-10 2xl:col-span-3">
                            <img src="<?= get_the_post_thumbnail_url() ?>"
                                 alt=""
                                 class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="principles bg-blue-light py-16 rg:pb-24 rl:py-24 rl:pb-28 rl:px-16 grid-default">
                    <div class="col-span-full max-md:px-6 md:col-start-2 md:col-span-10 rg:col-start-3 rg:col-span-8 lg:col-start-4 lg:col-span-6 2xl:col-start-5 2xl:col-span-4">
                        <p class="text-center text-blue-dark font-black tracking-wider text-2xl rg:text-3xl mb-6 rg:mb-10"><?= get_field( 'principles_title' ) ?></p>
                        <div class="principles-container relative">
                            <div class="arrow prev group cursor-pointer w-fit">
                                <svg class="rotate-180">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </div>
                            <div class="slider">
		                        <?php foreach ( get_field( 'principles_slides' ) as $item ) : ?>
                                    <div class="max-w-prose rg:text-xl text-center">
                                        <p><?= $item['principle_content'] ?></p>
                                    </div>
		                        <?php endforeach; ?>
                            </div>
                            <div class="arrow next group cursor-pointer w-fit">
                                <svg class="">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <section aria-labelledby="values" class="values grid-default">
                    <div class="col-start-2 col-span-10 2xl:col-start-3 2xl:col-span-8 flex flex-col items-center gap-8 lg:gap-14">
                        <h2 id="values"
                            class="text-center text-blue-dark font-black tracking-wider text-2xl rg:text-3xl"><?= get_field( 'values_title' ) ?></h2>
                        <div class="grid grid-cols-10 gap-5">
							<?php foreach ( get_field( 'values' ) as $i => $item ) : ?>
                                <article aria-labelledby="<?= sanitize_title( $item['value_name'] ) ?>" class="value-item value-<?= $i + 1 ?> bg-white border border-blue-darker/40 flex flex-col gap-3 p-6 lg:py-10">
                                    <div class="flex items-center gap-4">
                                        <div class="w-8 h-8">
                                            <img src="<?= $item['value_icon']['url'] ?>" alt=""
                                                 class="style-svg fill-orange h-full w-full object-contain">
                                        </div>
                                        <h3 id="<?= sanitize_title( $item['value_name'] ) ?>" class="text-xl lg:text-2xl font-bold uppercase tracking-wide"><?= $item['value_name'] ?></h3>
                                    </div>
                                    <div class="rl:text-lg max-w-prose">
                                        <?= $item['value_description'] ?>
                                    </div>
                                </article>
							<?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php get_template_part( 'template-parts/contact-section' ) ?>
<?php get_footer(); ?>