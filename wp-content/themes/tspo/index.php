<?php get_header() ?>
    <div class="h-screen w-full bg-gray-600 mb-20"></div>
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