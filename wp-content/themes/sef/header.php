<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anthony Coppens">
    <meta name="keywords"
          content="accueil, ouverture, famille, dimension humaine et relationnelle, inscription du don, &eacute;conomie circulaire, &eacute;cologie, asbl, sans-abris, projets, h&eacute;bergements">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?= dw_asset("css/style.css") ?>">
    <title>Accueil</title>
</head>
<body itemscope itemtype="https://schema.org/Organization">
<h1 class="sr-only" itemprop="legalName">Accueil</h1>
<header>
    <nav id="mainNav">
        <a href="/">
            <img src="/wp-content/themes/sef/src/logo/SVG/logo.svg" alt="Logo du site">
        </a>
        <h2 class="sr-only">Navigation Principale</h2>
        <a href="/donate/" id="donateMobile" title="Vers la page de soutien">SOUTENIR</a>
        <label for="burgerMenu">☰</label>
        <input type="checkbox" id="burgerMenu" name="burgerMenu">
        <nav id="burgerNav">
            <h3 class="sr-only">Burger Menu Navigation</h3>
            <ul>
                <li>
                    <a href="/accueil/" class="<?= urlIs('/accueil/') ? 'main' : 'menu__item' ?>" title="Vers la page d'accueil">Accueil</a>
                </li>
                <li>
                    <a href="/sef/" class="<?= urlIs('/sef/') ? 'main' : 'menu__item' ?>" title="Vers la page SEF">SEF</a>
                </li>
                <li>
                    <a href="/magasins/" class="<?= urlIs('/magasins/') ? 'main' : 'menu__item' ?>" title="Vers la page des magasins">Magasins</a>
                </li>
                <li>
                    <a href="/hebergements/" class="<?= urlIs('/hebergements/') ? 'main' : 'menu__item' ?>" title="Vers la page des hébergements">Hébergements</a>
                </li>
                <li class="navContact">
                    <a href="/contact/" class="<?= urlIs('/contact/') ? 'main' : 'menu__item' ?>" title="Vers la page de contact">Contact</a>
                </li>
            </ul>
        </nav>
    </nav>
    <nav class="onlyScreen">
        <a href="/accueil/" class="<?= urlIs('/accueil/') ? 'main' : 'menu__item' ?>">
            <img src="/wp-content/themes/sef/src/logo/SVG/logo.svg" alt="Logo du site">
        </a>
        <h2 class="sr-only">Navigation pour ordinateur</h2>
        <ul>
            <li>
                <a href="/accueil/" class="<?= urlIs('/accueil/') ? 'main' : 'menu__item' ?>" title="Vers la page d'accueil">Accueil</a>
            </li>
            <li>
                <a href="/sef/" class="<?= urlIs('/sef/') ? 'main' : 'menu__item' ?>" title="Vers la page SEF">SEF</a>
            </li>
            <li>
                <a href="/magasins/" class="<?= urlIs('/magasins/') ? 'main' : 'menu__item' ?>" title="Vers la page des magasins">Magasins</a>
            </li>
            <li>
                <a href="/hebergements/" class="<?= urlIs('/hebergements/') ? 'main' : 'menu__item' ?>" title="Vers la page des hébergements">Hébergements</a>
            </li>
            <li class="navContact">
                <a href="/contact/" class="<?= urlIs('/contact/') ? 'main' : 'menu__item' ?>" title="Vers la page de contact">Contact</a>
            </li>
            <li id="donateScreen">
                <a href="/soutenir/" class="<?= urlIs('/soutenir/') ? 'main' : 'menu__item' ?>" title="Vers la page de soutien">Soutenir</a>
            </li>
        </ul>
    </nav>
</header>