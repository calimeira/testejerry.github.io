<?php
$titlePage = "Colección NFT de Leo Ponzio - Capitán eterno";
$pageDescription = "Leo Ponzio lanza su colección de 3000 NFT únicos, generados con una gran variedad de propiedades representativas de él y almacenados en la red de Ethereum.";
$pageKeywords = "";
$canonical = "";
require("part-head.php");
?>

<body id="gallery-page">

    <?php include_once("analyticstracking.php") ?>

    <?php require("part-header.php"); ?>

    <main class="bg-img noise-effect">
        <section class="gallery-section">
            <div class="circle-blur bg-img one d-none d-sm-block"></div>
            <div class="circle-blur bg-img two d-none d-sm-block"></div>
            <div class="circle-blur bg-img three"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gallery-title-navigator-box">
                            <h1 class="title-secondary"><?php echo showLangFront($lang, 'GALLERY_SECTION_1_TITLE'); ?></h1>
                            <div class="gallery navigations-tools">
                                <!-- <form action="" class="browser-gallery-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Example text with button addon" aria-describedby="buscar">
                                        <button class="btn btn-searcher" type="button" id="buscar"><?php echo ICON_SEARCH ?></button>
                                    </div>
                                </form> -->
                                <nav aria-label="Page navigation" class="navigation gallery">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><?php echo showLangFront($lang, 'PREVIOUS_BTN'); ?></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><?php echo showLangFront($lang, 'NEXT_BTN'); ?></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div>
                            <ul class="gallery-list-nfts">
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-gallery">
                                        <a href="open-nft.php" class="thumb-gallery-link"></a>
                                        <figure class="thumb-gallery-figure">
                                            <div class="thumb-gallery-img-box">
                                                <img src="img/img-ponzio-nft-1.png" alt="" class="img-fluid thumb-gallery-img">
                                                <div class="thumb-gallery-number">
                                                    <p>Ponzio #3000</p>
                                                </div>
                                            </div>
                                            <figcaption class="thumb-gallery-figcaption">
                                                <div class="thumb-gallery-info">
                                                    <div class="propietary-box">
                                                        <p><small>Propietario</small></p>
                                                        <div class="propietary-info">
                                                            <img src="img/propietario-demo.png" alt="" class="img-fluid">
                                                            <p>NFT_PONZIO</p>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <h6 class="thumb-gallery-price"><?php echo LOGO_ETHEREUM?>00.00 ETH</h6>
                                                        <p><small>Last price 00.00 ETH</small></p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-buy"><?php echo showLangFront($lang, 'BUY_BTN'); ?> <?php echo SIMPLE_ARROW ?></button>
                                            </figcaption>
                                        </figure>
                                    </div>
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

    <script>
    </script>

</body>

</html>