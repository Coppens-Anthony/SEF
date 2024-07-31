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
    <title>SEF</title>
</head>
<body itemscope itemtype="https://schema.org/Organization">
<h1 class="sr-only" itemprop="legalName">SEF</h1>
<header>
    <nav id="mainNav">
        <a href="/">
            <img src="/wp-content/themes/sef/src/logo/SVG/logo.svg" alt="Logo du site">
        </a>
        <h2 class="sr-only">Navigation Principale</h2>
        <a href="/wp-content/themes/sef/src/views/donate.php" id="donateMobile"
           title="Vers la page de soutien">SOUTENIR</a>
        <label for="burgerMenu">☰</label>
        <input type="checkbox" id="burgerMenu" name="burgerMenu">
        <nav id="burgerNav">
            <h3 class="sr-only">Burger Menu Navigation</h3>
            <ul>
                <li>
                    <a href="/" class="main" title="Vers la d&apos;accueil">Accueil</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/sef.php" title="Vers la page SEF">SEF</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/stores.php" title="Vers la page des magasins">Magasins</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/accommodation.php"
                       title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
                </li>
                <li class="navContact">
                    <a href="/wp-content/themes/sef/src/views/contact.php" title="Vers la page de contact">Contact</a>
                </li>
            </ul>
        </nav>
    </nav>
    <nav class="onlyScreen">
        <a href="/">
            <img src="/wp-content/themes/sef/src/logo/SVG/logo.svg" alt="Logo du site">
        </a>
        <h2 class="sr-only">Navigation pour oridnateur</h2>
        <ul>
            <li>
                <a href="/" class="main" title="Vers la page d&apos;accueil">Accueil</a>
            </li>
            <li>
                <a href="/wp-content/themes/sef/src/views/sef.php" title="Vers la page SEF">SEF</a>
            </li>
            <li>
                <a href="/wp-content/themes/sef/src/views/stores.php" title="Vers la page des magasins">Magasins</a>
            </li>
            <li>
                <a href="/wp-content/themes/sef/src/views/accommodation.php"
                   title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
            </li>
            <li class="navContact">
                <a href="/wp-content/themes/sef/src/views/contact.php" title="Vers la page de contact">Contact</a>
            </li>
            <li id="donateScreen">
                <a href="/wp-content/themes/sef/src/views/donate.php" title="Vers la page de soutien">Soutenir</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <section class="intro">
        <h2 class="sr-only">Introduction</h2>
        <p>
            <b>L&apos;insertion ou la r&eacute;insertion sociale d&apos;adultes et de familles en difficult&eacute;.</b>
            Le temps pass&eacute; au SEF doit &ecirc;tre mis &agrave; profit par chacun pour r&eacute;gler ses questions
            administratives, repenser
            sa fa&ccedil;on de vivre avec les autres et pr&eacute;parer son d&eacute;part. Afin, si possible, de ne pas
            revenir&hellip;
        </p>
        <img src="/wp-content/themes/sef/src/img/accueil.jpg" height="322" width="564" alt="Image contextuelle"/>
    </section>
    <section id="actualities" class="sections">
        <h2>Nos r&eacute;centes actualit&eacute;s</h2>
        <ul>
            <li id="mezzanine">
                <article>
                    <img src="/wp-content/themes/sef/src/img/actualities/mezzanine.jpg" alt="Photo d&apos;une mezzanine">
                    <h3>Cr&eacute;ation d&apos;une mezzanine au d&eacute;p&ocirc;t</h3>
                </article>
            </li>
            <li id="walks">
                <article>
                    <img src="/wp-content/themes/sef/src/img/actualities/walks.jpeg" alt="Photo d&apos;une marche">
                    <h3>Marche de sensibilisation</h3>
                </article>
            </li>
            <li id="new-house">
                <article>
                    <img src="/wp-content/themes/sef/src/img/actualities/newHouse.jpg" alt="Photo d&apos;un achat d&apos;une nouvelle maison">
                    <h3>Achat d&apos;une nouvelle maison</h3>
                </article>
            </li>
            <li id="renovation">
                <article>
                    <img src="/wp-content/themes/sef/src/img/actualities/renovation.png" alt="Photo d&apos;une r&eacute;novation de maison">
                    <h3>R&eacute;novation des maisons</h3>
                </article>
            </li>
            <li id="moving">
                <article>
                    <img src="/wp-content/themes/sef/src/img/actualities/moving.png" alt="Photo d&apos;un d&eacute;m&eacute;nagement">
                    <h3>D&eacute;placement de la bouquinerie</h3>
                </article>
            </li>
        </ul>
    </section>
    <section class="transition">
        <h2>Votre soutien nous aide d'une manière qui est indescriptible.
            Vous changez des vies</h2>
        <ul>
            <li class="transition-button">
                <a href="/wp-content/themes/sef/src/views/donate.php" title="Vers la page de soutien">Soutenir</a>
            </li>
            <li class="transition-button">
                <a href="/wp-content/themes/sef/src/views/contact.php" title="Vers la page de contact">Contact</a>
            </li>
        </ul>
    </section>
    <section class="sections" id="faq">
        <h2>Retrouvez ici les réponses à vos questions les plus fréquentes.</h2>
        <div class="faq-container">
            <div>
                <label for="1">Comment puis-je devenir b&eacute;n&eacute;vole&nbsp;?</label>
                <input type="checkbox" id="1">
                <p class="responses">lorem ipsum lorem ipusm lorem ipsum</p>
            </div>
            <div>
                <label for="2">Quels sont les crit&egrave;res d&apos;admissibilit&eacute; pour recevoir de l&apos;aide&nbsp;?</label>
                <input type="checkbox" id="2"><p class="responses">lorem ipsum lorem ipusm lorem ipsum</p>

            </div>
            <div>
                <label for="3">Comment puis-je rester inform&eacute; de vos activit&eacute;s et &eacute;v&eacute;nements
                    ?</label>
                <input type="checkbox" id="3">
                <p class="responses">lorem ipsum lorem ipusm lorem ipsum</p>
            </div>
            <div>
                <label for="4">Comment puis-je obtenir de l&apos;aide pour trouver un emploi ou une formation ?</label>
                <input type="checkbox" id="4">
                <p class="responses">lorem ipsum lorem ipusm lorem ipsum</p>
            </div>
        </div>
    </section>
