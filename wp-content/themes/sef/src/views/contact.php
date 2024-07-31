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
    <title>Contact</title>
</head>
<body>
<h1 class="sr-only">Contact</h1>
<header>
    <nav id="mainNav">
        <a href="/">
            <img src="/wp-content/themes/sef/src/logo/SVG/logo.svg" alt="Logo du site">
        </a>
        <h2 class="sr-only">Navigation Principale</h2>
        <a href="donate.php" id="donateMobile" title="Vers la page de soutien">SOUTENIR</a>
        <label for="burgerMenu">☰</label>
        <input type="checkbox" id="burgerMenu" name="burgerMenu">
        <nav id="burgerNav">
            <h3 class="sr-only">Burger Menu Navigation</h3>
            <ul>
                <li>
                    <a href="/" title="Vers la page d&apos;accueil">Accueil</a>
                </li>
                <li>
                    <a href="sef.php" title="Vers la page SEF">SEF</a>
                </li>
                <li>
                    <a href="stores.php" title="Vers la page des magasins">Magasins</a>
                </li>
                <li>
                    <a href="accommodation.php" title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
                </li>
                <li class="navContact">
                    <a href="contact.php" class="main" title="Vers la page de contact">Contact</a>
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
                <a href="sef.php" title="Vers la page SEF">SEF</a>
            </li>
            <li>
                <a href="stores.php" title="Vers la page des magasins">Magasins</a>
            </li>
            <li>
                <a href="accommodation.php" title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
            </li>
            <li class="navContact">
                <a href="contact.php" class="main" title="Vers la page de contact">Contact</a>
            </li>
            <li id="donateScreen">
                <a href="donate.php" title="Vers la page de soutien">Soutenir</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <section class="form">
        <h2 class="sr-only">Page de contact</h2>
        <article id="contactInfo">
            <h3>Contactez-nous&nbsp;!</h3>
            <p>085 / 21 57 52</p>
            <p>contact@sefasbl.com</p>
            <p>Rue du March&eacute; 33 4500 HUY</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2536.86158016455!2d5.2410361758847275!3d50.51814228248832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTDCsDMxJzA1LjMiTiA1wrAxNCczNy4wIkU!5e0!3m2!1sfr!2sbe!4v1718539613216!5m2!1sfr!2sbe"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </article>
        <article class="contactForm">
            <h3 class="sr-only">Formulaire de contact</h3>
            <form action="/wp-content/themes/sef/contactTraitement.php" method="post">
                <div>
                    <input type="text" id="name" name="name" placeholder="Anthony Coppens" required>
                    <label for="name">Nom</label>
                </div>
                <div>
                    <input type="text" id="email" name="email" placeholder="anthonycoppens04@gmail.com" required>
                    <label for="email">Email</label>
                </div>
                <div>
                    <input type="text" id="subject" name="subject" placeholder="Bénévolat" required>
                    <label for="subject">Sujet</label>
                </div>
                <div>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Renseignez votre message..."
                              required></textarea>
                    <label for="message">Message</label>
                </div>
                <div id="button">
                    <button type="submit" title="Soumettre vos donn&eacute;es">Envoyer</button>
                </div>
            </form>
        </article>
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
                    <a href="/wp-content/themes/sef/src/views/accommodation.php" title="Vers la page des h&eacute;bergements">H&eacute;bergements</a>
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