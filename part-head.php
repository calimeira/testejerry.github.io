<?php
    include_once 'config.php';
    $googleTagManagerID = '';
    $onlyDomain = 'leoponzio.com';
    $domain = 'https://' . $onlyDomain . '/';
    $siteName = 'Ponzio';
?>

<!DOCTYPE html>
<?php if ($actualLang == 'es'){ ?>
<html lang="es">
<?php } else { ?>
<html lang="en">
<?php } ?>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
        
        <!-- Metas SEO-->
        <meta name="description" content="<?php echo $pageDescription; ?>"/>
        <meta name="robots" content="index,follow"/>
        <meta name="GOOGLEBOT" content="index,follow"/>
        <meta name="category" content=""/>
        <meta name="author" content=""/>
        <meta name="keywords" content="<?php echo $pageKeywords; ?>"/>
        <title><?php echo $siteName; ?> - <?php echo $titlePage; ?></title>
        <link rel="canonical" href="<?php echo $domain; ?><?php echo $canonical; ?>"/>
        
        <link rel="dns-prefetch" href="<?php echo $onlyDomain; ?>">
        <link rel="dns-prefetch" href="www.googletagmanager.com">
        <link rel="dns-prefetch" href="www.google-analytics.com">
        <link rel="dns-prefetch" href="www.gstatic.com">
        <link rel="dns-prefetch" href="www.google.com">
        <link rel="dns-prefetch" href="use.fontawesome.com">
        <link rel="dns-prefetch" href="fonts.gstatic.com">
        
        <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://www.google.com" crossorigin>
        <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
        <link rel="preconnect" href="https://use.fontawesome.com" crossorigin>
        <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link rel="preload" href="<?php echo WEB_URL; ?>css/min/style.min.css" as="style">
        
        <!-- Lang -->
        <link rel="alternate" href="<?php echo $domain; ?><?php echo $canonical; ?>" hreflang="es-ar" />
        
        <!-- Favicon-->
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <style>
            /* Insert critical css here from https://jonassebastianohlsson.com/criticalpathcssgenerator/ */
        </style>
        
        <!-- Custom Style-->
        <link 
            href="<?php echo WEB_URL; ?>css/min/style.min.css" 
            rel="stylesheet"
            media="screen" 
            onload="this.onload=null;this.removeAttribute('media');"
        >
        
        <noscript>
            <link href="<?php echo WEB_URL; ?>css/min/style.min.css" rel="stylesheet">
        </noscript>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        
        <!-- Facebook Open Graph -->
        <meta property="og:title" content="<?php echo $siteName; ?> - <?php echo $titlePage; ?>" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="https://leoponzio.com/" />
        <meta property="og:image" content="img/og-img.png" />
        <meta property="og:description" content="Leo Ponzio lanza su colecci??n de 3000 NFT ??nicos, generados con una gran variedad de propiedades representativas de ??l y almacenados en la red de Ethereum." />
        <meta property="og:site_name" content="" />
        <meta property="fb:app_id" content="" />
        
        <meta name="twitter:card" property="product">
		<meta name="twitter:site" content="@">
		<meta name="twitter:creator" content="@">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image:src" content="https://twitter.com/">
		<meta name="twitter:data1" content="">
		<meta name="twitter:label1" content="">
		
		<meta name="twitter:domain" content="">
		<meta name="twitter:app:name:iphone" content="">
		<meta name="twitter:app:name:ipad" content="">
		<meta name="twitter:app:name:googleplay" content="">
		<meta name="twitter:app:url:iphone" content="">
		<meta name="twitter:app:url:ipad" content="">
		<meta name="twitter:app:url:googleplay" content="">
		<meta name="twitter:app:id:iphone" content="">
		<meta name="twitter:app:id:ipad" content="">
		<meta name="twitter:app:id:googleplay" content="">	
        
        <!-- Google Tag Manager -->
        <?php if ( !empty( $googleTagManagerID ) ) { ?>
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-<?php echo $googleTagManagerID; ?>');</script>
        <?php } ?>
        <!-- End Google Tag Manager -->
        
    </head>