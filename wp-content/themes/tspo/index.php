<?php get_header() ?>
    <div class="h-screen w-full mb-20 relative">
        <div class="h-full w-full opacity-70">
            <img src="<?= get_template_directory_uri() ?>/assets/img/banner.jpg" alt="" class="w-full h-full object-cover">
        </div>
        <div class="absolute top-0 z-10 w-full h-full bg-black/60 grid grid-cols-12 gap-10 items-end py-24">
            <div class="h-full text-white col-start-2 col-span-10 grid grid-cols-10 gap-10 items-center">
                <div class="col-span-6 flex flex-col gap-16">
                    <div class="flex flex-col gap-6">
                    <h2 class="font-black text-6xl tracking-wide">Plus loin dans le service</h2>
                    <p class="text-3xl leading-normal font-light">Il n’y pas de confort sans technique. TSPO conçoit et installe toutes les solutions techniques intégrées pour assurer le confort et l’agrément d’usage des occupants, quel que soit le bâtiment.</p>
                    </div>
                    <a href="/about"
                       class="w-fit tracking-wide font-bold text-xl flex items-center gap-3 hover:gap-6 focus:gap-6 transition-all">
                        À propos de nous
                        <svg class="arrow h-4 w-8 fill-white">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </a>
                </div>
                <div class="absolute bottom-0 right-0 w-full p-10">
                    <div class="text-white text-xl text-center flex items-center flex-col gap-2 justify-end rg:items-end rg:flex-row rg:gap-4 rg:text-end">
                        <p class="tracking-wide font-light"><strong class="font-semibold">Faites défiler la page</strong> <br> pour en
                            savoir
                            plus</p>
                        <svg class="scroll-down-desktop h-10 w-10 animate-bounce-banner max-rg:hidden">
                            <use xlink:href="#scroll-down-desktop"></use>
                        </svg>
                        <svg class="scroll-down-mobile h-6 w-6 animate-bounce-banner rg:hidden">
                            <use xlink:href="#scroll-down-mobile"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
        <section aria-labelledby="services" class="col-start-2 col-span-10 flex flex-col gap-10">
            <h2 id="services" class="font-extrabold text-3xl">Les techniques intégrées pour...</h2>
            <div class="grid grid-cols-2 gap-4">
                <?php for ( $i = 1; $i <= 4; $i ++ ): ?>
                    <article aria-labelledby="article-<?= $i ?>" class="group relative h-[400px]">
                        <a href="#article-<?= $i ?>" class="absolute z-10 h-full w-full opacity-0">En savoir plus</a>
                        <div class="absolute h-full w-full p-8 text-white bg-black/40 group-hover:bg-black/80 group-focus:bg-black/80 transition-colors">
                            <div class="h-full flex flex-col gap-5">
                                <h3 id="article-<?= $i ?>" class="font-extrabold text-4xl">Titre du service</h3>
                                <div class="h-full flex flex-col justify-between opacity-0 translate-y-4 group-hover:opacity-100 group-focus:opacity-100 group-hover:translate-y-0 group-focus:translate-y-0 transition-all">
                                    <p class="text-lg leading-8">Nisi excepteur pariatur aute aute cillum irure aliqua
                                        tempor laborum ipsum consectetur
                                        labore laboris consequat deserunt. Ea nulla duis magna ut consequat ullamco sit
                                        ipsum ea
                                        nulla labore laborum. Labore exercitation ut ex adipisicing tempor fugiat dolore
                                        est
                                        ipsum aute.
                                    </p>
                                    <svg class="arrow h-6 w-8 fill-white self-end">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-full overflow-hidden relative -z-10">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/service-<?= $i ?>.jpg"
                                 alt="Titre du service"
                                 class="h-full w-full object-cover group-hover:scale-11 group-focus:scale-110 transition-transform">
                        </div>
                    </article>
                <?php endfor; ?>
            </div>
        </section>
        <?php
        $clients_title   = get_field( 'clients-title' );
        $clients_content = get_field( 'clients-content' );
        $clients_picture = get_field( 'clients-picture' );
        $clients_link    = get_field( 'clients-link' );
        ?>
        <section aria-labelledby="clients" class="clients col-span-full bg-blue-light my-16 py-24">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-start-2 col-span-10 flex flex-col gap-16">
                    <h2 id="clients" class="font-extrabold text-3xl"><?= $clients_title ?></h2>
                    <div class="grid grid-cols-10 gap-4">
                        <div class="wysiwyg col-span-6">
                            <?= $clients_content ?>
                        </div>
                        <div class="col-end-11 col-span-3 flex flex-col items-end gap-10">
                            <img src="<?= $clients_picture['url'] ?>" alt="<?= $clients_picture['alt'] ?>"
                                 class="w-full max-h-[360px] object-cover object-top">
                            <a href="<?= $clients_link['url'] ?>"
                               class="w-fit font-bold text-lg flex items-center gap-3 hover:gap-6 focus:gap-6 transition-all">
                                <?= $clients_link['title'] ?>
                                <svg class="arrow h-4 w-8 fill-blue-dark">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section aria-labelledby="news" class="col-start-2 col-span-10">
            <h2 id="news" class="font-extrabold text-3xl">Actualités à la une</h2>
        </section>
    </div>
<?php get_footer() ?>