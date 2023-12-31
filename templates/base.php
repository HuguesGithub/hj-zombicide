<?php
use src\Controller\UtilitiesController;

define('ZOMBICIDE_SITE_URL', 'https://zombicide.jhugues.fr/');
define('PLUGINS_ZOMBICIDE', ZOMBICIDE_SITE_URL.'wp-content/plugins/hj-zombicide/');
date_default_timezone_set('Europe/Paris');

$controller = new UtilitiesController();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'/>
        <meta content='width=device-width, initial-scale=1' name='viewport'/>
        <title>... | Zombisite</title>
        <!-- Bootstrap style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
            integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Zombicide style -->
        <link rel="stylesheet" media="all" href="<?php echo PLUGINS_ZOMBICIDE; ?>assets/styles/zombicide.css" />
        <link rel="icon" type="image/png" href="<?php echo PLUGINS_ZOMBICIDE; ?>assets/image/favicon-32x32.png">
    </head>
    <body class="modern-missions">
        <div id="page">
            <!-- Start Header -->
            <?=$controller->getRender('templates/header.tpl')?>
        // Header
            <!-- Finish Header -->
            <!-- Start Main -->
            <div id="main">
                <!-- Start Content -->
<?php
  //echo $objPageBean->getContentPage();
?>
                <!-- Finish Content -->
            </div>
            <!-- Finish Main -->
            <!-- Start Footer -->
<?php
  //if ($objPageBean->hasFooter) {
  //  echo $objPageBean->getPublicFooter();
  //}
?>
            <!-- Finish Footer -->
        </div>
        <!-- Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
            integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
            integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Zombicide scripts -->
        <script src='<?php echo PLUGINS_ZOMBICIDE; ?>assets/js/zombicide.js'></script>
    </body>
</html>
