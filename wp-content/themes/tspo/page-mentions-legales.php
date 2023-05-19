<?php
get_header();

$address       = get_field( 'address', 'option' );
$streetAddress = $address['streetAddress'];
$postalCode    = $address['postalCode'];
$addressRegion = $address['addressRegion'];
$plan          = get_field( 'plan', 'option' );
$phone         = get_field( 'tel', 'option' );
$email         = get_field( 'email', 'option' );
$facebook      = get_field( 'facebook', 'option' );

?>
    <div class="mentions grid-default my-20 rl:my-24">
        <div class="col-start-2 col-span-10 xl:col-start-3 xl:col-span-9 flex flex-col gap-8 rl:gap-12 mx-auto">
            <h1 class="text-blue-dark w-fit font-black text-3xl rl:tracking-wider rl:text-5xl"><?= the_title(); ?></h1>
            <section aria-labelledby="legalName" itemscope itemtype="https://schema.org/Organization"
                     class="flex flex-col gap-4">
                <h2 id="legalName" itemprop="legalName"
                    class="font-black tracking-wide text-xl rl:text-3xl"><?= get_field( 'legalName', 'option' ) ?></h2>
                <ul class="flex flex-col gap-3">
					<?php if ( $streetAddress || $postalCode || $addressRegion ): ?>
                        <li class="group w-fit flex gap-3 first:pt-0">
                            <svg class="location  h-4 w-4 fill-blue group-hover:fill-orange group-focus:fill-orange transition-colors mt-1">
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
        </div>
    </div>
<?php get_footer(); ?>