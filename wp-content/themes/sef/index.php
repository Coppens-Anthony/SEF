<?php
/*
Template Name: Home Page
*/
include 'header.php'; ?>
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
<?php include 'footer.php'; ?>
