<?php echo doctype('xhtml1-trans') ?>
<html>

    <head>
        <style type="text/css">                                    
            body {
                -webkit-user-select: none; /* Safari 3.1+ */
                -moz-user-select: none; /* Firefox 2+ */
                -ms-user-select: none; /* IE 10+ */
                user-select: none; /* Standard syntax */
            }
        </style>
        <?php echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); ?>
        <?php echo meta('description', 'O EncurtaEu é um projeto simples, que serve para encurtar seus links e lhe dar praticidade!'); ?>

        <title>ENCURTAEU</title>                

        <link rel="shortcut icon" href="<?= $this->config->base_url(); ?>assets/favicon/favicon.ico" sizes="32x32"> 

        <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#7690C9">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#7690C9">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#7690C9">

        <!-- FAVICON-->
        <link rel="apple-touch-icon" sizes="180x180" href="http://res.cloudinary.com/sisforma/image/upload/v1521242714/encurtaeu/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://res.cloudinary.com/sisforma/image/upload/v1521242714/encurtaeu/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://res.cloudinary.com/sisforma/image/upload/v1521242714/encurtaeu/favicon-16x16.png">
        <link rel="manifest" href="<?= $this->config->base_url(); ?>assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?= $this->config->base_url(); ?>assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="<?= $this->config->base_url(); ?>assets/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#088c8b">
        <meta name="msapplication-config" content="<?= $this->config->base_url(); ?>assets/favicon/browserconfig.xml">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    </head>

    <body class="bg-light" style="background: url('http://res.cloudinary.com/sisforma/image/upload/v1521242866/encurtaeu/background.jpg')">                              