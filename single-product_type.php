
<?php 
get_header(); 
$post_fields = get_fields();
?>
<div class="subpage-wrapper">
    <section class="subpage">
        <div class="logo-button-panel">
            <div class="container-fluid">
                <div class="logo-button-panel__padding row">
                    <div class="logo col-xs-6">
                        <a class="logo__link" href="<?php echo site_url();?>">
                            <img class="logo__img--subpage" src="<?php echo THEME_IMG_PATH; ?>/logo/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="col-xs-6 subpage-align-right">
                        <a href="<?php echo site_url(); ?>#section-products" class="button">Powrót</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2 class="heading-secondary u-margin-bottom-medium"><?php echo $post_fields['typ-produktu-nazwa']; ?></h2>
            </div>

            <?php



    // check if the repeater field has rows of data
    if( have_rows('produkt') ):

        // loop through the rows of data
        while ( have_rows('produkt') ) : the_row(); ?>
        <div class="row">
            <div class="col-md-6 product__padding--big ">
                <h4 class="heading-fourth"><?php the_sub_field('produkt-nazwa');?></h4>
                <div class="product product--border">
                    <div class="product__image-container product__image-container--big">
                        <div class="product__image--no-hover" style="background: url('<?php the_sub_field('produkt-zdjecie');?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 product-description">

                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('produkt-parametr') ):

                        // loop through the rows of data
                        while ( have_rows('produkt-parametr') ) : the_row(); ?>
                            <p class="product-description__item"><?php the_sub_field('parametr');?></p>
                        <?php
                        endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </div>
            </div>
        </div>
                
    <?php
        endwhile;

    else :

        // no rows found

    endif;
    ?>

    <?php
    
    // check if the repeater field has rows of data
    if( have_rows('promocje') ):

        // loop through the rows of data
        while ( have_rows('promocje') ) : the_row(); ?>

        <div class="row">
                <h3 class="heading-fourth heading-fourth--red u-margin-bottom-big"><?php the_sub_field('promocja-obowiazywanie');?></h3>
        </div>
        <div class="row product-promotion">

                <?php if( get_sub_field('promocja-zdjecie-jeden') ): ?>
                        <div class="col-md-12 no-padding">
                            <div class="product-promotion__container">
                                <div class="product-promotion__item" style="background: url('<?php echo $post_fields['typ-produktu-zdjecie']; ?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                                </div>
                            </div>
                        </div>
                <?php endif; ?>

                
            <?php

            // check if the repeater field has rows of data
            if( have_rows('promocja-zdjecie-dwa') ):

                // loop through the rows of data
                while ( have_rows('promocja-zdjecie-dwa') ) : the_row(); ?>
                
                <div class="col-md-6 no-padding">
                    <div class="product-promotion__container">
                        <div class="product-promotion__item" style="background: url('<?php the_sub_field('dwa-jeden'); ?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 no-padding">
                    <div class="product-promotion__container">
                        <div class="product-promotion__item" style="background: url('<?php the_sub_field('dwa-dwa'); ?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                </div>

                <?php
                endwhile;

            else :

                // no rows found

            endif;

            ?>

            <?php

            // check if the repeater field has rows of data
            if( have_rows('promocja-zdjecie-trzy') ):

                // loop through the rows of data
                while ( have_rows('promocja-zdjecie-trzy') ) : the_row(); ?>
                
                <div class="col-md-4 no-padding">
                    <div class="product-promotion__container">
                        <div class="product-promotion__item" style="background: url('<?php the_sub_field('trzy-jeden'); ?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 no-padding">
                    <div class="product-promotion__container">
                        <div class="product-promotion__item" style="background: url('<?php the_sub_field('trzy-dwa'); ?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no-padding">
                    <div class="product-promotion__container">
                        <div class="product-promotion__item" style="background: url('<?php the_sub_field('trzy-trzy'); ?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                        </div>
                    </div>
                </div>

                <?php
                endwhile;

            else :

                // no rows found

            endif;

            ?>

            <div class="col-md-12 product-promotion__description">
            <?php
            
            // check if the repeater field has rows of data
            if( have_rows('promocja-opis') ):

                // loop through the rows of data
                while ( have_rows('promocja-opis') ) : the_row(); ?>
                
                
                    <p><?php the_sub_field('promocja-opis-wiersz'); ?></p>
               

                <?php
                endwhile;

            else :

                // no rows found

            endif;

            ?>
             </div>

                                

    </div>


     <?php
        endwhile;

    else :

        // no rows found

    endif;
    ?>



    </div>
    </section>
    <!--Footer-->
    <footer id="footer" class="footer footer--bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="footer__text-container col-xs-12 col-sm-7">
                        <p class="footer__text">CORNER R. Bojarski, B. Malski Spółka jawna</pc>
                        <p class="footer__text">ul. Bandrowskiego 20</p>
                        <p class="footer__text">33-100 Tarnów</p>
                    </div>
                    <div class="footer__counter-container col-xs-6 col-sm-2">
                            <a href="https://www.reliablecounter.com" target="_blank">
                                <img src="https://www.reliablecounter.com/count.php?page=corner.com.pl17139822&digit=style/plain/2/&reloads=0" alt="" title=""
                                    border="0">
                            </a>
                            <br />
                            <a href="https://garmin-forerunner.com/review/garmin-forerunner-230" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;"></a>
                    </div>
                    <div class="footer__copyright col-xs-6 col-sm-3">
                        <p>Copyright by Tomasz Malski</p>
                    </div>
                </div>
            </div>
        </footer> 
<!--Footer End-->
</div>