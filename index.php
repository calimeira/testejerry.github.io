<?php
$titlePage = "Colección NFT de Leo Ponzio - Capitán eterno";
$pageDescription = "Leo Ponzio lanza su colección de 3000 NFT únicos, generados con una gran variedad de propiedades representativas de él y almacenados en la red de Ethereum.";
$pageKeywords = "";
$canonical = "";
require("part-head.php");
?>

<body id="home-page">

    <?php include_once("analyticstracking.php") ?>

    <?php require("part-header.php"); ?>

    <main class="bg-img noise-effect">

        <section class="bg-img home-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="hero-text">
                            <h1 class="title-primary mb-5"><?php echo showLangFront($lang, 'INDEX_SECTION_ONE_TITLE'); ?></h1>
                            <p><?php echo showLangFront($lang, 'INDEX_SECTION_ONE_PARAGRAPH_ONE'); ?></p>
                            <p><?php echo showLangFront($lang, 'INDEX_SECTION_ONE_PARAGRAPH_TWO'); ?></p>
                            <div class="mt-5 d-none d-lg-flex">
                                <a href="gallery.php" class="btn btn-primary"><?php echo showLangFront($lang, 'VIEW_MORE_BTN'); ?><?php echo SIMPLE_ARROW ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 d-flex align-items-center">
                        <div class="floating-cards-box hero d-none d-lg-flex">
                            <div id="ponzioCard1Container">
                                <div id="ponzioCard1">
                                    <picture class="img-fluid"> 
                                            <source srcset="img/ponzio-card-3-front.png 1x, img/ponzio-card-3-front@2x.png 2x">
                                            <img data-src="img/ponzio-card-3-front.png" srcset="img/ponzio-card-3-front.png 1x, img/ponzio-card-3-front@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload">
                                    </picture>
                                </div>
                            </div>
                            <div id="ponzioCard2Container">
                                <div id="ponzioCard2">
                                    <picture class="img-fluid"> 
                                        <source srcset="img/ponzio-card-2-front.png 1x, img/ponzio-card-2-front@2x.png 2x">
                                        <img data-src="img/ponzio-card-2-front.png" srcset="img/ponzio-card-2-front.png 1x, img/ponzio-card-2-front@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload">
                                    </picture>
                                </div>
                            </div>
                            <div id="ponzioCard3Container">
                                <div id="ponzioCard3">
                                    <picture class="img-fluid"> 
                                            <source srcset="img/ponzio-card-1-front.png 1x, img/ponzio-card-1-front@2x.png 2x">
                                            <img data-src="img/ponzio-card-1-front.png" srcset="img/ponzio-card-1-front.png 1x, img/ponzio-card-1-front@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">                        
                        <div class="floating-cards-box mobile">                            
                            <div id="ponzioCard1Mobile">
                                <picture class="img-fluid"> 
                                        <source srcset="img/ponzio-card-1.png 1x, img/ponzio-card-1@2x.png 2x">
                                        <img data-src="img/ponzio-card-1.png" srcset="img/ponzio-card-1.png 1x, img/ponzio-card-1@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload">
                                </picture>                               
                            </div>
                            <div id="ponzioCard2Mobile">
                                <picture class="img-fluid"> 
                                    <source srcset="img/ponzio-card-2.png 1x, img/ponzio-card-2@2x.png 2x">
                                    <img data-src="img/ponzio-card-2.png" srcset="img/ponzio-card-2.png 1x, img/ponzio-card-2@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload">
                                </picture>
                            </div>                                                        
                            <div id="ponzioCard3Mobile">
                                <picture class="img-fluid"> 
                                        <source srcset="img/ponzio-card-3.png 1x, img/ponzio-card-3@2x.png 2x">
                                        <img data-src="img/ponzio-card-3.png" srcset="img/ponzio-card-3.png 1x, img/ponzio-card-3@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload">
                                </picture>
                            </div>                            
                        </div>
                        <div class="mt-5 hero-buttons-mobile">
                            <a href="#" class="btn btn-primary"><?php echo showLangFront($lang, 'VIEW_MORE_BTN'); ?><?php echo SIMPLE_ARROW ?></a>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="resume-section">
            <div class="circle-blur resume bg-img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="circle-blur counter-resume bg-img"></div>
                        <div class="resume-played-games-border" data-aos="fade-up">
                            <ul class="resume-played-games">
                                <li class="resume-games-item"><h4 class="resume-title"><span class="counter">712</span><?php echo showLangFront($lang, 'INDEX_SECTION_2_TITLE_1'); ?></h4></li>
                                <li class="resume-games-item"><h4 class="resume-title"><span class="counter">13</span><?php echo showLangFront($lang, 'INDEX_SECTION_2_TITLE_2'); ?></h4></li>
                                <li class="resume-games-item"><h4 class="resume-title"><span class="counter">8</span><?php echo showLangFront($lang, 'INDEX_SECTION_2_TITLE_3'); ?></h4></li>
                                <li class="resume-games-item"><h4 class="resume-title"><span class="counter">2</span><?php echo showLangFront($lang, 'INDEX_SECTION_2_TITLE_4'); ?></h4></li>
                            </ul>
                        </div>
                        <div class="miscellany-sparkle counter-resume"></div>
                    </div>
                    <!-- <div class="col-lg-10 offset-lg-1 d-flex justify-content-center">
                        <div class="video-container home" data-aos="fade-up">
                            <a class="video-clickeable" data-fancybox href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" name="play"></a>
                            <img src="img/thumb-video-home.png" alt="Video Presentación de Ponzio NFT" class="img-fluid video-ponzio">
                            <button class="btn btn-play" type="button"><?php echo PLAY_ICON ?></button>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="gold-divider"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="miscellany-sparkle box-collection top"></div>
                        <picture class="img-fluid gold-box-img" data-aos="fade-up-right">
                            <source srcset="img/img-box-collection.png 1x, img/img-box-collection@2x.png 2x">
                            <img data-src="img/img-box-collection.png" srcset="img/img-box-collection.png 1x, img/img-box-collection@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload">
                        </picture>
                        <div class="miscellany-sparkle box-collection bottom"></div>
                        <div class="circle-blur box-collection bg-img"></div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div data-aos="fade-up-left">
                            <h2 class="title-secondary mb-4"><?php echo showLangFront($lang, 'INDEX_SECTION_3_TITLE'); ?></h2>
                            <p><?php echo showLangFront($lang, 'INDEX_SECTION_3_PARAGRAPH'); ?></p>
                            <a href="./mint/index.html" class="btn btn-primary mt-6">MINT <?php echo SIMPLE_ARROW ?></a>
                        </div>
                    </div>
                    <div class="col-lg-12 pt-14">
                        <div class="gold-divider"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 d-flex justify-content-lg-end" data-aos="fade-up-right">
                        <div class="vertical-line title"></div>
                        <h3 class="miscellany-sparkle benefits title-secondary ps-md-5 mb-3 ps-lg-4"><?php echo showLangFront($lang, 'INDEX_SECTION_4_TITLE'); ?></h3>
                    </div>
                    <div class="col-lg-7 offset-xl-2 offset-lg-1">
                        <div class="mb-lg-12 benefis-description" data-aos="fade-up-left">
                            <p class="mb-2"><?php echo showLangFront($lang, 'INDEX_SECTION_4_PARAGRAPH_1'); ?></p>
                            <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_PARAGRAPH_2'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-benefits-box" data-aos="fade-up">
                <ul id="carouselScrolledOne" class="carousel-benefits one">
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-1-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_1'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-3-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_3'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-5.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-5-hover.png" alt="" class="img-fluid">
                                <figcaption  class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_5'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-4.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-4-hover.png" alt="" class="img-fluid">
                                <figcaption  class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_4'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-2-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_2'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-1-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_1'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
                <ul id="carouselScrolledTwo" class="carousel-benefits two" >
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-2-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_2'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-4.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-4-hover.png" alt="" class="img-fluid">
                                <figcaption  class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_4'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-1-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_1'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-5.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-5-hover.png" alt="" class="img-fluid">
                                <figcaption  class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_5'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-3-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_3'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li class="carousel-benefits-item">
                        <div class="carousel-benefits-thumb">
                            <img src="img/img-benefits-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-benefits-thumb-hover">                            
                            <figure>
                                <img src="img/img-benefits-2-hover.png" alt="" class="img-fluid">
                                <figcaption class="thumb-figcaption">
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_4_LIST_1_CARD_2'); ?></p>
                                    <a href=""><?php echo ICON_ARROW_CIRCLE ?></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section data-aos="fade-up" class="market-section">
            <div class="circle-blur bg-img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="market-title-box">
                            <div class="vertical-line title"></div>
                            <h4 class="title-secondary ms-md-5"><?php echo showLangFront($lang, 'INDEX_SECTION_5_TITLE'); ?></h4>
                            <a href="gallery.php" class="btn btn-primary"><?php echo showLangFront($lang, 'VIEW_GALLERY_BTN'); ?> <?php echo SIMPLE_ARROW ?></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="list-nfts home">
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-nft">
                                    <figure class="thumb-nft-figure">
                                        <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-nft-img">
                                        <figcaption class="thumb-nft-figcaption">
                                            <p>Ponzio #3000</p>
                                            <div class="thumb-nft-title-box">
                                                <h6 class="thumb-nft-title">0.23 ETH</h6>
                                                <p class="thumb-nft-price"><small>Last price xx.xx</small></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                        <div class="gold-divider"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-10 bg-img roadmap-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="rotate-title">
                            <h5 class="title-terciary"><?php echo showLangFront($lang, 'INDEX_SECTION_6_ROTATE_TITLE'); ?><span></span></h5>
                        </div>
                        <div class="vertical-line"></div>                        
                    </div>
                    <div class="col-lg-6 offset-lg-2">
                        <div class="pb-15">
                            <div class="text-center d-flex justify-content-center mb-11" data-aos="fade-up">
                                <h4 class="title-secondary"><?php echo showLangFront($lang, 'INDEX_SECTION_6_TITLE'); ?></h4>
                            </div>
                            <ul class="time-line-list">
                                <li data-aos="fade-up">
                                    <h5 class="time-line-title"><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_TITLE_1'); ?></h5>
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_PARAGRAPH_1'); ?></p>
                                </li>
                                <li class="pb-md-8" data-aos="fade-up">
                                    <h5 class="time-line-title"><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_TITLE_2'); ?></h5>
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_PARAGRAPH_2'); ?></p>
                                </li>
                                <li data-aos="fade-up">
                                    <h5 class="time-line-title"><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_TITLE_3'); ?></h5>
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_PARAGRAPH_3'); ?></p>
                                </li>
                                <li data-aos="fade-up">
                                    <h5 class="time-line-title"><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_TITLE_4'); ?></h5>
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_PARAGRAPH_4'); ?></p>
                                </li>
                                <li data-aos="fade-up">
                                    <h5 class="time-line-title"><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_TITLE_5'); ?></h5>
                                    <p><?php echo showLangFront($lang, 'INDEX_SECTION_6_TIMELINE_PARAGRAPH_5'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
    </main>

    <?php require("part-footer.php"); ?>

    <?php require("part-script.php"); ?>

    <?php require("part-modal.php"); ?>

    <script src="js/controllers/min/index.min.js"></script>

    <script>
        $(document).ready(function(){
            initCountUp();
        });
    </script>

</body>

</html>