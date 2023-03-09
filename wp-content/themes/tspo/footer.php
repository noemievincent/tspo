    </main>

    <footer class="flex-0 px-4 py-2">
        <div class="max-w-screen-lg mx-auto flex flex-col items-center gap-6">
            <div class="">
                <a href="<?= home_url() ?>">Logo</a>
            </div>
            <div>
                <?= wp_nav_menu(['menu' => 'Navigation principale', 'menu_id' => 'header-nav', 'menu_class' => 'flex gap-4', 'container' => false]) ?>
            </div>
        </div>
    </footer>

<?php wp_footer() ?>
</body>
</html>