</main>
<footer>
    <section class="footer-information">
        <h2 class="sr-only">Footer Information</h2>
        <article id="footerNav">
            <h3>Navigation</h3>
            <ul>
                <li>
                    <a href="/" title="Vers la page d&apos;accueil">Accueil</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/sef.php" title="Vers la page SEF">SEF</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/stores.php" title="Vers la page des magasins">Magasins</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/accommodation.php"
                       title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/contact.php" title="Vers la page de contact">Contact</a>
                </li>
                <li>
                    <a href="/wp-content/themes/sef/src/views/donate.php" title="Vers la page de soutien">Soutenir</a>
                </li>
            </ul>
        </article>
        <article id="footerCoords">
            <h3>Coordonn&eacute;es</h3>
            <ul itemscope itemtype="https://schema.org/Organization">
                <li itemprop="telephone">
                    085 / 21 57 52
                </li>
                <li itemprop="email">
                    contact@sefasbl.com
                </li>
                <li itemprop="address">
                    Rue du March&eacute;, 30
                </li>
                <li itemprop="address">
                    4500, Huy
                </li>
                <li>
                    G&eacute;n&eacute;ral&nbsp;:&nbsp;BE34 0000 2750 8590
                </li>
                <li>
                    Sp&eacute;cifique&nbsp;:&nbsp;BE43 2400 2934 2201
                </li>
            </ul>
        </article>
    </section>
    <small>
        Retrouvez nous sur <a href="https://www.facebook.com/sef.huy?locale=fr_FR" title="Vers notre compte Facebook">Facebook</a>
    </small>
</footer>
</body>
</html>