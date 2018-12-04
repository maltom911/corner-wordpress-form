<?php /* Template Name: Główna */
  get_header(); 
  $post_fields = get_fields();
?>
<!-- Main Header Menu -->
<header class="header">
        <div class="logo">
            <a class="logo__link" href="#">
                <img class="logo__img" src="<?php echo THEME_IMG_PATH; ?>/logo/logo.png" alt="Logo">
            </a>
        </div>
        <nav id="main-nav" class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="main-menu">
                    <ul class="nav navbar-nav text-right">
                        <li>
                            <a href="#section-about" class="nav__link smooth">O nas</a>
                        </li>
                        <li>
                            <a href="#section-products" class="nav__link smooth">Produkty</a>
                        </li>
                        <li>
                            <a href="#section-contact" class="nav__link smooth">Kontakt</a>
                          
                        </li> 
                        <li>
                            <a href="<?php echo site_url(); ?>/product_type/promocje/" class="nav__link smooth">Promocje</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main u-margin-bottom-small">Corner</span>
                <span class="heading-primary--sub u-margin-bottom-medium">Twój dostawca higieny papierniczej</span>
            </h1>
            <a href="#section-about" class="button u-margin-bottom-medium smooth">Zapraszamy !</a>
            <a class="arrow-box smooth" href="#section-about">
                <span class="arrow-box__arrow"></span>
                <span class="arrow-box__arrow arrow-box__arrow--two"></span>
            </a>
        </div>   
</header>

<!-- Section About -->
<section id="section-about" class="section-about">
<div class="row">
        <h2 class="heading-secondary u-margin-bottom-big"> O nas</h2>
            <div class="container-fluid">
                <div class="card__container col-md-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__content">
                                <div class="card__counter-container">
                                    <span class="card__counter" data-text="29">0</span>
                                </div>
                            </div>
                            <p class="card__counter-text">
                                lat doświadczenia
                            </p>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <p class="card__back-text"><span class="card__back-text--bold">CORNER R. Bojarski, B. Malski Spółka jawna</span>zajmuje się dystrybucją artykułów higieny papierniczej od 1990 r. Kompleksowa i stała oferta, niezawodność dostaw połączona ze stabilną polityką sprzedaży oraz wierna grupa odbiorców krajowych i zagranicznych to źródła naszego sukcesu rynkowego.</p>
                        </div>

                    </div>
                </div>
                <div class="card__container col-md-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__content">
                                <div class="card__counter-container">
                                    <span class="card__counter" data-text="1000">0</span>
                                </div>
                            </div>
                            <p class="card__counter-text">
                                -ce zadowolonych Klientów
                            </p>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <p class="card__back-text">Nasz zespół, którego trzon tworzą doświadczeni pracownicy, będący z nami niezmiennie od rozpoczęcia działalności firmy, jest w stanie zagwarantować efektywną obsługę nawet najbardziej wymagającym Klientom. Dzięki indywidualnemu podejściu do każdego Klienta świadczymy usługi na najwyższym poziomie.</p>
                        </div>

                    </div>
                </div>
                <div class="card__container col-md-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__content">
                                <div class="card__counter-container">
                                    <span class="card__counter" data-text="100">0</span>
                                </div>
                            </div>
                            <p class="card__counter-text">
                                -tki wysokiej jakości produktów
                            </p>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <p class="card__back-text">Najbardziej znane marki produkowanych przez nas artykułów -
                                <span class="card__back-text--bold">Tira, Satinelle, Classic, Harmony, Edelweiss, Sopleix</span> - należą do grupy najlepszych na rynku. Ciągle dbamy o wysoką jakość produktów i zapewniamy konkurencyjne ceny.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Section Products -->
<section id="section-products" class="section-products">
    <div class="container-fluid">
        <div class="row">
            <h2 class="heading-secondary">Produkty
            </h2>
            <h3 class="heading-tertiary u-margin-bottom-medium">Nasza firma oferuje szeroką gamę produktów higieny papierniczej</h3>
    
            <?php
                        $args = array (
                        'post_type'         =>     'product_type',
                        'posts_per_page'    =>     -1
                    );
                        $tomek = new WP_Query( $args );
                        if ( $tomek->have_posts() ) {
                        while ( $tomek->have_posts() ) {
                            $tomek->the_post();
                            $post_fields = get_fields();                         
                            ?>
            <div class="col-md-3 product__padding ">
                        <div class="product">
                            <div class="product__image-container">
                                <div class="product__image" style="background: url('<?php echo $post_fields['typ-produktu-zdjecie']; ?>'); background-size:contain;background-repeat:no-repeat;background-position:center">
                                    <div class="product__mask">
                                        <a class="product__link" href="<?php echo get_the_permalink(); ?>">
                                            <i class="product__icon fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a class="product__label" href="<?php echo get_the_permalink(); ?>">
                            <?php echo $post_fields['typ-produktu-nazwa']; ?>
                            </a>
                        </div>
            </div>
            <?php }
                }
                ?>  
    </div>
</div>
</section>

