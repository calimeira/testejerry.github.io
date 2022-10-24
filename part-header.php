<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container">
            <a class="navbar-brand" href="<?php echo getFrontUrl('inicio') ?>">
                <!-- <img src="img/brand-logo.png" alt="Ponzio Logo" class="img-fluid ponzio-logo"> -->
                <img src="img/logo-circle.png" alt="" class="img-fluid circle-logo">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto noise-effect bg-img">
                    <li class="nav-item">
                        <a class="nav-link <?php if($titlePage == "Home") {echo 'active';} ?>" href="index.php"><?php echo showLangFront($lang, 'MENU_INICIO'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($titlePage == "FAQs") {echo 'active';} ?>" href="faqs.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($titlePage == "MINT") {echo 'active';} ?>" href="https://mint.leoponzio.com/">MINT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($titlePage == "Galería") {echo 'active';} ?>" href="gallery.php"><?php echo showLangFront($lang, 'MENU_GALLERY'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($titlePage == "Entradas") {echo 'active';} ?>" target="_blank" href="https://www.ticketek.com.ar/leo-ponzio-la-despedida/estadio-river-plate"><?php echo showLangFront($lang, 'MENU_ENTRADAS'); ?></a>
                    </li>
                    <li class="nav-item" id="select-lang">
                        <?php if($actualLang == 'en'){ ?>
                        <a class="nav-link" href="<?php echo WEB_URL ?>change-lang.php?lang=es<?php echo (isset($sLangMisc))?$sLangMisc:''; ?>">Es</a>
                        <?php } else { ?>
                        <a class="nav-link" href="<?php echo WEB_URL ?>change-lang.php?lang=en<?php echo (isset($sLangMisc))?$sLangMisc:''; ?>">En</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
</header>