<section aria-labelledby="news" class="news grid-default pt-16 rl:pt-24">
    <div class="col-start-2 col-span-10 flex flex-col gap-10">
        <h2 id="news"
            class="text-blue-dark w-fit font-black tracking-wider text-2xl rg:text-3xl">Actualités à la une</h2>
        <div class="flex flex-col items-center gap-8">
            <div class="home-wrapper">
				<?= do_shortcode( '[custom-facebook-feed feed=2]' ) ?>
            </div>
            <a href="<?= get_field( 'facebook', 'option' ) ?>" target="_blank"
               class="btn btn-primary text-lg">Visiter notre page Facebook</a>
        </div>
    </div>
</section>