<!-- Section Contact -->
<section id="section-contact" class="section-contact">
    <div class="container-fluid">
        <div class="row contact-row__padding">
            <h2 class="heading-secondary heading-secondary--white u-margin-bottom-big">Skontaktuj się z nami</h2>
            <div class="contact col-md-6">

            <?php
                        $args = array (
                        'post_type'         =>     'contact',
                        'posts_per_page'    =>     -1
                    );
                        $tomek = new WP_Query( $args );
                        if ( $tomek->have_posts() ) {
                        while ( $tomek->have_posts() ) {
                            $tomek->the_post();
                            $post_fields = get_fields();                         
                            ?>
<div class="contact__general-numbers">
<?php

// check if the repeater field has rows of data
if( have_rows('kontakt-telefoniczny') ):

    // loop through the rows of data
    while ( have_rows('kontakt-telefoniczny') ) : the_row(); ?>
            <p><?php the_sub_field('kontakt-telefoniczny-wiersz');?></p>
           
 <?php
        endwhile;

    else :

        // no rows found

    endif;
    ?>
</div>
<div class="contact__specified-numbers">
<?php

// check if the repeater field has rows of data
if( have_rows('kontakt-telefoniczny-konkretne') ):

    // loop through the rows of data
    while ( have_rows('kontakt-telefoniczny-konkretne') ) : the_row(); ?>
            <p><?php the_sub_field('kontakt-telefoniczny-konkretne-wiersz');?></p>

 <?php
        endwhile;

    else :

        // no rows found

    endif;
    ?>
</div>



            <?php }
                }
                ?>  

                
                </div>
                <div class="contact-form col-md-6">
                    <form id="contact-form" method="post" action="contact.php" role="form" class="form-horizontal">
                        <div class="messages"></div>
                        <div class="contact-form__form-group form-group">
                            <select name="department" class="contact-form__form-control form-control" id="sel1">
                                <option value='1'>Dział handlowy</option>
                                <option value='2'>Księgowość</option>
                            </select>
                        </div>
                        <div class="contact-form__form-group form-group">
                            <input id="form_name" type="text" name="name" class="contact-form__form-control form-control" placeholder="Twoje imię" required>
                        </div>
                        <div class="contact-form__form-group form-group">
                            <input id="form_lastname" type="text" name="surname" class="contact-form__form-control form-control" placeholder="Twoje nazwisko" required>
                        </div>
                        <div class="contact-form__form-group form-group">
                            <input id="form_email" type="email" name="email" class="contact-form__form-control form-control" placeholder="Adres e-mail" required>
                        </div>
                        <div class="contact-form__form-group form-group">
                            <input id="form_phone" type="tel" name="phone" class="contact-form__form-control form-control" placeholder="Numer telefonu" required>
                        </div>
                        <div class="contact-form__form-group form-group">
                            <textarea id="form_message" name="message" class="contact-form__form-control form-control" rows="11" placeholder="Wiadomość" required></textarea>
                        </div>
                        <div class="contact-form__form-group form-group">
                            <input type="submit" class="contact-form__btn btn btn-info btn-lg btn-send" value="Wyślij">
                        </div>
                        <div class="contact-form__form-group form-group">
                            <div class="g-recaptcha" data-sitekey="6LeCgEcUAAAAALi50hj2wsXY3stbMHBO8JKY6yZo"></div>
                        </div>
                        <p class="contact-form__privacy-text">Administratorem danych osobowych jest Corner R.Bojarski B.Malski sp.j z siedzibą w Tarnowie przy ul. Bandrowskiego 20. Dane wpisane w formularzu kontaktowym będą przetwarzane w celu udzielenia odpowiedzi na przesłane zapytanie zgodnie z polityką prywatności (<a href="<?php echo site_url(); ?>/polityka-prywatnosci/">tutaj</a>)</p>
                    </form>
                </div>
        </div>
    </div>
</section>
<!-- Section Contact End -->
<!-- Section Map -->
<section id="section-map" class="section-map">
        <div class="container">
            <div class="row">
                    <h2 class="heading-secondary u-margin-bottom-big">Znajdź nas</h2>
            </div>
            <div class="row map">
                <div class="col-md-6">
                    <iframe class="map__google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.2369149629826!2d20.977640115536797!3d50.006914527105174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473d84adc8588b0b%3A0x49b53cc41c684267!2sCorner+sp.j.!5e0!3m2!1spl!2spl!4v1518356101570" width="720" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 map__company-address">
                        <p>CORNER R. Bojarski, B. Malski Spółka jawna</p>
                        <p>ul. Bandrowskiego 20</p>
                        <p>33-100 Tarnów</p>
                </div>
            </div>
        </div>
</section>
<!-- Section Map End -->
<!-- Privacy Rodo & Cookies -->
<div class="rodo-cookies" style ="display:none">
        <div class="rodo-cookies__popup">
            <a class="rodo-cookies__close-link" href="#">&times;</a>
            <h2 class="rodo-cookies__heading">Witaj na stronie Corner</h2>
            <p class="rodo-cookies__popup-text">Od 25 maja 2018 roku obowiązuje Rozporządzenie Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia
                2016 r (RODO).</p>
            <p class="rodo-cookies__popup-text">Klikając przycisk
                <span class="rodo-cookies__popup-text--bolded">"Dalej"</span> lub zamykając to okno za pomocą przycisku
                <span class="rodo-cookies__popup-text--bolded">"X"</span> wyrażasz zgodę na zasadach określonych poniżej:
            </p>
            <p class="rodo-cookies__popup-text">Zgadzam się na przechowywanie na urządzeniu, z którego korzystam tzw. plików cookies oraz na przetwarzanie moich
                danych osobowych pozostawionych w czasie korzystania przez ze mnie z produktów i usług świadczonych drogą
                elektroniczną w ramach stron internetowych, serwisów i innych funkcjonalności, w tym także informacji oraz
                innych parametrów zapisywanych w plikach cookies w celach marketingowych.</p>
            <p class="rodo-cookies__popup-text">Więcej o zasadach przetwarzania danych w „Polityce prywatności” –
                <a class="rodo-cookies__privacy-link" href="<?php echo site_url(); ?>/polityka-prywatnosci/">tutaj</a>
            </p>
            <a href="#" class="rodo-cookies__button btn btn-default">Dalej</a>

        </div>
    </div>
<!-- Privacy Rodo & Cookies -->

    

<?php get_footer(); ?>
