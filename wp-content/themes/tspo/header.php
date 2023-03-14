<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= is_404() ? '404' : get_the_title() ?> - <?= get_bloginfo( 'title' ) ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class( 'flex flex-col h-screen font-lato bg-body text-blue-dark' ) ?>>
<?php wp_body_open(); ?>
<?php include(get_template_directory() . '/inc/svgs.php'); ?>
<div class="fixed z-[60] w-full h-2 opacity-70 bg-red-500 sm:bg-pink-500 md:bg-orange-500 rg:bg-amber-400 lg:bg-green-500 min-[1915px]:max-[1920px]:bg-teal-500 xl:bg-blue-500 2xl:bg-purple-500 transition duration-400"></div>
<header class="flex-0 <?= is_front_page() ? 'absolute w-full z-50 rg:text-white bg-white/20' : 'bg-blue-light rg:bg-transparent' ?>">
    <h1 id="body" class="sr-only">TSPO</h1>
    <input id="toggle" class="absolute opacity-0 toggle" type="checkbox">
    <div class="header-container relative grid grid-cols-12 gap-4 justify-between py-5 rg:py-8 lg:py-10">
        <div class="burger relative z-50 col-start-2 col-span-10 rg:col-start-2 rg:col-span-2 flex justify-between items-center">
            <a href="<?= home_url() ?>">Logo</a>
            <label for="toggle" class="burger-menu h-5 w-9 rg:hidden">
                <span class="lines mr-0 flex flex-col items-end justify-between h-full w-full">
                    <span aria-hidden="true"
                          class="line-1 block w-full h-0.5 bg-blue-dark transition-all duration-300 origin-top-right"></span>
                    <span aria-hidden="true"
                          class="line-2 block w-full h-0.5 bg-blue-dark transition-all duration-300"></span>
                    <span aria-hidden="true"
                          class="line-3 block w-full h-0.5 bg-blue-dark transition-all duration-300 origin-bottom-right"></span>
                </span>
                <span class="closed-text sr-only">Ouvrier le menu</span>
                <span class="opened-text sr-only">Fermer le menu</span>
            </label>
        </div>
        <nav aria-labelledby="main-menu"
             class="header-menu max-rg:absolute max-rg:top-0 max-rg:z-40 max-rg:h-screen w-full max-rg:bg-blue-light flex rg:justify-end rg:col-end-12 rg:col-span-8">
            <h2 id="main-menu" class="sr-only">Navigation principale</h2>
            <?= wp_nav_menu( [ 'menu'       => 'Navigation principale',
                               'menu_id'    => 'header-nav',
                               'menu_class' => 'header-nav w-full flex gap-12 items-center justify-center rg:justify-end flex-col rg:gap-8 rg:flex-row',
                               'container'  => false
            ] ) ?>
        </nav>
    </div>
</header>
<main class="flex-grow flex flex-col">

