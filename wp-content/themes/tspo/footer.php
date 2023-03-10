<?php if(!is_page('contact')): ?>
<div class="grid grid-cols-12 gap-4">
    <section aria-labelledby="contact-us" class="col-start-2 col-span-10 py-20 mt-auto flex flex-col justify-center items-center gap-10">
        <h2 id="contact-us" class="text-2xl text-center">Vous avez une question ou un projet en tête ?</h2>
        <a href="/contact" class="uppercase bg-blue text-white text-lg px-10 py-4">Contactez-nous</a>
    </section>
</div>
<?php endif; ?>
</main>
<footer class="flex-0 bg-blue-light grid grid-cols-12 gap-4 pt-16 pb-8">
    <div class="col-start-2 col-span-10 flex flex-col items-center gap-8 md:gap-24">
        <div class="flex flex-col items-center gap-16">
            <div class="">
                <a href="<?= home_url() ?>">Logo</a>
            </div>
            <nav aria-labelledby="footer-menu" class="max-md:sr-only">
                <h2 id="footer-menu" class="sr-only">Navigation de pied de page</h2>
                <?= wp_nav_menu( [ 'menu'       => 'Navigation principale',
                                   'menu_id'    => 'footer-nav',
                                   'menu_class' => 'font-semibold uppercase flex flex-col items-center gap-8 md:flex-row',
                                   'container'  => false
                ] ) ?>
            </nav>
        </div>
        <div class="w-full pt-8 border-t border-blue-dark flex flex-col justify-between items-center gap-4 md:flex-row">
            <p>Copyright © 2023</p>
            <ul class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                <li>
                    <a href="/jobs">Jobs @ TSPO</a>
                </li>
                <li>
                    <a href="/conditions">Conditions de ventes</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>