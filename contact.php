<?php
$titlePage = "Colección NFT de Leo Ponzio - Capitán eterno";
$pageDescription = "Leo Ponzio lanza su colección de 3000 NFT únicos, generados con una gran variedad de propiedades representativas de él y almacenados en la red de Ethereum.";
$pageKeywords = "";
$canonical = "contacto.php";
require("part-head.php");
?>

<body id="contacto-page">

    <?php include_once("analyticstracking.php") ?>
    <?php require("part-header.php"); ?>

    <main class="bg-img noise-effect">
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="rotate-title">
                            <h5 class="title-terciary"><?php echo showLangFront($lang, 'CONTACT_SECTION_1_ROTATE_TITLE'); ?></h5>
                        </div>
                        <div class="vertical-line contact"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-titles">
                            <h1 class="title-secondary big"><?php echo showLangFront($lang, 'CONTACT_SECTION_1_TITLE_1'); ?></h1>
                            <h2 class="title-secondary big"><?php echo showLangFront($lang, 'CONTACT_SECTION_1_TITLE_2'); ?></h2>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <form role="form" action="sendmail.php" method="post" enctype="multipart/form-data" class="needs-validation contact-form" novalidate>
                            <!-- Honeypot -->
                            <div style="position: absolute; left: -5000px;">
                                <input type="text" name="antispam" value="">
                            </div>
                            <!-- CSRF Token -->
                            <?php
                            $tokenCSRF = bin2hex(random_bytes(32));
                            $_SESSION['token'] = $tokenCSRF;
                            ?>
                            <input type="hidden" name="tokenCSRF" value="<?php echo $tokenCSRF; ?>">
                            <div class="row">
                                <div>
                                    <label for="formNombre"><?php echo showLangFront($lang, 'CONTACT_SECTION_1_LABEL_1'); ?>*</label>
                                    <input id="formNombre" type="text" name="nombre" class="form-control" required>
                                    <div class="invalid-feedback"><?php echo showLangFront($lang, 'FORM_INVALID_FEEDBACK'); ?></div>
                                </div>
                                <div>
                                    <label for="formEmail"><?php echo showLangFront($lang, 'CONTACT_SECTION_1_LABEL_2'); ?>*</label>
                                    <input id="formEmail" type="email" name="email" class="form-control" required>
                                    <div class="invalid-feedback"><?php echo showLangFront($lang, 'FORM_INVALID_FEEDBACK'); ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label for="formMensaje"><?php echo showLangFront($lang, 'CONTACT_SECTION_1_LABEL_3'); ?>*</label>
                                    <textarea id="formMensaje" name="mensaje" class="form-control" required></textarea>
                                    <div class="invalid-feedback"><?php echo showLangFront($lang, 'FORM_INVALID_FEEDBACK'); ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="btn-box">
                                        <p>*<?php echo showLangFront($lang, 'FORM_REQUIRED_DATA'); ?></p>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block"><?php echo showLangFront($lang, 'SEND_BTN'); ?><?php echo SIMPLE_ARROW ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require("part-footer.php"); ?>
    <?php require("part-script.php"); ?>

    <!-- Google ReCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js?render=6LcJoWggAAAAAA3JOag8BpTYTljFojmyZChLyGMI'></script>

    <?php require("part-modal.php"); ?>

    <script src="js/controllers/min/contacto.min.js"></script>


    <script>
        // <?php if (isset($_GET['gracias'])) { ?>
        //     $(document).ready(function() {
        //         $("#contactSuccessModal").modal("show");
        //     });
        // <?php } ?>
    </script>
</body>

</html>