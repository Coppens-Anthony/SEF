<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anthony Coppens">
    <meta name="keywords"
          content="accueil, ouverture, famille, dimension humaine et relationnelle, inscription du don, &eacute;conomie circulaire, &eacute;cologie, asbl, sans-abris, projets, h&eacute;bergements">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/sef/public/css/style.css">
    <title>Don financier</title>
</head>
<body>
<h1 class="sr-only">Page pour les dons financiers</h1>
<header>
    <nav id="mainNav">
        <a href="/">
            <img src="/wp-content/themes/sef/src/logo/SVG/logo.svg" alt="Logo du site">
        </a>
        <h2 class="sr-only">Navigation Principale</h2>
        <a href="../donate.php" id="donateMobile" title="Vers la page de soutien">SOUTENIR</a>
        <label for="burgerMenu">☰</label>
        <input type="checkbox" id="burgerMenu" name="burgerMenu">
        <nav id="burgerNav">
            <h3 class="sr-only">Burger Menu Navigation</h3>
            <ul>
                <li>
                    <a href="/" title="Vers la page d&apos;accueil">Accueil</a>
                </li>
                <li>
                    <a href="../sef.php" title="Vers la page SEF">SEF</a>
                </li>
                <li>
                    <a href="../stores.php" title="Vers la page des magasins">Magasins</a>
                </li>
                <li>
                    <a href="../accommodation.php" title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
                </li>
                <li class="navContact">
                    <a href="../contact.php" title="Vers la page de contact">Contact</a>
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
                <a href="/" title="Vers la page d&apos;accueil">Accueil</a>
            </li>
            <li>
                <a href="../sef.php" title="Vers la page SEF">SEF</a>
            </li>
            <li>
                <a href="../stores.php" title="Vers la page des magasins">Magasins</a>
            </li>
            <li>
                <a href="../accommodation.php" title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
            </li>
            <li class="navContact">
                <a href="../contact.php" title="Vers la page de contact">Contact</a>
            </li>
            <li id="donateScreen">
                <a href="../donate.php" title="Vers la page de soutien">Soutenir</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <section class="donateForm">
        <h2 class="sr-only">Formulaire de don</h2>
        <form method="post" action="">
            <div class="form-wrapper">
                <fieldset class="rising">
                    <h3 class="sr-only">Partie montant</h3>
                    <div class="category">
                        <input type="radio" id="general" name="category">
                        <label class="radio" for="general">G&eacute;n&eacute;ral</label>

                        <input type="radio" id="specific" name="category">
                        <label class="radio" for="specific">Sp&eacute;cifique</label>
                    </div>
                    <div class="rise">
                        <input type="checkbox" id="ten" name="ten" required>
                        <label for="ten">10€</label>

                        <input type="checkbox" id="twenty" name="twenty" required>
                        <label for="twenty">20€</label>

                        <input type="checkbox" id="fifty" name="fifty" required>
                        <label for="fifty">50€</label>
                    </div>
                    <div class="otherRise_container">
                        <input type="number" id="otherRise" name="otherRise"
                               placeholder="Choisissez votre propre montant" required>
                        <label for="otherRise" class="sr-only">Autre montant</label>
                    </div>
                </fieldset>
                <fieldset class="coords">
                    <h3 class="sr-only">Partie coordonn&eacute;es</h3>
                    <div>
                        <input type="text" id="name" name="name" placeholder="Anthony Coppens" required>
                        <label for="name">Nom</label>
                    </div>
                    <div>
                        <input type="text" id="email" name="email" placeholder="anthonycoppens04@gmail.com" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="last_coords_input">
                        <input type="text" id="telephone" name="telephone" placeholder="0477.81.06.47" required>
                        <label for="telephone">T&eacute;l&eacute;phone</label>
                    </div>
                </fieldset>
                <fieldset class="card">
                    <h3 class="sr-only">Partie payement</h3>
                    <div>
                        <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>
                        <label for="cardNumber">Num&eacute;ro de carte</label>
                    </div>
                    <div>
                        <input type="datetime-local" id="expiration" name="expiration" placeholder="MM/AA" required>
                        <label for="expiration">Expiration</label>
                    </div>
                    <div class="last_coords_input">
                        <input type="number" id="CVV" name="CVV" placeholder="123" required>
                        <label for="CVV">CVV/CVC</label>
                    </div>
                </fieldset>
            </div>
            <button type="submit" title="Validez votre donation">Valider</button>
        </form>
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
<script src="../../../src/js/main.js"></script>
</body>
</html>