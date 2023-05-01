<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
	<title><?= is_404() ? '404' : get_the_title() ?> - <?= get_bloginfo( 'title' ) ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>
<body <?php body_class( 'flex flex-col h-screen font-lato bg-orange-light text-blue-dark' ) ?>>
<?php wp_body_open(); ?>
<?php include( get_template_directory() . '/inc/svgs.php' ); ?>
<div
	class="fixed z-[60] w-full h-2 opacity-70 bg-red-500 sm:bg-pink-500 md:bg-orange-500 rg:bg-amber-400 lg:bg-green-500 min-[1915px]:max-[1920px]:bg-teal-500 xl:bg-blue-500 2xl:bg-purple-500 transition duration-400"></div>
<header
	class="flex-0 bg-white text-blue-dark border-b border-blue-dark/40 <?= is_front_page() ? 'absolute w-full z-50' : '' ?>">
	<input id="toggle" class="absolute opacity-0 toggle" type="checkbox">
	<div class="header-container bg-white relative grid grid-cols-12 gap-5 justify-between py-3 md:py-5 rg:py-8">
		<div
			class="burger relative bg-white z-50 col-start-2 col-span-10 lg:col-start-2 lg:col-span-2 flex justify-between items-center">
			<a href="<?= home_url() ?>">
				<span class="sr-only">Retourner à l'accueil</span>
				<span>
					<svg class="logo-simple h-16 w-44">
					  <use xlink:href="#logo-simple"></use>
					</svg>
				</span>
			</a>
			<label for="toggle" class="burger-menu h-5 w-9 lg:hidden">
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
		<div role="navigation" aria-labelledby="main-menu"
		     class="header-menu max-lg:absolute max-lg:top-0 max-lg:z-40 max-lg:h-screen w-full max-lg:bg-white flex lg:justify-end lg:col-end-12 lg:col-span-8">
			<?= wp_nav_menu( [
				'menu'       => 'Navigation principale',
				'menu_id'    => 'header-nav',
				'menu_class' => 'header-nav w-full flex gap-12 items-center justify-center lg:justify-end flex-col lg:gap-8 lg:flex-row',
				'container'  => false
			] ) ?>
		</div>
	</div>
</header>
<main class="flex-grow flex flex-col">

