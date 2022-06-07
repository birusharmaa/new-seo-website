<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title><?= $title;?></title>
    <?= $this->include('theme3/frontend/layout/cssLinks') ?>
    <?= $this->renderSection('customCss'); ?>
    <style>
        :root{
            --header_background: <?= $colors['header_background']; ?>;
            --header_text: <?= $colors['header_text']; ?>;
            --navbar_background: <?= $colors['navbar_background']; ?>;
            --navbar_text: <?= $colors['navbar_text']; ?>;
            --searchbar_color: <?= $colors['searchbar_color']; ?>;
            --footer_background: <?= $colors['footer_background']; ?>;
            --footer_text_color: <?= $colors['footer_text_color']; ?>;
            --copyright_background: <?= $colors['copyright_background']; ?>;
            --copyright_text_color: <?= $colors['copyright_text_color']; ?>;
        }
    </style>
</head>

<body class="theme-<?= $user_details['theme_color'];?>">
    <!-- <div class="hero_area"> -->
    <?= $this->include('theme3/frontend/layout/header') ?>
    <!-- </div> -->
    <div class="content-wrap">
        <?= $this->renderSection('contentTheme3'); ?>
    </div>

    <?= $this->include('theme3/frontend/layout/footer') ?>
    <?= $this->include('theme3/frontend/layout/jsLinks') ?>
    <?= $this->renderSection('customScripts'); ?>
</body>

</html>