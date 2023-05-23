<section aria-labelledby="gallery" class="gallery bg-blue-light py-16 rl:py-28 rl:px-16 grid-default">
    <div class="col-start-2 col-span-10 text-center flex flex-col items-center gap-6 rg:gap-10">
        <h2 id="gallery"
            class="text-blue-dark w-fit font-black tracking-wider text-2xl rg:text-3xl"><?= get_field( 'gallery_title' ) ?></h2>
        <div class="grid md:grid-cols-2 rl:grid-cols-3 gap-5">
		    <?php foreach ( get_field( 'gallery' ) as $i => $img ): ?>
                <div class="img img-<?= $i + 1 ?>">
                    <div class="h-full w-full aspect-[4/3]">
                        <a href="<?= $img['url'] ?>" data-fancybox="gallery"
                           data-caption="<?= $img['caption'] ?>">
                            <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>"
                                 class="h-full w-full object-cover">
                        </a>
                    </div>
                </div>
		    <?php endforeach; ?>
        </div>
    </div>
</section>
