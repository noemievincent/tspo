<?php
$address       = get_field( 'address', 'option' );
$streetAddress = $address['streetAddress'];
$postalCode    = $address['postalCode'];
$addressRegion = $address['addressRegion'];
$plan          = get_field( 'plan', 'option' );
$phone         = get_field( 'tel', 'option' );
$email         = get_field( 'email', 'option' );
$facebook      = get_field( 'facebook', 'option' );

$highlight = get_field( 'highlight_day', 'option' );
?>
<div class="col-span-full grid grid-cols-12 gap-y-10 gap-x-5 rl:col-end-12 rl:col-span-5 rl:grid-cols-5">
	<section aria-labelledby="infos" class="bg-blue-light p-8 flex flex-col gap-6 col-span-full md:max-rl:col-span-5 md:p-10">
		<h2 id="infos" class="uppercase font-bold tracking-wide text-2xl">Coordonnées</h2>
		<section aria-labelledby="legalName" itemscope itemtype="https://schema.org/Organization"
		         class="flex flex-col gap-4">
			<h3 id="legalName" itemprop="legalName"
			    class="font-black tracking-wide text-xl"><?= get_field( 'legalName', 'option' ) ?></h3>
			<ul class="flex flex-col gap-3">
				<?php if ( $streetAddress || $postalCode || $addressRegion ): ?>
					<li class="group w-fit flex gap-3 first:pt-0">
						<svg
							class="location  h-4 w-4 fill-blue group-hover:fill-orange group-focus:fill-orange transition-colors mt-1">
							<use xlink:href="#location"></use>
						</svg>
						<?php if ( $plan ): ?>
						<a href="<?= $plan ?>" target="_blank">
							<?php endif; ?>
							<span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"
							      class="max-rg:text-center group-hover:text-orange group-focus:text-orange transition-colors">
                                        <?php if ( $streetAddress ): ?>
	                                        <span itemprop="streetAddress"><?= $streetAddress ?></span>,<br>
                                        <?php endif; ?>
								<?php if ( $postalCode ): ?>
									<span itemprop="postalCode"><?= $postalCode ?></span>
								<?php endif; ?>
								<?php if ( $addressRegion ): ?>
									<span itemprop="addressRegion"><?= $addressRegion ?></span>
								<?php endif; ?>
                                    </span>
							<?php if ( $plan ): ?>
						</a>
					<?php endif; ?>
					</li>
				<?php endif; ?>
				<?php if ( $phone ): ?>
					<li class="group w-fit flex items-center gap-3 first:pt-0">
						<svg
							class="phone  h-4 w-4 fill-blue group-hover:fill-orange group-focus:fill-orange transition-colors">
							<use xlink:href="#phone"></use>
						</svg>
						<a href="tel:<?= str_replace( [ '/', ' ', '.' ], '', $phone ) ?>" target="_blank">
                                    <span itemprop="telephone"
                                          class="group-hover:text-orange group-focus:text-green transition-colors">
                                        <?= $phone ?>
                                    </span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ( $email ): ?>
					<li class="group w-fit flex items-center gap-3 first:pt-0">
						<svg
							class="mail  h-4 w-4 fill-blue group-hover:fill-orange group-focus:fill-orange transition-colors">
							<use xlink:href="#mail"></use>
						</svg>
						<a href="mailto:<?= $email ?>" target="_blank">
                                    <span itemprop="email"
                                          class="group-hover:text-orange group-focus:text-orange transition-colors">
                                        <?= $email ?>
                                    </span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ( $facebook ): ?>
					<li class="group w-fit flex items-center gap-3 first:pt-0">
						<svg
							class="facebook  h-4 w-4 fill-blue group-hover:fill-orange group-focus:fill-orange transition-colors">
							<use xlink:href="#facebook"></use>
						</svg>
						<a href="<?= $facebook ?>" target="_blank">
                                    <span class="group-hover:text-orange group-focus:text-orange transition-colors">
                                        Facebook
                                    </span>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</section>
	</section>
	<?php if ( have_rows( 'schedule', 'option' ) ): ?>
		<section aria-labelledby="schedule" class="flex flex-col gap-3 col-start-2 col-span-10 md:col-span-7 rg:max-rl:col-span-6 rg:max-rl:col-end-13 md:max-rl:py-10 rl:col-span-full">
			<h2 id="schedule" class="uppercase font-bold tracking-wide text-2xl">Horaires d'ouvertures</h2>
			<ul class="flex flex-col gap-2 w-fit">
				<?php foreach ( get_field( 'schedule', 'option' ) as $i => $row ) : ?>
					<li class="cursor-default flex items-center gap-2 text-lg px-3 py-1 <?= $highlight ? ( $i === date( 'w' ) - 1 ? 'bg-orange/20' : 'bg-transparent' ) : '' ?> hover:bg-blue-light/50 transition-colors">
						<span class="w-28 font-bold"><?= $row['day'] ?></span>
						<span class="max-md:text-base"><?= $row['hours'] ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	<?php endif; ?>
</div>