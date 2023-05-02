</main>
<footer class="flex-0">
    <div class="bg-blue-light py-16 rg:py-24 grid grid-cols-12 gap-4">
        <div class="col-start-2 col-span-10 flex flex-col items-center gap-12 rg:gap-20">
            <a href="<?= home_url() ?>">
                <span class="sr-only">Retourner à l'accueil</span>
                <span>
					<svg class="logo-full h-24 w-auto rg:h-36 rg:w-96">
					  <use xlink:href="#logo-full"></use>
					</svg>
				</span>
            </a>
            <div role="navigation" aria-labelledby="footer-menu" class="">
                <?= wp_nav_menu( [ 'menu'       => 'Navigation principale',
                                   'menu_id'    => 'footer-nav',
                                   'menu_class' => 'footer-nav font-semibold uppercase flex items-center gap-5 max-rg:flex-col rg:gap-8',
                                   'container'  => false
                ] ) ?>
            </div>
        </div>
    </div>
    <div class="bg-blue text-white py-8 grid grid-cols-12 gap-4">
    <div class="col-start-2 col-span-10 w-full flex flex-col justify-between items-center gap-8 rg:gap-4 rg:flex-row">
        <div role="navigation" aria-labelledby="footer-rgpd" class="">
            <?= wp_nav_menu( [ 'menu'       => 'RGPD',
                               'menu_id'    => 'footer-rgpd',
                               'menu_class' => 'flex max-md:flex-col max-md:items-center gap-3 md:gap-6',
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