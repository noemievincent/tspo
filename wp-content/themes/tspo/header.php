<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
	<title><?= is_404() ? '404' : get_the_title() ?> - <?= get_bloginfo( 'title' ) ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="TSPO">
    <meta name="description" content="Votre partenaire en électricité générale et industrielle. Nous offrons des services complets d'installation, de maintenance et de réparation électrique pour les secteurs résidentiel, commercial et industriel. Faites confiance à notre expertise et à notre équipe qualifiée pour répondre à tous vos besoins électriques. Contactez-nous dès aujourd'hui pour une solution fiable et efficace.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tspo.noemie-vincent.be">
    <meta property="og:title" content="TSPO">
    <meta property="og:description" content="Votre partenaire en électricité générale et industrielle. Nous offrons des services complets d'installation, de maintenance et de réparation électrique pour les secteurs résidentiel, commercial et industriel. Faites confiance à notre expertise et à notre équipe qualifiée pour répondre à tous vos besoins électriques. Contactez-nous dès aujourd'hui pour une solution fiable et efficace.">
    <meta property="og:image" content="/wp-content/themes/tspo/assets/img/meta-image.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://tspo.noemie-vincent.be">
    <meta property="twitter:title" content="TSPO">
    <meta property="twitter:description" content="Votre partenaire en électricité générale et industrielle. Nous offrons des services complets d'installation, de maintenance et de réparation électrique pour les secteurs résidentiel, commercial et industriel. Faites confiance à notre expertise et à notre équipe qualifiée pour répondre à tous vos besoins électriques. Contactez-nous dès aujourd'hui pour une solution fiable et efficace.">
    <meta property="twitter:image" content="/wp-content/themes/tspo/assets/img/meta-image.png">

	<?php wp_head() ?>
</head>
<body <?php body_class( 'no-js flex flex-col h-screen font-lato bg-orange-light text-blue-dark selection:bg-blue selection:text-white' ) ?>>
<?php wp_body_open(); ?>
<?php include( get_template_directory() . '/inc/svgs.php' ); ?>
<header
	class="flex-0 bg-white text-blue-dark border-b border-blue-dark/40 <?= is_front_page() ? 'absolute w-full z-50' : '' ?>">
	<input id="toggle" class="absolute opacity-0 toggle" type="checkbox">
	<div class="header-container bg-white relative grid-default justify-between py-3 md:py-5 lg:py-8">
		<div
			class="burger relative bg-white z-50 col-start-2 col-span-10 rl:col-start-2 rl:col-span-2 flex justify-between items-center">
			<a href="<?= home_url() ?>">
				<span class="sr-only">Retourner à l'accueil</span>
				<span>
					<svg class="logo-simple h-16 w-44 lg:h-20 lg:w-52">
					  <use xlink:href="#logo-simple"></use>
					</svg>
				</span>
			</a>
			<label for="toggle" class="burger-menu h-5 w-9 rl:hidden">
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
		<div role="navigation"
		     class="header-menu max-rl:absolute max-rl:top-0 max-rl:z-40 max-rl:h-screen w-full max-rl:bg-white rl:col-end-12 rl:col-span-8 flex justify-center items-center rl:justify-end">
			<div class="flex max-rl:flex-col items-center gap-14 rl:gap-6 rl:divide-x divide-orange/50">
				<?= wp_nav_menu( [
					'menu'       => 'Navigation principale',
					'menu_id'    => 'header-nav',
					'menu_class' => 'header-nav w-full flex gap-4 items-center justify-center rl:justify-end flex-col rl:gap-8 rl:flex-row',
					'container'  => false
				] ) ?>
				<a href="<?= get_field('facebook', 'options') ?>" target="_blank" class="group rl:pl-6">
					<span class="sr-only">Facebook</span>
					<svg class="facebook h-5 w-3 fill-blue-dark group-hover:fill-orange group-focus:fill-orange transition-colors">
						<use xlink:href="#facebook"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</header>
<main class="flex-grow flex flex-col">

