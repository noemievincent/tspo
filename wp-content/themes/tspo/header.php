<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= is_404() ? '404' : get_the_title() ?> - <?= get_bloginfo( 'title' ) ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class( 'flex flex-col h-screen bg-body text-blue-dark' ) ?>>
<?php wp_body_open(); ?>
<header class="flex-0 px-4">
    <div class="max-w-screen-lg mx-auto flex justify-between items-center min-h-[40px]">
        <div class="">
            <a href="<?= home_url() ?>">Logo</a>
        </div>
        <div>
            <?= wp_nav_menu(['menu' => 'Navigation principale', 'menu_id' => 'header-nav', 'menu_class' => 'flex gap-4', 'container' => false]) ?>
        </div>
    </div>
</header>
<main class="flex-grow px-4 py-4">

