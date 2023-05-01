<?php if(!is_page('contact')): ?>
<div class="grid grid-cols-12 gap-4 py-36">
    <section aria-labelledby="contact-us" class="col-start-2 col-span-10 flex flex-col justify-center items-center gap-10">
        <h2 id="contact-us" class="text-3xl text-center">Vous avez une question ou un projet en tête ?</h2>
        <div class="flex items-center gap-5">
            <a href="/contact?form=question" class="bg-orange border border-orange text-white text-lg px-10 py-3.5">Contactez-nous</a>
            <a href="/contact?form=devis" class="bg-transparent border border-orange text-orange text-lg px-10 py-3.5">Demandez un devis</a>
        </div>
    </section>
</div>
<?php endif; ?>
</main>
<footer class="flex-0">
    <div class="bg-blue-light py-24 grid grid-cols-12 gap-4">
        <div class="col-start-2 col-span-10 flex flex-col items-center gap-20">
            <a href="<?= home_url() ?>">
                <span class="sr-only">Retourner à l'accueil</span>
                <span>
					<svg class="logo-full h-36 w-[436px]">
					  <use xlink:href="#logo-full"></use>
					</svg>
				</span>
            </a>
            <div role="navigation" aria-labelledby="footer-menu" class="max-md:sr-only">
                <?= wp_nav_menu( [ 'menu'       => 'Navigation principale',
                                   'menu_id'    => 'footer-nav',
                                   'menu_class' => 'font-semibold uppercase flex flex-col items-center gap-8 md:flex-row',
                                   'container'  => false
                ] ) ?>
            </div>
        </div>
    </div>
    <div class="bg-blue text-white py-8 grid grid-cols-12 gap-4">
    <div class="col-start-2 col-span-10 w-full flex flex-col justify-between items-center gap-4 md:flex-row">
        <div role="navigation" aria-labelledby="footer-rgpd" class="">
            <?= wp_nav_menu( [ 'menu'       => 'RGPD',
                               'menu_id'    => 'footer-rgpd',
                               'menu_class' => 'flex flex-row gap-6',
                               'container'  => false
            ] ) ?>
        </div>
        <p>Copyright © 2023</p>
    </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>