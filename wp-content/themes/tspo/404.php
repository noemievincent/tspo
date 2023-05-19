<?php get_header() ?>

    <section aria-labelledby="404" class="grid-default items-center h-full my-20">
        <div
                class="col-start-2 col-span-10 flex flex-col items-center gap-16">
            <div class="text-center flex flex-col items-center gap-4">
                <h1 id="404" class="font-bold text-7xl lg:text-8xl">404</h1>
                <p class="text-lg lg:text-xl">La page que vous cherchez n’existe pas</p>
            </div>
            <a href="<?= home_url() ?>" class="group flex items-center gap-2 text-orange">
                <svg class="arrow h-3 w-4 fill-orange rotate-180">
                    <use xlink:href="#arrow"></use>
                </svg>
                <span class="group-hover:translate-x-2 group-focus:translate-x-2 transition-transform">Retourner à l'accueil</span>
            </a>
        </div>
    </section>

<?php get_footer() ?>